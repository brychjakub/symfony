<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class spaceShooterControler extends AbstractController
{
    #[Route('/spaceShooter', name: 'game')]
    public function index(): Response
    {
        return $this->render('spaceShooter/index.html.twig', [
            'controller_name' => 'ProjectsController',
        ]);
    }
}
