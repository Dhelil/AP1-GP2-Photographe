<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\AvisRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\YourFormType;

class PageAvisController extends AbstractController
{
    #[Route('/avis', name: 'app_page_avis')]
    public function index(AvisRepository $avis): Response
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

        return $this->render('page_avis/index.html.twig', [
            'controller_name' => 'PageAvisController',
            'ttlesavis' => $lesavis,
            'moyenne' => $moyenne,
            'etoilesemi' => $etoilesemi,
            'quant' => $quant,
            'quantsemi' => $quantsemi,
        ]);
    }
}
