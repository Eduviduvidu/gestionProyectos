<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerH5uu3t8\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerH5uu3t8/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerH5uu3t8.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerH5uu3t8\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerH5uu3t8\appProdProjectContainer(array(
    'container.build_hash' => 'H5uu3t8',
    'container.build_id' => '5d7d3849',
    'container.build_time' => 1522186717,
));