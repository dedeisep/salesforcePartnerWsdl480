<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FilteredLookupInfo StructType
 * @subpackage Structs
 */
class FilteredLookupInfo extends AbstractStructBase
{
    /**
     * The controllingFields
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $controllingFields;
    /**
     * The dependent
     * @var bool
     */
    public $dependent;
    /**
     * The optionalFilter
     * @var bool
     */
    public $optionalFilter;
    /**
     * Constructor method for FilteredLookupInfo
     * @uses FilteredLookupInfo::setControllingFields()
     * @uses FilteredLookupInfo::setDependent()
     * @uses FilteredLookupInfo::setOptionalFilter()
     * @param string[] $controllingFields
     * @param bool $dependent
     * @param bool $optionalFilter
     */
    public function __construct(array $controllingFields = array(), $dependent = null, $optionalFilter = null)
    {
        $this
            ->setControllingFields($controllingFields)
            ->setDependent($dependent)
            ->setOptionalFilter($optionalFilter);
    }
    /**
     * Get controllingFields value
     * @return string[]|null
     */
    public function getControllingFields()
    {
        return $this->controllingFields;
    }
    /**
     * This method is responsible for validating the values passed to the setControllingFields method
     * This method is willingly generated in order to preserve the one-line inline validation within the setControllingFields method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateControllingFieldsForArrayConstraintsFromSetControllingFields(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $filteredLookupInfoControllingFieldsItem) {
            // validation for constraint: itemType
            if (!is_string($filteredLookupInfoControllingFieldsItem)) {
                $invalidValues[] = is_object($filteredLookupInfoControllingFieldsItem) ? get_class($filteredLookupInfoControllingFieldsItem) : sprintf('%s(%s)', gettype($filteredLookupInfoControllingFieldsItem), var_export($filteredLookupInfoControllingFieldsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The controllingFields property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set controllingFields value
     * @throws \InvalidArgumentException
     * @param string[] $controllingFields
     * @return \SFPartnerApi\v480\StructType\FilteredLookupInfo
     */
    public function setControllingFields(array $controllingFields = array())
    {
        // validation for constraint: array
        if ('' !== ($controllingFieldsArrayErrorMessage = self::validateControllingFieldsForArrayConstraintsFromSetControllingFields($controllingFields))) {
            throw new \InvalidArgumentException($controllingFieldsArrayErrorMessage, __LINE__);
        }
        $this->controllingFields = $controllingFields;
        return $this;
    }
    /**
     * Add item to controllingFields value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\FilteredLookupInfo
     */
    public function addToControllingFields($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The controllingFields property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->controllingFields[] = $item;
        return $this;
    }
    /**
     * Get dependent value
     * @return bool|null
     */
    public function getDependent()
    {
        return $this->dependent;
    }
    /**
     * Set dependent value
     * @param bool $dependent
     * @return \SFPartnerApi\v480\StructType\FilteredLookupInfo
     */
    public function setDependent($dependent = null)
    {
        // validation for constraint: boolean
        if (!is_null($dependent) && !is_bool($dependent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dependent, true), gettype($dependent)), __LINE__);
        }
        $this->dependent = $dependent;
        return $this;
    }
    /**
     * Get optionalFilter value
     * @return bool|null
     */
    public function getOptionalFilter()
    {
        return $this->optionalFilter;
    }
    /**
     * Set optionalFilter value
     * @param bool $optionalFilter
     * @return \SFPartnerApi\v480\StructType\FilteredLookupInfo
     */
    public function setOptionalFilter($optionalFilter = null)
    {
        // validation for constraint: boolean
        if (!is_null($optionalFilter) && !is_bool($optionalFilter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($optionalFilter, true), gettype($optionalFilter)), __LINE__);
        }
        $this->optionalFilter = $optionalFilter;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\FilteredLookupInfo
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
