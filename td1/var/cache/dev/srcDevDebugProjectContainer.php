<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOPUkHGC\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOPUkHGC/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerOPUkHGC.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerOPUkHGC\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerOPUkHGC\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'OPUkHGC',
    'container.build_id' => '9ff6227d',
    'container.build_time' => 1517384835,
));
