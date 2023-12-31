<?php

namespace ContainerEJorivN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestationsRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\PrestationsRepository' shared autowired service.
     *
     * @return \App\Repository\PrestationsRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\PrestationsRepository'] = new \App\Repository\PrestationsRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
