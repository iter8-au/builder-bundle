<?php

declare(strict_types=1);

namespace Iter8\Bundle\BuilderBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration.
 *
 * @internal
 */
class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('builder');

        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->scalarNode('default')
                    ->defaultValue('phpspreadsheet')
                    ->end()
                ->scalarNode('cache_dir')
                    ->defaultValue('%kernel.cache_dir%/builder')
                    ->end()
            ->end();

        return $treeBuilder;
    }
}
