<?php
/**
 * Copyright © 2016 Angela Media
 */
namespace Angela;
use DI\ContainerBuilder;
use Doctrine\DBAL\Migrations\Tools\Console\ConsoleRunner as MigrationsConsoleRunner;
use Doctrine\DBAL\Tools\Console\ConsoleRunner as DBALConsoleRunner;
use Doctrine\ORM\Tools\Console\ConsoleRunner as ORMConsoleRunner;
use Monolog\Logger;
use Silly\Application;
use Symfony\Component\Console\Helper\HelperSet;
class CliApp extends Application
{
    use ContainerConfigurer;
    public function __construct($name = 'UNKNOWN', $version = 'UNKNOWN')
    {
        parent::__construct($name, $version);
        $container = $this->createContainer();
        $this->useContainer($container, true, true);
        $this->configureHelperSet();
        MigrationsConsoleRunner::addCommands($this);
        DBALConsoleRunner::addCommands($this);
        ORMConsoleRunner::addCommands($this);
    }
    private function createContainer()
    {
        $containerBuilder = new ContainerBuilder();
        $this->configureContainer($containerBuilder);
        return $containerBuilder->build();
    }
    private function configureHelperSet()
    {
        $helperSet = $this->getContainer()->get(HelperSet::class);
        foreach ($this->getHelperSet()->getIterator() as $alias => $helper) {
            $helperSet->set($helper, is_int($alias) ? null : $alias);
        }
        $this->setHelperSet($helperSet);
    }
}
