<?php

namespace ContainerTfMHgl9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTestService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Test' shared autowired service.
     *
     * @return \App\Controller\Test
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/Test.php';

        return $container->services['App\\Controller\\Test'] = new \App\Controller\Test();
    }
}
