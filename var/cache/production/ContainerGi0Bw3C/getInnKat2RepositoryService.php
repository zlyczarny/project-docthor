<?php

namespace ContainerGi0Bw3C;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInnKat2RepositoryService extends App_KernelProductionContainer
{
    /*
     * Gets the private 'App\Repository\InnKat2Repository' shared autowired service.
     *
     * @return \App\Repository\InnKat2Repository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\InnKat2Repository'] = new \App\Repository\InnKat2Repository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
