<?php

namespace ContainerEJorivN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Qrx1RH3Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.qrx1RH3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qrx1RH3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'manage' => ['privates', 'App\\Repository\\PrestationsRepository', 'getPrestationsRepositoryService', true],
        ], [
            'manage' => 'App\\Repository\\PrestationsRepository',
        ]);
    }
}
