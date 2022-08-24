<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetController extends AbstractController
{
    /**
     * @Route("/projet/{id}", name="projet")
     */
    public function index($id): Response
    {
        return $this->render('projets/single.html.twig', [
            'controller_name' => 'ProjetController',
        ]);
    }
}
