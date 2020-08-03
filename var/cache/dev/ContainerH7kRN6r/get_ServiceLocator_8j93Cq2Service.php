<?php

namespace ContainerH7kRN6r;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8j93Cq2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8j93Cq2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8j93Cq2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'repo' => ['privates', 'App\\Repository\\ChaletRepository', 'getChaletRepositoryService', true],
        ], [
            'manager' => '?',
            'repo' => 'App\\Repository\\ChaletRepository',
        ]);
    }
}
