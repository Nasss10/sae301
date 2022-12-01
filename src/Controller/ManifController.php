<?php

namespace App\Controller;

use App\Form\ManifestationType;
use App\Repository\ManifestationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManifController extends AbstractController
{
    #[Route('/manif', name: 'app_manif')]
    public function afficherManif(ManifestationRepository $manifestationRepository, Request $request, ): Response
    {
        //$searchManifForm = $this->createForm(ManifestationType::class);
       // $searchManifForm->handleRequest($request);
        $manifestations = $manifestationRepository->findAll();
        if($request->isMethod('POST')) {
            //$criteria = $searchManifForm->getData();
            //dd($criteria->getLieu()->getLieuNom());
            $manifs = $manifestationRepository->searchManifForm($request->request->get('genre'));
            return $this->render('manif/index.html.twig', [
                'Manifestations' => $manifs,
               // 'search_form' => $searchManifForm->createView(),




            ]);

        }
        return $this->render('manif/index.html.twig', [
            'Manifestations' => $manifestations,
           // 'search_form' => $searchManifForm->createView(),
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
