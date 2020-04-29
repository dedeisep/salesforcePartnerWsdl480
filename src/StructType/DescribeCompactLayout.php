<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeCompactLayout StructType
 * @subpackage Structs
 */
class DescribeCompactLayout extends AbstractStructBase
{
    /**
     * The actions
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeLayoutButton[]
     */
    public $actions;
    /**
     * The fieldItems
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeLayoutItem[]
     */
    public $fieldItems;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $id;
    /**
     * The imageItems
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeLayoutItem[]
     */
    public $imageItems;
    /**
     * The label
     * @var string
     */
    public $label;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The objectType
     * @var string
     */
    public $objectType;
    /**
     * Constructor method for DescribeCompactLayout
     * @uses DescribeCompactLayout::setActions()
     * @uses DescribeCompactLayout::setFieldItems()
     * @uses DescribeCompactLayout::setId()
     * @uses DescribeCompactLayout::setImageItems()
     * @uses DescribeCompactLayout::setLabel()
     * @uses DescribeCompactLayout::setName()
     * @uses DescribeCompactLayout::setObjectType()
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutButton[] $actions
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutItem[] $fieldItems
     * @param string $id
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutItem[] $imageItems
     * @param string $label
     * @param string $name
     * @param string $objectType
     */
    public function __construct(array $actions = array(), array $fieldItems = array(), $id = null, array $imageItems = array(), $label = null, $name = null, $objectType = null)
    {
        $this
            ->setActions($actions)
            ->setFieldItems($fieldItems)
            ->setId($id)
            ->setImageItems($imageItems)
            ->setLabel($label)
            ->setName($name)
            ->setObjectType($objectType);
    }
    /**
     * Get actions value
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton[]|null
     */
    public function getActions()
    {
        return $this->actions;
    }
    /**
     * This method is responsible for validating the values passed to the setActions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setActions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateActionsForArrayConstraintsFromSetActions(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeCompactLayoutActionsItem) {
            // validation for constraint: itemType
            if (!$describeCompactLayoutActionsItem instanceof \SFPartnerApi\v480\StructType\DescribeLayoutButton) {
                $invalidValues[] = is_object($describeCompactLayoutActionsItem) ? get_class($describeCompactLayoutActionsItem) : sprintf('%s(%s)', gettype($describeCompactLayoutActionsItem), var_export($describeCompactLayoutActionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The actions property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutButton, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set actions value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutButton[] $actions
     * @return \SFPartnerApi\v480\StructType\DescribeCompactLayout
     */
    public function setActions(array $actions = array())
    {
        // validation for constraint: array
        if ('' !== ($actionsArrayErrorMessage = self::validateActionsForArrayConstraintsFromSetActions($actions))) {
            throw new \InvalidArgumentException($actionsArrayErrorMessage, __LINE__);
        }
        $this->actions = $actions;
        return $this;
    }
    /**
     * Add item to actions value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutButton $item
     * @return \SFPartnerApi\v480\StructType\DescribeCompactLayout
     */
    public function addToActions(\SFPartnerApi\v480\StructType\DescribeLayoutButton $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeLayoutButton) {
            throw new \InvalidArgumentException(sprintf('The actions property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutButton, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->actions[] = $item;
        return $this;
    }
    /**
     * Get fieldItems value
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutItem[]|null
     */
    public function getFieldItems()
    {
        return $this->fieldItems;
    }
    /**
     * This method is responsible for validating the values passed to the setFieldItems method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFieldItems method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFieldItemsForArrayConstraintsFromSetFieldItems(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeCompactLayoutFieldItemsItem) {
            // validation for constraint: itemType
            if (!$describeCompactLayoutFieldItemsItem instanceof \SFPartnerApi\v480\StructType\DescribeLayoutItem) {
                $invalidValues[] = is_object($describeCompactLayoutFieldItemsItem) ? get_class($describeCompactLayoutFieldItemsItem) : sprintf('%s(%s)', gettype($describeCompactLayoutFieldItemsItem), var_export($describeCompactLayoutFieldItemsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The fieldItems property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set fieldItems value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutItem[] $fieldItems
     * @return \SFPartnerApi\v480\StructType\DescribeCompactLayout
     */
    public function setFieldItems(array $fieldItems = array())
    {
        // validation for constraint: array
        if ('' !== ($fieldItemsArrayErrorMessage = self::validateFieldItemsForArrayConstraintsFromSetFieldItems($fieldItems))) {
            throw new \InvalidArgumentException($fieldItemsArrayErrorMessage, __LINE__);
        }
        $this->fieldItems = $fieldItems;
        return $this;
    }
    /**
     * Add item to fieldItems value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutItem $item
     * @return \SFPartnerApi\v480\StructType\DescribeCompactLayout
     */
    public function addToFieldItems(\SFPartnerApi\v480\StructType\DescribeLayoutItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeLayoutItem) {
            throw new \InvalidArgumentException(sprintf('The fieldItems property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->fieldItems[] = $item;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \SFPartnerApi\v480\StructType\DescribeCompactLayout
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($id) && mb_strlen($id) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($id)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($id) && !preg_match('/[a-zA-Z0-9]{18}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($id, true)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get imageItems value
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutItem[]|null
     */
    public function getImageItems()
    {
        return $this->imageItems;
    }
    /**
     * This method is responsible for validating the values passed to the setImageItems method
     * This method is willingly generated in order to preserve the one-line inline validation within the setImageItems method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateImageItemsForArrayConstraintsFromSetImageItems(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeCompactLayoutImageItemsItem) {
            // validation for constraint: itemType
            if (!$describeCompactLayoutImageItemsItem instanceof \SFPartnerApi\v480\StructType\DescribeLayoutItem) {
                $invalidValues[] = is_object($describeCompactLayoutImageItemsItem) ? get_class($describeCompactLayoutImageItemsItem) : sprintf('%s(%s)', gettype($describeCompactLayoutImageItemsItem), var_export($describeCompactLayoutImageItemsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The imageItems property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set imageItems value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutItem[] $imageItems
     * @return \SFPartnerApi\v480\StructType\DescribeCompactLayout
     */
    public function setImageItems(array $imageItems = array())
    {
        // validation for constraint: array
        if ('' !== ($imageItemsArrayErrorMessage = self::validateImageItemsForArrayConstraintsFromSetImageItems($imageItems))) {
            throw new \InvalidArgumentException($imageItemsArrayErrorMessage, __LINE__);
        }
        $this->imageItems = $imageItems;
        return $this;
    }
    /**
     * Add item to imageItems value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutItem $item
     * @return \SFPartnerApi\v480\StructType\DescribeCompactLayout
     */
    public function addToImageItems(\SFPartnerApi\v480\StructType\DescribeLayoutItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeLayoutItem) {
            throw new \InvalidArgumentException(sprintf('The imageItems property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->imageItems[] = $item;
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
     * @return \SFPartnerApi\v480\StructType\DescribeCompactLayout
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
     * @return \SFPartnerApi\v480\StructType\DescribeCompactLayout
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
     * Get objectType value
     * @return string|null
     */
    public function getObjectType()
    {
        return $this->objectType;
    }
    /**
     * Set objectType value
     * @param string $objectType
     * @return \SFPartnerApi\v480\StructType\DescribeCompactLayout
     */
    public function setObjectType($objectType = null)
    {
        // validation for constraint: string
        if (!is_null($objectType) && !is_string($objectType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objectType, true), gettype($objectType)), __LINE__);
        }
        $this->objectType = $objectType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeCompactLayout
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
