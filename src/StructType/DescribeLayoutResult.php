<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeLayoutResult StructType
 * @subpackage Structs
 */
class DescribeLayoutResult extends AbstractStructBase
{
    /**
     * The layouts
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \SFPartnerApi\v480\StructType\DescribeLayout[]
     */
    public $layouts;
    /**
     * The recordTypeMappings
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\RecordTypeMapping[]
     */
    public $recordTypeMappings;
    /**
     * The recordTypeSelectorRequired
     * @var bool
     */
    public $recordTypeSelectorRequired;
    /**
     * Constructor method for DescribeLayoutResult
     * @uses DescribeLayoutResult::setLayouts()
     * @uses DescribeLayoutResult::setRecordTypeMappings()
     * @uses DescribeLayoutResult::setRecordTypeSelectorRequired()
     * @param \SFPartnerApi\v480\StructType\DescribeLayout[] $layouts
     * @param \SFPartnerApi\v480\StructType\RecordTypeMapping[] $recordTypeMappings
     * @param bool $recordTypeSelectorRequired
     */
    public function __construct(array $layouts = array(), array $recordTypeMappings = array(), $recordTypeSelectorRequired = null)
    {
        $this
            ->setLayouts($layouts)
            ->setRecordTypeMappings($recordTypeMappings)
            ->setRecordTypeSelectorRequired($recordTypeSelectorRequired);
    }
    /**
     * Get layouts value
     * @return \SFPartnerApi\v480\StructType\DescribeLayout[]
     */
    public function getLayouts()
    {
        return $this->layouts;
    }
    /**
     * This method is responsible for validating the values passed to the setLayouts method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLayouts method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLayoutsForArrayConstraintsFromSetLayouts(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeLayoutResultLayoutsItem) {
            // validation for constraint: itemType
            if (!$describeLayoutResultLayoutsItem instanceof \SFPartnerApi\v480\StructType\DescribeLayout) {
                $invalidValues[] = is_object($describeLayoutResultLayoutsItem) ? get_class($describeLayoutResultLayoutsItem) : sprintf('%s(%s)', gettype($describeLayoutResultLayoutsItem), var_export($describeLayoutResultLayoutsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The layouts property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayout, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set layouts value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayout[] $layouts
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutResult
     */
    public function setLayouts(array $layouts = array())
    {
        // validation for constraint: array
        if ('' !== ($layoutsArrayErrorMessage = self::validateLayoutsForArrayConstraintsFromSetLayouts($layouts))) {
            throw new \InvalidArgumentException($layoutsArrayErrorMessage, __LINE__);
        }
        $this->layouts = $layouts;
        return $this;
    }
    /**
     * Add item to layouts value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayout $item
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutResult
     */
    public function addToLayouts(\SFPartnerApi\v480\StructType\DescribeLayout $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeLayout) {
            throw new \InvalidArgumentException(sprintf('The layouts property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayout, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->layouts[] = $item;
        return $this;
    }
    /**
     * Get recordTypeMappings value
     * @return \SFPartnerApi\v480\StructType\RecordTypeMapping[]|null
     */
    public function getRecordTypeMappings()
    {
        return $this->recordTypeMappings;
    }
    /**
     * This method is responsible for validating the values passed to the setRecordTypeMappings method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecordTypeMappings method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecordTypeMappingsForArrayConstraintsFromSetRecordTypeMappings(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeLayoutResultRecordTypeMappingsItem) {
            // validation for constraint: itemType
            if (!$describeLayoutResultRecordTypeMappingsItem instanceof \SFPartnerApi\v480\StructType\RecordTypeMapping) {
                $invalidValues[] = is_object($describeLayoutResultRecordTypeMappingsItem) ? get_class($describeLayoutResultRecordTypeMappingsItem) : sprintf('%s(%s)', gettype($describeLayoutResultRecordTypeMappingsItem), var_export($describeLayoutResultRecordTypeMappingsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recordTypeMappings property can only contain items of type \SFPartnerApi\v480\StructType\RecordTypeMapping, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set recordTypeMappings value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\RecordTypeMapping[] $recordTypeMappings
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutResult
     */
    public function setRecordTypeMappings(array $recordTypeMappings = array())
    {
        // validation for constraint: array
        if ('' !== ($recordTypeMappingsArrayErrorMessage = self::validateRecordTypeMappingsForArrayConstraintsFromSetRecordTypeMappings($recordTypeMappings))) {
            throw new \InvalidArgumentException($recordTypeMappingsArrayErrorMessage, __LINE__);
        }
        $this->recordTypeMappings = $recordTypeMappings;
        return $this;
    }
    /**
     * Add item to recordTypeMappings value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\RecordTypeMapping $item
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutResult
     */
    public function addToRecordTypeMappings(\SFPartnerApi\v480\StructType\RecordTypeMapping $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\RecordTypeMapping) {
            throw new \InvalidArgumentException(sprintf('The recordTypeMappings property can only contain items of type \SFPartnerApi\v480\StructType\RecordTypeMapping, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recordTypeMappings[] = $item;
        return $this;
    }
    /**
     * Get recordTypeSelectorRequired value
     * @return bool|null
     */
    public function getRecordTypeSelectorRequired()
    {
        return $this->recordTypeSelectorRequired;
    }
    /**
     * Set recordTypeSelectorRequired value
     * @param bool $recordTypeSelectorRequired
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutResult
     */
    public function setRecordTypeSelectorRequired($recordTypeSelectorRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($recordTypeSelectorRequired) && !is_bool($recordTypeSelectorRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($recordTypeSelectorRequired, true), gettype($recordTypeSelectorRequired)), __LINE__);
        }
        $this->recordTypeSelectorRequired = $recordTypeSelectorRequired;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutResult
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
