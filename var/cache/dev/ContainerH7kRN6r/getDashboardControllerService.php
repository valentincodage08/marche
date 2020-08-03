<?php

namespace ContainerH7kRN6r;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\DashboardController' shared autowired service.
     *
     * @return \App\Controller\Admin\DashboardController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Contracts\\Controller\\DashboardControllerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Controller\\AbstractDashboardController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\Admin\\DashboardController.php';

        $container->services['App\\Controller\\Admin\\DashboardController'] = $instance = new \App\Controller\Admin\DashboardController();

        $instance->setContainer(($container->privates['.service_locator.4kZ4HNI'] ?? $container->load('get_ServiceLocator_4kZ4HNIService'))->withContext('App\\Controller\\Admin\\DashboardController', $container));

        return $instance;
    }
}
