<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SoqlCondition StructType
 * @subpackage Structs
 */
class SoqlCondition extends SoqlWhereCondition
{
    /**
     * The values
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    public $values;
    /**
     * The field
     * @var string
     */
    public $field;
    /**
     * The operator
     * @var string
     */
    public $operator;
    /**
     * Constructor method for SoqlCondition
     * @uses SoqlCondition::setValues()
     * @uses SoqlCondition::setField()
     * @uses SoqlCondition::setOperator()
     * @param string[] $values
     * @param string $field
     * @param string $operator
     */
    public function __construct(array $values = array(), $field = null, $operator = null)
    {
        $this
            ->setValues($values)
            ->setField($field)
            ->setOperator($operator);
    }
    /**
     * Get values value
     * @return string[]
     */
    public function getValues()
    {
        return $this->values;
    }
    /**
     * This method is responsible for validating the values passed to the setValues method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValues method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValuesForArrayConstraintsFromSetValues(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $soqlConditionValuesItem) {
            // validation for constraint: itemType
            if (!is_string($soqlConditionValuesItem)) {
                $invalidValues[] = is_object($soqlConditionValuesItem) ? get_class($soqlConditionValuesItem) : sprintf('%s(%s)', gettype($soqlConditionValuesItem), var_export($soqlConditionValuesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The values property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set values value
     * @throws \InvalidArgumentException
     * @param string[] $values
     * @return \SFPartnerApi\v480\StructType\SoqlCondition
     */
    public function setValues(array $values = array())
    {
        // validation for constraint: array
        if ('' !== ($valuesArrayErrorMessage = self::validateValuesForArrayConstraintsFromSetValues($values))) {
            throw new \InvalidArgumentException($valuesArrayErrorMessage, __LINE__);
        }
        $this->values = $values;
        return $this;
    }
    /**
     * Add item to values value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\SoqlCondition
     */
    public function addToValues($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The values property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->values[] = $item;
        return $this;
    }
    /**
     * Get field value
     * @return string|null
     */
    public function getField()
    {
        return $this->field;
    }
    /**
     * Set field value
     * @param string $field
     * @return \SFPartnerApi\v480\StructType\SoqlCondition
     */
    public function setField($field = null)
    {
        // validation for constraint: string
        if (!is_null($field) && !is_string($field)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field, true), gettype($field)), __LINE__);
        }
        $this->field = $field;
        return $this;
    }
    /**
     * Get operator value
     * @return string|null
     */
    public function getOperator()
    {
        return $this->operator;
    }
    /**
     * Set operator value
     * @uses \SFPartnerApi\v480\EnumType\SoqlOperator::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\SoqlOperator::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $operator
     * @return \SFPartnerApi\v480\StructType\SoqlCondition
     */
    public function setOperator($operator = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\SoqlOperator::valueIsValid($operator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\SoqlOperator', is_array($operator) ? implode(', ', $operator) : var_export($operator, true), implode(', ', \SFPartnerApi\v480\EnumType\SoqlOperator::getValidValues())), __LINE__);
        }
        $this->operator = $operator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\SoqlCondition
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
