<?php

namespace JGI\DanishDatesBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use JGI\DanishDatesBundle\DependencyInjection\Compiler\DayPass;

class JGIDanishDatesBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new DayPass());
    }
}
