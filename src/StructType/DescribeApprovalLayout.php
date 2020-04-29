<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeApprovalLayout StructType
 * @subpackage Structs
 */
class DescribeApprovalLayout extends AbstractStructBase
{
    /**
     * The layoutItems
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \SFPartnerApi\v480\StructType\DescribeLayoutItem[]
     */
    public $layoutItems;
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
     * Constructor method for DescribeApprovalLayout
     * @uses DescribeApprovalLayout::setLayoutItems()
     * @uses DescribeApprovalLayout::setId()
     * @uses DescribeApprovalLayout::setLabel()
     * @uses DescribeApprovalLayout::setName()
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutItem[] $layoutItems
     * @param string $id
     * @param string $label
     * @param string $name
     */
    public function __construct(array $layoutItems = array(), $id = null, $label = null, $name = null)
    {
        $this
            ->setLayoutItems($layoutItems)
            ->setId($id)
            ->setLabel($label)
            ->setName($name);
    }
    /**
     * Get layoutItems value
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutItem[]
     */
    public function getLayoutItems()
    {
        return $this->layoutItems;
    }
    /**
     * This method is responsible for validating the values passed to the setLayoutItems method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLayoutItems method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLayoutItemsForArrayConstraintsFromSetLayoutItems(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeApprovalLayoutLayoutItemsItem) {
            // validation for constraint: itemType
            if (!$describeApprovalLayoutLayoutItemsItem instanceof \SFPartnerApi\v480\StructType\DescribeLayoutItem) {
                $invalidValues[] = is_object($describeApprovalLayoutLayoutItemsItem) ? get_class($describeApprovalLayoutLayoutItemsItem) : sprintf('%s(%s)', gettype($describeApprovalLayoutLayoutItemsItem), var_export($describeApprovalLayoutLayoutItemsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The layoutItems property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set layoutItems value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutItem[] $layoutItems
     * @return \SFPartnerApi\v480\StructType\DescribeApprovalLayout
     */
    public function setLayoutItems(array $layoutItems = array())
    {
        // validation for constraint: array
        if ('' !== ($layoutItemsArrayErrorMessage = self::validateLayoutItemsForArrayConstraintsFromSetLayoutItems($layoutItems))) {
            throw new \InvalidArgumentException($layoutItemsArrayErrorMessage, __LINE__);
        }
        $this->layoutItems = $layoutItems;
        return $this;
    }
    /**
     * Add item to layoutItems value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutItem $item
     * @return \SFPartnerApi\v480\StructType\DescribeApprovalLayout
     */
    public function addToLayoutItems(\SFPartnerApi\v480\StructType\DescribeLayoutItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeLayoutItem) {
            throw new \InvalidArgumentException(sprintf('The layoutItems property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->layoutItems[] = $item;
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
     * @return \SFPartnerApi\v480\StructType\DescribeApprovalLayout
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
     * @return \SFPartnerApi\v480\StructType\DescribeApprovalLayout
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
     * @return \SFPartnerApi\v480\StructType\DescribeApprovalLayout
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
     * @return \SFPartnerApi\v480\StructType\DescribeApprovalLayout
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
