<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeLayoutButton StructType
 * @subpackage Structs
 */
class DescribeLayoutButton extends AbstractStructBase
{
    /**
     * The behavior
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $behavior;
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
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $content;
    /**
     * The contentSource
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $contentSource;
    /**
     * The custom
     * @var bool
     */
    public $custom;
    /**
     * The encoding
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $encoding;
    /**
     * The height
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $height;
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
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $label;
    /**
     * The menubar
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $menubar;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The overridden
     * @var bool
     */
    public $overridden;
    /**
     * The resizeable
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $resizeable;
    /**
     * The scrollbars
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $scrollbars;
    /**
     * The showsLocation
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $showsLocation;
    /**
     * The showsStatus
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $showsStatus;
    /**
     * The toolbar
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $toolbar;
    /**
     * The url
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $url;
    /**
     * The width
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $width;
    /**
     * The windowPosition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $windowPosition;
    /**
     * Constructor method for DescribeLayoutButton
     * @uses DescribeLayoutButton::setBehavior()
     * @uses DescribeLayoutButton::setColors()
     * @uses DescribeLayoutButton::setContent()
     * @uses DescribeLayoutButton::setContentSource()
     * @uses DescribeLayoutButton::setCustom()
     * @uses DescribeLayoutButton::setEncoding()
     * @uses DescribeLayoutButton::setHeight()
     * @uses DescribeLayoutButton::setIcons()
     * @uses DescribeLayoutButton::setLabel()
     * @uses DescribeLayoutButton::setMenubar()
     * @uses DescribeLayoutButton::setName()
     * @uses DescribeLayoutButton::setOverridden()
     * @uses DescribeLayoutButton::setResizeable()
     * @uses DescribeLayoutButton::setScrollbars()
     * @uses DescribeLayoutButton::setShowsLocation()
     * @uses DescribeLayoutButton::setShowsStatus()
     * @uses DescribeLayoutButton::setToolbar()
     * @uses DescribeLayoutButton::setUrl()
     * @uses DescribeLayoutButton::setWidth()
     * @uses DescribeLayoutButton::setWindowPosition()
     * @param string $behavior
     * @param \SFPartnerApi\v480\StructType\DescribeColor[] $colors
     * @param string $content
     * @param string $contentSource
     * @param bool $custom
     * @param string $encoding
     * @param int $height
     * @param \SFPartnerApi\v480\StructType\DescribeIcon[] $icons
     * @param string $label
     * @param bool $menubar
     * @param string $name
     * @param bool $overridden
     * @param bool $resizeable
     * @param bool $scrollbars
     * @param bool $showsLocation
     * @param bool $showsStatus
     * @param bool $toolbar
     * @param string $url
     * @param int $width
     * @param string $windowPosition
     */
    public function __construct($behavior = null, array $colors = array(), $content = null, $contentSource = null, $custom = null, $encoding = null, $height = null, array $icons = array(), $label = null, $menubar = null, $name = null, $overridden = null, $resizeable = null, $scrollbars = null, $showsLocation = null, $showsStatus = null, $toolbar = null, $url = null, $width = null, $windowPosition = null)
    {
        $this
            ->setBehavior($behavior)
            ->setColors($colors)
            ->setContent($content)
            ->setContentSource($contentSource)
            ->setCustom($custom)
            ->setEncoding($encoding)
            ->setHeight($height)
            ->setIcons($icons)
            ->setLabel($label)
            ->setMenubar($menubar)
            ->setName($name)
            ->setOverridden($overridden)
            ->setResizeable($resizeable)
            ->setScrollbars($scrollbars)
            ->setShowsLocation($showsLocation)
            ->setShowsStatus($showsStatus)
            ->setToolbar($toolbar)
            ->setUrl($url)
            ->setWidth($width)
            ->setWindowPosition($windowPosition);
    }
    /**
     * Get behavior value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBehavior()
    {
        return isset($this->behavior) ? $this->behavior : null;
    }
    /**
     * Set behavior value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \SFPartnerApi\v480\EnumType\WebLinkWindowType::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\WebLinkWindowType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $behavior
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
     */
    public function setBehavior($behavior = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\WebLinkWindowType::valueIsValid($behavior)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\WebLinkWindowType', is_array($behavior) ? implode(', ', $behavior) : var_export($behavior, true), implode(', ', \SFPartnerApi\v480\EnumType\WebLinkWindowType::getValidValues())), __LINE__);
        }
        if (is_null($behavior) || (is_array($behavior) && empty($behavior))) {
            unset($this->behavior);
        } else {
            $this->behavior = $behavior;
        }
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
        foreach ($values as $describeLayoutButtonColorsItem) {
            // validation for constraint: itemType
            if (!$describeLayoutButtonColorsItem instanceof \SFPartnerApi\v480\StructType\DescribeColor) {
                $invalidValues[] = is_object($describeLayoutButtonColorsItem) ? get_class($describeLayoutButtonColorsItem) : sprintf('%s(%s)', gettype($describeLayoutButtonColorsItem), var_export($describeLayoutButtonColorsItem, true));
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
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
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
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
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
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContent()
    {
        return isset($this->content) ? $this->content : null;
    }
    /**
     * Set content value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $content
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
     */
    public function setContent($content = null)
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content, true), gettype($content)), __LINE__);
        }
        if (is_null($content) || (is_array($content) && empty($content))) {
            unset($this->content);
        } else {
            $this->content = $content;
        }
        return $this;
    }
    /**
     * Get contentSource value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContentSource()
    {
        return isset($this->contentSource) ? $this->contentSource : null;
    }
    /**
     * Set contentSource value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \SFPartnerApi\v480\EnumType\WebLinkType::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\WebLinkType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $contentSource
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
     */
    public function setContentSource($contentSource = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\WebLinkType::valueIsValid($contentSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\WebLinkType', is_array($contentSource) ? implode(', ', $contentSource) : var_export($contentSource, true), implode(', ', \SFPartnerApi\v480\EnumType\WebLinkType::getValidValues())), __LINE__);
        }
        if (is_null($contentSource) || (is_array($contentSource) && empty($contentSource))) {
            unset($this->contentSource);
        } else {
            $this->contentSource = $contentSource;
        }
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
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
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
     * Get encoding value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEncoding()
    {
        return isset($this->encoding) ? $this->encoding : null;
    }
    /**
     * Set encoding value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $encoding
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
     */
    public function setEncoding($encoding = null)
    {
        // validation for constraint: string
        if (!is_null($encoding) && !is_string($encoding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encoding, true), gettype($encoding)), __LINE__);
        }
        if (is_null($encoding) || (is_array($encoding) && empty($encoding))) {
            unset($this->encoding);
        } else {
            $this->encoding = $encoding;
        }
        return $this;
    }
    /**
     * Get height value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getHeight()
    {
        return isset($this->height) ? $this->height : null;
    }
    /**
     * Set height value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $height
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
     */
    public function setHeight($height = null)
    {
        // validation for constraint: int
        if (!is_null($height) && !(is_int($height) || ctype_digit($height))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        if (is_null($height) || (is_array($height) && empty($height))) {
            unset($this->height);
        } else {
            $this->height = $height;
        }
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
        foreach ($values as $describeLayoutButtonIconsItem) {
            // validation for constraint: itemType
            if (!$describeLayoutButtonIconsItem instanceof \SFPartnerApi\v480\StructType\DescribeIcon) {
                $invalidValues[] = is_object($describeLayoutButtonIconsItem) ? get_class($describeLayoutButtonIconsItem) : sprintf('%s(%s)', gettype($describeLayoutButtonIconsItem), var_export($describeLayoutButtonIconsItem, true));
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
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
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
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
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
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
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
     * Get menubar value
     * @return bool|null
     */
    public function getMenubar()
    {
        return $this->menubar;
    }
    /**
     * Set menubar value
     * @param bool $menubar
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
     */
    public function setMenubar($menubar = null)
    {
        // validation for constraint: boolean
        if (!is_null($menubar) && !is_bool($menubar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($menubar, true), gettype($menubar)), __LINE__);
        }
        $this->menubar = $menubar;
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
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
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
     * Get overridden value
     * @return bool|null
     */
    public function getOverridden()
    {
        return $this->overridden;
    }
    /**
     * Set overridden value
     * @param bool $overridden
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
     */
    public function setOverridden($overridden = null)
    {
        // validation for constraint: boolean
        if (!is_null($overridden) && !is_bool($overridden)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($overridden, true), gettype($overridden)), __LINE__);
        }
        $this->overridden = $overridden;
        return $this;
    }
    /**
     * Get resizeable value
     * @return bool|null
     */
    public function getResizeable()
    {
        return $this->resizeable;
    }
    /**
     * Set resizeable value
     * @param bool $resizeable
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
     */
    public function setResizeable($resizeable = null)
    {
        // validation for constraint: boolean
        if (!is_null($resizeable) && !is_bool($resizeable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($resizeable, true), gettype($resizeable)), __LINE__);
        }
        $this->resizeable = $resizeable;
        return $this;
    }
    /**
     * Get scrollbars value
     * @return bool|null
     */
    public function getScrollbars()
    {
        return $this->scrollbars;
    }
    /**
     * Set scrollbars value
     * @param bool $scrollbars
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
     */
    public function setScrollbars($scrollbars = null)
    {
        // validation for constraint: boolean
        if (!is_null($scrollbars) && !is_bool($scrollbars)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($scrollbars, true), gettype($scrollbars)), __LINE__);
        }
        $this->scrollbars = $scrollbars;
        return $this;
    }
    /**
     * Get showsLocation value
     * @return bool|null
     */
    public function getShowsLocation()
    {
        return $this->showsLocation;
    }
    /**
     * Set showsLocation value
     * @param bool $showsLocation
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
     */
    public function setShowsLocation($showsLocation = null)
    {
        // validation for constraint: boolean
        if (!is_null($showsLocation) && !is_bool($showsLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showsLocation, true), gettype($showsLocation)), __LINE__);
        }
        $this->showsLocation = $showsLocation;
        return $this;
    }
    /**
     * Get showsStatus value
     * @return bool|null
     */
    public function getShowsStatus()
    {
        return $this->showsStatus;
    }
    /**
     * Set showsStatus value
     * @param bool $showsStatus
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
     */
    public function setShowsStatus($showsStatus = null)
    {
        // validation for constraint: boolean
        if (!is_null($showsStatus) && !is_bool($showsStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showsStatus, true), gettype($showsStatus)), __LINE__);
        }
        $this->showsStatus = $showsStatus;
        return $this;
    }
    /**
     * Get toolbar value
     * @return bool|null
     */
    public function getToolbar()
    {
        return $this->toolbar;
    }
    /**
     * Set toolbar value
     * @param bool $toolbar
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
     */
    public function setToolbar($toolbar = null)
    {
        // validation for constraint: boolean
        if (!is_null($toolbar) && !is_bool($toolbar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($toolbar, true), gettype($toolbar)), __LINE__);
        }
        $this->toolbar = $toolbar;
        return $this;
    }
    /**
     * Get url value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUrl()
    {
        return isset($this->url) ? $this->url : null;
    }
    /**
     * Set url value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $url
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
     */
    public function setUrl($url = null)
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        if (is_null($url) || (is_array($url) && empty($url))) {
            unset($this->url);
        } else {
            $this->url = $url;
        }
        return $this;
    }
    /**
     * Get width value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getWidth()
    {
        return isset($this->width) ? $this->width : null;
    }
    /**
     * Set width value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $width
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
     */
    public function setWidth($width = null)
    {
        // validation for constraint: int
        if (!is_null($width) && !(is_int($width) || ctype_digit($width))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        if (is_null($width) || (is_array($width) && empty($width))) {
            unset($this->width);
        } else {
            $this->width = $width;
        }
        return $this;
    }
    /**
     * Get windowPosition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWindowPosition()
    {
        return isset($this->windowPosition) ? $this->windowPosition : null;
    }
    /**
     * Set windowPosition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \SFPartnerApi\v480\EnumType\WebLinkPosition::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\WebLinkPosition::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $windowPosition
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
     */
    public function setWindowPosition($windowPosition = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\WebLinkPosition::valueIsValid($windowPosition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\WebLinkPosition', is_array($windowPosition) ? implode(', ', $windowPosition) : var_export($windowPosition, true), implode(', ', \SFPartnerApi\v480\EnumType\WebLinkPosition::getValidValues())), __LINE__);
        }
        if (is_null($windowPosition) || (is_array($windowPosition) && empty($windowPosition))) {
            unset($this->windowPosition);
        } else {
            $this->windowPosition = $windowPosition;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton
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
