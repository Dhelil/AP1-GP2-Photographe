<?php

namespace App\Controller;

use App\Entity\Presentation;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    #[Route('/products', name: 'app_products')]
    public function index(EntityManager $entityManager): Response
    {
        $prestation = new Presentation();
        $prestation->setTile('test');
        $entityManager->persist($prestation);
        $entityManager->flush();
        
        return new Response('Saved new product with id '.$prestation->getId());
    }
}
