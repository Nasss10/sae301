<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoordoneController extends AbstractController
{
    #[Route('/coordone', name: 'app_coordone')]
    public function index(): Response
    {
        return $this->render('coordone/index.html.twig', [
            'controller_name' => 'CoordoneController',
        ]);
    }
}
