<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKxiF3Fy\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKxiF3Fy/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerKxiF3Fy.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerKxiF3Fy\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerKxiF3Fy\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'KxiF3Fy',
    'container.build_id' => 'ebfa7c73',
    'container.build_time' => 1540407589,
));
