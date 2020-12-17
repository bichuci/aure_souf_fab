<?php

namespace ContainerLxk7a3O;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUploadFileManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Services\UploadFileManager' shared autowired service.
     *
     * @return \App\Services\UploadFileManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'UploadFileManager.php';

        return $container->privates['App\\Services\\UploadFileManager'] = new \App\Services\UploadFileManager(($container->privates['parameter_bag'] ?? ($container->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container))));
    }
}
