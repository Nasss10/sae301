<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailManifController extends AbstractController
{
    #[Route('/detail/manif', name: 'app_detail_manif')]
    public function index(): Response
    {
        return $this->render('detail_manif/index.html.twig', [
            'controller_name' => 'DetailManifController',
        ]);
    }
}
