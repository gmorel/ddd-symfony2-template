<?php

namespace Ddd\Kernel\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author Guillaume MOREL <guillaume.morel@verylastroom.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $tb       = new TreeBuilder();
        $rootNode = $tb->root('ddd');

        $rootNode
            ->children()
            // ...
            ->end()
        ;

        return $tb;
    }
}
