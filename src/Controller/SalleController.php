<?php

namespace App\Controller;

use App\Repository\LieuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SalleController extends AbstractController
{
    #[Route('/salle', name: 'app_salle')]
    public function afficherLieu(LieuRepository $lieuRepository): Response
    {

        $lieu = $lieuRepository->findAll();
        return $this->render('salle/index.html.twig', [
            'Lieu' => $lieu,

        ]);

    }
}
