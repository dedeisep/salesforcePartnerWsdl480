<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for describeVisualForce StructType
 * @subpackage Structs
 */
class DescribeVisualForce extends AbstractStructBase
{
    /**
     * The includeAllDetails
     * @var bool
     */
    public $includeAllDetails;
    /**
     * The namespacePrefix
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $namespacePrefix;
    /**
     * Constructor method for describeVisualForce
     * @uses DescribeVisualForce::setIncludeAllDetails()
     * @uses DescribeVisualForce::setNamespacePrefix()
     * @param bool $includeAllDetails
     * @param string $namespacePrefix
     */
    public function __construct($includeAllDetails = null, $namespacePrefix = null)
    {
        $this
            ->setIncludeAllDetails($includeAllDetails)
            ->setNamespacePrefix($namespacePrefix);
    }
    /**
     * Get includeAllDetails value
     * @return bool|null
     */
    public function getIncludeAllDetails()
    {
        return $this->includeAllDetails;
    }
    /**
     * Set includeAllDetails value
     * @param bool $includeAllDetails
     * @return \SFPartnerApi\v480\StructType\DescribeVisualForce
     */
    public function setIncludeAllDetails($includeAllDetails = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeAllDetails) && !is_bool($includeAllDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeAllDetails, true), gettype($includeAllDetails)), __LINE__);
        }
        $this->includeAllDetails = $includeAllDetails;
        return $this;
    }
    /**
     * Get namespacePrefix value
     * @return string|null
     */
    public function getNamespacePrefix()
    {
        return $this->namespacePrefix;
    }
    /**
     * Set namespacePrefix value
     * @param string $namespacePrefix
     * @return \SFPartnerApi\v480\StructType\DescribeVisualForce
     */
    public function setNamespacePrefix($namespacePrefix = null)
    {
        // validation for constraint: string
        if (!is_null($namespacePrefix) && !is_string($namespacePrefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($namespacePrefix, true), gettype($namespacePrefix)), __LINE__);
        }
        $this->namespacePrefix = $namespacePrefix;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeVisualForce
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
