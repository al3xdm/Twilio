<?php

return array(
    'service_manager' => array(
        'factories' => array(
            'Twilio\Options\ModuleOptions' => 'Twilio\Options\Factory\ModuleOptionsFactory',
            'Twilio\Service\TwilioService' => 'Twilio\Service\Factory\TwilioServiceFactory'
        )
    )
);
