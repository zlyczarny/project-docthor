<?php

namespace ContainerGi0Bw3C;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKadrKat3RepositoryService extends App_KernelProductionContainer
{
    /*
     * Gets the private 'App\Repository\KadrKat3Repository' shared autowired service.
     *
     * @return \App\Repository\KadrKat3Repository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\KadrKat3Repository'] = new \App\Repository\KadrKat3Repository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}