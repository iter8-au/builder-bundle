<?php

declare(strict_types=1);

namespace Iter8\Bundle\BuilderBundle\DependencyInjection;

use Builder\Builder;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Class BuilderExtension.
 */
class BuilderExtension extends Extension
{
    /**
     * Loads a specific configuration.
     *
     * @param array            $configs
     * @param ContainerBuilder $container
     */
    public function load(
        array $configs,
        ContainerBuilder $container
    ) {
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

    /**
     * @return string
     */
    public function getAlias()
    {
        return 'builder';
    }
}
