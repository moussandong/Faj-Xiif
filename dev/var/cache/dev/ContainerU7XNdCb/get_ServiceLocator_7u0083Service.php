<?php

namespace ContainerU7XNdCb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7u0083Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7u_0083' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7u_0083'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'specialite' => ['privates', '.errored..service_locator.7u_0083.App\\Entity\\Specialite', NULL, 'Cannot autowire service ".service_locator.7u_0083": it references class "App\\Entity\\Specialite" but no such service exists.'],
        ], [
            'specialite' => 'App\\Entity\\Specialite',
        ]);
    }
}