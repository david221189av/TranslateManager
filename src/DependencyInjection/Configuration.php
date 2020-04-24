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
        ->scalarNode('trans_manager.key')
            ->defaultValue('some key')
        ->isRequired()->cannotBeEmpty()
        ->end()
        ->scalarNode('trans_manager.secret')
            ->defaultValue('some secret key')
        ->isRequired()->cannotBeEmpty()
        ->end()
        ->end();

        return $treeBuilder;
    }
}