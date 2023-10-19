<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\SecurityRequestAttributes;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class UsersAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    // constante "LOGIN_ROUTE" qui a la valeur du chemin de la page de connexion que l'on retrouve dans le securityControllerÒ
    public const LOGIN_ROUTE = 'app_login';

    // Pour faire des générations d'URL
    public function __construct(private UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    // Méthode authenticate -> retourne un passport qui Permet de gérer l'authentification des utilisateurs
    // Dans le passport on aura l'utilisateur, le mot de passe qui a été envoyé et la valeur du token CSRF(qui permet d'authentifier le formulaire)

    public function authenticate(Request $request): Passport
    {
        // On récupère le mail
        $email = $request->request->get('email', '');

        // Ds la session on insère le dernier utilisateur qui a été tapé
        $request->getSession()->set(SecurityRequestAttributes::LAST_USERNAME, $email);

        // On retourne le passport qui prend en paramètre
        // un userbadge qui est le mail
        // un credentials qui est le MDP
        // un tableau avec le badge correspondant au csrfToken qui est un jeton de sécurité qui permet de vérifier que notre formulaire vient
        // bien de notre site
        return new Passport(
            new UserBadge($email),
            new PasswordCredentials($request->request->get('password', '')),
            [
                new CsrfTokenBadge('authenticate', $request->request->get('_csrf_token')),            ]
        );
    }


    // Si l'authentification fonctionne, on rentre dans cette méthode là
    // où on a le targetPath qui est le chemin de retour si on veut que l'utilisateur revienne sur la page co une fois qu'il est co
    
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }

        // Là c'est si on veut rediriger l'utilisateur vers une page particulière
        // Dans notre cas, on a commenté la ligne généré automatique (le throw)
        // et a on redirigé l'utilsateur connecté vers la page principale
        return new RedirectResponse($this->urlGenerator->generate('app_c_principal'));
        // throw new \Exception('TODO: provide a valid redirect inside '.__FILE__);
    }

    // Cette fonction permet d'avoir l'URL par rapport à la route qui s'appelle "app_login"
    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}
