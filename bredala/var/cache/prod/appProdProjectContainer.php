<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJgrd0gx\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJgrd0gx/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerJgrd0gx.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerJgrd0gx\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerJgrd0gx\appProdProjectContainer([
    'container.build_hash' => 'Jgrd0gx',
    'container.build_id' => 'c13a44fc',
    'container.build_time' => 1585218592,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJgrd0gx');
