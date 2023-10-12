<?php

namespace ContainerVG9NVav;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPresentationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PresentationController' shared autowired service.
     *
     * @return \App\Controller\PresentationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PresentationController.php';

        $container->services['App\\Controller\\PresentationController'] = $instance = new \App\Controller\PresentationController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\PresentationController', $container));

        return $instance;
    }
}
