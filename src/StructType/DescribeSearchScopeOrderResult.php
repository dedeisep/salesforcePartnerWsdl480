<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeSearchScopeOrderResult StructType
 * @subpackage Structs
 */
class DescribeSearchScopeOrderResult extends AbstractStructBase
{
    /**
     * The keyPrefix
     * @var string
     */
    public $keyPrefix;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * Constructor method for DescribeSearchScopeOrderResult
     * @uses DescribeSearchScopeOrderResult::setKeyPrefix()
     * @uses DescribeSearchScopeOrderResult::setName()
     * @param string $keyPrefix
     * @param string $name
     */
    public function __construct($keyPrefix = null, $name = null)
    {
        $this
            ->setKeyPrefix($keyPrefix)
            ->setName($name);
    }
    /**
     * Get keyPrefix value
     * @return string|null
     */
    public function getKeyPrefix()
    {
        return $this->keyPrefix;
    }
    /**
     * Set keyPrefix value
     * @param string $keyPrefix
     * @return \SFPartnerApi\v480\StructType\DescribeSearchScopeOrderResult
     */
    public function setKeyPrefix($keyPrefix = null)
    {
        // validation for constraint: string
        if (!is_null($keyPrefix) && !is_string($keyPrefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($keyPrefix, true), gettype($keyPrefix)), __LINE__);
        }
        $this->keyPrefix = $keyPrefix;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \SFPartnerApi\v480\StructType\DescribeSearchScopeOrderResult
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeSearchScopeOrderResult
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
