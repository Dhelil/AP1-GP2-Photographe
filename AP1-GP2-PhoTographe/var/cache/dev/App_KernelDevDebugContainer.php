<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMvkjuXa\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMvkjuXa/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMvkjuXa.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMvkjuXa\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMvkjuXa\App_KernelDevDebugContainer([
    'container.build_hash' => 'MvkjuXa',
    'container.build_id' => '1f06d8c7',
    'container.build_time' => 1697048028,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMvkjuXa');
