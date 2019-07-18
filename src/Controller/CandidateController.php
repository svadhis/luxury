<?php

namespace App\Controller;

use App\Entity\Candidate;
use App\Form\CandidateType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @Route("/candidate")
 */
class CandidateController extends AbstractController
{
    /**
     * @Route("/admin", name="candidate_index", methods={"GET"})
     */
    public function index(): Response
    {
        $candidates = $this->getDoctrine()
            ->getRepository(Candidate::class)
            ->findAll();

        return $this->render('candidate/index.html.twig', [
            'candidates' => $candidates,
        ]);
    }

    /**
     * @Route("/admin/new", name="candidate_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $candidate = new Candidate();
        $form = $this->createForm(CandidateType::class, $candidate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Handle passport
            $form['passport']->getData() && $this->fileSet('passport', $candidate, $form);
            $form['curriculum']->getData() && $this->fileSet('curriculum', $candidate, $form);
            $form['picture']->getData() && $this->fileSet('picture', $candidate, $form);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($candidate);
            $entityManager->flush();

            return $this->redirectToRoute('candidate_index');
        }

        return $this->render('candidate/new.html.twig', [
            'candidate' => $candidate,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/new", name="candidate_public_profile_new", methods={"GET","POST"})
     */
    public function publicProfileNew(Request $request, UserInterface $user): Response
    {
        $candidate = new Candidate();
        $form = $this->createForm(CandidateType::class, $candidate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Handle passport
            $form['passport']->getData() && $this->fileSet('passport', $candidate, $form);
            $form['curriculum']->getData() && $this->fileSet('curriculum', $candidate, $form);
            $form['picture']->getData() && $this->fileSet('picture', $candidate, $form);

            $candidate->setUser($user);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($candidate);
            $entityManager->flush();

            return $this->redirectToRoute('candidate_public_profile_edit');
        }

        return $this->render('candidate/public_new.html.twig', [
            'candidate' => $candidate,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/{id}", name="candidate_show", methods={"GET"})
     */
    public function show(Candidate $candidate): Response
    {
        return $this->render('candidate/show.html.twig', [
            'candidate' => $candidate,
        ]);
    }

    /**
     * @Route("/admin/{id}/edit", name="candidate_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Candidate $candidate): Response
    {
        $form = $this->createForm(CandidateType::class, $candidate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Handle passport, curriculum and picture
            $form['passport']->getData() && $this->fileSet('passport', $candidate, $form);
            $form['curriculum']->getData() && $this->fileSet('curriculum', $candidate, $form);
            $form['picture']->getData() && $this->fileSet('picture', $candidate, $form);
            
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('candidate_index', [
                'id' => $candidate->getId(),
            ]);
        }

        return $this->render('candidate/edit.html.twig', [
            'candidate' => $candidate,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/profile", name="candidate_public_profile_edit", methods={"GET","POST"})
     */
    public function publicProfileEdit(Request $request, UserInterface $user): Response
    {
        $candidate = $user->getCandidate();

        $form = $this->createForm(CandidateType::class, $candidate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Handle passport, curriculum and picture
            $form['passport']->getData() && $this->fileSet('passport', $candidate, $form);
            $form['curriculum']->getData() && $this->fileSet('curriculum', $candidate, $form);
            $form['picture']->getData() && $this->fileSet('picture', $candidate, $form);
            
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('candidate_public_profile_edit');
        }

        return $this->render('candidate/public_new.html.twig', [
            'candidate' => $candidate,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin{id}", name="candidate_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Candidate $candidate): Response
    {
        if ($this->isCsrfTokenValid('delete'.$candidate->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($candidate);
            $entityManager->flush();
        }

        return $this->redirectToRoute('candidate_index');
    }

    // Manage file uploads
    public function fileSet($field, $candidate, $form)
    {
        // Set setter method name
        $set = 'set' . ucfirst($field);

        // Get file from form
        $file = $form[$field]->getData();
        //$file = $form->getExtraData()[$field]; 

        // Guess extension
        $extension = $file->guessExtension();
        !$extension && $extension = 'bin';

        // Set directory and random file name
        $dir = 'users/' . $field;
        $fileName = rand(100000000, 999999999);

        // Move the file to set directory
        $file->move($dir, $fileName . '.' . $extension);

        // Set attribute in object
        $candidate->$set($fileName . '.' . $extension);
    }
}
