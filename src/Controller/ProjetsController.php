<?php

namespace App\Controller;

use App\Entity\Projets;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class ProjetsController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    /**
     * @Route("/projets", name="projets")
     */
    public function index(): Response
    {

        $projets = $this->entityManager->getRepository(Projets::class)->findAll();

        return $this->render('projets/list.html.twig', [
            'projets' => $projets
        ]);
    }
}
