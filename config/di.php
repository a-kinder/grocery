<?php
/**
 * Copyright © 2017 Nickel Media
 */

use DI\Container;
use function DI\factory;
use function DI\get;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\Common\Annotations\CachedReader;
use Doctrine\Common\Cache\ApcuCache;
use Doctrine\Common\Cache\CacheProvider;
use Doctrine\DBAL\Driver\Mysqli\Driver;
use Doctrine\DBAL\Migrations\Configuration\Configuration as MigrationConfiguration;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Driver as DriverInterface;
use Doctrine\DBAL\Driver\Connection as ConnectionInterface;
use Doctrine\DBAL\Migrations\Tools\Console\Helper\ConfigurationHelper;
use Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper;
use Doctrine\ORM\Configuration as ORMConfiguration;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper;
use Doctrine\ORM\Tools\Setup;
use ProxyManager\Configuration as ProxyConfiguration;
use ProxyManager\Factory\LazyLoadingValueHolderFactory;
use ProxyManager\FileLocator\FileLocator;
use ProxyManager\FileLocator\FileLocatorInterface;
use ProxyManager\GeneratorStrategy\FileWriterGeneratorStrategy;
use Symfony\Component\Console\Helper\HelperSet;
use Doctrine\Common\Cache\ArrayCache;
use Angela\Entities\Keyword;
use Angela\Entities\Product;
use Angela\Entities\Store;
use Angela\Repositories\KeywordRepository;
use Angela\Repositories\ProductRepository;
use Angela\Repositories\StoreRepository;
use Google\Cloud\Vision\VisionClient;

return [
    'paths.php' => __DIR__ . '/../php',
    'paths.proxies' => \DI\string("{paths.php}/Proxies"),
    'paths.entities' => \DI\string("{paths.php}/Entities"),
    'paths.migrations' => \DI\string("{paths.php}/Migrations"),
    ApcuCache::class => \DI\object()
        ->method('setNamespace', get('appName')),
    CacheProvider::class => get((PHP_OS === 'Darwin') ? ArrayCache::class : ApcuCache::class),
    ConnectionInterface::class => get(Connection::class),
    Connection::class => \DI\object(Connection::class)
        ->constructorParameter('params', get('database'))
        ->constructorParameter('driver', get(DriverInterface::class))
        ->constructorParameter('config', get(ORMConfiguration::class)),
    CachedReader::class => \DI\object()
        ->constructorParameter('reader', get(AnnotationReader::class))
        ->constructorParameter('cache', get(CacheProvider::class)),
    AnnotationDriver::class => \DI\object()
        ->constructorParameter('reader', get(CachedReader::class))
        ->constructorParameter('paths', [__DIR__ . '/../php/Entities']),
    ORMConfiguration::class => factory(function (
        AnnotationDriver $annotationDriver,
        CacheProvider $cacheProvider,
        Container $container
    ) {
        $developmentMode = (PHP_OS === 'Darwin') ? true :
            filter_var($container->get('developmentMode'), FILTER_VALIDATE_BOOLEAN);
        $config = Setup::createConfiguration(
            $developmentMode,
            null,
            null
        );
        AnnotationRegistry::registerFile(
            __DIR__ . '/../vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php'
        );
        $config->setMetadataDriverImpl($annotationDriver);
        $proxyDir = $container->get('paths.proxies') . "/ORM";
        $proxyNamespace = "Nickel\\Proxies";
        $config->setProxyDir($proxyDir);
        $config->setProxyNamespace($proxyNamespace);
        if (!$developmentMode) {
            $config->setMetadataCacheImpl($cacheProvider);
            $config->setQueryCacheImpl($cacheProvider);
            $config->setResultCacheImpl($cacheProvider);
            $config->setAutoGenerateProxyClasses(false);
        } else {
            $config->setAutoGenerateProxyClasses(true);
        }

        return $config;
    }),
    MigrationConfiguration::class => \DI\object()
        ->method('setName', get('appName'))
        ->method('setMigrationsDirectory', get('paths.migrations'))
        ->method('setMigrationsNamespace', 'Nickel\\Migrations'),
    ConfigurationHelper::class => \DI\object()
        ->constructor(get(Connection::class), get(MigrationConfiguration::class)),
    DriverInterface::class => get(Driver::class),
    FileLocatorInterface::class => \DI\Object(FileLocator::class)
        ->constructor(get('paths.proxies')),
    FileWriterGeneratorStrategy::class => \DI\object(FileWriterGeneratorStrategy::class)
        ->constructorParameter('fileLocator', get(FileLocatorInterface::class)),
    ProxyConfiguration::class => function (
        Container $container,
        FileWriterGeneratorStrategy $proxyGeneratorStrategy
    ) {
        $config = new ProxyConfiguration();
        $config->setProxiesTargetDir($container->get('paths.proxies'));
        $config->setGeneratorStrategy($proxyGeneratorStrategy);
        spl_autoload_register($config->getProxyAutoloader());

        return $config;
    },
    LazyLoadingValueHolderFactory::class => \DI\object()
        ->constructor(get(ProxyConfiguration::class)),
    EntityManager::class => factory(function (
        Connection $connection,
        ORMConfiguration $configuration,
        LazyLoadingValueHolderFactory $factory
    ) {
        $entityManager = $factory->createProxy(
            EntityManager::class,
            function (&$entityManager, $proxy, $method, $parameters, &$initializer) use ($connection, $configuration) {
                $entityManager = EntityManager::create($connection, $configuration);
                $initializer = null;
            }
        );

        return $entityManager;
    }),
    EntityManagerInterface::class => get(EntityManager::class),
    'cli.helpers' => [
        get(ConnectionHelper::class),
        get(ConfigurationHelper::class),
        'em' => get(EntityManagerHelper::class),
    ],
    HelperSet::class => \DI\object()
        ->constructor(get('cli.helpers')),

    VisionClient::class => \DI\object()
        ->constructor(
            [
                'projectId' => 'main-analog-197615',
                'keyFilePath' => '../www/files/grocery-text-recognition-7b7635a3486e.json'
            ]),
    KeywordRepository::class => factory(function (EntityManagerInterface $entityManagerInterface) {
        return $entityManagerInterface->getRepository(Keyword::class);
    }),
    ProductRepository::class => factory(function (EntityManagerInterface $entityManagerInterface) {
        return $entityManagerInterface->getRepository(Product::class);
    }),
    StoreRepository::class => factory(function (EntityManagerInterface $entityManagerInterface) {
        return $entityManagerInterface->getRepository(Store::class);
    }),

];
