<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4kMaqLt\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4kMaqLt/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container4kMaqLt.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container4kMaqLt\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container4kMaqLt\srcDevDebugProjectContainer(array(
    'container.build_hash' => '4kMaqLt',
    'container.build_id' => 'b1dff787',
    'container.build_time' => 1516787913,
));
