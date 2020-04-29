<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PicklistForRecordType StructType
 * @subpackage Structs
 */
class PicklistForRecordType extends AbstractStructBase
{
    /**
     * The picklistName
     * @var string
     */
    public $picklistName;
    /**
     * The picklistValues
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\PicklistEntry[]
     */
    public $picklistValues;
    /**
     * Constructor method for PicklistForRecordType
     * @uses PicklistForRecordType::setPicklistName()
     * @uses PicklistForRecordType::setPicklistValues()
     * @param string $picklistName
     * @param \SFPartnerApi\v480\StructType\PicklistEntry[] $picklistValues
     */
    public function __construct($picklistName = null, array $picklistValues = array())
    {
        $this
            ->setPicklistName($picklistName)
            ->setPicklistValues($picklistValues);
    }
    /**
     * Get picklistName value
     * @return string|null
     */
    public function getPicklistName()
    {
        return $this->picklistName;
    }
    /**
     * Set picklistName value
     * @param string $picklistName
     * @return \SFPartnerApi\v480\StructType\PicklistForRecordType
     */
    public function setPicklistName($picklistName = null)
    {
        // validation for constraint: string
        if (!is_null($picklistName) && !is_string($picklistName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($picklistName, true), gettype($picklistName)), __LINE__);
        }
        $this->picklistName = $picklistName;
        return $this;
    }
    /**
     * Get picklistValues value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SFPartnerApi\v480\StructType\PicklistEntry[]|null
     */
    public function getPicklistValues()
    {
        return isset($this->picklistValues) ? $this->picklistValues : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPicklistValues method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPicklistValues method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePicklistValuesForArrayConstraintsFromSetPicklistValues(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $picklistForRecordTypePicklistValuesItem) {
            // validation for constraint: itemType
            if (!$picklistForRecordTypePicklistValuesItem instanceof \SFPartnerApi\v480\StructType\PicklistEntry) {
                $invalidValues[] = is_object($picklistForRecordTypePicklistValuesItem) ? get_class($picklistForRecordTypePicklistValuesItem) : sprintf('%s(%s)', gettype($picklistForRecordTypePicklistValuesItem), var_export($picklistForRecordTypePicklistValuesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The picklistValues property can only contain items of type \SFPartnerApi\v480\StructType\PicklistEntry, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set picklistValues value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\PicklistEntry[] $picklistValues
     * @return \SFPartnerApi\v480\StructType\PicklistForRecordType
     */
    public function setPicklistValues(array $picklistValues = array())
    {
        // validation for constraint: array
        if ('' !== ($picklistValuesArrayErrorMessage = self::validatePicklistValuesForArrayConstraintsFromSetPicklistValues($picklistValues))) {
            throw new \InvalidArgumentException($picklistValuesArrayErrorMessage, __LINE__);
        }
        if (is_null($picklistValues) || (is_array($picklistValues) && empty($picklistValues))) {
            unset($this->picklistValues);
        } else {
            $this->picklistValues = $picklistValues;
        }
        return $this;
    }
    /**
     * Add item to picklistValues value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\PicklistEntry $item
     * @return \SFPartnerApi\v480\StructType\PicklistForRecordType
     */
    public function addToPicklistValues(\SFPartnerApi\v480\StructType\PicklistEntry $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\PicklistEntry) {
            throw new \InvalidArgumentException(sprintf('The picklistValues property can only contain items of type \SFPartnerApi\v480\StructType\PicklistEntry, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->picklistValues[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\PicklistForRecordType
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
