<?php

namespace App\Controller;

use App\Entity\DemandeContact;
use App\Form\ContactFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Security;

class PageContactController extends AbstractController
{
    private $security;
    #[Route('/contact', name: 'app_page_contact')]
    public function index(Request $request): Response
    {
        
        $this->security = $security;
        $contact = new DemandeContact();
        $user = $this->security->getUser();
        $userID = $user->getId();
        $contact->setIdDemandeUser($userID);
        $contact->setDateDemande(new \DateTime()); // Vous pouvez ajouter la date du jour ici

        $form = $this->createForm(ContactFormType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();

            return $this->redirectToRoute('home'); // Redirigez vers la page d'accueil ou toute autre page
        }

        return $this->render('page_contact/index.html.twig', [
            'controller_name' => 'PageContactController',
            'form' => $form,
        ]);
    }
}
