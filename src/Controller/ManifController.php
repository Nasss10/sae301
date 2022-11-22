<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManifController extends AbstractController
{
    #[Route('/manif', name: 'app_manif')]
    public function index(): Response
    {
        return $this->render('manif/index.html.twig', [
            'controller_name' => 'ManifController',
        ]);
    }
}
