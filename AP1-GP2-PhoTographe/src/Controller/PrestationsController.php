<?php

namespace App\Controller;

use App\Entity\Prestation;
use App\Repository\PrestationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security\User\UserInterface;

class PrestationsController extends AbstractController
{
    #[Route('/prestations', name: 'admin_prestations')]
    public function index(PrestationRepository $manage): Response
    {
        $prestations = $manage->findAll();
        return $this->render('prestations/index.html.twig',
            ['prestations' => $prestations,]);
        
    }
}
