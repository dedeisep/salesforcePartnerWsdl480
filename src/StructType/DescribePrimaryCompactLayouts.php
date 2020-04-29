<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for describePrimaryCompactLayouts StructType
 * @subpackage Structs
 */
class DescribePrimaryCompactLayouts extends AbstractStructBase
{
    /**
     * The sObjectTypes
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    public $sObjectTypes;
    /**
     * Constructor method for describePrimaryCompactLayouts
     * @uses DescribePrimaryCompactLayouts::setSObjectTypes()
     * @param string[] $sObjectTypes
     */
    public function __construct(array $sObjectTypes = array())
    {
        $this
            ->setSObjectTypes($sObjectTypes);
    }
    /**
     * Get sObjectTypes value
     * @return string[]
     */
    public function getSObjectTypes()
    {
        return $this->sObjectTypes;
    }
    /**
     * This method is responsible for validating the values passed to the setSObjectTypes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSObjectTypes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSObjectTypesForArrayConstraintsFromSetSObjectTypes(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describePrimaryCompactLayoutsSObjectTypesItem) {
            // validation for constraint: itemType
            if (!is_string($describePrimaryCompactLayoutsSObjectTypesItem)) {
                $invalidValues[] = is_object($describePrimaryCompactLayoutsSObjectTypesItem) ? get_class($describePrimaryCompactLayoutsSObjectTypesItem) : sprintf('%s(%s)', gettype($describePrimaryCompactLayoutsSObjectTypesItem), var_export($describePrimaryCompactLayoutsSObjectTypesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The sObjectTypes property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set sObjectTypes value
     * @throws \InvalidArgumentException
     * @param string[] $sObjectTypes
     * @return \SFPartnerApi\v480\StructType\DescribePrimaryCompactLayouts
     */
    public function setSObjectTypes(array $sObjectTypes = array())
    {
        // validation for constraint: array
        if ('' !== ($sObjectTypesArrayErrorMessage = self::validateSObjectTypesForArrayConstraintsFromSetSObjectTypes($sObjectTypes))) {
            throw new \InvalidArgumentException($sObjectTypesArrayErrorMessage, __LINE__);
        }
        $this->sObjectTypes = $sObjectTypes;
        return $this;
    }
    /**
     * Add item to sObjectTypes value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\DescribePrimaryCompactLayouts
     */
    public function addToSObjectTypes($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The sObjectTypes property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->sObjectTypes[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribePrimaryCompactLayouts
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
