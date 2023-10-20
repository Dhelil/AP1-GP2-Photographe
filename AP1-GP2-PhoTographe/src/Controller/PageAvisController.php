<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Repository\AvisRepository;
use App\Form\AvisFormType;
use Symfony\Bundle\SecurityBundle\Security;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class PageAvisController extends AbstractController
{
    #[Route('/avis', name: 'app_page_avis')]
    public function index(AvisRepository $avis, Request $request, ManagerRegistry $doctrine, Security $security): Response
    {
        $lesavis = $avis->findAll();

        $totalNotes = 0;

        foreach ($lesavis as $avis) {
            $totalNotes += $avis->getNiveauAvis();
        }

        if (count($lesavis) !== 0) {
            $moyenne = round($totalNotes / count($lesavis) * 2) / 2;; // Arrondir à 0.5 près
        }
        else {
            $moyenne = 0;
        }

        $etoilesemi = strpos((string)$moyenne, '.');

        $quant = (5 - $moyenne);

        $quantsemi = (5 - $moyenne - 0.5);

        
        $avisform = new Avis();

        $formavis = $this->createForm(AvisFormType::class, $avisform);
        $formavis->handleRequest($request);
        $user = $security->getUser();

        if ($formavis->isSubmitted() && $formavis->isValid()) {
            
            $nomuser = $user->getNomUser();
            $prenomuser = $user->getPrenomUser();

            if ($user) {
                // Associez l'utilisateur à votre DemandeContact
                $avisform->setIdAvisUser($user);
                $entityManager = $doctrine->getManager();
                $entityManager->persist($avisform);
                $entityManager->flush();
            }
            else {
                $this->addFlash('error', 'Vous devez être connecté pour pouvoir poster un avis.');
            }

            return $this->redirectToRoute('app_page_avis');
        }


        return $this->render('page_avis/index.html.twig', [
            'controller_name' => 'PageAvisController',
            'ttlesavis' => $lesavis,
            'moyenne' => $moyenne,
            'etoilesemi' => $etoilesemi,
            'quant' => $quant,
            'quantsemi' => $quantsemi,
            'form' => $formavis->createView(),
            'nomuser' => $nomuser ?? '',
            'prenomuser' => $prenomuser ?? '',
            'user' => $user,
        ]);
    }
}
