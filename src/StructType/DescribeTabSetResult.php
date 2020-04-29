<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeTabSetResult StructType
 * @subpackage Structs
 */
class DescribeTabSetResult extends AbstractStructBase
{
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The label
     * @var string
     */
    public $label;
    /**
     * The logoUrl
     * @var string
     */
    public $logoUrl;
    /**
     * The namespace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $namespace;
    /**
     * The selected
     * @var bool
     */
    public $selected;
    /**
     * The tabSetId
     * @var string
     */
    public $tabSetId;
    /**
     * The tabs
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeTab[]
     */
    public $tabs;
    /**
     * Constructor method for DescribeTabSetResult
     * @uses DescribeTabSetResult::setDescription()
     * @uses DescribeTabSetResult::setLabel()
     * @uses DescribeTabSetResult::setLogoUrl()
     * @uses DescribeTabSetResult::setNamespace()
     * @uses DescribeTabSetResult::setSelected()
     * @uses DescribeTabSetResult::setTabSetId()
     * @uses DescribeTabSetResult::setTabs()
     * @param string $description
     * @param string $label
     * @param string $logoUrl
     * @param string $namespace
     * @param bool $selected
     * @param string $tabSetId
     * @param \SFPartnerApi\v480\StructType\DescribeTab[] $tabs
     */
    public function __construct($description = null, $label = null, $logoUrl = null, $namespace = null, $selected = null, $tabSetId = null, array $tabs = array())
    {
        $this
            ->setDescription($description)
            ->setLabel($label)
            ->setLogoUrl($logoUrl)
            ->setNamespace($namespace)
            ->setSelected($selected)
            ->setTabSetId($tabSetId)
            ->setTabs($tabs);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \SFPartnerApi\v480\StructType\DescribeTabSetResult
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
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
     * @return \SFPartnerApi\v480\StructType\DescribeTabSetResult
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
     * Get logoUrl value
     * @return string|null
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }
    /**
     * Set logoUrl value
     * @param string $logoUrl
     * @return \SFPartnerApi\v480\StructType\DescribeTabSetResult
     */
    public function setLogoUrl($logoUrl = null)
    {
        // validation for constraint: string
        if (!is_null($logoUrl) && !is_string($logoUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logoUrl, true), gettype($logoUrl)), __LINE__);
        }
        $this->logoUrl = $logoUrl;
        return $this;
    }
    /**
     * Get namespace value
     * @return string|null
     */
    public function getNamespace()
    {
        return $this->namespace;
    }
    /**
     * Set namespace value
     * @param string $namespace
     * @return \SFPartnerApi\v480\StructType\DescribeTabSetResult
     */
    public function setNamespace($namespace = null)
    {
        // validation for constraint: string
        if (!is_null($namespace) && !is_string($namespace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($namespace, true), gettype($namespace)), __LINE__);
        }
        $this->namespace = $namespace;
        return $this;
    }
    /**
     * Get selected value
     * @return bool|null
     */
    public function getSelected()
    {
        return $this->selected;
    }
    /**
     * Set selected value
     * @param bool $selected
     * @return \SFPartnerApi\v480\StructType\DescribeTabSetResult
     */
    public function setSelected($selected = null)
    {
        // validation for constraint: boolean
        if (!is_null($selected) && !is_bool($selected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($selected, true), gettype($selected)), __LINE__);
        }
        $this->selected = $selected;
        return $this;
    }
    /**
     * Get tabSetId value
     * @return string|null
     */
    public function getTabSetId()
    {
        return $this->tabSetId;
    }
    /**
     * Set tabSetId value
     * @param string $tabSetId
     * @return \SFPartnerApi\v480\StructType\DescribeTabSetResult
     */
    public function setTabSetId($tabSetId = null)
    {
        // validation for constraint: string
        if (!is_null($tabSetId) && !is_string($tabSetId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tabSetId, true), gettype($tabSetId)), __LINE__);
        }
        $this->tabSetId = $tabSetId;
        return $this;
    }
    /**
     * Get tabs value
     * @return \SFPartnerApi\v480\StructType\DescribeTab[]|null
     */
    public function getTabs()
    {
        return $this->tabs;
    }
    /**
     * This method is responsible for validating the values passed to the setTabs method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTabs method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTabsForArrayConstraintsFromSetTabs(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeTabSetResultTabsItem) {
            // validation for constraint: itemType
            if (!$describeTabSetResultTabsItem instanceof \SFPartnerApi\v480\StructType\DescribeTab) {
                $invalidValues[] = is_object($describeTabSetResultTabsItem) ? get_class($describeTabSetResultTabsItem) : sprintf('%s(%s)', gettype($describeTabSetResultTabsItem), var_export($describeTabSetResultTabsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The tabs property can only contain items of type \SFPartnerApi\v480\StructType\DescribeTab, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set tabs value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeTab[] $tabs
     * @return \SFPartnerApi\v480\StructType\DescribeTabSetResult
     */
    public function setTabs(array $tabs = array())
    {
        // validation for constraint: array
        if ('' !== ($tabsArrayErrorMessage = self::validateTabsForArrayConstraintsFromSetTabs($tabs))) {
            throw new \InvalidArgumentException($tabsArrayErrorMessage, __LINE__);
        }
        $this->tabs = $tabs;
        return $this;
    }
    /**
     * Add item to tabs value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeTab $item
     * @return \SFPartnerApi\v480\StructType\DescribeTabSetResult
     */
    public function addToTabs(\SFPartnerApi\v480\StructType\DescribeTab $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeTab) {
            throw new \InvalidArgumentException(sprintf('The tabs property can only contain items of type \SFPartnerApi\v480\StructType\DescribeTab, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->tabs[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeTabSetResult
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
