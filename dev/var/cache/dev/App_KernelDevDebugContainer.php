<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerT9E02k5\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerT9E02k5/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerT9E02k5.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerT9E02k5\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerT9E02k5\App_KernelDevDebugContainer([
    'container.build_hash' => 'T9E02k5',
    'container.build_id' => '0fd3e6fa',
    'container.build_time' => 1618234056,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerT9E02k5');
