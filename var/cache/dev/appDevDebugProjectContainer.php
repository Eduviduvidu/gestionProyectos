<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDp61ven\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDp61ven/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerDp61ven.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerDp61ven\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerDp61ven\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Dp61ven',
    'container.build_id' => '90c8a96a',
    'container.build_time' => 1522186617,
));