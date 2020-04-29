<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for describeTheme StructType
 * @subpackage Structs
 */
class DescribeTheme extends AbstractStructBase
{
    /**
     * The sobjectType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $sobjectType;
    /**
     * Constructor method for describeTheme
     * @uses DescribeTheme::setSobjectType()
     * @param string[] $sobjectType
     */
    public function __construct(array $sobjectType = array())
    {
        $this
            ->setSobjectType($sobjectType);
    }
    /**
     * Get sobjectType value
     * @return string[]|null
     */
    public function getSobjectType()
    {
        return $this->sobjectType;
    }
    /**
     * This method is responsible for validating the values passed to the setSobjectType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSobjectType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSobjectTypeForArrayConstraintsFromSetSobjectType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeThemeSobjectTypeItem) {
            // validation for constraint: itemType
            if (!is_string($describeThemeSobjectTypeItem)) {
                $invalidValues[] = is_object($describeThemeSobjectTypeItem) ? get_class($describeThemeSobjectTypeItem) : sprintf('%s(%s)', gettype($describeThemeSobjectTypeItem), var_export($describeThemeSobjectTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The sobjectType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set sobjectType value
     * @throws \InvalidArgumentException
     * @param string[] $sobjectType
     * @return \SFPartnerApi\v480\StructType\DescribeTheme
     */
    public function setSobjectType(array $sobjectType = array())
    {
        // validation for constraint: array
        if ('' !== ($sobjectTypeArrayErrorMessage = self::validateSobjectTypeForArrayConstraintsFromSetSobjectType($sobjectType))) {
            throw new \InvalidArgumentException($sobjectTypeArrayErrorMessage, __LINE__);
        }
        $this->sobjectType = $sobjectType;
        return $this;
    }
    /**
     * Add item to sobjectType value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\DescribeTheme
     */
    public function addToSobjectType($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The sobjectType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->sobjectType[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeTheme
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
