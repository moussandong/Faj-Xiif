<?php

namespace ContainerU7XNdCb;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        if ($this->valueHolder9dc98 === $returnValue = $this->valueHolder9dc98->paginate($target, $page, $limit, $options)) {
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

        $instance->initializerb5b5d = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder9dc98) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder9dc98 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerb5b5d && ($this->initializerb5b5d->__invoke($valueHolder9dc98, $this, '__get', ['name' => $name], $this->initializerb5b5d) || 1) && $this->valueHolder9dc98 = $valueHolder9dc98;

        if (isset(self::$publicPropertiesce2f9[$name])) {
            return $this->valueHolder9dc98->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
