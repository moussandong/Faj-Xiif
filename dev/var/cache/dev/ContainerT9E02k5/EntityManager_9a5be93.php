<?php

namespace ContainerT9E02k5;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1b129 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1bbfe = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5a9de = [
        
    ];

    public function getConnection()
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'getConnection', array(), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'getMetadataFactory', array(), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'getExpressionBuilder', array(), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'beginTransaction', array(), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'getCache', array(), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'transactional', array('func' => $func), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->transactional($func);
    }

    public function commit()
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'commit', array(), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->commit();
    }

    public function rollback()
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'rollback', array(), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'getClassMetadata', array('className' => $className), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'createQuery', array('dql' => $dql), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'createNamedQuery', array('name' => $name), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'createQueryBuilder', array(), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'flush', array('entity' => $entity), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'clear', array('entityName' => $entityName), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->clear($entityName);
    }

    public function close()
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'close', array(), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->close();
    }

    public function persist($entity)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'persist', array('entity' => $entity), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'remove', array('entity' => $entity), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'refresh', array('entity' => $entity), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'detach', array('entity' => $entity), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'merge', array('entity' => $entity), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'contains', array('entity' => $entity), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'getEventManager', array(), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'getConfiguration', array(), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'isOpen', array(), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'getUnitOfWork', array(), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'getProxyFactory', array(), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'initializeObject', array('obj' => $obj), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'getFilters', array(), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'isFiltersStateClean', array(), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'hasFilters', array(), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return $this->valueHolder1b129->hasFilters();
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

        $instance->initializer1bbfe = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1b129) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1b129 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1b129->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, '__get', ['name' => $name], $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        if (isset(self::$publicProperties5a9de[$name])) {
            return $this->valueHolder1b129->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b129;

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

        $targetObject = $this->valueHolder1b129;
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
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b129;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1b129;
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
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, '__isset', array('name' => $name), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b129;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1b129;
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
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, '__unset', array('name' => $name), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b129;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1b129;
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
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, '__clone', array(), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        $this->valueHolder1b129 = clone $this->valueHolder1b129;
    }

    public function __sleep()
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, '__sleep', array(), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        return array('valueHolder1b129');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1bbfe = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1bbfe;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'initializeProxy', array(), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1b129;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1b129;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
