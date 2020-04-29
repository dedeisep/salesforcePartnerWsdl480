<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AllowFieldTruncationHeader StructType
 * @subpackage Structs
 */
class AllowFieldTruncationHeader extends AbstractStructBase
{
    /**
     * The allowFieldTruncation
     * @var bool
     */
    public $allowFieldTruncation;
    /**
     * Constructor method for AllowFieldTruncationHeader
     * @uses AllowFieldTruncationHeader::setAllowFieldTruncation()
     * @param bool $allowFieldTruncation
     */
    public function __construct($allowFieldTruncation = null)
    {
        $this
            ->setAllowFieldTruncation($allowFieldTruncation);
    }
    /**
     * Get allowFieldTruncation value
     * @return bool|null
     */
    public function getAllowFieldTruncation()
    {
        return $this->allowFieldTruncation;
    }
    /**
     * Set allowFieldTruncation value
     * @param bool $allowFieldTruncation
     * @return \SFPartnerApi\v480\StructType\AllowFieldTruncationHeader
     */
    public function setAllowFieldTruncation($allowFieldTruncation = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowFieldTruncation) && !is_bool($allowFieldTruncation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowFieldTruncation, true), gettype($allowFieldTruncation)), __LINE__);
        }
        $this->allowFieldTruncation = $allowFieldTruncation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\AllowFieldTruncationHeader
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
