<?php

namespace Angela;

use DI\ContainerBuilder;

trait ContainerConfigurer
{
    protected function configureContainer(ContainerBuilder $builder)
    {
        $builder->addDefinitions(__DIR__ . '/../config/config.php');
        $builder->addDefinitions(__DIR__ . '/../config/di.php');

        $builder->useAnnotations(true);
    }
}
