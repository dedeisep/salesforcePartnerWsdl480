<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SessionHeader StructType
 * @subpackage Structs
 */
class SessionHeader extends AbstractStructBase
{
    /**
     * The sessionId
     * @var string
     */
    public $sessionId;
    /**
     * Constructor method for SessionHeader
     * @uses SessionHeader::setSessionId()
     * @param string $sessionId
     */
    public function __construct($sessionId = null)
    {
        $this
            ->setSessionId($sessionId);
    }
    /**
     * Get sessionId value
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param string $sessionId
     * @return \SFPartnerApi\v480\StructType\SessionHeader
     */
    public function setSessionId($sessionId = null)
    {
        // validation for constraint: string
        if (!is_null($sessionId) && !is_string($sessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sessionId, true), gettype($sessionId)), __LINE__);
        }
        $this->sessionId = $sessionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\SessionHeader
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
