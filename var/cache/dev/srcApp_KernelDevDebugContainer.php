<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNeMAVMO\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNeMAVMO/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNeMAVMO.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNeMAVMO\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerNeMAVMO\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'NeMAVMO',
    'container.build_id' => 'a03db04d',
    'container.build_time' => 1614560370,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNeMAVMO');
