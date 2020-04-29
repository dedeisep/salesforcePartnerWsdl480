<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SoqlConditionGroup StructType
 * @subpackage Structs
 */
class SoqlConditionGroup extends SoqlWhereCondition
{
    /**
     * The conditions
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\SoqlWhereCondition[]
     */
    public $conditions;
    /**
     * The conjunction
     * @var string
     */
    public $conjunction;
    /**
     * Constructor method for SoqlConditionGroup
     * @uses SoqlConditionGroup::setConditions()
     * @uses SoqlConditionGroup::setConjunction()
     * @param \SFPartnerApi\v480\StructType\SoqlWhereCondition[] $conditions
     * @param string $conjunction
     */
    public function __construct(array $conditions = array(), $conjunction = null)
    {
        $this
            ->setConditions($conditions)
            ->setConjunction($conjunction);
    }
    /**
     * Get conditions value
     * @return \SFPartnerApi\v480\StructType\SoqlWhereCondition[]|null
     */
    public function getConditions()
    {
        return $this->conditions;
    }
    /**
     * This method is responsible for validating the values passed to the setConditions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConditions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConditionsForArrayConstraintsFromSetConditions(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $soqlConditionGroupConditionsItem) {
            // validation for constraint: itemType
            if (!$soqlConditionGroupConditionsItem instanceof \SFPartnerApi\v480\StructType\SoqlWhereCondition) {
                $invalidValues[] = is_object($soqlConditionGroupConditionsItem) ? get_class($soqlConditionGroupConditionsItem) : sprintf('%s(%s)', gettype($soqlConditionGroupConditionsItem), var_export($soqlConditionGroupConditionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The conditions property can only contain items of type \SFPartnerApi\v480\StructType\SoqlWhereCondition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set conditions value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\SoqlWhereCondition[] $conditions
     * @return \SFPartnerApi\v480\StructType\SoqlConditionGroup
     */
    public function setConditions(array $conditions = array())
    {
        // validation for constraint: array
        if ('' !== ($conditionsArrayErrorMessage = self::validateConditionsForArrayConstraintsFromSetConditions($conditions))) {
            throw new \InvalidArgumentException($conditionsArrayErrorMessage, __LINE__);
        }
        $this->conditions = $conditions;
        return $this;
    }
    /**
     * Add item to conditions value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\SoqlWhereCondition $item
     * @return \SFPartnerApi\v480\StructType\SoqlConditionGroup
     */
    public function addToConditions(\SFPartnerApi\v480\StructType\SoqlWhereCondition $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\SoqlWhereCondition) {
            throw new \InvalidArgumentException(sprintf('The conditions property can only contain items of type \SFPartnerApi\v480\StructType\SoqlWhereCondition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->conditions[] = $item;
        return $this;
    }
    /**
     * Get conjunction value
     * @return string|null
     */
    public function getConjunction()
    {
        return $this->conjunction;
    }
    /**
     * Set conjunction value
     * @uses \SFPartnerApi\v480\EnumType\SoqlConjunction::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\SoqlConjunction::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $conjunction
     * @return \SFPartnerApi\v480\StructType\SoqlConditionGroup
     */
    public function setConjunction($conjunction = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\SoqlConjunction::valueIsValid($conjunction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\SoqlConjunction', is_array($conjunction) ? implode(', ', $conjunction) : var_export($conjunction, true), implode(', ', \SFPartnerApi\v480\EnumType\SoqlConjunction::getValidValues())), __LINE__);
        }
        $this->conjunction = $conjunction;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\SoqlConditionGroup
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
