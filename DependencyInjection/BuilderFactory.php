<?php

declare(strict_types=1);

namespace Iter8\Bundle\BuilderBundle\DependencyInjection;

use Builder\Builder;
use Builder\Builders\PhpSpreadsheet;
use Builder\Builders\SpoutBuilder;

/**
 * Class BuilderFactory
 */
class BuilderFactory
{
    private static $builderClasses = [
        'spout' => SpoutBuilder::class,
        'phpspreadsheet' => PhpSpreadsheet::class,
    ];

    public static function initialise(array $config): Builder
    {
        return new Builder(
            new self::$builderClasses[$config['default']],
            $config['cache_dir']
        );
    }
}
