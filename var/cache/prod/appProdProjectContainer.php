<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRweukak\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRweukak/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerRweukak.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerRweukak\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerRweukak\appProdProjectContainer([
    'container.build_hash' => 'Rweukak',
    'container.build_id' => '99b94062',
    'container.build_time' => 1715987761,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRweukak');
