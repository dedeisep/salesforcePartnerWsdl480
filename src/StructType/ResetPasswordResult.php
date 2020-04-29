<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResetPasswordResult StructType
 * @subpackage Structs
 */
class ResetPasswordResult extends AbstractStructBase
{
    /**
     * The password
     * @var string
     */
    public $password;
    /**
     * Constructor method for ResetPasswordResult
     * @uses ResetPasswordResult::setPassword()
     * @param string $password
     */
    public function __construct($password = null)
    {
        $this
            ->setPassword($password);
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \SFPartnerApi\v480\StructType\ResetPasswordResult
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\ResetPasswordResult
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
