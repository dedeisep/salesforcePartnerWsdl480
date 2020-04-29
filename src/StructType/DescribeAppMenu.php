<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for describeAppMenu StructType
 * @subpackage Structs
 */
class DescribeAppMenu extends AbstractStructBase
{
    /**
     * The appMenuType
     * @var string
     */
    public $appMenuType;
    /**
     * The networkId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $networkId;
    /**
     * Constructor method for describeAppMenu
     * @uses DescribeAppMenu::setAppMenuType()
     * @uses DescribeAppMenu::setNetworkId()
     * @param string $appMenuType
     * @param string $networkId
     */
    public function __construct($appMenuType = null, $networkId = null)
    {
        $this
            ->setAppMenuType($appMenuType)
            ->setNetworkId($networkId);
    }
    /**
     * Get appMenuType value
     * @return string|null
     */
    public function getAppMenuType()
    {
        return $this->appMenuType;
    }
    /**
     * Set appMenuType value
     * @uses \SFPartnerApi\v480\EnumType\AppMenuType::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\AppMenuType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $appMenuType
     * @return \SFPartnerApi\v480\StructType\DescribeAppMenu
     */
    public function setAppMenuType($appMenuType = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\AppMenuType::valueIsValid($appMenuType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\AppMenuType', is_array($appMenuType) ? implode(', ', $appMenuType) : var_export($appMenuType, true), implode(', ', \SFPartnerApi\v480\EnumType\AppMenuType::getValidValues())), __LINE__);
        }
        $this->appMenuType = $appMenuType;
        return $this;
    }
    /**
     * Get networkId value
     * @return string|null
     */
    public function getNetworkId()
    {
        return $this->networkId;
    }
    /**
     * Set networkId value
     * @param string $networkId
     * @return \SFPartnerApi\v480\StructType\DescribeAppMenu
     */
    public function setNetworkId($networkId = null)
    {
        // validation for constraint: string
        if (!is_null($networkId) && !is_string($networkId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($networkId, true), gettype($networkId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($networkId) && mb_strlen($networkId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($networkId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($networkId) && !preg_match('/[a-zA-Z0-9]{18}/', $networkId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($networkId, true)), __LINE__);
        }
        $this->networkId = $networkId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeAppMenu
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
