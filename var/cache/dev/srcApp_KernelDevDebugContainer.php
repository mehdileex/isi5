<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDwMunlg\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDwMunlg/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDwMunlg.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDwMunlg\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerDwMunlg\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'DwMunlg',
    'container.build_id' => 'd65e8d9d',
    'container.build_time' => 1579176125,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDwMunlg');
