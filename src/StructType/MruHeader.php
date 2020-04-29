<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MruHeader StructType
 * @subpackage Structs
 */
class MruHeader extends AbstractStructBase
{
    /**
     * The updateMru
     * @var bool
     */
    public $updateMru;
    /**
     * Constructor method for MruHeader
     * @uses MruHeader::setUpdateMru()
     * @param bool $updateMru
     */
    public function __construct($updateMru = null)
    {
        $this
            ->setUpdateMru($updateMru);
    }
    /**
     * Get updateMru value
     * @return bool|null
     */
    public function getUpdateMru()
    {
        return $this->updateMru;
    }
    /**
     * Set updateMru value
     * @param bool $updateMru
     * @return \SFPartnerApi\v480\StructType\MruHeader
     */
    public function setUpdateMru($updateMru = null)
    {
        // validation for constraint: boolean
        if (!is_null($updateMru) && !is_bool($updateMru)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($updateMru, true), gettype($updateMru)), __LINE__);
        }
        $this->updateMru = $updateMru;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\MruHeader
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
