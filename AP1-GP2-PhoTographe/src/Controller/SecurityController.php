<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    // Spécifie la route avec le nom de cette dernière
    // Cette route est utilisée pour gérer la connexion
    #[Route(path: '/connexion', name: 'app_login')]

    // La méthode login gère l'affichage du formulaire de connexion
    // le paramètre de la fonction permet de récupérer les infos liées à l'authentification
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Si l'utilisateur est déjà authentifié, on peut le rediriger vers une autre page 
        // avec le code commenté ci_dessous

        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }


        // On récupère si il y en a une, l'erreur de connexion
        $error = $authenticationUtils->getLastAuthenticationError();

        // On récupère la dernière adresse mail rentrée par l'utilisateur
        $lastUsername = $authenticationUtils->getLastUsername();

        // On affiche la vue en pasant les variables $lastUsername et $error
        // On récupère la dernière adresse mail entrée avec 'last_username' et l'error juste après
        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername, 
            'error' => $error]);
    }

    // Spécifie la route avec le nom de cette dernière
    // Cette route est utilisée pour gérer la déconnexion
    #[Route(path: '/deconnexion', name: 'app_logout')]
    public function logout(): void
    {
        // Cette méthode peut être vide
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
