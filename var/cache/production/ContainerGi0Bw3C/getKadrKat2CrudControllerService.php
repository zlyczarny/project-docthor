<?php

namespace ContainerGi0Bw3C;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKadrKat2CrudControllerService extends App_KernelProductionContainer
{
    /*
     * Gets the public 'App\Controller\Admin\KadrKat2CrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\KadrKat2CrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\KadrKat2CrudController'] = $instance = new \App\Controller\Admin\KadrKat2CrudController();

        $instance->setContainer(($container->privates['.service_locator.Pq4jHMT'] ?? $container->load('get_ServiceLocator_Pq4jHMTService'))->withContext('App\\Controller\\Admin\\KadrKat2CrudController', $container));

        return $instance;
    }
}
