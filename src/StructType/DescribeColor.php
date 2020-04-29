<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeColor StructType
 * @subpackage Structs
 */
class DescribeColor extends AbstractStructBase
{
    /**
     * The color
     * @var string
     */
    public $color;
    /**
     * The context
     * @var string
     */
    public $context;
    /**
     * The theme
     * @var string
     */
    public $theme;
    /**
     * Constructor method for DescribeColor
     * @uses DescribeColor::setColor()
     * @uses DescribeColor::setContext()
     * @uses DescribeColor::setTheme()
     * @param string $color
     * @param string $context
     * @param string $theme
     */
    public function __construct($color = null, $context = null, $theme = null)
    {
        $this
            ->setColor($color)
            ->setContext($context)
            ->setTheme($theme);
    }
    /**
     * Get color value
     * @return string|null
     */
    public function getColor()
    {
        return $this->color;
    }
    /**
     * Set color value
     * @param string $color
     * @return \SFPartnerApi\v480\StructType\DescribeColor
     */
    public function setColor($color = null)
    {
        // validation for constraint: string
        if (!is_null($color) && !is_string($color)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($color, true), gettype($color)), __LINE__);
        }
        $this->color = $color;
        return $this;
    }
    /**
     * Get context value
     * @return string|null
     */
    public function getContext()
    {
        return $this->context;
    }
    /**
     * Set context value
     * @param string $context
     * @return \SFPartnerApi\v480\StructType\DescribeColor
     */
    public function setContext($context = null)
    {
        // validation for constraint: string
        if (!is_null($context) && !is_string($context)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($context, true), gettype($context)), __LINE__);
        }
        $this->context = $context;
        return $this;
    }
    /**
     * Get theme value
     * @return string|null
     */
    public function getTheme()
    {
        return $this->theme;
    }
    /**
     * Set theme value
     * @param string $theme
     * @return \SFPartnerApi\v480\StructType\DescribeColor
     */
    public function setTheme($theme = null)
    {
        // validation for constraint: string
        if (!is_null($theme) && !is_string($theme)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($theme, true), gettype($theme)), __LINE__);
        }
        $this->theme = $theme;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeColor
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
