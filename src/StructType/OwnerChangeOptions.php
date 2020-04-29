<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OwnerChangeOptions StructType
 * @subpackage Structs
 */
class OwnerChangeOptions extends AbstractStructBase
{
    /**
     * The options
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\OwnerChangeOption[]
     */
    public $options;
    /**
     * Constructor method for OwnerChangeOptions
     * @uses OwnerChangeOptions::setOptions()
     * @param \SFPartnerApi\v480\StructType\OwnerChangeOption[] $options
     */
    public function __construct(array $options = array())
    {
        $this
            ->setOptions($options);
    }
    /**
     * Get options value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SFPartnerApi\v480\StructType\OwnerChangeOption[]|null
     */
    public function getOptions()
    {
        return isset($this->options) ? $this->options : null;
    }
    /**
     * This method is responsible for validating the values passed to the setOptions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOptions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOptionsForArrayConstraintsFromSetOptions(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $ownerChangeOptionsOptionsItem) {
            // validation for constraint: itemType
            if (!$ownerChangeOptionsOptionsItem instanceof \SFPartnerApi\v480\StructType\OwnerChangeOption) {
                $invalidValues[] = is_object($ownerChangeOptionsOptionsItem) ? get_class($ownerChangeOptionsOptionsItem) : sprintf('%s(%s)', gettype($ownerChangeOptionsOptionsItem), var_export($ownerChangeOptionsOptionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The options property can only contain items of type \SFPartnerApi\v480\StructType\OwnerChangeOption, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set options value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\OwnerChangeOption[] $options
     * @return \SFPartnerApi\v480\StructType\OwnerChangeOptions
     */
    public function setOptions(array $options = array())
    {
        // validation for constraint: array
        if ('' !== ($optionsArrayErrorMessage = self::validateOptionsForArrayConstraintsFromSetOptions($options))) {
            throw new \InvalidArgumentException($optionsArrayErrorMessage, __LINE__);
        }
        if (is_null($options) || (is_array($options) && empty($options))) {
            unset($this->options);
        } else {
            $this->options = $options;
        }
        return $this;
    }
    /**
     * Add item to options value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\OwnerChangeOption $item
     * @return \SFPartnerApi\v480\StructType\OwnerChangeOptions
     */
    public function addToOptions(\SFPartnerApi\v480\StructType\OwnerChangeOption $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\OwnerChangeOption) {
            throw new \InvalidArgumentException(sprintf('The options property can only contain items of type \SFPartnerApi\v480\StructType\OwnerChangeOption, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->options[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\OwnerChangeOptions
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
