<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for changeOwnPassword StructType
 * @subpackage Structs
 */
class ChangeOwnPassword extends AbstractStructBase
{
    /**
     * The oldPassword
     * @var string
     */
    public $oldPassword;
    /**
     * The newPassword
     * @var string
     */
    public $newPassword;
    /**
     * Constructor method for changeOwnPassword
     * @uses ChangeOwnPassword::setOldPassword()
     * @uses ChangeOwnPassword::setNewPassword()
     * @param string $oldPassword
     * @param string $newPassword
     */
    public function __construct($oldPassword = null, $newPassword = null)
    {
        $this
            ->setOldPassword($oldPassword)
            ->setNewPassword($newPassword);
    }
    /**
     * Get oldPassword value
     * @return string|null
     */
    public function getOldPassword()
    {
        return $this->oldPassword;
    }
    /**
     * Set oldPassword value
     * @param string $oldPassword
     * @return \SFPartnerApi\v480\StructType\ChangeOwnPassword
     */
    public function setOldPassword($oldPassword = null)
    {
        // validation for constraint: string
        if (!is_null($oldPassword) && !is_string($oldPassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldPassword, true), gettype($oldPassword)), __LINE__);
        }
        $this->oldPassword = $oldPassword;
        return $this;
    }
    /**
     * Get newPassword value
     * @return string|null
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }
    /**
     * Set newPassword value
     * @param string $newPassword
     * @return \SFPartnerApi\v480\StructType\ChangeOwnPassword
     */
    public function setNewPassword($newPassword = null)
    {
        // validation for constraint: string
        if (!is_null($newPassword) && !is_string($newPassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newPassword, true), gettype($newPassword)), __LINE__);
        }
        $this->newPassword = $newPassword;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\ChangeOwnPassword
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
