<?php

namespace ContainerJgwbIz1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5J_JOrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5_j.JOr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5_j.JOr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['privates', '.errored..service_locator.5_j.JOr.Doctrine\\ORM\\EntityManager', NULL, 'Cannot autowire service ".service_locator.5_j.JOr": it references class "Doctrine\\ORM\\EntityManager" but no such service exists. Try changing the type-hint to "Doctrine\\ORM\\EntityManagerInterface" instead.'],
        ], [
            'entityManager' => 'Doctrine\\ORM\\EntityManager',
        ]);
    }
}
