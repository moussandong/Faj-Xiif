<?php

namespace ContainerU7XNdCb;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9dc98 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb5b5d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesce2f9 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'getConnection', array(), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'getMetadataFactory', array(), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'getExpressionBuilder', array(), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'beginTransaction', array(), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'getCache', array(), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'transactional', array('func' => $func), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->transactional($func);
    }

    public function commit()
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'commit', array(), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->commit();
    }

    public function rollback()
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'rollback', array(), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'getClassMetadata', array('className' => $className), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'createQuery', array('dql' => $dql), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'createNamedQuery', array('name' => $name), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'createQueryBuilder', array(), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'flush', array('entity' => $entity), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'clear', array('entityName' => $entityName), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->clear($entityName);
    }

    public function close()
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'close', array(), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->close();
    }

    public function persist($entity)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'persist', array('entity' => $entity), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'remove', array('entity' => $entity), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'refresh', array('entity' => $entity), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'detach', array('entity' => $entity), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'merge', array('entity' => $entity), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'contains', array('entity' => $entity), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'getEventManager', array(), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'getConfiguration', array(), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'isOpen', array(), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'getUnitOfWork', array(), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'getProxyFactory', array(), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'initializeObject', array('obj' => $obj), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'getFilters', array(), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'isFiltersStateClean', array(), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'hasFilters', array(), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return $this->valueHolder9dc98->hasFilters();
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

        $instance->initializerb5b5d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9dc98) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9dc98 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9dc98->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, '__get', ['name' => $name], $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        if (isset(self::$publicPropertiesce2f9[$name])) {
            return $this->valueHolder9dc98->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9dc98;

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

        $targetObject = $this->valueHolder9dc98;
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
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9dc98;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9dc98;
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
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, '__isset', array('name' => $name), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9dc98;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9dc98;
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
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, '__unset', array('name' => $name), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9dc98;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9dc98;
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
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, '__clone', array(), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        $this->valueHolder9dc98 = clone $this->valueHolder9dc98;
    }

    public function __sleep()
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, '__sleep', array(), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        return array('valueHolder9dc98');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb5b5d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb5b5d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'initializeProxy', array(), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9dc98;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9dc98;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
