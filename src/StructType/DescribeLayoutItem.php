<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeLayoutItem StructType
 * @subpackage Structs
 */
class DescribeLayoutItem extends AbstractStructBase
{
    /**
     * The editableForNew
     * @var bool
     */
    public $editableForNew;
    /**
     * The editableForUpdate
     * @var bool
     */
    public $editableForUpdate;
    /**
     * The label
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $label;
    /**
     * The layoutComponents
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeLayoutComponent[]
     */
    public $layoutComponents;
    /**
     * The placeholder
     * @var bool
     */
    public $placeholder;
    /**
     * The required
     * @var bool
     */
    public $required;
    /**
     * Constructor method for DescribeLayoutItem
     * @uses DescribeLayoutItem::setEditableForNew()
     * @uses DescribeLayoutItem::setEditableForUpdate()
     * @uses DescribeLayoutItem::setLabel()
     * @uses DescribeLayoutItem::setLayoutComponents()
     * @uses DescribeLayoutItem::setPlaceholder()
     * @uses DescribeLayoutItem::setRequired()
     * @param bool $editableForNew
     * @param bool $editableForUpdate
     * @param string $label
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutComponent[] $layoutComponents
     * @param bool $placeholder
     * @param bool $required
     */
    public function __construct($editableForNew = null, $editableForUpdate = null, $label = null, array $layoutComponents = array(), $placeholder = null, $required = null)
    {
        $this
            ->setEditableForNew($editableForNew)
            ->setEditableForUpdate($editableForUpdate)
            ->setLabel($label)
            ->setLayoutComponents($layoutComponents)
            ->setPlaceholder($placeholder)
            ->setRequired($required);
    }
    /**
     * Get editableForNew value
     * @return bool|null
     */
    public function getEditableForNew()
    {
        return $this->editableForNew;
    }
    /**
     * Set editableForNew value
     * @param bool $editableForNew
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutItem
     */
    public function setEditableForNew($editableForNew = null)
    {
        // validation for constraint: boolean
        if (!is_null($editableForNew) && !is_bool($editableForNew)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($editableForNew, true), gettype($editableForNew)), __LINE__);
        }
        $this->editableForNew = $editableForNew;
        return $this;
    }
    /**
     * Get editableForUpdate value
     * @return bool|null
     */
    public function getEditableForUpdate()
    {
        return $this->editableForUpdate;
    }
    /**
     * Set editableForUpdate value
     * @param bool $editableForUpdate
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutItem
     */
    public function setEditableForUpdate($editableForUpdate = null)
    {
        // validation for constraint: boolean
        if (!is_null($editableForUpdate) && !is_bool($editableForUpdate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($editableForUpdate, true), gettype($editableForUpdate)), __LINE__);
        }
        $this->editableForUpdate = $editableForUpdate;
        return $this;
    }
    /**
     * Get label value
     * @return string|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param string $label
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutItem
     */
    public function setLabel($label = null)
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        $this->label = $label;
        return $this;
    }
    /**
     * Get layoutComponents value
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutComponent[]|null
     */
    public function getLayoutComponents()
    {
        return $this->layoutComponents;
    }
    /**
     * This method is responsible for validating the values passed to the setLayoutComponents method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLayoutComponents method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLayoutComponentsForArrayConstraintsFromSetLayoutComponents(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeLayoutItemLayoutComponentsItem) {
            // validation for constraint: itemType
            if (!$describeLayoutItemLayoutComponentsItem instanceof \SFPartnerApi\v480\StructType\DescribeLayoutComponent) {
                $invalidValues[] = is_object($describeLayoutItemLayoutComponentsItem) ? get_class($describeLayoutItemLayoutComponentsItem) : sprintf('%s(%s)', gettype($describeLayoutItemLayoutComponentsItem), var_export($describeLayoutItemLayoutComponentsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The layoutComponents property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutComponent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set layoutComponents value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutComponent[] $layoutComponents
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutItem
     */
    public function setLayoutComponents(array $layoutComponents = array())
    {
        // validation for constraint: array
        if ('' !== ($layoutComponentsArrayErrorMessage = self::validateLayoutComponentsForArrayConstraintsFromSetLayoutComponents($layoutComponents))) {
            throw new \InvalidArgumentException($layoutComponentsArrayErrorMessage, __LINE__);
        }
        $this->layoutComponents = $layoutComponents;
        return $this;
    }
    /**
     * Add item to layoutComponents value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutComponent $item
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutItem
     */
    public function addToLayoutComponents(\SFPartnerApi\v480\StructType\DescribeLayoutComponent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeLayoutComponent) {
            throw new \InvalidArgumentException(sprintf('The layoutComponents property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutComponent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->layoutComponents[] = $item;
        return $this;
    }
    /**
     * Get placeholder value
     * @return bool|null
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }
    /**
     * Set placeholder value
     * @param bool $placeholder
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutItem
     */
    public function setPlaceholder($placeholder = null)
    {
        // validation for constraint: boolean
        if (!is_null($placeholder) && !is_bool($placeholder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($placeholder, true), gettype($placeholder)), __LINE__);
        }
        $this->placeholder = $placeholder;
        return $this;
    }
    /**
     * Get required value
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->required;
    }
    /**
     * Set required value
     * @param bool $required
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutItem
     */
    public function setRequired($required = null)
    {
        // validation for constraint: boolean
        if (!is_null($required) && !is_bool($required)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($required, true), gettype($required)), __LINE__);
        }
        $this->required = $required;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutItem
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
