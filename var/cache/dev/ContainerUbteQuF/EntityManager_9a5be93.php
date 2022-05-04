<?php

namespace ContainerUbteQuF;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder895b7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercab47 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd7dc1 = [
        
    ];

    public function getConnection()
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'getConnection', array(), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'getMetadataFactory', array(), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'getExpressionBuilder', array(), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'beginTransaction', array(), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'getCache', array(), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->getCache();
    }

    public function transactional($func)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'transactional', array('func' => $func), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'wrapInTransaction', array('func' => $func), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'commit', array(), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->commit();
    }

    public function rollback()
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'rollback', array(), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'getClassMetadata', array('className' => $className), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'createQuery', array('dql' => $dql), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'createNamedQuery', array('name' => $name), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'createQueryBuilder', array(), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'flush', array('entity' => $entity), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'clear', array('entityName' => $entityName), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->clear($entityName);
    }

    public function close()
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'close', array(), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->close();
    }

    public function persist($entity)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'persist', array('entity' => $entity), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'remove', array('entity' => $entity), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'refresh', array('entity' => $entity), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'detach', array('entity' => $entity), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'merge', array('entity' => $entity), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'getRepository', array('entityName' => $entityName), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'contains', array('entity' => $entity), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'getEventManager', array(), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'getConfiguration', array(), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'isOpen', array(), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'getUnitOfWork', array(), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'getProxyFactory', array(), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'initializeObject', array('obj' => $obj), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'getFilters', array(), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'isFiltersStateClean', array(), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'hasFilters', array(), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return $this->valueHolder895b7->hasFilters();
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

        $instance->initializercab47 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder895b7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder895b7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder895b7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, '__get', ['name' => $name], $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        if (isset(self::$publicPropertiesd7dc1[$name])) {
            return $this->valueHolder895b7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder895b7;

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

        $targetObject = $this->valueHolder895b7;
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
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder895b7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder895b7;
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
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, '__isset', array('name' => $name), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder895b7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder895b7;
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
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, '__unset', array('name' => $name), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder895b7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder895b7;
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
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, '__clone', array(), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        $this->valueHolder895b7 = clone $this->valueHolder895b7;
    }

    public function __sleep()
    {
        $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, '__sleep', array(), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;

        return array('valueHolder895b7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercab47 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercab47;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercab47 && ($this->initializercab47->__invoke($valueHolder895b7, $this, 'initializeProxy', array(), $this->initializercab47) || 1) && $this->valueHolder895b7 = $valueHolder895b7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder895b7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder895b7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
