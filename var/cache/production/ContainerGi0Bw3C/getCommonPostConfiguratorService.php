<?php

namespace ContainerGi0Bw3C;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommonPostConfiguratorService extends App_KernelProductionContainer
{
    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPostConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPostConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CommonPostConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPostConfigurator(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $container->getAdminContextProviderService()), 'UTF-8');
    }
}
