<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StringList StructType
 * @subpackage Structs
 */
class StringList extends AbstractStructBase
{
    /**
     * The values
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $values;
    /**
     * Constructor method for StringList
     * @uses StringList::setValues()
     * @param string[] $values
     */
    public function __construct(array $values = array())
    {
        $this
            ->setValues($values);
    }
    /**
     * Get values value
     * @return string[]|null
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
        foreach ($values as $stringListValuesItem) {
            // validation for constraint: itemType
            if (!is_string($stringListValuesItem)) {
                $invalidValues[] = is_object($stringListValuesItem) ? get_class($stringListValuesItem) : sprintf('%s(%s)', gettype($stringListValuesItem), var_export($stringListValuesItem, true));
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
     * @return \SFPartnerApi\v480\StructType\StringList
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
     * @return \SFPartnerApi\v480\StructType\StringList
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\StringList
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
