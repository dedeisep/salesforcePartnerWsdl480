<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelatedListSort StructType
 * @subpackage Structs
 */
class RelatedListSort extends AbstractStructBase
{
    /**
     * The ascending
     * @var bool
     */
    public $ascending;
    /**
     * The column
     * @var string
     */
    public $column;
    /**
     * Constructor method for RelatedListSort
     * @uses RelatedListSort::setAscending()
     * @uses RelatedListSort::setColumn()
     * @param bool $ascending
     * @param string $column
     */
    public function __construct($ascending = null, $column = null)
    {
        $this
            ->setAscending($ascending)
            ->setColumn($column);
    }
    /**
     * Get ascending value
     * @return bool|null
     */
    public function getAscending()
    {
        return $this->ascending;
    }
    /**
     * Set ascending value
     * @param bool $ascending
     * @return \SFPartnerApi\v480\StructType\RelatedListSort
     */
    public function setAscending($ascending = null)
    {
        // validation for constraint: boolean
        if (!is_null($ascending) && !is_bool($ascending)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ascending, true), gettype($ascending)), __LINE__);
        }
        $this->ascending = $ascending;
        return $this;
    }
    /**
     * Get column value
     * @return string|null
     */
    public function getColumn()
    {
        return $this->column;
    }
    /**
     * Set column value
     * @param string $column
     * @return \SFPartnerApi\v480\StructType\RelatedListSort
     */
    public function setColumn($column = null)
    {
        // validation for constraint: string
        if (!is_null($column) && !is_string($column)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($column, true), gettype($column)), __LINE__);
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
     * @return \SFPartnerApi\v480\StructType\RelatedListSort
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
