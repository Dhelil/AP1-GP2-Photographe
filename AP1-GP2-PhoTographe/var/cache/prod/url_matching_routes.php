<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\AdministrationController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_c_principal', '_controller' => 'App\\Controller\\CPrincipalController::index'], null, null, null, false, false, null]],
        '/presentations' => [[['_route' => 'app_presentations', '_controller' => 'App\\Controller\\PresentationsController::index'], null, null, null, false, false, null]],
        '/prestations' => [[['_route' => 'app_prestations', '_controller' => 'App\\Controller\\PrestationsController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
