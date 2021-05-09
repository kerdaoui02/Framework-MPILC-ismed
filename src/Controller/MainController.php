<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);


    }
    /**
     * @Route("/presentation", name="presentation")
     */
    public function presentation ()
    {
        // Nous générons la vue de la page presentation
        return $this->render('main/presentation.html.twig');
    }
}

