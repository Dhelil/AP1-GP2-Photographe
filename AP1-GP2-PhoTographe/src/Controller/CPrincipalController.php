<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CPrincipalController extends AbstractController
{
    // Spécifie la route avec le nom de cette dernière
    #[Route('/accueil', name: 'app_c_principal')]

    // La fonction index gère la page d'accueil du controlleur principal
    public function index(): Response
    {
        // La méthode render est utilisée pour afficher la vue Twig
        return $this->render('c_principal/index.html.twig');
    }
}
