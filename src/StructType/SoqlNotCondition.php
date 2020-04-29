<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SoqlNotCondition StructType
 * @subpackage Structs
 */
class SoqlNotCondition extends SoqlWhereCondition
{
    /**
     * The condition
     * @var \SFPartnerApi\v480\StructType\SoqlWhereCondition
     */
    public $condition;
    /**
     * Constructor method for SoqlNotCondition
     * @uses SoqlNotCondition::setCondition()
     * @param \SFPartnerApi\v480\StructType\SoqlWhereCondition $condition
     */
    public function __construct(\SFPartnerApi\v480\StructType\SoqlWhereCondition $condition = null)
    {
        $this
            ->setCondition($condition);
    }
    /**
     * Get condition value
     * @return \SFPartnerApi\v480\StructType\SoqlWhereCondition|null
     */
    public function getCondition()
    {
        return $this->condition;
    }
    /**
     * Set condition value
     * @param \SFPartnerApi\v480\StructType\SoqlWhereCondition $condition
     * @return \SFPartnerApi\v480\StructType\SoqlNotCondition
     */
    public function setCondition(\SFPartnerApi\v480\StructType\SoqlWhereCondition $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\SoqlNotCondition
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
