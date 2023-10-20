<?php

namespace App\Controller;

use App\Entity\DemandeContact;
use App\Form\ContactFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Security;

class PageContactController extends AbstractController
{
    private $security;
    #[Route('/contact', name: 'app_page_contact')]
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
        $DemandeContact = new DemandeContact();

        $user = $this->getUser();

        $form = $this->createForm(ContactFormType::class, $DemandeContact);
        $form->handleRequest($request);
        //$DemandeContact->setIdDemandeUser($user);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $doctrine->getManager();
            $entityManager->persist($DemandeContact);
            $entityManager->flush();

            return $this->redirectToRoute('app_page_contact');
        }

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'PageContactController',
            'form' => $form->createView(),
        ]);
    }
}
