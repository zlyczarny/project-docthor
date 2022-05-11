<?php

namespace Container8ezLLS6;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf9fcb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere73ab = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfbfbd = [
        
    ];

    public function getConnection()
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'getConnection', array(), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'getMetadataFactory', array(), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'getExpressionBuilder', array(), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'beginTransaction', array(), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'getCache', array(), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->getCache();
    }

    public function transactional($func)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'transactional', array('func' => $func), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'wrapInTransaction', array('func' => $func), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'commit', array(), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->commit();
    }

    public function rollback()
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'rollback', array(), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'getClassMetadata', array('className' => $className), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'createQuery', array('dql' => $dql), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'createNamedQuery', array('name' => $name), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'createQueryBuilder', array(), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'flush', array('entity' => $entity), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'clear', array('entityName' => $entityName), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->clear($entityName);
    }

    public function close()
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'close', array(), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->close();
    }

    public function persist($entity)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'persist', array('entity' => $entity), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'remove', array('entity' => $entity), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'refresh', array('entity' => $entity), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'detach', array('entity' => $entity), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'merge', array('entity' => $entity), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'getRepository', array('entityName' => $entityName), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'contains', array('entity' => $entity), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'getEventManager', array(), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'getConfiguration', array(), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'isOpen', array(), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'getUnitOfWork', array(), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'getProxyFactory', array(), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'initializeObject', array('obj' => $obj), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'getFilters', array(), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'isFiltersStateClean', array(), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'hasFilters', array(), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return $this->valueHolderf9fcb->hasFilters();
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

        $instance->initializere73ab = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf9fcb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf9fcb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf9fcb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, '__get', ['name' => $name], $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        if (isset(self::$publicPropertiesfbfbd[$name])) {
            return $this->valueHolderf9fcb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9fcb;

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

        $targetObject = $this->valueHolderf9fcb;
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
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9fcb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf9fcb;
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
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, '__isset', array('name' => $name), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9fcb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf9fcb;
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
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, '__unset', array('name' => $name), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9fcb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf9fcb;
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
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, '__clone', array(), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        $this->valueHolderf9fcb = clone $this->valueHolderf9fcb;
    }

    public function __sleep()
    {
        $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, '__sleep', array(), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;

        return array('valueHolderf9fcb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere73ab = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere73ab;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere73ab && ($this->initializere73ab->__invoke($valueHolderf9fcb, $this, 'initializeProxy', array(), $this->initializere73ab) || 1) && $this->valueHolderf9fcb = $valueHolderf9fcb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf9fcb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf9fcb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
