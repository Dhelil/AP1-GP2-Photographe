<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTGK9OU6\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTGK9OU6/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTGK9OU6.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTGK9OU6\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTGK9OU6\App_KernelDevDebugContainer([
    'container.build_hash' => 'TGK9OU6',
    'container.build_id' => 'b3bbbf2e',
    'container.build_time' => 1697373057,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTGK9OU6');