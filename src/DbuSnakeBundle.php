<?php

namespace Dbu\SnakeBundle;

use Dbu\SnakeBundle\Command\SnakeCommand;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class DbuSnakeBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $container->services()
            ->set(SnakeCommand::class)
            ->autoconfigure()
            ->autowire();
    }
}
