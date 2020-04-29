<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribePathAssistantsResult StructType
 * @subpackage Structs
 */
class DescribePathAssistantsResult extends AbstractStructBase
{
    /**
     * The pathAssistants
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribePathAssistant[]
     */
    public $pathAssistants;
    /**
     * Constructor method for DescribePathAssistantsResult
     * @uses DescribePathAssistantsResult::setPathAssistants()
     * @param \SFPartnerApi\v480\StructType\DescribePathAssistant[] $pathAssistants
     */
    public function __construct(array $pathAssistants = array())
    {
        $this
            ->setPathAssistants($pathAssistants);
    }
    /**
     * Get pathAssistants value
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistant[]|null
     */
    public function getPathAssistants()
    {
        return $this->pathAssistants;
    }
    /**
     * This method is responsible for validating the values passed to the setPathAssistants method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPathAssistants method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePathAssistantsForArrayConstraintsFromSetPathAssistants(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describePathAssistantsResultPathAssistantsItem) {
            // validation for constraint: itemType
            if (!$describePathAssistantsResultPathAssistantsItem instanceof \SFPartnerApi\v480\StructType\DescribePathAssistant) {
                $invalidValues[] = is_object($describePathAssistantsResultPathAssistantsItem) ? get_class($describePathAssistantsResultPathAssistantsItem) : sprintf('%s(%s)', gettype($describePathAssistantsResultPathAssistantsItem), var_export($describePathAssistantsResultPathAssistantsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The pathAssistants property can only contain items of type \SFPartnerApi\v480\StructType\DescribePathAssistant, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set pathAssistants value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribePathAssistant[] $pathAssistants
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistantsResult
     */
    public function setPathAssistants(array $pathAssistants = array())
    {
        // validation for constraint: array
        if ('' !== ($pathAssistantsArrayErrorMessage = self::validatePathAssistantsForArrayConstraintsFromSetPathAssistants($pathAssistants))) {
            throw new \InvalidArgumentException($pathAssistantsArrayErrorMessage, __LINE__);
        }
        $this->pathAssistants = $pathAssistants;
        return $this;
    }
    /**
     * Add item to pathAssistants value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribePathAssistant $item
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistantsResult
     */
    public function addToPathAssistants(\SFPartnerApi\v480\StructType\DescribePathAssistant $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribePathAssistant) {
            throw new \InvalidArgumentException(sprintf('The pathAssistants property can only contain items of type \SFPartnerApi\v480\StructType\DescribePathAssistant, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->pathAssistants[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistantsResult
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
