<?php

namespace ContainerDigcFU0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5wFGOLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5wFG_oL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5wFG_oL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\HomeController::create' => ['privates', '.service_locator.0lC1dka', 'get_ServiceLocator_0lC1dkaService', true],
            'App\\Controller\\HomeController::home' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Kernel::build' => ['privates', '.service_locator.9w_84u.', 'get_ServiceLocator_9w84u_Service', true],
            'App\\Kernel::configureContainer' => ['privates', '.service_locator.S8bq9vl', 'get_ServiceLocator_S8bq9vlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::build' => ['privates', '.service_locator.9w_84u.', 'get_ServiceLocator_9w84u_Service', true],
            'kernel::configureContainer' => ['privates', '.service_locator.S8bq9vl', 'get_ServiceLocator_S8bq9vlService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\HomeController:create' => ['privates', '.service_locator.0lC1dka', 'get_ServiceLocator_0lC1dkaService', true],
            'App\\Controller\\HomeController:home' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'kernel:build' => ['privates', '.service_locator.9w_84u.', 'get_ServiceLocator_9w84u_Service', true],
            'kernel:configureContainer' => ['privates', '.service_locator.S8bq9vl', 'get_ServiceLocator_S8bq9vlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\HomeController::create' => '?',
            'App\\Controller\\HomeController::home' => '?',
            'App\\Kernel::build' => '?',
            'App\\Kernel::configureContainer' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::build' => '?',
            'kernel::configureContainer' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\HomeController:create' => '?',
            'App\\Controller\\HomeController:home' => '?',
            'kernel:build' => '?',
            'kernel:configureContainer' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
