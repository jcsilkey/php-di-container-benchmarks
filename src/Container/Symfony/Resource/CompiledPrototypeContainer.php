<?php

namespace DiContainerBenchmarks\Container\Symfony\Resource;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAE1reCF\CompiledPrototypeContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAE1reCF/CompiledPrototypeContainer.php') {
    touch(__DIR__.'/ContainerAE1reCF.legacy');

    return;
}

if (!\class_exists(CompiledPrototypeContainer::class, false)) {
    \class_alias(\ContainerAE1reCF\CompiledPrototypeContainer::class, CompiledPrototypeContainer::class, false);
}

return new \ContainerAE1reCF\CompiledPrototypeContainer(array(
    'container.build_hash' => 'AE1reCF',
    'container.build_id' => 'a0a42f25',
    'container.build_time' => 1544295823,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerAE1reCF');
