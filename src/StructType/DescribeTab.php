<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeTab StructType
 * @subpackage Structs
 */
class DescribeTab extends AbstractStructBase
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
     * The custom
     * @var bool
     */
    public $custom;
    /**
     * The iconUrl
     * @var string
     */
    public $iconUrl;
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
     * The miniIconUrl
     * @var string
     */
    public $miniIconUrl;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The sobjectName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sobjectName;
    /**
     * The url
     * @var string
     */
    public $url;
    /**
     * Constructor method for DescribeTab
     * @uses DescribeTab::setColors()
     * @uses DescribeTab::setCustom()
     * @uses DescribeTab::setIconUrl()
     * @uses DescribeTab::setIcons()
     * @uses DescribeTab::setLabel()
     * @uses DescribeTab::setMiniIconUrl()
     * @uses DescribeTab::setName()
     * @uses DescribeTab::setSobjectName()
     * @uses DescribeTab::setUrl()
     * @param \SFPartnerApi\v480\StructType\DescribeColor[] $colors
     * @param bool $custom
     * @param string $iconUrl
     * @param \SFPartnerApi\v480\StructType\DescribeIcon[] $icons
     * @param string $label
     * @param string $miniIconUrl
     * @param string $name
     * @param string $sobjectName
     * @param string $url
     */
    public function __construct(array $colors = array(), $custom = null, $iconUrl = null, array $icons = array(), $label = null, $miniIconUrl = null, $name = null, $sobjectName = null, $url = null)
    {
        $this
            ->setColors($colors)
            ->setCustom($custom)
            ->setIconUrl($iconUrl)
            ->setIcons($icons)
            ->setLabel($label)
            ->setMiniIconUrl($miniIconUrl)
            ->setName($name)
            ->setSobjectName($sobjectName)
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
        foreach ($values as $describeTabColorsItem) {
            // validation for constraint: itemType
            if (!$describeTabColorsItem instanceof \SFPartnerApi\v480\StructType\DescribeColor) {
                $invalidValues[] = is_object($describeTabColorsItem) ? get_class($describeTabColorsItem) : sprintf('%s(%s)', gettype($describeTabColorsItem), var_export($describeTabColorsItem, true));
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
     * @return \SFPartnerApi\v480\StructType\DescribeTab
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
     * @return \SFPartnerApi\v480\StructType\DescribeTab
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
     * Get custom value
     * @return bool|null
     */
    public function getCustom()
    {
        return $this->custom;
    }
    /**
     * Set custom value
     * @param bool $custom
     * @return \SFPartnerApi\v480\StructType\DescribeTab
     */
    public function setCustom($custom = null)
    {
        // validation for constraint: boolean
        if (!is_null($custom) && !is_bool($custom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($custom, true), gettype($custom)), __LINE__);
        }
        $this->custom = $custom;
        return $this;
    }
    /**
     * Get iconUrl value
     * @return string|null
     */
    public function getIconUrl()
    {
        return $this->iconUrl;
    }
    /**
     * Set iconUrl value
     * @param string $iconUrl
     * @return \SFPartnerApi\v480\StructType\DescribeTab
     */
    public function setIconUrl($iconUrl = null)
    {
        // validation for constraint: string
        if (!is_null($iconUrl) && !is_string($iconUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iconUrl, true), gettype($iconUrl)), __LINE__);
        }
        $this->iconUrl = $iconUrl;
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
        foreach ($values as $describeTabIconsItem) {
            // validation for constraint: itemType
            if (!$describeTabIconsItem instanceof \SFPartnerApi\v480\StructType\DescribeIcon) {
                $invalidValues[] = is_object($describeTabIconsItem) ? get_class($describeTabIconsItem) : sprintf('%s(%s)', gettype($describeTabIconsItem), var_export($describeTabIconsItem, true));
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
     * @return \SFPartnerApi\v480\StructType\DescribeTab
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
     * @return \SFPartnerApi\v480\StructType\DescribeTab
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
     * @return \SFPartnerApi\v480\StructType\DescribeTab
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
     * Get miniIconUrl value
     * @return string|null
     */
    public function getMiniIconUrl()
    {
        return $this->miniIconUrl;
    }
    /**
     * Set miniIconUrl value
     * @param string $miniIconUrl
     * @return \SFPartnerApi\v480\StructType\DescribeTab
     */
    public function setMiniIconUrl($miniIconUrl = null)
    {
        // validation for constraint: string
        if (!is_null($miniIconUrl) && !is_string($miniIconUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($miniIconUrl, true), gettype($miniIconUrl)), __LINE__);
        }
        $this->miniIconUrl = $miniIconUrl;
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
     * @return \SFPartnerApi\v480\StructType\DescribeTab
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
     * Get sobjectName value
     * @return string|null
     */
    public function getSobjectName()
    {
        return $this->sobjectName;
    }
    /**
     * Set sobjectName value
     * @param string $sobjectName
     * @return \SFPartnerApi\v480\StructType\DescribeTab
     */
    public function setSobjectName($sobjectName = null)
    {
        // validation for constraint: string
        if (!is_null($sobjectName) && !is_string($sobjectName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sobjectName, true), gettype($sobjectName)), __LINE__);
        }
        $this->sobjectName = $sobjectName;
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
     * @return \SFPartnerApi\v480\StructType\DescribeTab
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
     * @return \SFPartnerApi\v480\StructType\DescribeTab
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
