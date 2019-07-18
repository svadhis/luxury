<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Offer;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\JobApplication;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(UserInterface $user = null)
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

        return $this->render('home/index.html.twig', [
            'controller_name'   =>  'HomeController',
            'offers'            =>  $offers,
        ]);
    }

    /**
     * @Route("/company", name="about_us")
     */
    public function company()
    {
        return $this->render('home/about.html.twig', [
            'controller_name'   =>  'HomeController',
        ]);
    }

    /**
     * @Route("/contact", name="contact_us")
     */
    public function contact()
    {
        return $this->render('home/contact.html.twig', [
            'controller_name'   =>  'HomeController',
        ]);
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
