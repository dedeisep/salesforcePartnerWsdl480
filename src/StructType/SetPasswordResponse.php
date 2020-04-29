<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setPasswordResponse StructType
 * @subpackage Structs
 */
class SetPasswordResponse extends AbstractStructBase
{
    /**
     * The result
     * @var \SFPartnerApi\v480\StructType\SetPasswordResult
     */
    public $result;
    /**
     * Constructor method for setPasswordResponse
     * @uses SetPasswordResponse::setResult()
     * @param \SFPartnerApi\v480\StructType\SetPasswordResult $result
     */
    public function __construct(\SFPartnerApi\v480\StructType\SetPasswordResult $result = null)
    {
        $this
            ->setResult($result);
    }
    /**
     * Get result value
     * @return \SFPartnerApi\v480\StructType\SetPasswordResult|null
     */
    public function getResult()
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param \SFPartnerApi\v480\StructType\SetPasswordResult $result
     * @return \SFPartnerApi\v480\StructType\SetPasswordResponse
     */
    public function setResult(\SFPartnerApi\v480\StructType\SetPasswordResult $result = null)
    {
        $this->result = $result;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\SetPasswordResponse
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
