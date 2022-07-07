<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/Mon-cv', name: 'app_cv')]
    public function MonCv(): Response
    {
        return $this->render('home/cv.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('/Mes-compétences', name: 'app_compétences')]
    public function MesCompétences(): Response
    {
        return $this->render('home/competences.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
