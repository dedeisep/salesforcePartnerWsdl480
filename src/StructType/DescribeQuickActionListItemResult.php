<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeQuickActionListItemResult StructType
 * @subpackage Structs
 */
class DescribeQuickActionListItemResult extends AbstractStructBase
{
    /**
     * The accessLevelRequired
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $accessLevelRequired;
    /**
     * The colors
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeColor[]
     */
    public $colors;
    /**
     * The iconUrl
     * Meta information extracted from the WSDL
     * - nillable: true
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
     * The quickActionName
     * @var string
     */
    public $quickActionName;
    /**
     * The targetSobjectType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $targetSobjectType;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * Constructor method for DescribeQuickActionListItemResult
     * @uses DescribeQuickActionListItemResult::setAccessLevelRequired()
     * @uses DescribeQuickActionListItemResult::setColors()
     * @uses DescribeQuickActionListItemResult::setIconUrl()
     * @uses DescribeQuickActionListItemResult::setIcons()
     * @uses DescribeQuickActionListItemResult::setLabel()
     * @uses DescribeQuickActionListItemResult::setMiniIconUrl()
     * @uses DescribeQuickActionListItemResult::setQuickActionName()
     * @uses DescribeQuickActionListItemResult::setTargetSobjectType()
     * @uses DescribeQuickActionListItemResult::setType()
     * @param string $accessLevelRequired
     * @param \SFPartnerApi\v480\StructType\DescribeColor[] $colors
     * @param string $iconUrl
     * @param \SFPartnerApi\v480\StructType\DescribeIcon[] $icons
     * @param string $label
     * @param string $miniIconUrl
     * @param string $quickActionName
     * @param string $targetSobjectType
     * @param string $type
     */
    public function __construct($accessLevelRequired = null, array $colors = array(), $iconUrl = null, array $icons = array(), $label = null, $miniIconUrl = null, $quickActionName = null, $targetSobjectType = null, $type = null)
    {
        $this
            ->setAccessLevelRequired($accessLevelRequired)
            ->setColors($colors)
            ->setIconUrl($iconUrl)
            ->setIcons($icons)
            ->setLabel($label)
            ->setMiniIconUrl($miniIconUrl)
            ->setQuickActionName($quickActionName)
            ->setTargetSobjectType($targetSobjectType)
            ->setType($type);
    }
    /**
     * Get accessLevelRequired value
     * @return string|null
     */
    public function getAccessLevelRequired()
    {
        return $this->accessLevelRequired;
    }
    /**
     * Set accessLevelRequired value
     * @uses \SFPartnerApi\v480\EnumType\ShareAccessLevel::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\ShareAccessLevel::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $accessLevelRequired
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionListItemResult
     */
    public function setAccessLevelRequired($accessLevelRequired = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\ShareAccessLevel::valueIsValid($accessLevelRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\ShareAccessLevel', is_array($accessLevelRequired) ? implode(', ', $accessLevelRequired) : var_export($accessLevelRequired, true), implode(', ', \SFPartnerApi\v480\EnumType\ShareAccessLevel::getValidValues())), __LINE__);
        }
        $this->accessLevelRequired = $accessLevelRequired;
        return $this;
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
        foreach ($values as $describeQuickActionListItemResultColorsItem) {
            // validation for constraint: itemType
            if (!$describeQuickActionListItemResultColorsItem instanceof \SFPartnerApi\v480\StructType\DescribeColor) {
                $invalidValues[] = is_object($describeQuickActionListItemResultColorsItem) ? get_class($describeQuickActionListItemResultColorsItem) : sprintf('%s(%s)', gettype($describeQuickActionListItemResultColorsItem), var_export($describeQuickActionListItemResultColorsItem, true));
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
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionListItemResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionListItemResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionListItemResult
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
        foreach ($values as $describeQuickActionListItemResultIconsItem) {
            // validation for constraint: itemType
            if (!$describeQuickActionListItemResultIconsItem instanceof \SFPartnerApi\v480\StructType\DescribeIcon) {
                $invalidValues[] = is_object($describeQuickActionListItemResultIconsItem) ? get_class($describeQuickActionListItemResultIconsItem) : sprintf('%s(%s)', gettype($describeQuickActionListItemResultIconsItem), var_export($describeQuickActionListItemResultIconsItem, true));
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
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionListItemResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionListItemResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionListItemResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionListItemResult
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
     * Get quickActionName value
     * @return string|null
     */
    public function getQuickActionName()
    {
        return $this->quickActionName;
    }
    /**
     * Set quickActionName value
     * @param string $quickActionName
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionListItemResult
     */
    public function setQuickActionName($quickActionName = null)
    {
        // validation for constraint: string
        if (!is_null($quickActionName) && !is_string($quickActionName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quickActionName, true), gettype($quickActionName)), __LINE__);
        }
        $this->quickActionName = $quickActionName;
        return $this;
    }
    /**
     * Get targetSobjectType value
     * @return string|null
     */
    public function getTargetSobjectType()
    {
        return $this->targetSobjectType;
    }
    /**
     * Set targetSobjectType value
     * @param string $targetSobjectType
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionListItemResult
     */
    public function setTargetSobjectType($targetSobjectType = null)
    {
        // validation for constraint: string
        if (!is_null($targetSobjectType) && !is_string($targetSobjectType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetSobjectType, true), gettype($targetSobjectType)), __LINE__);
        }
        $this->targetSobjectType = $targetSobjectType;
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
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionListItemResult
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionListItemResult
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
