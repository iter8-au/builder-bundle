<?php

declare(strict_types=1);

namespace Iter8\Bundle\BuilderBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration.
 */
class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('builder');

        $rootNode
            ->children()
                ->scalarNode('default')
                    ->defaultValue('phpspreadsheet')
                    ->end()
                ->scalarNode('cache_dir')
                    ->defaultValue('%kernel.cache_dir%/builder')
                    ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
