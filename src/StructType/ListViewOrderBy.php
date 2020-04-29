<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListViewOrderBy StructType
 * @subpackage Structs
 */
class ListViewOrderBy extends AbstractStructBase
{
    /**
     * The fieldNameOrPath
     * @var string
     */
    public $fieldNameOrPath;
    /**
     * The nullsPosition
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nullsPosition;
    /**
     * The sortDirection
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sortDirection;
    /**
     * Constructor method for ListViewOrderBy
     * @uses ListViewOrderBy::setFieldNameOrPath()
     * @uses ListViewOrderBy::setNullsPosition()
     * @uses ListViewOrderBy::setSortDirection()
     * @param string $fieldNameOrPath
     * @param string $nullsPosition
     * @param string $sortDirection
     */
    public function __construct($fieldNameOrPath = null, $nullsPosition = null, $sortDirection = null)
    {
        $this
            ->setFieldNameOrPath($fieldNameOrPath)
            ->setNullsPosition($nullsPosition)
            ->setSortDirection($sortDirection);
    }
    /**
     * Get fieldNameOrPath value
     * @return string|null
     */
    public function getFieldNameOrPath()
    {
        return $this->fieldNameOrPath;
    }
    /**
     * Set fieldNameOrPath value
     * @param string $fieldNameOrPath
     * @return \SFPartnerApi\v480\StructType\ListViewOrderBy
     */
    public function setFieldNameOrPath($fieldNameOrPath = null)
    {
        // validation for constraint: string
        if (!is_null($fieldNameOrPath) && !is_string($fieldNameOrPath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldNameOrPath, true), gettype($fieldNameOrPath)), __LINE__);
        }
        $this->fieldNameOrPath = $fieldNameOrPath;
        return $this;
    }
    /**
     * Get nullsPosition value
     * @return string|null
     */
    public function getNullsPosition()
    {
        return $this->nullsPosition;
    }
    /**
     * Set nullsPosition value
     * @uses \SFPartnerApi\v480\EnumType\OrderByNullsPosition::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\OrderByNullsPosition::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $nullsPosition
     * @return \SFPartnerApi\v480\StructType\ListViewOrderBy
     */
    public function setNullsPosition($nullsPosition = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\OrderByNullsPosition::valueIsValid($nullsPosition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\OrderByNullsPosition', is_array($nullsPosition) ? implode(', ', $nullsPosition) : var_export($nullsPosition, true), implode(', ', \SFPartnerApi\v480\EnumType\OrderByNullsPosition::getValidValues())), __LINE__);
        }
        $this->nullsPosition = $nullsPosition;
        return $this;
    }
    /**
     * Get sortDirection value
     * @return string|null
     */
    public function getSortDirection()
    {
        return $this->sortDirection;
    }
    /**
     * Set sortDirection value
     * @uses \SFPartnerApi\v480\EnumType\OrderByDirection::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\OrderByDirection::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sortDirection
     * @return \SFPartnerApi\v480\StructType\ListViewOrderBy
     */
    public function setSortDirection($sortDirection = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\OrderByDirection::valueIsValid($sortDirection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\OrderByDirection', is_array($sortDirection) ? implode(', ', $sortDirection) : var_export($sortDirection, true), implode(', ', \SFPartnerApi\v480\EnumType\OrderByDirection::getValidValues())), __LINE__);
        }
        $this->sortDirection = $sortDirection;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\ListViewOrderBy
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
