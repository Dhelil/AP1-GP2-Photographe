<?php

namespace App\Controller;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepositoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Presentation;
use Doctrine\ORM\EntityManagerInterface;

class PresentationsController extends AbstractController
{
    #[Route('/presentations', name: 'app_presentations')]
    public function index(EntityManagerInterface $presentations): Response
    {
        $presentations = $presentations->getRepository(Presentation::class)->findAll();
        return $this->render('presentations/index.html.twig', [
            'presentations' => $presentations
        ]);
    }
}
