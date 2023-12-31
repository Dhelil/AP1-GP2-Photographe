<?php

namespace ContainerEJorivN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPresentationRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\PresentationRepository' shared autowired service.
     *
     * @return \App\Repository\PresentationRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\PresentationRepository'] = new \App\Repository\PresentationRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
