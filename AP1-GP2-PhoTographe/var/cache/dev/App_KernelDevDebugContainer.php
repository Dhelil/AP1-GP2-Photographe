<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJgYNBhx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJgYNBhx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJgYNBhx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJgYNBhx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJgYNBhx\App_KernelDevDebugContainer([
    'container.build_hash' => 'JgYNBhx',
    'container.build_id' => '662b87e5',
    'container.build_time' => 1697620907,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJgYNBhx');
