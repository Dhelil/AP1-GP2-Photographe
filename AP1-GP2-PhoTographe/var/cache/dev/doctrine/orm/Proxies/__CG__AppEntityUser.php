<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'adresseUser' => [parent::class, 'adresseUser', null],
        "\0".parent::class."\0".'cpUser' => [parent::class, 'cpUser', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'genreUser' => [parent::class, 'genreUser', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'idDemandeUser' => [parent::class, 'idDemandeUser', null],
        "\0".parent::class."\0".'nomUser' => [parent::class, 'nomUser', null],
        "\0".parent::class."\0".'password' => [parent::class, 'password', null],
        "\0".parent::class."\0".'prenomUser' => [parent::class, 'prenomUser', null],
        "\0".parent::class."\0".'roles' => [parent::class, 'roles', null],
        "\0".parent::class."\0".'telephoneUser' => [parent::class, 'telephoneUser', null],
        "\0".parent::class."\0".'villeUser' => [parent::class, 'villeUser', null],
        'adresseUser' => [parent::class, 'adresseUser', null],
        'cpUser' => [parent::class, 'cpUser', null],
        'email' => [parent::class, 'email', null],
        'genreUser' => [parent::class, 'genreUser', null],
        'id' => [parent::class, 'id', null],
        'idDemandeUser' => [parent::class, 'idDemandeUser', null],
        'nomUser' => [parent::class, 'nomUser', null],
        'password' => [parent::class, 'password', null],
        'prenomUser' => [parent::class, 'prenomUser', null],
        'roles' => [parent::class, 'roles', null],
        'telephoneUser' => [parent::class, 'telephoneUser', null],
        'villeUser' => [parent::class, 'villeUser', null],
    ];

    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {
        if ($cloner !== null) {
            return;
        }

        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'id' => true,
        ], $this);
    }

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"], $properties['__isCloning']);

        return $properties;
    }
}
