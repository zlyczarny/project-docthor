<?php

namespace ContainerGi0Bw3C;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKsieKat1RepositoryService extends App_KernelProductionContainer
{
    /*
     * Gets the private 'App\Repository\KsieKat1Repository' shared autowired service.
     *
     * @return \App\Repository\KsieKat1Repository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\KsieKat1Repository'] = new \App\Repository\KsieKat1Repository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
