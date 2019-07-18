<?php

namespace App\Controller;

use App\Entity\Offer;
use App\Entity\JobApplication;
use App\Form\OfferType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Route("/offer")
 */
class OfferController extends AbstractController
{
    /**
     * @Route("/admin", name="offer_index", methods={"GET"})
     */
    public function index(): Response
    {
        $offers = $this->getDoctrine()
            ->getRepository(Offer::class)
            ->findAll();

        return $this->render('offer/index.html.twig', [
            'offers' => $offers,
        ]);
    }

    /**
     * @Route("/", name="offer_public_index", methods={"GET"})
     */
    public function publicIndex(UserInterface $user = null): Response
    {
        // Get all offers
        $offers = $this->getDoctrine()
            ->getRepository(Offer::class)
            ->findBy([
                'status'    =>  1
            ]);

        // Check if candidate applied
        if ($user && $user->getCandidate()) {
            foreach ($offers as $offer) {
                $this->checkApplication($user, $offer);         
            } 
        }

        return $this->render('offer/public_index.html.twig', [
            'offers' => $offers,
        ]);
    }

    /**
     * @Route("/admin/new", name="offer_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $offer = new Offer();
        $form = $this->createForm(OfferType::class, $offer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Create reference
            $reference = strtoupper(substr($offer->getCategory()->getName(), 0, 3)) . rand(100000, 999999) . strtoupper(substr($offer->getType(), 0, 2));
            $offer->setReference($reference);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($offer);
            $entityManager->flush();

            return $this->redirectToRoute('offer_index');
        }

        return $this->render('offer/new.html.twig', [
            'offer' => $offer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/{id}", name="offer_show", methods={"GET"})
     */
    public function show(Offer $offer): Response
    {
        return $this->render('offer/show.html.twig', [
            'offer' => $offer,
        ]);
    }

    /**
     * @Route("/{id}", name="public_offer_show", methods={"GET"})
     */
    public function publicShow(UserInterface $user = null, Offer $offer): Response
    {
        // Get previous and next offers
        $offers = $this->getDoctrine()
        ->getRepository(Offer::class)
        ->findBy([
            'status'    =>  1,
            'category'  =>  $offer->getCategory(),
        ]);

        $offerIndex = 0;

        for ($i=0; $i < count($offers); $i++) { 
            $offers[$i]->getId() == $offer->getId() && $offerIndex = $i;
        }

        // Check if candidate applied
        $user && $this->checkApplication($user, $offer);

        return $this->render('offer/public_show.html.twig', [
            'offer'     =>  $offer,
            'offers'    =>  $offers,
            'index'     =>  $offerIndex,
        ]);
    }

    /**
     * @Route("/admin/{id}/edit", name="offer_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Offer $offer): Response
    {
        $form = $this->createForm(OfferType::class, $offer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('offer_index', [
                'id' => $offer->getId(),
            ]);
        }

        return $this->render('offer/edit.html.twig', [
            'offer' => $offer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/{id}", name="offer_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Offer $offer): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offer->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($offer);
            $entityManager->flush();
        }

        return $this->redirectToRoute('offer_index');
    }

    public function checkApplication($user, $offer)
    {   
        $this->getDoctrine()
            ->getRepository(JobApplication::class)
            ->findBy([
                'offer'     =>  $offer,
                'candidate' =>  $user->getCandidate()->getId(),
            ])
            && $offer->setApplied(1);    
    }
}
