<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Presentation;


class PresentationsController extends AbstractController
{
    #[Route('/presentations', name: 'app_presentations')]
    public function index(): Response
    {

        return $this->render('presentations/index.html.twig', [
        ]);
    }
}
