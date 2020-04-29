<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for describeSObjects StructType
 * @subpackage Structs
 */
class DescribeSObjects extends AbstractStructBase
{
    /**
     * The sObjectType
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var string[]
     */
    public $sObjectType;
    /**
     * Constructor method for describeSObjects
     * @uses DescribeSObjects::setSObjectType()
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
        foreach ($values as $describeSObjectsSObjectTypeItem) {
            // validation for constraint: itemType
            if (!is_string($describeSObjectsSObjectTypeItem)) {
                $invalidValues[] = is_object($describeSObjectsSObjectTypeItem) ? get_class($describeSObjectsSObjectTypeItem) : sprintf('%s(%s)', gettype($describeSObjectsSObjectTypeItem), var_export($describeSObjectsSObjectTypeItem, true));
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
     * @return \SFPartnerApi\v480\StructType\DescribeSObjects
     */
    public function setSObjectType(array $sObjectType = array())
    {
        // validation for constraint: array
        if ('' !== ($sObjectTypeArrayErrorMessage = self::validateSObjectTypeForArrayConstraintsFromSetSObjectType($sObjectType))) {
            throw new \InvalidArgumentException($sObjectTypeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($sObjectType) && count($sObjectType) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($sObjectType)), __LINE__);
        }
        $this->sObjectType = $sObjectType;
        return $this;
    }
    /**
     * Add item to sObjectType value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\DescribeSObjects
     */
    public function addToSObjectType($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The sObjectType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->sObjectType) && count($this->sObjectType) >= 100) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->sObjectType)), __LINE__);
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
     * @return \SFPartnerApi\v480\StructType\DescribeSObjects
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
