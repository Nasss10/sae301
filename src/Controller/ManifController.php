<?php

namespace App\Controller;

use App\Repository\ManifestationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManifController extends AbstractController
{
    #[Route('/manif', name: 'app_manif')]
    public function afficherManif(ManifestationRepository $manifestationRepository): Response
    {

        $manifestations = $manifestationRepository->findAll();
        return $this->render('manif/index.html.twig', [
            'Manifestations' => $manifestations,

        ]);

    }
    #[Route('manif/{id}', name: 'app_detail')]
    public function afficherDetail(ManifestationRepository $manifestationRepository, $id): Response
    {

        $manifestations = $manifestationRepository->find($id);
        return $this->render('manif/manifestationDetail.html.twig', [
            'Manifestations' => $manifestations,

        ]);

    }
}
