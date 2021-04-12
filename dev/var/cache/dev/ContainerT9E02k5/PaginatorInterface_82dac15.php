<?php

namespace ContainerT9E02k5;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        if ($this->valueHolder1b129 === $returnValue = $this->valueHolder1b129->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializer1bbfe = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder1b129) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder1b129 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer1bbfe && ($this->initializer1bbfe->__invoke($valueHolder1b129, $this, '__get', ['name' => $name], $this->initializer1bbfe) || 1) && $this->valueHolder1b129 = $valueHolder1b129;

        if (isset(self::$publicProperties5a9de[$name])) {
            return $this->valueHolder1b129->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
