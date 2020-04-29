<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameObjectValuePair StructType
 * @subpackage Structs
 */
class NameObjectValuePair extends AbstractStructBase
{
    /**
     * The value
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var mixed[]
     */
    public $value;
    /**
     * The isVisible
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $isVisible;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * Constructor method for NameObjectValuePair
     * @uses NameObjectValuePair::setValue()
     * @uses NameObjectValuePair::setIsVisible()
     * @uses NameObjectValuePair::setName()
     * @param mixed[] $value
     * @param bool $isVisible
     * @param string $name
     */
    public function __construct(array $value = array(), $isVisible = null, $name = null)
    {
        $this
            ->setValue($value)
            ->setIsVisible($isVisible)
            ->setName($name);
    }
    /**
     * Get value value
     * @return mixed[]
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * This method is responsible for validating the values passed to the setValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValueForArrayConstraintsFromSetValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nameObjectValuePairValueItem) {
            // validation for constraint: itemType
            if (false) {
                $invalidValues[] = is_object($nameObjectValuePairValueItem) ? get_class($nameObjectValuePairValueItem) : sprintf('%s(%s)', gettype($nameObjectValuePairValueItem), var_export($nameObjectValuePairValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The value property can only contain items of type anyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set value value
     * @throws \InvalidArgumentException
     * @param mixed[] $value
     * @return \SFPartnerApi\v480\StructType\NameObjectValuePair
     */
    public function setValue(array $value = array())
    {
        // validation for constraint: array
        if ('' !== ($valueArrayErrorMessage = self::validateValueForArrayConstraintsFromSetValue($value))) {
            throw new \InvalidArgumentException($valueArrayErrorMessage, __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Add item to value value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \SFPartnerApi\v480\StructType\NameObjectValuePair
     */
    public function addToValue($item)
    {
        // validation for constraint: itemType
        if (false) {
            throw new \InvalidArgumentException(sprintf('The value property can only contain items of type anyType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->value[] = $item;
        return $this;
    }
    /**
     * Get isVisible value
     * @return bool|null
     */
    public function getIsVisible()
    {
        return $this->isVisible;
    }
    /**
     * Set isVisible value
     * @param bool $isVisible
     * @return \SFPartnerApi\v480\StructType\NameObjectValuePair
     */
    public function setIsVisible($isVisible = null)
    {
        // validation for constraint: boolean
        if (!is_null($isVisible) && !is_bool($isVisible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVisible, true), gettype($isVisible)), __LINE__);
        }
        $this->isVisible = $isVisible;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \SFPartnerApi\v480\StructType\NameObjectValuePair
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\NameObjectValuePair
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
