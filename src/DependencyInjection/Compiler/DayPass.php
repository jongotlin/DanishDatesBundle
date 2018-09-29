<?php

namespace JGI\DanishDatesBundle\DependencyInjection\Compiler;

use JGI\DanishDates\Date\DayChain;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;

class DayPass implements CompilerPassInterface
{
    /**
     * @param \Symfony\Component\DependencyInjection\ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition(DayChain::class)) {
            return;
        }

        $definition = $container->getDefinition(DayChain::class);
        $taggedServices = $container->findTaggedServiceIds('jgi.danish_dates.day');

        foreach ($taggedServices as $id => $attributes) {
            $definition->addMethodCall('addDay', [new Reference($id)]);
        }
    }
}
