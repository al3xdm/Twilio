<?php

namespace Twilio\Service\Factory;

use Services_Twilio;
use Twilio\Options\ModuleOptions;
use Zend\ServiceManager\Exception\InvalidArgumentException;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\ServiceManager;

/**
 * Class TwilioServiceFactory
 *
 * @package Twilio\Service\Factory
 */
class TwilioServiceFactory implements FactoryInterface
{
    /**
     * Generates the Item controller
     *
     * @param  ServiceLocatorInterface $serviceLocator
     * @return Services_Twilio
     */
    public function createService(ServiceLocatorInterface $serviceManager)
    {
        /**
         * @var ServiceManager $serviceManager
         * @var ModuleOptions $options
         */
        $options = $serviceManager->get('Twilio\Options\ModuleOptions');

        if ($options->getSid() === '') {
            throw new InvalidArgumentException('No Twilio SID configured');
        }

        if ($options->getToken() === '') {
            throw new InvalidArgumentException('No Twilio Token configured');
        }

        $service = new Services_Twilio(
            $options->getSid(),
            $options->getToken()
        );

        return $service;
    }
}
