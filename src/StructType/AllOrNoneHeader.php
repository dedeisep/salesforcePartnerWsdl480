<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AllOrNoneHeader StructType
 * @subpackage Structs
 */
class AllOrNoneHeader extends AbstractStructBase
{
    /**
     * The allOrNone
     * @var bool
     */
    public $allOrNone;
    /**
     * Constructor method for AllOrNoneHeader
     * @uses AllOrNoneHeader::setAllOrNone()
     * @param bool $allOrNone
     */
    public function __construct($allOrNone = null)
    {
        $this
            ->setAllOrNone($allOrNone);
    }
    /**
     * Get allOrNone value
     * @return bool|null
     */
    public function getAllOrNone()
    {
        return $this->allOrNone;
    }
    /**
     * Set allOrNone value
     * @param bool $allOrNone
     * @return \SFPartnerApi\v480\StructType\AllOrNoneHeader
     */
    public function setAllOrNone($allOrNone = null)
    {
        // validation for constraint: boolean
        if (!is_null($allOrNone) && !is_bool($allOrNone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allOrNone, true), gettype($allOrNone)), __LINE__);
        }
        $this->allOrNone = $allOrNone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\AllOrNoneHeader
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
