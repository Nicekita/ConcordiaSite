<?php

namespace ContainerWa5XDNl;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderca26e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8f097 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6392a = [
        
    ];

    public function getConnection()
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'getConnection', array(), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'getMetadataFactory', array(), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'getExpressionBuilder', array(), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'beginTransaction', array(), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'getCache', array(), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'transactional', array('func' => $func), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->transactional($func);
    }

    public function commit()
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'commit', array(), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->commit();
    }

    public function rollback()
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'rollback', array(), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'getClassMetadata', array('className' => $className), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'createQuery', array('dql' => $dql), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'createNamedQuery', array('name' => $name), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'createQueryBuilder', array(), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'flush', array('entity' => $entity), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'clear', array('entityName' => $entityName), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->clear($entityName);
    }

    public function close()
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'close', array(), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->close();
    }

    public function persist($entity)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'persist', array('entity' => $entity), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'remove', array('entity' => $entity), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'refresh', array('entity' => $entity), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'detach', array('entity' => $entity), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'merge', array('entity' => $entity), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'contains', array('entity' => $entity), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'getEventManager', array(), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'getConfiguration', array(), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'isOpen', array(), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'getUnitOfWork', array(), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'getProxyFactory', array(), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'initializeObject', array('obj' => $obj), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'getFilters', array(), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'isFiltersStateClean', array(), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'hasFilters', array(), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return $this->valueHolderca26e->hasFilters();
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

        $instance->initializer8f097 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderca26e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderca26e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderca26e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, '__get', ['name' => $name], $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        if (isset(self::$publicProperties6392a[$name])) {
            return $this->valueHolderca26e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca26e;

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

        $targetObject = $this->valueHolderca26e;
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
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca26e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderca26e;
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
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, '__isset', array('name' => $name), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca26e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderca26e;
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
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, '__unset', array('name' => $name), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderca26e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderca26e;
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
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, '__clone', array(), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        $this->valueHolderca26e = clone $this->valueHolderca26e;
    }

    public function __sleep()
    {
        $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, '__sleep', array(), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;

        return array('valueHolderca26e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8f097 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8f097;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8f097 && ($this->initializer8f097->__invoke($valueHolderca26e, $this, 'initializeProxy', array(), $this->initializer8f097) || 1) && $this->valueHolderca26e = $valueHolderca26e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderca26e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderca26e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
