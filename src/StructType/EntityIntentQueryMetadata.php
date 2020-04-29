<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EntityIntentQueryMetadata StructType
 * @subpackage Structs
 */
class EntityIntentQueryMetadata extends AbstractStructBase
{
    /**
     * The intentQuery
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var bool
     */
    public $intentQuery;
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
     * Constructor method for EntityIntentQueryMetadata
     * @uses EntityIntentQueryMetadata::setIntentQuery()
     * @uses EntityIntentQueryMetadata::setMessage()
     * @param bool $intentQuery
     * @param string $message
     */
    public function __construct($intentQuery = null, $message = null)
    {
        $this
            ->setIntentQuery($intentQuery)
            ->setMessage($message);
    }
    /**
     * Get intentQuery value
     * @return bool
     */
    public function getIntentQuery()
    {
        return $this->intentQuery;
    }
    /**
     * Set intentQuery value
     * @param bool $intentQuery
     * @return \SFPartnerApi\v480\StructType\EntityIntentQueryMetadata
     */
    public function setIntentQuery($intentQuery = null)
    {
        // validation for constraint: boolean
        if (!is_null($intentQuery) && !is_bool($intentQuery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($intentQuery, true), gettype($intentQuery)), __LINE__);
        }
        $this->intentQuery = $intentQuery;
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
     * @return \SFPartnerApi\v480\StructType\EntityIntentQueryMetadata
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
     * @return \SFPartnerApi\v480\StructType\EntityIntentQueryMetadata
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
