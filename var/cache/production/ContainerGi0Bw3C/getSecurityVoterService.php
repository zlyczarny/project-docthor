<?php

namespace ContainerGi0Bw3C;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurityVoterService extends App_KernelProductionContainer
{
    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Security\SecurityVoter' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Security\SecurityVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Security\\SecurityVoter'] = new \EasyCorp\Bundle\EasyAdminBundle\Security\SecurityVoter(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Security\\AuthorizationChecker'] ?? $container->getAuthorizationCheckerService()), ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $container->getAdminContextProviderService()));
    }
}
