<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeSoftphoneLayoutItem StructType
 * @subpackage Structs
 */
class DescribeSoftphoneLayoutItem extends AbstractStructBase
{
    /**
     * The itemApiName
     * @var string
     */
    public $itemApiName;
    /**
     * Constructor method for DescribeSoftphoneLayoutItem
     * @uses DescribeSoftphoneLayoutItem::setItemApiName()
     * @param string $itemApiName
     */
    public function __construct($itemApiName = null)
    {
        $this
            ->setItemApiName($itemApiName);
    }
    /**
     * Get itemApiName value
     * @return string|null
     */
    public function getItemApiName()
    {
        return $this->itemApiName;
    }
    /**
     * Set itemApiName value
     * @param string $itemApiName
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutItem
     */
    public function setItemApiName($itemApiName = null)
    {
        // validation for constraint: string
        if (!is_null($itemApiName) && !is_string($itemApiName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemApiName, true), gettype($itemApiName)), __LINE__);
        }
        $this->itemApiName = $itemApiName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutItem
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
