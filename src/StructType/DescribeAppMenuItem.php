<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeAppMenuItem StructType
 * @subpackage Structs
 */
class DescribeAppMenuItem extends AbstractStructBase
{
    /**
     * The colors
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeColor[]
     */
    public $colors;
    /**
     * The content
     * @var string
     */
    public $content;
    /**
     * The icons
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeIcon[]
     */
    public $icons;
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
     * The type
     * @var string
     */
    public $type;
    /**
     * The url
     * @var string
     */
    public $url;
    /**
     * Constructor method for DescribeAppMenuItem
     * @uses DescribeAppMenuItem::setColors()
     * @uses DescribeAppMenuItem::setContent()
     * @uses DescribeAppMenuItem::setIcons()
     * @uses DescribeAppMenuItem::setLabel()
     * @uses DescribeAppMenuItem::setName()
     * @uses DescribeAppMenuItem::setType()
     * @uses DescribeAppMenuItem::setUrl()
     * @param \SFPartnerApi\v480\StructType\DescribeColor[] $colors
     * @param string $content
     * @param \SFPartnerApi\v480\StructType\DescribeIcon[] $icons
     * @param string $label
     * @param string $name
     * @param string $type
     * @param string $url
     */
    public function __construct(array $colors = array(), $content = null, array $icons = array(), $label = null, $name = null, $type = null, $url = null)
    {
        $this
            ->setColors($colors)
            ->setContent($content)
            ->setIcons($icons)
            ->setLabel($label)
            ->setName($name)
            ->setType($type)
            ->setUrl($url);
    }
    /**
     * Get colors value
     * @return \SFPartnerApi\v480\StructType\DescribeColor[]|null
     */
    public function getColors()
    {
        return $this->colors;
    }
    /**
     * This method is responsible for validating the values passed to the setColors method
     * This method is willingly generated in order to preserve the one-line inline validation within the setColors method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateColorsForArrayConstraintsFromSetColors(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeAppMenuItemColorsItem) {
            // validation for constraint: itemType
            if (!$describeAppMenuItemColorsItem instanceof \SFPartnerApi\v480\StructType\DescribeColor) {
                $invalidValues[] = is_object($describeAppMenuItemColorsItem) ? get_class($describeAppMenuItemColorsItem) : sprintf('%s(%s)', gettype($describeAppMenuItemColorsItem), var_export($describeAppMenuItemColorsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The colors property can only contain items of type \SFPartnerApi\v480\StructType\DescribeColor, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set colors value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeColor[] $colors
     * @return \SFPartnerApi\v480\StructType\DescribeAppMenuItem
     */
    public function setColors(array $colors = array())
    {
        // validation for constraint: array
        if ('' !== ($colorsArrayErrorMessage = self::validateColorsForArrayConstraintsFromSetColors($colors))) {
            throw new \InvalidArgumentException($colorsArrayErrorMessage, __LINE__);
        }
        $this->colors = $colors;
        return $this;
    }
    /**
     * Add item to colors value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeColor $item
     * @return \SFPartnerApi\v480\StructType\DescribeAppMenuItem
     */
    public function addToColors(\SFPartnerApi\v480\StructType\DescribeColor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeColor) {
            throw new \InvalidArgumentException(sprintf('The colors property can only contain items of type \SFPartnerApi\v480\StructType\DescribeColor, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->colors[] = $item;
        return $this;
    }
    /**
     * Get content value
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * Set content value
     * @param string $content
     * @return \SFPartnerApi\v480\StructType\DescribeAppMenuItem
     */
    public function setContent($content = null)
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content, true), gettype($content)), __LINE__);
        }
        $this->content = $content;
        return $this;
    }
    /**
     * Get icons value
     * @return \SFPartnerApi\v480\StructType\DescribeIcon[]|null
     */
    public function getIcons()
    {
        return $this->icons;
    }
    /**
     * This method is responsible for validating the values passed to the setIcons method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIcons method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIconsForArrayConstraintsFromSetIcons(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeAppMenuItemIconsItem) {
            // validation for constraint: itemType
            if (!$describeAppMenuItemIconsItem instanceof \SFPartnerApi\v480\StructType\DescribeIcon) {
                $invalidValues[] = is_object($describeAppMenuItemIconsItem) ? get_class($describeAppMenuItemIconsItem) : sprintf('%s(%s)', gettype($describeAppMenuItemIconsItem), var_export($describeAppMenuItemIconsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The icons property can only contain items of type \SFPartnerApi\v480\StructType\DescribeIcon, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set icons value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeIcon[] $icons
     * @return \SFPartnerApi\v480\StructType\DescribeAppMenuItem
     */
    public function setIcons(array $icons = array())
    {
        // validation for constraint: array
        if ('' !== ($iconsArrayErrorMessage = self::validateIconsForArrayConstraintsFromSetIcons($icons))) {
            throw new \InvalidArgumentException($iconsArrayErrorMessage, __LINE__);
        }
        $this->icons = $icons;
        return $this;
    }
    /**
     * Add item to icons value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeIcon $item
     * @return \SFPartnerApi\v480\StructType\DescribeAppMenuItem
     */
    public function addToIcons(\SFPartnerApi\v480\StructType\DescribeIcon $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeIcon) {
            throw new \InvalidArgumentException(sprintf('The icons property can only contain items of type \SFPartnerApi\v480\StructType\DescribeIcon, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->icons[] = $item;
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
     * @return \SFPartnerApi\v480\StructType\DescribeAppMenuItem
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
     * @return \SFPartnerApi\v480\StructType\DescribeAppMenuItem
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \SFPartnerApi\v480\StructType\DescribeAppMenuItem
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get url value
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * Set url value
     * @param string $url
     * @return \SFPartnerApi\v480\StructType\DescribeAppMenuItem
     */
    public function setUrl($url = null)
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        $this->url = $url;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeAppMenuItem
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
