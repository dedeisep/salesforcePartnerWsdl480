<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for describeSearchScopeOrder StructType
 * @subpackage Structs
 */
class DescribeSearchScopeOrder extends AbstractStructBase
{
    /**
     * The includeRealTimeEntities
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $includeRealTimeEntities;
    /**
     * Constructor method for describeSearchScopeOrder
     * @uses DescribeSearchScopeOrder::setIncludeRealTimeEntities()
     * @param bool $includeRealTimeEntities
     */
    public function __construct($includeRealTimeEntities = null)
    {
        $this
            ->setIncludeRealTimeEntities($includeRealTimeEntities);
    }
    /**
     * Get includeRealTimeEntities value
     * @return bool|null
     */
    public function getIncludeRealTimeEntities()
    {
        return $this->includeRealTimeEntities;
    }
    /**
     * Set includeRealTimeEntities value
     * @param bool $includeRealTimeEntities
     * @return \SFPartnerApi\v480\StructType\DescribeSearchScopeOrder
     */
    public function setIncludeRealTimeEntities($includeRealTimeEntities = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeRealTimeEntities) && !is_bool($includeRealTimeEntities)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeRealTimeEntities, true), gettype($includeRealTimeEntities)), __LINE__);
        }
        $this->includeRealTimeEntities = $includeRealTimeEntities;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeSearchScopeOrder
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
