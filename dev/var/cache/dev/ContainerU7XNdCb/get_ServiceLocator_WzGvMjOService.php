<?php

namespace ContainerU7XNdCb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WzGvMjOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WzGvMjO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WzGvMjO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CommandeController::delete' => ['privates', '.service_locator.fQKGF_X', 'get_ServiceLocator_FQKGFXService', true],
            'App\\Controller\\CommandeController::edit' => ['privates', '.service_locator.fQKGF_X', 'get_ServiceLocator_FQKGFXService', true],
            'App\\Controller\\CommandeController::index' => ['privates', '.service_locator.mAw61FQ', 'get_ServiceLocator_MAw61FQService', true],
            'App\\Controller\\CommandeController::new' => ['privates', '.service_locator.vIFFuRS', 'get_ServiceLocator_VIFFuRSService', true],
            'App\\Controller\\CommandeController::show' => ['privates', '.service_locator.fQKGF_X', 'get_ServiceLocator_FQKGFXService', true],
            'App\\Controller\\CommerceController::delete' => ['privates', '.service_locator.vxfKQbX', 'get_ServiceLocator_VxfKQbXService', true],
            'App\\Controller\\CommerceController::edit' => ['privates', '.service_locator.vxfKQbX', 'get_ServiceLocator_VxfKQbXService', true],
            'App\\Controller\\CommerceController::index' => ['privates', '.service_locator.ETp25u1', 'get_ServiceLocator_ETp25u1Service', true],
            'App\\Controller\\CommerceController::show' => ['privates', '.service_locator.vxfKQbX', 'get_ServiceLocator_VxfKQbXService', true],
            'App\\Controller\\HomeController::afficheCommerce' => ['privates', '.service_locator.drUERLY', 'get_ServiceLocator_DrUERLYService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.ETp25u1', 'get_ServiceLocator_ETp25u1Service', true],
            'App\\Controller\\PanierController::add' => ['privates', '.service_locator.h9bDyFt', 'get_ServiceLocator_H9bDyFtService', true],
            'App\\Controller\\PanierController::index' => ['privates', '.service_locator.vIFFuRS', 'get_ServiceLocator_VIFFuRSService', true],
            'App\\Controller\\PanierController::remove' => ['privates', '.service_locator.h9bDyFt', 'get_ServiceLocator_H9bDyFtService', true],
            'App\\Controller\\ProduitController::delete' => ['privates', '.service_locator.ZJzZ1Z2', 'get_ServiceLocator_ZJzZ1Z2Service', true],
            'App\\Controller\\ProduitController::edit' => ['privates', '.service_locator.ZJzZ1Z2', 'get_ServiceLocator_ZJzZ1Z2Service', true],
            'App\\Controller\\ProduitController::index' => ['privates', '.service_locator.JM5nZSk', 'get_ServiceLocator_JM5nZSkService', true],
            'App\\Controller\\ProduitController::show' => ['privates', '.service_locator.ZJzZ1Z2', 'get_ServiceLocator_ZJzZ1Z2Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SpecialiteController::delete' => ['privates', '.service_locator.7u_0083', 'get_ServiceLocator_7u0083Service', true],
            'App\\Controller\\SpecialiteController::edit' => ['privates', '.service_locator.7u_0083', 'get_ServiceLocator_7u0083Service', true],
            'App\\Controller\\SpecialiteController::index' => ['privates', '.service_locator.f1Gc1j5', 'get_ServiceLocator_F1Gc1j5Service', true],
            'App\\Controller\\SpecialiteController::show' => ['privates', '.service_locator.7u_0083', 'get_ServiceLocator_7u0083Service', true],
            'App\\Controller\\TypeEntrepriseController::delete' => ['privates', '.service_locator.WCX6y.I', 'get_ServiceLocator_WCX6y_IService', true],
            'App\\Controller\\TypeEntrepriseController::edit' => ['privates', '.service_locator.WCX6y.I', 'get_ServiceLocator_WCX6y_IService', true],
            'App\\Controller\\TypeEntrepriseController::index' => ['privates', '.service_locator.hoNKPW7', 'get_ServiceLocator_HoNKPW7Service', true],
            'App\\Controller\\TypeEntrepriseController::show' => ['privates', '.service_locator.WCX6y.I', 'get_ServiceLocator_WCX6y_IService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\UserController::partenaire' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\CommandeController:delete' => ['privates', '.service_locator.fQKGF_X', 'get_ServiceLocator_FQKGFXService', true],
            'App\\Controller\\CommandeController:edit' => ['privates', '.service_locator.fQKGF_X', 'get_ServiceLocator_FQKGFXService', true],
            'App\\Controller\\CommandeController:index' => ['privates', '.service_locator.mAw61FQ', 'get_ServiceLocator_MAw61FQService', true],
            'App\\Controller\\CommandeController:new' => ['privates', '.service_locator.vIFFuRS', 'get_ServiceLocator_VIFFuRSService', true],
            'App\\Controller\\CommandeController:show' => ['privates', '.service_locator.fQKGF_X', 'get_ServiceLocator_FQKGFXService', true],
            'App\\Controller\\CommerceController:delete' => ['privates', '.service_locator.vxfKQbX', 'get_ServiceLocator_VxfKQbXService', true],
            'App\\Controller\\CommerceController:edit' => ['privates', '.service_locator.vxfKQbX', 'get_ServiceLocator_VxfKQbXService', true],
            'App\\Controller\\CommerceController:index' => ['privates', '.service_locator.ETp25u1', 'get_ServiceLocator_ETp25u1Service', true],
            'App\\Controller\\CommerceController:show' => ['privates', '.service_locator.vxfKQbX', 'get_ServiceLocator_VxfKQbXService', true],
            'App\\Controller\\HomeController:afficheCommerce' => ['privates', '.service_locator.drUERLY', 'get_ServiceLocator_DrUERLYService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.ETp25u1', 'get_ServiceLocator_ETp25u1Service', true],
            'App\\Controller\\PanierController:add' => ['privates', '.service_locator.h9bDyFt', 'get_ServiceLocator_H9bDyFtService', true],
            'App\\Controller\\PanierController:index' => ['privates', '.service_locator.vIFFuRS', 'get_ServiceLocator_VIFFuRSService', true],
            'App\\Controller\\PanierController:remove' => ['privates', '.service_locator.h9bDyFt', 'get_ServiceLocator_H9bDyFtService', true],
            'App\\Controller\\ProduitController:delete' => ['privates', '.service_locator.ZJzZ1Z2', 'get_ServiceLocator_ZJzZ1Z2Service', true],
            'App\\Controller\\ProduitController:edit' => ['privates', '.service_locator.ZJzZ1Z2', 'get_ServiceLocator_ZJzZ1Z2Service', true],
            'App\\Controller\\ProduitController:index' => ['privates', '.service_locator.JM5nZSk', 'get_ServiceLocator_JM5nZSkService', true],
            'App\\Controller\\ProduitController:show' => ['privates', '.service_locator.ZJzZ1Z2', 'get_ServiceLocator_ZJzZ1Z2Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SpecialiteController:delete' => ['privates', '.service_locator.7u_0083', 'get_ServiceLocator_7u0083Service', true],
            'App\\Controller\\SpecialiteController:edit' => ['privates', '.service_locator.7u_0083', 'get_ServiceLocator_7u0083Service', true],
            'App\\Controller\\SpecialiteController:index' => ['privates', '.service_locator.f1Gc1j5', 'get_ServiceLocator_F1Gc1j5Service', true],
            'App\\Controller\\SpecialiteController:show' => ['privates', '.service_locator.7u_0083', 'get_ServiceLocator_7u0083Service', true],
            'App\\Controller\\TypeEntrepriseController:delete' => ['privates', '.service_locator.WCX6y.I', 'get_ServiceLocator_WCX6y_IService', true],
            'App\\Controller\\TypeEntrepriseController:edit' => ['privates', '.service_locator.WCX6y.I', 'get_ServiceLocator_WCX6y_IService', true],
            'App\\Controller\\TypeEntrepriseController:index' => ['privates', '.service_locator.hoNKPW7', 'get_ServiceLocator_HoNKPW7Service', true],
            'App\\Controller\\TypeEntrepriseController:show' => ['privates', '.service_locator.WCX6y.I', 'get_ServiceLocator_WCX6y_IService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\UserController:partenaire' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\CommandeController::delete' => '?',
            'App\\Controller\\CommandeController::edit' => '?',
            'App\\Controller\\CommandeController::index' => '?',
            'App\\Controller\\CommandeController::new' => '?',
            'App\\Controller\\CommandeController::show' => '?',
            'App\\Controller\\CommerceController::delete' => '?',
            'App\\Controller\\CommerceController::edit' => '?',
            'App\\Controller\\CommerceController::index' => '?',
            'App\\Controller\\CommerceController::show' => '?',
            'App\\Controller\\HomeController::afficheCommerce' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\PanierController::add' => '?',
            'App\\Controller\\PanierController::index' => '?',
            'App\\Controller\\PanierController::remove' => '?',
            'App\\Controller\\ProduitController::delete' => '?',
            'App\\Controller\\ProduitController::edit' => '?',
            'App\\Controller\\ProduitController::index' => '?',
            'App\\Controller\\ProduitController::show' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SpecialiteController::delete' => '?',
            'App\\Controller\\SpecialiteController::edit' => '?',
            'App\\Controller\\SpecialiteController::index' => '?',
            'App\\Controller\\SpecialiteController::show' => '?',
            'App\\Controller\\TypeEntrepriseController::delete' => '?',
            'App\\Controller\\TypeEntrepriseController::edit' => '?',
            'App\\Controller\\TypeEntrepriseController::index' => '?',
            'App\\Controller\\TypeEntrepriseController::show' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::partenaire' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\CommandeController:delete' => '?',
            'App\\Controller\\CommandeController:edit' => '?',
            'App\\Controller\\CommandeController:index' => '?',
            'App\\Controller\\CommandeController:new' => '?',
            'App\\Controller\\CommandeController:show' => '?',
            'App\\Controller\\CommerceController:delete' => '?',
            'App\\Controller\\CommerceController:edit' => '?',
            'App\\Controller\\CommerceController:index' => '?',
            'App\\Controller\\CommerceController:show' => '?',
            'App\\Controller\\HomeController:afficheCommerce' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\PanierController:add' => '?',
            'App\\Controller\\PanierController:index' => '?',
            'App\\Controller\\PanierController:remove' => '?',
            'App\\Controller\\ProduitController:delete' => '?',
            'App\\Controller\\ProduitController:edit' => '?',
            'App\\Controller\\ProduitController:index' => '?',
            'App\\Controller\\ProduitController:show' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SpecialiteController:delete' => '?',
            'App\\Controller\\SpecialiteController:edit' => '?',
            'App\\Controller\\SpecialiteController:index' => '?',
            'App\\Controller\\SpecialiteController:show' => '?',
            'App\\Controller\\TypeEntrepriseController:delete' => '?',
            'App\\Controller\\TypeEntrepriseController:edit' => '?',
            'App\\Controller\\TypeEntrepriseController:index' => '?',
            'App\\Controller\\TypeEntrepriseController:show' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:partenaire' => '?',
            'App\\Controller\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
