<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApiQueryFault StructType
 * @subpackage Structs
 */
class ApiQueryFault extends ApiFault
{
    /**
     * The row
     * @var int
     */
    public $row;
    /**
     * The column
     * @var int
     */
    public $column;
    /**
     * Constructor method for ApiQueryFault
     * @uses ApiQueryFault::setRow()
     * @uses ApiQueryFault::setColumn()
     * @param int $row
     * @param int $column
     */
    public function __construct($row = null, $column = null)
    {
        $this
            ->setRow($row)
            ->setColumn($column);
    }
    /**
     * Get row value
     * @return int|null
     */
    public function getRow()
    {
        return $this->row;
    }
    /**
     * Set row value
     * @param int $row
     * @return \SFPartnerApi\v480\StructType\ApiQueryFault
     */
    public function setRow($row = null)
    {
        // validation for constraint: int
        if (!is_null($row) && !(is_int($row) || ctype_digit($row))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($row, true), gettype($row)), __LINE__);
        }
        $this->row = $row;
        return $this;
    }
    /**
     * Get column value
     * @return int|null
     */
    public function getColumn()
    {
        return $this->column;
    }
    /**
     * Set column value
     * @param int $column
     * @return \SFPartnerApi\v480\StructType\ApiQueryFault
     */
    public function setColumn($column = null)
    {
        // validation for constraint: int
        if (!is_null($column) && !(is_int($column) || ctype_digit($column))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($column, true), gettype($column)), __LINE__);
        }
        $this->column = $column;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\ApiQueryFault
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
