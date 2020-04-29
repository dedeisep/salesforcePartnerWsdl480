<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailHeader StructType
 * @subpackage Structs
 */
class EmailHeader extends AbstractStructBase
{
    /**
     * The triggerAutoResponseEmail
     * @var bool
     */
    public $triggerAutoResponseEmail;
    /**
     * The triggerOtherEmail
     * @var bool
     */
    public $triggerOtherEmail;
    /**
     * The triggerUserEmail
     * @var bool
     */
    public $triggerUserEmail;
    /**
     * Constructor method for EmailHeader
     * @uses EmailHeader::setTriggerAutoResponseEmail()
     * @uses EmailHeader::setTriggerOtherEmail()
     * @uses EmailHeader::setTriggerUserEmail()
     * @param bool $triggerAutoResponseEmail
     * @param bool $triggerOtherEmail
     * @param bool $triggerUserEmail
     */
    public function __construct($triggerAutoResponseEmail = null, $triggerOtherEmail = null, $triggerUserEmail = null)
    {
        $this
            ->setTriggerAutoResponseEmail($triggerAutoResponseEmail)
            ->setTriggerOtherEmail($triggerOtherEmail)
            ->setTriggerUserEmail($triggerUserEmail);
    }
    /**
     * Get triggerAutoResponseEmail value
     * @return bool|null
     */
    public function getTriggerAutoResponseEmail()
    {
        return $this->triggerAutoResponseEmail;
    }
    /**
     * Set triggerAutoResponseEmail value
     * @param bool $triggerAutoResponseEmail
     * @return \SFPartnerApi\v480\StructType\EmailHeader
     */
    public function setTriggerAutoResponseEmail($triggerAutoResponseEmail = null)
    {
        // validation for constraint: boolean
        if (!is_null($triggerAutoResponseEmail) && !is_bool($triggerAutoResponseEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($triggerAutoResponseEmail, true), gettype($triggerAutoResponseEmail)), __LINE__);
        }
        $this->triggerAutoResponseEmail = $triggerAutoResponseEmail;
        return $this;
    }
    /**
     * Get triggerOtherEmail value
     * @return bool|null
     */
    public function getTriggerOtherEmail()
    {
        return $this->triggerOtherEmail;
    }
    /**
     * Set triggerOtherEmail value
     * @param bool $triggerOtherEmail
     * @return \SFPartnerApi\v480\StructType\EmailHeader
     */
    public function setTriggerOtherEmail($triggerOtherEmail = null)
    {
        // validation for constraint: boolean
        if (!is_null($triggerOtherEmail) && !is_bool($triggerOtherEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($triggerOtherEmail, true), gettype($triggerOtherEmail)), __LINE__);
        }
        $this->triggerOtherEmail = $triggerOtherEmail;
        return $this;
    }
    /**
     * Get triggerUserEmail value
     * @return bool|null
     */
    public function getTriggerUserEmail()
    {
        return $this->triggerUserEmail;
    }
    /**
     * Set triggerUserEmail value
     * @param bool $triggerUserEmail
     * @return \SFPartnerApi\v480\StructType\EmailHeader
     */
    public function setTriggerUserEmail($triggerUserEmail = null)
    {
        // validation for constraint: boolean
        if (!is_null($triggerUserEmail) && !is_bool($triggerUserEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($triggerUserEmail, true), gettype($triggerUserEmail)), __LINE__);
        }
        $this->triggerUserEmail = $triggerUserEmail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\EmailHeader
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
