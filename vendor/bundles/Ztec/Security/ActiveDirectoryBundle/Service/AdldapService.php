<?php
namespace Ztec\Security\ActiveDirectoryBundle\Service ;
use adLDAP\adLDAP;
use Symfony\Component\DependencyInjection\ContainerInterface;

class AdldapService {
    /**
     * @var adLDAP The instance of adLdap used for each call of the service
     */
    private $adLdap ;

    /**
     * @param \Symfony\Component\DependencyInjection\ContainerInterface $container  Dependency injection
     */
    function __construct(ContainerInterface $container)
    {
        $this->container = $container ;
        $parameters = $container->getParameter('ztec.security.active_directory.settings');
        $parameters['account_suffix'] = '@'.$parameters['account_suffix'];
        $this->paramerters = $parameters ;
    }

    /**
     * @return adLDAP The instance of the adLdap (lib)
     */
    public function getInstance(){
        $this->adLdap = new adLDAP($this->paramerters);
        return $this->adLdap ;
    }
}