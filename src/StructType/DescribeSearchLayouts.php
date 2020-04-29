<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for describeSearchLayouts StructType
 * @subpackage Structs
 */
class DescribeSearchLayouts extends AbstractStructBase
{
    /**
     * The sObjectType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $sObjectType;
    /**
     * Constructor method for describeSearchLayouts
     * @uses DescribeSearchLayouts::setSObjectType()
     * @param string[] $sObjectType
     */
    public function __construct(array $sObjectType = array())
    {
        $this
            ->setSObjectType($sObjectType);
    }
    /**
     * Get sObjectType value
     * @return string[]|null
     */
    public function getSObjectType()
    {
        return $this->sObjectType;
    }
    /**
     * This method is responsible for validating the values passed to the setSObjectType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSObjectType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSObjectTypeForArrayConstraintsFromSetSObjectType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeSearchLayoutsSObjectTypeItem) {
            // validation for constraint: itemType
            if (!is_string($describeSearchLayoutsSObjectTypeItem)) {
                $invalidValues[] = is_object($describeSearchLayoutsSObjectTypeItem) ? get_class($describeSearchLayoutsSObjectTypeItem) : sprintf('%s(%s)', gettype($describeSearchLayoutsSObjectTypeItem), var_export($describeSearchLayoutsSObjectTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The sObjectType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set sObjectType value
     * @throws \InvalidArgumentException
     * @param string[] $sObjectType
     * @return \SFPartnerApi\v480\StructType\DescribeSearchLayouts
     */
    public function setSObjectType(array $sObjectType = array())
    {
        // validation for constraint: array
        if ('' !== ($sObjectTypeArrayErrorMessage = self::validateSObjectTypeForArrayConstraintsFromSetSObjectType($sObjectType))) {
            throw new \InvalidArgumentException($sObjectTypeArrayErrorMessage, __LINE__);
        }
        $this->sObjectType = $sObjectType;
        return $this;
    }
    /**
     * Add item to sObjectType value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\DescribeSearchLayouts
     */
    public function addToSObjectType($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The sObjectType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->sObjectType[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeSearchLayouts
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
