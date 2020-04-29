<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EntityErrorMetadata StructType
 * @subpackage Structs
 */
class EntityErrorMetadata extends AbstractStructBase
{
    /**
     * The errorCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $errorCode;
    /**
     * The message
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $message;
    /**
     * Constructor method for EntityErrorMetadata
     * @uses EntityErrorMetadata::setErrorCode()
     * @uses EntityErrorMetadata::setMessage()
     * @param string $errorCode
     * @param string $message
     */
    public function __construct($errorCode = null, $message = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setMessage($message);
    }
    /**
     * Get errorCode value
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param string $errorCode
     * @return \SFPartnerApi\v480\StructType\EntityErrorMetadata
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        return $this;
    }
    /**
     * Get message value
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \SFPartnerApi\v480\StructType\EntityErrorMetadata
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\EntityErrorMetadata
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
