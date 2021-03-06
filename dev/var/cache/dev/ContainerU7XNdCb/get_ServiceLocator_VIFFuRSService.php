<?php

namespace ContainerU7XNdCb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VIFFuRSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vIFFuRS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vIFFuRS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'produitRepo' => ['privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService', true],
            'session' => ['services', 'session', 'getSessionService', true],
        ], [
            'produitRepo' => 'App\\Repository\\ProduitRepository',
            'session' => '?',
        ]);
    }
}
