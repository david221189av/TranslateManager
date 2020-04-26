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
        if (\method_exists(TreeBuilder::class, 'getRootNode')) {
            $treeBuilder = new TreeBuilder('trans_manager');
            $rootNode = $treeBuilder->getRootNode();
        } else {
            $treeBuilder = new TreeBuilder();
            $rootNode = $treeBuilder->root('trans_manager');
        }

        $rootNode
            ->children()
            ->scalarNode('key')->defaultValue('key value')->end()
            ->end()
            ->children()
            ->scalarNode('secret')->defaultValue('secret value')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}