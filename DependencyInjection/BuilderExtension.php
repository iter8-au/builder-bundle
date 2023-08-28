<?php

declare(strict_types=1);

namespace Iter8\Bundle\BuilderBundle\DependencyInjection;

use Builder\Builder;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * @internal
 */
class BuilderExtension extends Extension
{
    public function load(
        array $configs,
        ContainerBuilder $container
    ): void {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $service = $container->register('builder', Builder::class);
        $service->setFactory([
            BuilderFactory::class,
            'initialise'
        ]);
        $service->setArguments([
            $config
        ]);
    }

    public function getAlias(): string
    {
        return 'builder';
    }
}
