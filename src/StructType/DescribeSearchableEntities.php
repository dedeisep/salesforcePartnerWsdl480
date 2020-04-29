<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for describeSearchableEntities StructType
 * @subpackage Structs
 */
class DescribeSearchableEntities extends AbstractStructBase
{
    /**
     * The includeOnlyEntitiesWithTabs
     * @var bool
     */
    public $includeOnlyEntitiesWithTabs;
    /**
     * Constructor method for describeSearchableEntities
     * @uses DescribeSearchableEntities::setIncludeOnlyEntitiesWithTabs()
     * @param bool $includeOnlyEntitiesWithTabs
     */
    public function __construct($includeOnlyEntitiesWithTabs = null)
    {
        $this
            ->setIncludeOnlyEntitiesWithTabs($includeOnlyEntitiesWithTabs);
    }
    /**
     * Get includeOnlyEntitiesWithTabs value
     * @return bool|null
     */
    public function getIncludeOnlyEntitiesWithTabs()
    {
        return $this->includeOnlyEntitiesWithTabs;
    }
    /**
     * Set includeOnlyEntitiesWithTabs value
     * @param bool $includeOnlyEntitiesWithTabs
     * @return \SFPartnerApi\v480\StructType\DescribeSearchableEntities
     */
    public function setIncludeOnlyEntitiesWithTabs($includeOnlyEntitiesWithTabs = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeOnlyEntitiesWithTabs) && !is_bool($includeOnlyEntitiesWithTabs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeOnlyEntitiesWithTabs, true), gettype($includeOnlyEntitiesWithTabs)), __LINE__);
        }
        $this->includeOnlyEntitiesWithTabs = $includeOnlyEntitiesWithTabs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeSearchableEntities
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
