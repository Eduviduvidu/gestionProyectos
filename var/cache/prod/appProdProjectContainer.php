<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5bafjxo\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5bafjxo/appProdProjectContainer.php') {
    touch(__DIR__.'/Container5bafjxo.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container5bafjxo\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container5bafjxo\appProdProjectContainer(array(
    'container.build_hash' => '5bafjxo',
    'container.build_id' => '87e1959e',
    'container.build_time' => 1520362991,
));
