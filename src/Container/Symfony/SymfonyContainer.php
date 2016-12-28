<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Symfony;

use DiContainerBenchmarks\Container\ContainerInterface;
use DiContainerBenchmarks\Fixture\Class10;
use DiContainerBenchmarks\Fixture\Class100;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Dumper\PhpDumper;

class SymfonyContainer implements ContainerInterface
{
    public function getName(): string
    {
        return "Symfony";
    }

    public function build(): void
    {
        // Build container with prototype services
        $containerBuilder = new ContainerBuilder();

        for ($i = 1; $i <= 100; $i++) {
            $definition = new Definition('DiContainerBenchmarks\Fixture\Class' . $i, []);
            $definition->setShared(false);
            $definition->setAutowired(true);
            $containerBuilder->setDefinition('DiContainerBenchmarks\Fixture\Class' . $i, $definition);
        }

        $containerBuilder->compile();

        $dumper = new PhpDumper($containerBuilder);
        file_put_contents(
            "/code/src/Container/Symfony/Resource/CompiledPrototypeContainer.php",
            $dumper->dump(
                [
                    "namespace" => "DiContainerBenchmarks\\Container\\Symfony\\Resource",
                    "class" => "CompiledPrototypeContainer"
                ]
            )
        );

        // Build container with singleton services
        $containerBuilder = new ContainerBuilder();

        $definition = new Definition(Class10::class, []);
        $definition->setAutowired(true);
        $containerBuilder->setDefinition(Class10::class, $definition);

        $definition = new Definition(Class100::class, []);
        $definition->setAutowired(true);
        $containerBuilder->setDefinition(Class100::class, $definition);

        $containerBuilder->compile();

        $dumper = new PhpDumper($containerBuilder);
        file_put_contents(
            "/code/src/Container/Symfony/Resource/CompiledSingletonContainer.php",
            $dumper->dump(
                [
                    "namespace" => "DiContainerBenchmarks\\Container\\Symfony\\Resource",
                    "class" => "CompiledSingletonContainer"
                ]
            )
        );
    }
}
