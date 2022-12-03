<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MerciController extends AbstractController
{
    #[Route('/merci', name: 'app_merci')]
    public function index(): Response
    {
        return $this->render('merci/index.html.twig', [
            'controller_name' => 'MerciController',
        ]);
    }
}
