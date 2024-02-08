<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'homePage')]
    public function index(): Response
    {
        return $this->render('project/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/about', name: 'aboutPage')]
    public function about(): Response
    {
        return $this->render('project/about.html.twig');
    }

    #[Route('/services', name: 'servicePage')]
    public function services(): Response
    {
        return $this->render('project/services.html.twig');
    }
    #[Route('/portofolio', name: 'portofolioPage')]
    public function portofolio(): Response
    {
        return $this->render('project/portofolio.html.twig');
    }
    #[Route('/paiement', name: 'paiementPage')]
    public function paiement(): Response
    {
        return $this->render('project/paiement.html.twig');
    }
    #[Route('/contact', name: 'contactPage')]
    public function contact(): Response
    {
        return $this->render('project/contact.html.twig');
    }
    #[Route('/signIn', name: 'signInPage')]
    public function signIn(): Response
    {
        return $this->render('project/Sign_in.html.twig');
    }
    #[Route('/signUp', name: 'signUpPage')]
    public function signUp(): Response
    {
        return $this->render('project/Sign_up.html.twig');
    }
}
