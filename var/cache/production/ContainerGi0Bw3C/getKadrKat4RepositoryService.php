<?php

namespace ContainerGi0Bw3C;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKadrKat4RepositoryService extends App_KernelProductionContainer
{
    /*
     * Gets the private 'App\Repository\KadrKat4Repository' shared autowired service.
     *
     * @return \App\Repository\KadrKat4Repository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\KadrKat4Repository'] = new \App\Repository\KadrKat4Repository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
