<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JunctionIdListNames StructType
 * @subpackage Structs
 */
class JunctionIdListNames extends AbstractStructBase
{
    /**
     * The names
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $names;
    /**
     * Constructor method for JunctionIdListNames
     * @uses JunctionIdListNames::setNames()
     * @param string[] $names
     */
    public function __construct(array $names = array())
    {
        $this
            ->setNames($names);
    }
    /**
     * Get names value
     * @return string[]|null
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * This method is responsible for validating the values passed to the setNames method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNames method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNamesForArrayConstraintsFromSetNames(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $junctionIdListNamesNamesItem) {
            // validation for constraint: itemType
            if (!is_string($junctionIdListNamesNamesItem)) {
                $invalidValues[] = is_object($junctionIdListNamesNamesItem) ? get_class($junctionIdListNamesNamesItem) : sprintf('%s(%s)', gettype($junctionIdListNamesNamesItem), var_export($junctionIdListNamesNamesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The names property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set names value
     * @throws \InvalidArgumentException
     * @param string[] $names
     * @return \SFPartnerApi\v480\StructType\JunctionIdListNames
     */
    public function setNames(array $names = array())
    {
        // validation for constraint: array
        if ('' !== ($namesArrayErrorMessage = self::validateNamesForArrayConstraintsFromSetNames($names))) {
            throw new \InvalidArgumentException($namesArrayErrorMessage, __LINE__);
        }
        $this->names = $names;
        return $this;
    }
    /**
     * Add item to names value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\JunctionIdListNames
     */
    public function addToNames($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The names property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->names[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\JunctionIdListNames
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
