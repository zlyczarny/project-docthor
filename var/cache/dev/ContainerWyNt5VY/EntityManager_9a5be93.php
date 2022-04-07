<?php

namespace ContainerWyNt5VY;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9f370 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer30b51 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties83064 = [
        
    ];

    public function getConnection()
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'getConnection', array(), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'getMetadataFactory', array(), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'getExpressionBuilder', array(), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'beginTransaction', array(), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'getCache', array(), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->getCache();
    }

    public function transactional($func)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'transactional', array('func' => $func), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'wrapInTransaction', array('func' => $func), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'commit', array(), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->commit();
    }

    public function rollback()
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'rollback', array(), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'getClassMetadata', array('className' => $className), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'createQuery', array('dql' => $dql), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'createNamedQuery', array('name' => $name), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'createQueryBuilder', array(), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'flush', array('entity' => $entity), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'clear', array('entityName' => $entityName), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->clear($entityName);
    }

    public function close()
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'close', array(), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->close();
    }

    public function persist($entity)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'persist', array('entity' => $entity), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'remove', array('entity' => $entity), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'refresh', array('entity' => $entity), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'detach', array('entity' => $entity), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'merge', array('entity' => $entity), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'getRepository', array('entityName' => $entityName), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'contains', array('entity' => $entity), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'getEventManager', array(), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'getConfiguration', array(), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'isOpen', array(), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'getUnitOfWork', array(), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'getProxyFactory', array(), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'initializeObject', array('obj' => $obj), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'getFilters', array(), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'isFiltersStateClean', array(), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'hasFilters', array(), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return $this->valueHolder9f370->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer30b51 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9f370) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9f370 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9f370->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, '__get', ['name' => $name], $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        if (isset(self::$publicProperties83064[$name])) {
            return $this->valueHolder9f370->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f370;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9f370;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f370;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9f370;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, '__isset', array('name' => $name), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f370;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9f370;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, '__unset', array('name' => $name), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f370;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9f370;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, '__clone', array(), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        $this->valueHolder9f370 = clone $this->valueHolder9f370;
    }

    public function __sleep()
    {
        $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, '__sleep', array(), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;

        return array('valueHolder9f370');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer30b51 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer30b51;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer30b51 && ($this->initializer30b51->__invoke($valueHolder9f370, $this, 'initializeProxy', array(), $this->initializer30b51) || 1) && $this->valueHolder9f370 = $valueHolder9f370;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9f370;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9f370;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
