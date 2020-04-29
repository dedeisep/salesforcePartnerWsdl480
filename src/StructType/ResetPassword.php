<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resetPassword StructType
 * @subpackage Structs
 */
class ResetPassword extends AbstractStructBase
{
    /**
     * The userId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $userId;
    /**
     * Constructor method for resetPassword
     * @uses ResetPassword::setUserId()
     * @param string $userId
     */
    public function __construct($userId = null)
    {
        $this
            ->setUserId($userId);
    }
    /**
     * Get userId value
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param string $userId
     * @return \SFPartnerApi\v480\StructType\ResetPassword
     */
    public function setUserId($userId = null)
    {
        // validation for constraint: string
        if (!is_null($userId) && !is_string($userId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($userId) && mb_strlen($userId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($userId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($userId) && !preg_match('/[a-zA-Z0-9]{18}/', $userId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($userId, true)), __LINE__);
        }
        $this->userId = $userId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\ResetPassword
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
