<?php

namespace App\Controller;

use App\Entity\DemandeContact;
use App\Form\ContactFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageContactController extends AbstractController
{
    #[Route('/contact', name: 'app_page_contact')]
    public function index(Request $request): Response
    {
        $DemandeContact = new DemandeContact();

        $form = $this->createForm(ContactFormType::class, $DemandeContact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($DemandeContact);
            $entityManager->flush();

            return $this->redirectToRoute('app_page_contact');
        }

        return $this->render('page_contact/index.html.twig', [
            'controller_name' => 'PageContactController',
            'form' => $form->createView(),
        ]);
    }
}
