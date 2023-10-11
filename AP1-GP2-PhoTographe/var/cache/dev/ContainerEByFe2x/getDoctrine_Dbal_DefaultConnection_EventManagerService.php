<?php

namespace ContainerEByFe2x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Dbal_DefaultConnection_EventManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.dbal.default_connection.event_manager' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\ContainerAwareEventManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'event-manager'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventManager.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'ContainerAwareEventManager.php';

        return $container->privates['doctrine.dbal.default_connection.event_manager'] = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', true],
            'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_listener' => ['privates', 'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_listener', 'getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaListenerService', true],
            'doctrine.orm.listeners.doctrine_token_provider_schema_listener' => ['privates', 'doctrine.orm.listeners.doctrine_token_provider_schema_listener', 'getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaListenerService', true],
            'doctrine.orm.listeners.lock_store_schema_listener' => ['privates', 'doctrine.orm.listeners.lock_store_schema_listener', 'getDoctrine_Orm_Listeners_LockStoreSchemaListenerService', true],
            'doctrine.orm.listeners.pdo_session_handler_schema_listener' => ['privates', 'doctrine.orm.listeners.pdo_session_handler_schema_listener', 'getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService', true],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
            'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_listener' => '?',
            'doctrine.orm.listeners.doctrine_token_provider_schema_listener' => '?',
            'doctrine.orm.listeners.lock_store_schema_listener' => '?',
            'doctrine.orm.listeners.pdo_session_handler_schema_listener' => '?',
        ]), [[['postGenerateSchema'], 'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_listener'], [['postGenerateSchema'], 'doctrine.orm.listeners.doctrine_token_provider_schema_listener'], [['postGenerateSchema'], 'doctrine.orm.listeners.pdo_session_handler_schema_listener'], [['postGenerateSchema'], 'doctrine.orm.listeners.lock_store_schema_listener'], [['loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners']]);
    }
}
