<?php

declare(strict_types=1);

namespace Iter8\Bundle\BuilderBundle;

use Iter8\Bundle\BuilderBundle\DependencyInjection\BuilderExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class BuilderBundle.
 */
class BuilderBundle extends Bundle
{
    /**
     * Return the Builder singleton.
     *
     * @return BuilderExtension
     */
    public function getContainerExtension(): BuilderExtension
    {
        if (null === $this->extension) {
            return new BuilderExtension();
        }

        return $this->extension;
    }
}
