<?php

namespace CanalTP\PostitBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('canal_tp_postit');

        $rootNode
            ->children()
                ->scalarNode('jira_url')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('jira_login')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('jira_password')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('sprint_id')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('jira_tag')
                    ->cannotBeEmpty()
                    ->defaultValue('Post-it')
                ->end()
            ->end();

        return $treeBuilder;
    }
}
