<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CPrincipalController extends AbstractController
{
    #[Route('/', name: 'app_c_principal')]
    public function index(): Response
    {
        // La méthode render est utilisée pour afficher la vue Twig
        return $this->render('c_principal/index.html.twig');
    }
}
