<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageContactController extends AbstractController
{
    #[Route('/contact', name: 'app_page_contact')]
    public function index(): Response
    {

        return $this->render('page_contact/index.html.twig', [
            'controller_name' => 'PageContactController',
        ]);
    }
}
