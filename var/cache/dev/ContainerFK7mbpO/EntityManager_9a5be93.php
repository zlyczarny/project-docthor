<?php

namespace ContainerFK7mbpO;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbdd25 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbbf32 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties04250 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'getConnection', array(), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'getMetadataFactory', array(), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'getExpressionBuilder', array(), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'beginTransaction', array(), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'getCache', array(), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'transactional', array('func' => $func), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'commit', array(), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->commit();
    }

    public function rollback()
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'rollback', array(), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'getClassMetadata', array('className' => $className), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'createQuery', array('dql' => $dql), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'createNamedQuery', array('name' => $name), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'createQueryBuilder', array(), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'flush', array('entity' => $entity), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'clear', array('entityName' => $entityName), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->clear($entityName);
    }

    public function close()
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'close', array(), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->close();
    }

    public function persist($entity)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'persist', array('entity' => $entity), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'remove', array('entity' => $entity), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'refresh', array('entity' => $entity), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'detach', array('entity' => $entity), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'merge', array('entity' => $entity), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'contains', array('entity' => $entity), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'getEventManager', array(), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'getConfiguration', array(), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'isOpen', array(), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'getUnitOfWork', array(), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'getProxyFactory', array(), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'initializeObject', array('obj' => $obj), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'getFilters', array(), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'isFiltersStateClean', array(), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'hasFilters', array(), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return $this->valueHolderbdd25->hasFilters();
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

        $instance->initializerbbf32 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbdd25) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbdd25 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbdd25->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, '__get', ['name' => $name], $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        if (isset(self::$publicProperties04250[$name])) {
            return $this->valueHolderbdd25->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbdd25;

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

        $targetObject = $this->valueHolderbdd25;
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
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbdd25;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbdd25;
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
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, '__isset', array('name' => $name), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbdd25;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbdd25;
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
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, '__unset', array('name' => $name), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbdd25;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbdd25;
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
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, '__clone', array(), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        $this->valueHolderbdd25 = clone $this->valueHolderbdd25;
    }

    public function __sleep()
    {
        $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, '__sleep', array(), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;

        return array('valueHolderbdd25');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbbf32 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbbf32;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbbf32 && ($this->initializerbbf32->__invoke($valueHolderbdd25, $this, 'initializeProxy', array(), $this->initializerbbf32) || 1) && $this->valueHolderbdd25 = $valueHolderbdd25;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbdd25;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbdd25;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
