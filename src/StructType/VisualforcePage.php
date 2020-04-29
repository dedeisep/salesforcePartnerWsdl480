<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VisualforcePage StructType
 * @subpackage Structs
 */
class VisualforcePage extends DescribeLayoutComponent
{
    /**
     * The showLabel
     * @var bool
     */
    public $showLabel;
    /**
     * The showScrollbars
     * @var bool
     */
    public $showScrollbars;
    /**
     * The suggestedHeight
     * @var string
     */
    public $suggestedHeight;
    /**
     * The suggestedWidth
     * @var string
     */
    public $suggestedWidth;
    /**
     * The url
     * @var string
     */
    public $url;
    /**
     * Constructor method for VisualforcePage
     * @uses VisualforcePage::setShowLabel()
     * @uses VisualforcePage::setShowScrollbars()
     * @uses VisualforcePage::setSuggestedHeight()
     * @uses VisualforcePage::setSuggestedWidth()
     * @uses VisualforcePage::setUrl()
     * @param bool $showLabel
     * @param bool $showScrollbars
     * @param string $suggestedHeight
     * @param string $suggestedWidth
     * @param string $url
     */
    public function __construct($showLabel = null, $showScrollbars = null, $suggestedHeight = null, $suggestedWidth = null, $url = null)
    {
        $this
            ->setShowLabel($showLabel)
            ->setShowScrollbars($showScrollbars)
            ->setSuggestedHeight($suggestedHeight)
            ->setSuggestedWidth($suggestedWidth)
            ->setUrl($url);
    }
    /**
     * Get showLabel value
     * @return bool|null
     */
    public function getShowLabel()
    {
        return $this->showLabel;
    }
    /**
     * Set showLabel value
     * @param bool $showLabel
     * @return \SFPartnerApi\v480\StructType\VisualforcePage
     */
    public function setShowLabel($showLabel = null)
    {
        // validation for constraint: boolean
        if (!is_null($showLabel) && !is_bool($showLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showLabel, true), gettype($showLabel)), __LINE__);
        }
        $this->showLabel = $showLabel;
        return $this;
    }
    /**
     * Get showScrollbars value
     * @return bool|null
     */
    public function getShowScrollbars()
    {
        return $this->showScrollbars;
    }
    /**
     * Set showScrollbars value
     * @param bool $showScrollbars
     * @return \SFPartnerApi\v480\StructType\VisualforcePage
     */
    public function setShowScrollbars($showScrollbars = null)
    {
        // validation for constraint: boolean
        if (!is_null($showScrollbars) && !is_bool($showScrollbars)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showScrollbars, true), gettype($showScrollbars)), __LINE__);
        }
        $this->showScrollbars = $showScrollbars;
        return $this;
    }
    /**
     * Get suggestedHeight value
     * @return string|null
     */
    public function getSuggestedHeight()
    {
        return $this->suggestedHeight;
    }
    /**
     * Set suggestedHeight value
     * @param string $suggestedHeight
     * @return \SFPartnerApi\v480\StructType\VisualforcePage
     */
    public function setSuggestedHeight($suggestedHeight = null)
    {
        // validation for constraint: string
        if (!is_null($suggestedHeight) && !is_string($suggestedHeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($suggestedHeight, true), gettype($suggestedHeight)), __LINE__);
        }
        $this->suggestedHeight = $suggestedHeight;
        return $this;
    }
    /**
     * Get suggestedWidth value
     * @return string|null
     */
    public function getSuggestedWidth()
    {
        return $this->suggestedWidth;
    }
    /**
     * Set suggestedWidth value
     * @param string $suggestedWidth
     * @return \SFPartnerApi\v480\StructType\VisualforcePage
     */
    public function setSuggestedWidth($suggestedWidth = null)
    {
        // validation for constraint: string
        if (!is_null($suggestedWidth) && !is_string($suggestedWidth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($suggestedWidth, true), gettype($suggestedWidth)), __LINE__);
        }
        $this->suggestedWidth = $suggestedWidth;
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
     * @return \SFPartnerApi\v480\StructType\VisualforcePage
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
     * @return \SFPartnerApi\v480\StructType\VisualforcePage
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
