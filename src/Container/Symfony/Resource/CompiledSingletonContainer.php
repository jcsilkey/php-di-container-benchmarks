<?php

namespace DiContainerBenchmarks\Container\Symfony\Resource;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHzaExdq\CompiledSingletonContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHzaExdq/CompiledSingletonContainer.php') {
    touch(__DIR__.'/ContainerHzaExdq.legacy');

    return;
}

if (!\class_exists(CompiledSingletonContainer::class, false)) {
    \class_alias(\ContainerHzaExdq\CompiledSingletonContainer::class, CompiledSingletonContainer::class, false);
}

return new \ContainerHzaExdq\CompiledSingletonContainer(array(
    'container.build_hash' => 'HzaExdq',
    'container.build_id' => '2db8392c',
    'container.build_time' => 1546991666,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerHzaExdq');
