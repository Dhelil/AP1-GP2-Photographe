<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\UsersAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;


class RegistrationController extends AbstractController
{
    // Spécifie la route avec le nom de cette dernière
    #[Route('/inscription', name: 'app_register')]

    // Fonction Register
    // Prend en paramètre : le $request récupère les données soumises par le formulaire d'inscription

                        //  le $userPasswordHasher pour le hachage des mots de passe

                        //  le $userAuthenticator pour l'authentification des utilisateurs
                        // Il est utilisé pour co directement l'utilisateur après son inscription

                        //  le $authenticator qui est une instance de UserAuthenticator
                        // il gère le processus d'authentification

                        //  le $entityManager permet d'intéragir avec la base pour notamment insérer des données 
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, 
    UserAuthenticatorInterface $userAuthenticator, UsersAuthenticator $authenticator, 
    EntityManagerInterface $entityManager): Response
    {
        // Un nouvel objet User est créé pour représenter l'utilisateur à enregistrer
        $user = new User();

        // Un formulaire de type RegistrationFormType est créé en utilisant 'createForm' 
        // Ce formulaire sera utilisé pour collecter les informations de l'utilisateur.
        $form = $this->createForm(RegistrationFormType::class, $user);

        // Récupère les données soumises par l'utilisateur
        // et de les valider par rapport aux contraintes définies dans "RegistrationFormType"
        $form->handleRequest($request);

        // Condition permettant de vérifier si le formulaire est soumis et s'il est valide
        if ($form->isSubmitted() && $form->isValid()) {

            // On hash le MDP si on rentre dans la condition avec la méthode 'hashPassword'
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    // $user : c'est l'objet utilisateur sur lequel le mot de passe haché sera appliqué
                    $user,
                    // On récupère le mot de passe saisi en clair par l'utilisateur dans le formulaire à l'aide de 'getData'
                    $form->get('plainPassword')->getData()
                )
            );

            // Indique à Doctrine de prendre en compte l'objet 'user' en vue d'un éventuelle insertion en BDD
            $entityManager->persist($user);

            // Insére en BDD l'utilisateur
            $entityManager->flush();
            // do anything else you need here, like send an email

            // Message de confirmation de création de compte
            $this->addFlash('success', 'Votre compte a été créé avec succès !');

            // Authentifie l'utilisateur nouvellement inscrit
            // L'utilisateur est connecté automatiquement après son inscription
            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
        }

        // Affichage de la vue, en cas d'erreur
        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
