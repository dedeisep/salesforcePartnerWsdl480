<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeSearchLayoutResult StructType
 * @subpackage Structs
 */
class DescribeSearchLayoutResult extends AbstractStructBase
{
    /**
     * The errorMsg
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $errorMsg;
    /**
     * The label
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $label;
    /**
     * The limitRows
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $limitRows;
    /**
     * The objectType
     * @var string
     */
    public $objectType;
    /**
     * The searchColumns
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\DescribeColumn[]
     */
    public $searchColumns;
    /**
     * Constructor method for DescribeSearchLayoutResult
     * @uses DescribeSearchLayoutResult::setErrorMsg()
     * @uses DescribeSearchLayoutResult::setLabel()
     * @uses DescribeSearchLayoutResult::setLimitRows()
     * @uses DescribeSearchLayoutResult::setObjectType()
     * @uses DescribeSearchLayoutResult::setSearchColumns()
     * @param string $errorMsg
     * @param string $label
     * @param int $limitRows
     * @param string $objectType
     * @param \SFPartnerApi\v480\StructType\DescribeColumn[] $searchColumns
     */
    public function __construct($errorMsg = null, $label = null, $limitRows = null, $objectType = null, array $searchColumns = array())
    {
        $this
            ->setErrorMsg($errorMsg)
            ->setLabel($label)
            ->setLimitRows($limitRows)
            ->setObjectType($objectType)
            ->setSearchColumns($searchColumns);
    }
    /**
     * Get errorMsg value
     * @return string|null
     */
    public function getErrorMsg()
    {
        return $this->errorMsg;
    }
    /**
     * Set errorMsg value
     * @param string $errorMsg
     * @return \SFPartnerApi\v480\StructType\DescribeSearchLayoutResult
     */
    public function setErrorMsg($errorMsg = null)
    {
        // validation for constraint: string
        if (!is_null($errorMsg) && !is_string($errorMsg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMsg, true), gettype($errorMsg)), __LINE__);
        }
        $this->errorMsg = $errorMsg;
        return $this;
    }
    /**
     * Get label value
     * @return string|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param string $label
     * @return \SFPartnerApi\v480\StructType\DescribeSearchLayoutResult
     */
    public function setLabel($label = null)
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        $this->label = $label;
        return $this;
    }
    /**
     * Get limitRows value
     * @return int|null
     */
    public function getLimitRows()
    {
        return $this->limitRows;
    }
    /**
     * Set limitRows value
     * @param int $limitRows
     * @return \SFPartnerApi\v480\StructType\DescribeSearchLayoutResult
     */
    public function setLimitRows($limitRows = null)
    {
        // validation for constraint: int
        if (!is_null($limitRows) && !(is_int($limitRows) || ctype_digit($limitRows))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($limitRows, true), gettype($limitRows)), __LINE__);
        }
        $this->limitRows = $limitRows;
        return $this;
    }
    /**
     * Get objectType value
     * @return string|null
     */
    public function getObjectType()
    {
        return $this->objectType;
    }
    /**
     * Set objectType value
     * @param string $objectType
     * @return \SFPartnerApi\v480\StructType\DescribeSearchLayoutResult
     */
    public function setObjectType($objectType = null)
    {
        // validation for constraint: string
        if (!is_null($objectType) && !is_string($objectType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objectType, true), gettype($objectType)), __LINE__);
        }
        $this->objectType = $objectType;
        return $this;
    }
    /**
     * Get searchColumns value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SFPartnerApi\v480\StructType\DescribeColumn[]|null
     */
    public function getSearchColumns()
    {
        return isset($this->searchColumns) ? $this->searchColumns : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSearchColumns method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchColumns method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchColumnsForArrayConstraintsFromSetSearchColumns(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeSearchLayoutResultSearchColumnsItem) {
            // validation for constraint: itemType
            if (!$describeSearchLayoutResultSearchColumnsItem instanceof \SFPartnerApi\v480\StructType\DescribeColumn) {
                $invalidValues[] = is_object($describeSearchLayoutResultSearchColumnsItem) ? get_class($describeSearchLayoutResultSearchColumnsItem) : sprintf('%s(%s)', gettype($describeSearchLayoutResultSearchColumnsItem), var_export($describeSearchLayoutResultSearchColumnsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The searchColumns property can only contain items of type \SFPartnerApi\v480\StructType\DescribeColumn, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set searchColumns value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeColumn[] $searchColumns
     * @return \SFPartnerApi\v480\StructType\DescribeSearchLayoutResult
     */
    public function setSearchColumns(array $searchColumns = array())
    {
        // validation for constraint: array
        if ('' !== ($searchColumnsArrayErrorMessage = self::validateSearchColumnsForArrayConstraintsFromSetSearchColumns($searchColumns))) {
            throw new \InvalidArgumentException($searchColumnsArrayErrorMessage, __LINE__);
        }
        if (is_null($searchColumns) || (is_array($searchColumns) && empty($searchColumns))) {
            unset($this->searchColumns);
        } else {
            $this->searchColumns = $searchColumns;
        }
        return $this;
    }
    /**
     * Add item to searchColumns value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeColumn $item
     * @return \SFPartnerApi\v480\StructType\DescribeSearchLayoutResult
     */
    public function addToSearchColumns(\SFPartnerApi\v480\StructType\DescribeColumn $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeColumn) {
            throw new \InvalidArgumentException(sprintf('The searchColumns property can only contain items of type \SFPartnerApi\v480\StructType\DescribeColumn, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->searchColumns[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeSearchLayoutResult
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
