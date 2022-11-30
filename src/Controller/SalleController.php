<?php

namespace App\Controller;

use App\Repository\LieuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SalleController extends AbstractController
{
    #[Route('/salle', name: 'app_salle')]
    public function afficherSalle(LieuRepository $lieuRepository): Response
    {

        $lieux = $lieuRepository->findAll();
        return $this->render('salle/index.html.twig', [
            'Lieux' => $lieux,

        ]);
    }
}