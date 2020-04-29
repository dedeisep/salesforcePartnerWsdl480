<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FieldLayoutComponent StructType
 * @subpackage Structs
 */
class FieldLayoutComponent extends DescribeLayoutComponent
{
    /**
     * The components
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeLayoutComponent[]
     */
    public $components;
    /**
     * The fieldType
     * @var string
     */
    public $fieldType;
    /**
     * Constructor method for FieldLayoutComponent
     * @uses FieldLayoutComponent::setComponents()
     * @uses FieldLayoutComponent::setFieldType()
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutComponent[] $components
     * @param string $fieldType
     */
    public function __construct(array $components = array(), $fieldType = null)
    {
        $this
            ->setComponents($components)
            ->setFieldType($fieldType);
    }
    /**
     * Get components value
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutComponent[]|null
     */
    public function getComponents()
    {
        return $this->components;
    }
    /**
     * This method is responsible for validating the values passed to the setComponents method
     * This method is willingly generated in order to preserve the one-line inline validation within the setComponents method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateComponentsForArrayConstraintsFromSetComponents(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $fieldLayoutComponentComponentsItem) {
            // validation for constraint: itemType
            if (!$fieldLayoutComponentComponentsItem instanceof \SFPartnerApi\v480\StructType\DescribeLayoutComponent) {
                $invalidValues[] = is_object($fieldLayoutComponentComponentsItem) ? get_class($fieldLayoutComponentComponentsItem) : sprintf('%s(%s)', gettype($fieldLayoutComponentComponentsItem), var_export($fieldLayoutComponentComponentsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The components property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutComponent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set components value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutComponent[] $components
     * @return \SFPartnerApi\v480\StructType\FieldLayoutComponent
     */
    public function setComponents(array $components = array())
    {
        // validation for constraint: array
        if ('' !== ($componentsArrayErrorMessage = self::validateComponentsForArrayConstraintsFromSetComponents($components))) {
            throw new \InvalidArgumentException($componentsArrayErrorMessage, __LINE__);
        }
        $this->components = $components;
        return $this;
    }
    /**
     * Add item to components value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutComponent $item
     * @return \SFPartnerApi\v480\StructType\FieldLayoutComponent
     */
    public function addToComponents(\SFPartnerApi\v480\StructType\DescribeLayoutComponent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeLayoutComponent) {
            throw new \InvalidArgumentException(sprintf('The components property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutComponent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->components[] = $item;
        return $this;
    }
    /**
     * Get fieldType value
     * @return string|null
     */
    public function getFieldType()
    {
        return $this->fieldType;
    }
    /**
     * Set fieldType value
     * @uses \SFPartnerApi\v480\EnumType\FieldType::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\FieldType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fieldType
     * @return \SFPartnerApi\v480\StructType\FieldLayoutComponent
     */
    public function setFieldType($fieldType = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\FieldType::valueIsValid($fieldType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\FieldType', is_array($fieldType) ? implode(', ', $fieldType) : var_export($fieldType, true), implode(', ', \SFPartnerApi\v480\EnumType\FieldType::getValidValues())), __LINE__);
        }
        $this->fieldType = $fieldType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\FieldLayoutComponent
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
