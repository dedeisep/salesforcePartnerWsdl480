<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Canvas StructType
 * @subpackage Structs
 */
class Canvas extends DescribeLayoutComponent
{
    /**
     * The displayLocation
     * @var string
     */
    public $displayLocation;
    /**
     * The referenceId
     * @var string
     */
    public $referenceId;
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
     * Constructor method for Canvas
     * @uses Canvas::setDisplayLocation()
     * @uses Canvas::setReferenceId()
     * @uses Canvas::setShowLabel()
     * @uses Canvas::setShowScrollbars()
     * @uses Canvas::setSuggestedHeight()
     * @uses Canvas::setSuggestedWidth()
     * @param string $displayLocation
     * @param string $referenceId
     * @param bool $showLabel
     * @param bool $showScrollbars
     * @param string $suggestedHeight
     * @param string $suggestedWidth
     */
    public function __construct($displayLocation = null, $referenceId = null, $showLabel = null, $showScrollbars = null, $suggestedHeight = null, $suggestedWidth = null)
    {
        $this
            ->setDisplayLocation($displayLocation)
            ->setReferenceId($referenceId)
            ->setShowLabel($showLabel)
            ->setShowScrollbars($showScrollbars)
            ->setSuggestedHeight($suggestedHeight)
            ->setSuggestedWidth($suggestedWidth);
    }
    /**
     * Get displayLocation value
     * @return string|null
     */
    public function getDisplayLocation()
    {
        return $this->displayLocation;
    }
    /**
     * Set displayLocation value
     * @param string $displayLocation
     * @return \SFPartnerApi\v480\StructType\Canvas
     */
    public function setDisplayLocation($displayLocation = null)
    {
        // validation for constraint: string
        if (!is_null($displayLocation) && !is_string($displayLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayLocation, true), gettype($displayLocation)), __LINE__);
        }
        $this->displayLocation = $displayLocation;
        return $this;
    }
    /**
     * Get referenceId value
     * @return string|null
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }
    /**
     * Set referenceId value
     * @param string $referenceId
     * @return \SFPartnerApi\v480\StructType\Canvas
     */
    public function setReferenceId($referenceId = null)
    {
        // validation for constraint: string
        if (!is_null($referenceId) && !is_string($referenceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceId, true), gettype($referenceId)), __LINE__);
        }
        $this->referenceId = $referenceId;
        return $this;
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
     * @return \SFPartnerApi\v480\StructType\Canvas
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
     * @return \SFPartnerApi\v480\StructType\Canvas
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
     * @return \SFPartnerApi\v480\StructType\Canvas
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
     * @return \SFPartnerApi\v480\StructType\Canvas
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\Canvas
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
