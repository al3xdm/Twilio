<?php

namespace Twilio\Options\Factory;

use Twilio\Options\ModuleOptions;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class ModuleOptionsFactory
 *
 * @package Twilio\Options\Factory
 */
class ModuleOptionsFactory implements FactoryInterface
{
    /**
     * @param  ServiceLocatorInterface $serviceLocator
     * @return ModuleOptions
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config  = $serviceLocator->get('Config');

        $data = isset($config['twilio']) ? $config['twilio'] : array();

        $options = new ModuleOptions($data);

        return $options;
    }
}
