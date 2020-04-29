<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListViewRecordColumn StructType
 * @subpackage Structs
 */
class ListViewRecordColumn extends AbstractStructBase
{
    /**
     * The fieldNameOrPath
     * @var string
     */
    public $fieldNameOrPath;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $value;
    /**
     * Constructor method for ListViewRecordColumn
     * @uses ListViewRecordColumn::setFieldNameOrPath()
     * @uses ListViewRecordColumn::setValue()
     * @param string $fieldNameOrPath
     * @param string $value
     */
    public function __construct($fieldNameOrPath = null, $value = null)
    {
        $this
            ->setFieldNameOrPath($fieldNameOrPath)
            ->setValue($value);
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
     * @return \SFPartnerApi\v480\StructType\ListViewRecordColumn
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
     * Get value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \SFPartnerApi\v480\StructType\ListViewRecordColumn
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\ListViewRecordColumn
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
