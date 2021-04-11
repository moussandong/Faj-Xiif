<?php

namespace ContainerU7XNdCb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MAw61FQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mAw61FQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mAw61FQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commandeRepository' => ['privates', 'App\\Repository\\CommandeRepository', 'getCommandeRepositoryService', true],
        ], [
            'commandeRepository' => 'App\\Repository\\CommandeRepository',
        ]);
    }
}
