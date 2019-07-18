<?php

namespace App\Controller;

use App\Entity\JobApplication;
use App\Form\JobApplicationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\Offer;

/**
 * @Route("/job/application")
 */
class JobApplicationController extends AbstractController
{
    /**
     * @Route("/admin", name="job_application_index", methods={"GET"})
     */
    public function index(): Response
    {
        $jobApplications = $this->getDoctrine()
            ->getRepository(JobApplication::class)
            ->findAll();

        return $this->render('job_application/index.html.twig', [
            'job_applications' => $jobApplications,
        ]);
    }

    /**
     * @Route("/new", name="job_application_new", methods={"GET","POST"})
     */
    public function new(Request $request, UserInterface $user, $apply = 0, $offerId = 0): Response
    {
        // Check if button applied was pressed
        $request->query->get('apply') == 1 && $offerId = $request->query->get('offer');

        $jobApplication = new JobApplication();
        $form = $this->createForm(JobApplicationType::class, $jobApplication);
        $form->handleRequest($request);

        $entityManager = $this->getDoctrine()->getManager();

        // Handle form submission...
        if ($form->isSubmitted() && $form->isValid()) {
            $apply = 2;
            $redirect = 'job_application_index';
        }

        // ... or apply button was pressed
        if ($offerId != 0) {
            $offer = $this->getDoctrine()
                    ->getRepository(Offer::class)
                    ->findOneBy([
                        'id'    =>  $offerId,
                    ]);

            $jobApplication->setCandidate($user->getCandidate());
            $jobApplication->setOffer($offer);
            $apply = 2;
            $redirect = 'offer_public_index';
        }

        if ($apply == 2) {
            $entityManager->persist($jobApplication);
            $entityManager->flush();

            return $this->redirectToRoute($redirect);
        }

        if (in_array('ROLE_ADMIN', $user->getRoles())) {
            return $this->render('job_application/new.html.twig', [
                'job_application' => $jobApplication,
                'form' => $form->createView(),
            ]);
        }
    }

    /**
     * @Route("/admin/{id}", name="job_application_show", methods={"GET"})
     */
    public function show(JobApplication $jobApplication): Response
    {
        return $this->render('job_application/show.html.twig', [
            'job_application' => $jobApplication,
        ]);
    }

    /**
     * @Route("/admin/{id}/edit", name="job_application_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, JobApplication $jobApplication): Response
    {
        $form = $this->createForm(JobApplicationType::class, $jobApplication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('job_application_index', [
                'id' => $jobApplication->getId(),
            ]);
        }

        return $this->render('job_application/edit.html.twig', [
            'job_application' => $jobApplication,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="job_application_delete", methods={"DELETE"})
     */
    public function delete(Request $request, JobApplication $jobApplication): Response
    {
        if ($this->isCsrfTokenValid('delete'.$jobApplication->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($jobApplication);
            $entityManager->flush();
        }

        return $this->redirectToRoute('job_application_index');
    }
}
