<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for describeAvailableQuickActions StructType
 * @subpackage Structs
 */
class DescribeAvailableQuickActions extends AbstractStructBase
{
    /**
     * The contextType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $contextType;
    /**
     * Constructor method for describeAvailableQuickActions
     * @uses DescribeAvailableQuickActions::setContextType()
     * @param string $contextType
     */
    public function __construct($contextType = null)
    {
        $this
            ->setContextType($contextType);
    }
    /**
     * Get contextType value
     * @return string|null
     */
    public function getContextType()
    {
        return $this->contextType;
    }
    /**
     * Set contextType value
     * @param string $contextType
     * @return \SFPartnerApi\v480\StructType\DescribeAvailableQuickActions
     */
    public function setContextType($contextType = null)
    {
        // validation for constraint: string
        if (!is_null($contextType) && !is_string($contextType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contextType, true), gettype($contextType)), __LINE__);
        }
        $this->contextType = $contextType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeAvailableQuickActions
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
