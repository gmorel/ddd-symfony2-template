<?php

namespace Ddd\Kernel;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\EventDispatcher\DependencyInjection\RegisterListenersPass;
use Ddd\Kernel\DependencyInjection\Compiler\XXXCompilerPass;

/**
 * @author Guillaume MOREL <guillaume.morel@verylastroom.com>
 */
class DddBundle extends Bundle
{
    /**
     * {@inheritDoc}
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(
            new XXXCompilerPass()
        );
    }
}
