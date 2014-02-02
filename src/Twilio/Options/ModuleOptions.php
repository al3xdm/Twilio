<?php

namespace Twilio\Options;

use Zend\Stdlib\AbstractOptions;

/**
 * Class ModuleOptions
 *
 * @package Twilio\Options
 */
class ModuleOptions extends AbstractOptions
{
    /**
     * @var string
     */
    protected $sid = '';

    /**
     * @var string
     */
    protected $token = '';

    /**
     * @return string
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * @param string $sid
     */
    public function setSid($sid = '')
    {
        $this->sid = $sid;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken($token = '')
    {
        $this->token = $token;
    }

}
