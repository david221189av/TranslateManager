<?php

namespace Terra\TransManagerBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('trans_manager');

        $rootNode = $treeBuilder->getRootNode();
        $rootNode
        ->children()
        ->scalarNode('key')
        ->isRequired()->cannotBeEmpty()
        ->end()
        ->scalarNode('secret')
        ->isRequired()->cannotBeEmpty()
        ->end()
        ->end();

        return $treeBuilder;
    }
}