<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribePathAssistantStep StructType
 * @subpackage Structs
 */
class DescribePathAssistantStep extends AbstractStructBase
{
    /**
     * The closed
     * @var bool
     */
    public $closed;
    /**
     * The converted
     * @var bool
     */
    public $converted;
    /**
     * The fields
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribePathAssistantField[]
     */
    public $fields;
    /**
     * The info
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $info;
    /**
     * The layoutSection
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\DescribeLayoutSection
     */
    public $layoutSection;
    /**
     * The picklistLabel
     * @var string
     */
    public $picklistLabel;
    /**
     * The picklistValue
     * @var string
     */
    public $picklistValue;
    /**
     * The won
     * @var bool
     */
    public $won;
    /**
     * Constructor method for DescribePathAssistantStep
     * @uses DescribePathAssistantStep::setClosed()
     * @uses DescribePathAssistantStep::setConverted()
     * @uses DescribePathAssistantStep::setFields()
     * @uses DescribePathAssistantStep::setInfo()
     * @uses DescribePathAssistantStep::setLayoutSection()
     * @uses DescribePathAssistantStep::setPicklistLabel()
     * @uses DescribePathAssistantStep::setPicklistValue()
     * @uses DescribePathAssistantStep::setWon()
     * @param bool $closed
     * @param bool $converted
     * @param \SFPartnerApi\v480\StructType\DescribePathAssistantField[] $fields
     * @param string $info
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutSection $layoutSection
     * @param string $picklistLabel
     * @param string $picklistValue
     * @param bool $won
     */
    public function __construct($closed = null, $converted = null, array $fields = array(), $info = null, \SFPartnerApi\v480\StructType\DescribeLayoutSection $layoutSection = null, $picklistLabel = null, $picklistValue = null, $won = null)
    {
        $this
            ->setClosed($closed)
            ->setConverted($converted)
            ->setFields($fields)
            ->setInfo($info)
            ->setLayoutSection($layoutSection)
            ->setPicklistLabel($picklistLabel)
            ->setPicklistValue($picklistValue)
            ->setWon($won);
    }
    /**
     * Get closed value
     * @return bool|null
     */
    public function getClosed()
    {
        return $this->closed;
    }
    /**
     * Set closed value
     * @param bool $closed
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistantStep
     */
    public function setClosed($closed = null)
    {
        // validation for constraint: boolean
        if (!is_null($closed) && !is_bool($closed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($closed, true), gettype($closed)), __LINE__);
        }
        $this->closed = $closed;
        return $this;
    }
    /**
     * Get converted value
     * @return bool|null
     */
    public function getConverted()
    {
        return $this->converted;
    }
    /**
     * Set converted value
     * @param bool $converted
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistantStep
     */
    public function setConverted($converted = null)
    {
        // validation for constraint: boolean
        if (!is_null($converted) && !is_bool($converted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($converted, true), gettype($converted)), __LINE__);
        }
        $this->converted = $converted;
        return $this;
    }
    /**
     * Get fields value
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistantField[]|null
     */
    public function getFields()
    {
        return $this->fields;
    }
    /**
     * This method is responsible for validating the values passed to the setFields method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFields method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFieldsForArrayConstraintsFromSetFields(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describePathAssistantStepFieldsItem) {
            // validation for constraint: itemType
            if (!$describePathAssistantStepFieldsItem instanceof \SFPartnerApi\v480\StructType\DescribePathAssistantField) {
                $invalidValues[] = is_object($describePathAssistantStepFieldsItem) ? get_class($describePathAssistantStepFieldsItem) : sprintf('%s(%s)', gettype($describePathAssistantStepFieldsItem), var_export($describePathAssistantStepFieldsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The fields property can only contain items of type \SFPartnerApi\v480\StructType\DescribePathAssistantField, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set fields value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribePathAssistantField[] $fields
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistantStep
     */
    public function setFields(array $fields = array())
    {
        // validation for constraint: array
        if ('' !== ($fieldsArrayErrorMessage = self::validateFieldsForArrayConstraintsFromSetFields($fields))) {
            throw new \InvalidArgumentException($fieldsArrayErrorMessage, __LINE__);
        }
        $this->fields = $fields;
        return $this;
    }
    /**
     * Add item to fields value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribePathAssistantField $item
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistantStep
     */
    public function addToFields(\SFPartnerApi\v480\StructType\DescribePathAssistantField $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribePathAssistantField) {
            throw new \InvalidArgumentException(sprintf('The fields property can only contain items of type \SFPartnerApi\v480\StructType\DescribePathAssistantField, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->fields[] = $item;
        return $this;
    }
    /**
     * Get info value
     * @return string|null
     */
    public function getInfo()
    {
        return $this->info;
    }
    /**
     * Set info value
     * @param string $info
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistantStep
     */
    public function setInfo($info = null)
    {
        // validation for constraint: string
        if (!is_null($info) && !is_string($info)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($info, true), gettype($info)), __LINE__);
        }
        $this->info = $info;
        return $this;
    }
    /**
     * Get layoutSection value
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSection|null
     */
    public function getLayoutSection()
    {
        return $this->layoutSection;
    }
    /**
     * Set layoutSection value
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutSection $layoutSection
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistantStep
     */
    public function setLayoutSection(\SFPartnerApi\v480\StructType\DescribeLayoutSection $layoutSection = null)
    {
        $this->layoutSection = $layoutSection;
        return $this;
    }
    /**
     * Get picklistLabel value
     * @return string|null
     */
    public function getPicklistLabel()
    {
        return $this->picklistLabel;
    }
    /**
     * Set picklistLabel value
     * @param string $picklistLabel
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistantStep
     */
    public function setPicklistLabel($picklistLabel = null)
    {
        // validation for constraint: string
        if (!is_null($picklistLabel) && !is_string($picklistLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($picklistLabel, true), gettype($picklistLabel)), __LINE__);
        }
        $this->picklistLabel = $picklistLabel;
        return $this;
    }
    /**
     * Get picklistValue value
     * @return string|null
     */
    public function getPicklistValue()
    {
        return $this->picklistValue;
    }
    /**
     * Set picklistValue value
     * @param string $picklistValue
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistantStep
     */
    public function setPicklistValue($picklistValue = null)
    {
        // validation for constraint: string
        if (!is_null($picklistValue) && !is_string($picklistValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($picklistValue, true), gettype($picklistValue)), __LINE__);
        }
        $this->picklistValue = $picklistValue;
        return $this;
    }
    /**
     * Get won value
     * @return bool|null
     */
    public function getWon()
    {
        return $this->won;
    }
    /**
     * Set won value
     * @param bool $won
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistantStep
     */
    public function setWon($won = null)
    {
        // validation for constraint: boolean
        if (!is_null($won) && !is_bool($won)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($won, true), gettype($won)), __LINE__);
        }
        $this->won = $won;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistantStep
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
