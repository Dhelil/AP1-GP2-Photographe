<?php

namespace ContainerEJorivN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCPrincipalControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\CPrincipalController' shared autowired service.
     *
     * @return \App\Controller\CPrincipalController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\CPrincipalController'] = $instance = new \App\Controller\CPrincipalController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\CPrincipalController', $container));

        return $instance;
    }
}
