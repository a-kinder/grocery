<?php

namespace ProxyManagerGeneratedProxy\__PM__\Doctrine\ORM\EntityManager;

class Generated64e1bf0d9a3662ba8f39879cedd27427 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5aa4738822d2a581844623 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5aa4738822e72146242210 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5aa4738822338896359106 = [
        
    ];

    private static $signature64e1bf0d9a3662ba8f39879cedd27427 = 'YTozOntzOjk6ImNsYXNzTmFtZSI7czoyNjoiRG9jdHJpbmVcT1JNXEVudGl0eU1hbmFnZXIiO3M6NzoiZmFjdG9yeSI7czo1MDoiUHJveHlNYW5hZ2VyXEZhY3RvcnlcTGF6eUxvYWRpbmdWYWx1ZUhvbGRlckZhY3RvcnkiO3M6MTk6InByb3h5TWFuYWdlclZlcnNpb24iO3M6NDY6IjIuMS4xQGUxOGFjODc2YjJlNDgxOWM3NjM0OWRlOGY3OGNjYzhlZjE1NTRjZDciO30=';

    /**
     * {@inheritDoc}
     */
    public function getConnection()
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'getConnection', array(), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->getConnection();
    }

    /**
     * {@inheritDoc}
     */
    public function getMetadataFactory()
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'getMetadataFactory', array(), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->getMetadataFactory();
    }

    /**
     * {@inheritDoc}
     */
    public function getExpressionBuilder()
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'getExpressionBuilder', array(), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->getExpressionBuilder();
    }

    /**
     * {@inheritDoc}
     */
    public function beginTransaction()
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'beginTransaction', array(), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->beginTransaction();
    }

    /**
     * {@inheritDoc}
     */
    public function getCache()
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'getCache', array(), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->getCache();
    }

    /**
     * {@inheritDoc}
     */
    public function transactional($func)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'transactional', array('func' => $func), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->transactional($func);
    }

    /**
     * {@inheritDoc}
     */
    public function commit()
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'commit', array(), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->commit();
    }

    /**
     * {@inheritDoc}
     */
    public function rollback()
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'rollback', array(), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->rollback();
    }

    /**
     * {@inheritDoc}
     */
    public function getClassMetadata($className)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'getClassMetadata', array('className' => $className), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->getClassMetadata($className);
    }

    /**
     * {@inheritDoc}
     */
    public function createQuery($dql = '')
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'createQuery', array('dql' => $dql), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->createQuery($dql);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($name)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'createNamedQuery', array('name' => $name), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->createNamedQuery($name);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->createNativeQuery($sql, $rsm);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedNativeQuery($name)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->createNamedNativeQuery($name);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder()
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'createQueryBuilder', array(), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->createQueryBuilder();
    }

    /**
     * {@inheritDoc}
     */
    public function flush($entity = null)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'flush', array('entity' => $entity), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->flush($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->find($entityName, $id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getReference($entityName, $id)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->getReference($entityName, $id);
    }

    /**
     * {@inheritDoc}
     */
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->getPartialReference($entityName, $identifier);
    }

    /**
     * {@inheritDoc}
     */
    public function clear($entityName = null)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'clear', array('entityName' => $entityName), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->clear($entityName);
    }

    /**
     * {@inheritDoc}
     */
    public function close()
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'close', array(), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->close();
    }

    /**
     * {@inheritDoc}
     */
    public function persist($entity)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'persist', array('entity' => $entity), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->persist($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function remove($entity)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'remove', array('entity' => $entity), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->remove($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function refresh($entity)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'refresh', array('entity' => $entity), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->refresh($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function detach($entity)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'detach', array('entity' => $entity), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->detach($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function merge($entity)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'merge', array('entity' => $entity), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->merge($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function copy($entity, $deep = false)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->copy($entity, $deep);
    }

    /**
     * {@inheritDoc}
     */
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->lock($entity, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getRepository($entityName)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->getRepository($entityName);
    }

    /**
     * {@inheritDoc}
     */
    public function contains($entity)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'contains', array('entity' => $entity), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->contains($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventManager()
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'getEventManager', array(), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->getEventManager();
    }

    /**
     * {@inheritDoc}
     */
    public function getConfiguration()
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'getConfiguration', array(), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->getConfiguration();
    }

    /**
     * {@inheritDoc}
     */
    public function isOpen()
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'isOpen', array(), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->isOpen();
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitOfWork()
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'getUnitOfWork', array(), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->getUnitOfWork();
    }

    /**
     * {@inheritDoc}
     */
    public function getHydrator($hydrationMode)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->getHydrator($hydrationMode);
    }

    /**
     * {@inheritDoc}
     */
    public function newHydrator($hydrationMode)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->newHydrator($hydrationMode);
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyFactory()
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'getProxyFactory', array(), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->getProxyFactory();
    }

    /**
     * {@inheritDoc}
     */
    public function initializeObject($obj)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'initializeObject', array('obj' => $obj), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->initializeObject($obj);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilters()
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'getFilters', array(), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->getFilters();
    }

    /**
     * {@inheritDoc}
     */
    public function isFiltersStateClean()
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'isFiltersStateClean', array(), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->isFiltersStateClean();
    }

    /**
     * {@inheritDoc}
     */
    public function hasFilters()
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'hasFilters', array(), $this->initializer5aa4738822e72146242210);

        return $this->valueHolder5aa4738822d2a581844623->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer5aa4738822e72146242210 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5aa4738822d2a581844623) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5aa4738822d2a581844623 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5aa4738822d2a581844623->__construct($conn, $config, $eventManager);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, '__get', ['name' => $name], $this->initializer5aa4738822e72146242210);

        if (isset(self::$publicProperties5aa4738822338896359106[$name])) {
            return $this->valueHolder5aa4738822d2a581844623->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5aa4738822d2a581844623;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder5aa4738822d2a581844623;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5aa4738822e72146242210);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5aa4738822d2a581844623;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5aa4738822d2a581844623;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, '__isset', array('name' => $name), $this->initializer5aa4738822e72146242210);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5aa4738822d2a581844623;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5aa4738822d2a581844623;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, '__unset', array('name' => $name), $this->initializer5aa4738822e72146242210);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5aa4738822d2a581844623;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5aa4738822d2a581844623;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, '__clone', array(), $this->initializer5aa4738822e72146242210);

        $this->valueHolder5aa4738822d2a581844623 = clone $this->valueHolder5aa4738822d2a581844623;
    }

    public function __sleep()
    {
        $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, '__sleep', array(), $this->initializer5aa4738822e72146242210);

        return array('valueHolder5aa4738822d2a581844623');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5aa4738822e72146242210 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5aa4738822e72146242210;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5aa4738822e72146242210 && $this->initializer5aa4738822e72146242210->__invoke($this->valueHolder5aa4738822d2a581844623, $this, 'initializeProxy', array(), $this->initializer5aa4738822e72146242210);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5aa4738822d2a581844623;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5aa4738822d2a581844623;
    }


}
