<?php

namespace ContainerU7XNdCb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSpecialiteTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\SpecialiteType' shared autowired service.
     *
     * @return \App\Form\SpecialiteType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/SpecialiteType.php';

        return $container->privates['App\\Form\\SpecialiteType'] = new \App\Form\SpecialiteType();
    }
}
