<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SoqlSubQueryCondition StructType
 * @subpackage Structs
 */
class SoqlSubQueryCondition extends SoqlWhereCondition
{
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
     * The subQuery
     * @var string
     */
    public $subQuery;
    /**
     * Constructor method for SoqlSubQueryCondition
     * @uses SoqlSubQueryCondition::setField()
     * @uses SoqlSubQueryCondition::setOperator()
     * @uses SoqlSubQueryCondition::setSubQuery()
     * @param string $field
     * @param string $operator
     * @param string $subQuery
     */
    public function __construct($field = null, $operator = null, $subQuery = null)
    {
        $this
            ->setField($field)
            ->setOperator($operator)
            ->setSubQuery($subQuery);
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
     * @return \SFPartnerApi\v480\StructType\SoqlSubQueryCondition
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
     * @return \SFPartnerApi\v480\StructType\SoqlSubQueryCondition
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
     * Get subQuery value
     * @return string|null
     */
    public function getSubQuery()
    {
        return $this->subQuery;
    }
    /**
     * Set subQuery value
     * @param string $subQuery
     * @return \SFPartnerApi\v480\StructType\SoqlSubQueryCondition
     */
    public function setSubQuery($subQuery = null)
    {
        // validation for constraint: string
        if (!is_null($subQuery) && !is_string($subQuery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subQuery, true), gettype($subQuery)), __LINE__);
        }
        $this->subQuery = $subQuery;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\SoqlSubQueryCondition
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
