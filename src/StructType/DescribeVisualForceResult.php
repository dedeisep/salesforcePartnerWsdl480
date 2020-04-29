<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeVisualForceResult StructType
 * @subpackage Structs
 */
class DescribeVisualForceResult extends AbstractStructBase
{
    /**
     * The domain
     * @var string
     */
    public $domain;
    /**
     * Constructor method for DescribeVisualForceResult
     * @uses DescribeVisualForceResult::setDomain()
     * @param string $domain
     */
    public function __construct($domain = null)
    {
        $this
            ->setDomain($domain);
    }
    /**
     * Get domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Set domain value
     * @param string $domain
     * @return \SFPartnerApi\v480\StructType\DescribeVisualForceResult
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeVisualForceResult
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
