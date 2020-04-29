<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnalyticsCloudComponent StructType
 * @subpackage Structs
 */
class AnalyticsCloudComponent extends DescribeLayoutComponent
{
    /**
     * The error
     * @var string
     */
    public $error;
    /**
     * The filter
     * @var string
     */
    public $filter;
    /**
     * The height
     * @var string
     */
    public $height;
    /**
     * The hideOnError
     * @var bool
     */
    public $hideOnError;
    /**
     * The showSharing
     * @var bool
     */
    public $showSharing;
    /**
     * The showTitle
     * @var bool
     */
    public $showTitle;
    /**
     * The width
     * @var string
     */
    public $width;
    /**
     * Constructor method for AnalyticsCloudComponent
     * @uses AnalyticsCloudComponent::setError()
     * @uses AnalyticsCloudComponent::setFilter()
     * @uses AnalyticsCloudComponent::setHeight()
     * @uses AnalyticsCloudComponent::setHideOnError()
     * @uses AnalyticsCloudComponent::setShowSharing()
     * @uses AnalyticsCloudComponent::setShowTitle()
     * @uses AnalyticsCloudComponent::setWidth()
     * @param string $error
     * @param string $filter
     * @param string $height
     * @param bool $hideOnError
     * @param bool $showSharing
     * @param bool $showTitle
     * @param string $width
     */
    public function __construct($error = null, $filter = null, $height = null, $hideOnError = null, $showSharing = null, $showTitle = null, $width = null)
    {
        $this
            ->setError($error)
            ->setFilter($filter)
            ->setHeight($height)
            ->setHideOnError($hideOnError)
            ->setShowSharing($showSharing)
            ->setShowTitle($showTitle)
            ->setWidth($width);
    }
    /**
     * Get error value
     * @return string|null
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param string $error
     * @return \SFPartnerApi\v480\StructType\AnalyticsCloudComponent
     */
    public function setError($error = null)
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        $this->error = $error;
        return $this;
    }
    /**
     * Get filter value
     * @return string|null
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * Set filter value
     * @param string $filter
     * @return \SFPartnerApi\v480\StructType\AnalyticsCloudComponent
     */
    public function setFilter($filter = null)
    {
        // validation for constraint: string
        if (!is_null($filter) && !is_string($filter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filter, true), gettype($filter)), __LINE__);
        }
        $this->filter = $filter;
        return $this;
    }
    /**
     * Get height value
     * @return string|null
     */
    public function getHeight()
    {
        return $this->height;
    }
    /**
     * Set height value
     * @param string $height
     * @return \SFPartnerApi\v480\StructType\AnalyticsCloudComponent
     */
    public function setHeight($height = null)
    {
        // validation for constraint: string
        if (!is_null($height) && !is_string($height)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->height = $height;
        return $this;
    }
    /**
     * Get hideOnError value
     * @return bool|null
     */
    public function getHideOnError()
    {
        return $this->hideOnError;
    }
    /**
     * Set hideOnError value
     * @param bool $hideOnError
     * @return \SFPartnerApi\v480\StructType\AnalyticsCloudComponent
     */
    public function setHideOnError($hideOnError = null)
    {
        // validation for constraint: boolean
        if (!is_null($hideOnError) && !is_bool($hideOnError)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hideOnError, true), gettype($hideOnError)), __LINE__);
        }
        $this->hideOnError = $hideOnError;
        return $this;
    }
    /**
     * Get showSharing value
     * @return bool|null
     */
    public function getShowSharing()
    {
        return $this->showSharing;
    }
    /**
     * Set showSharing value
     * @param bool $showSharing
     * @return \SFPartnerApi\v480\StructType\AnalyticsCloudComponent
     */
    public function setShowSharing($showSharing = null)
    {
        // validation for constraint: boolean
        if (!is_null($showSharing) && !is_bool($showSharing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showSharing, true), gettype($showSharing)), __LINE__);
        }
        $this->showSharing = $showSharing;
        return $this;
    }
    /**
     * Get showTitle value
     * @return bool|null
     */
    public function getShowTitle()
    {
        return $this->showTitle;
    }
    /**
     * Set showTitle value
     * @param bool $showTitle
     * @return \SFPartnerApi\v480\StructType\AnalyticsCloudComponent
     */
    public function setShowTitle($showTitle = null)
    {
        // validation for constraint: boolean
        if (!is_null($showTitle) && !is_bool($showTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showTitle, true), gettype($showTitle)), __LINE__);
        }
        $this->showTitle = $showTitle;
        return $this;
    }
    /**
     * Get width value
     * @return string|null
     */
    public function getWidth()
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param string $width
     * @return \SFPartnerApi\v480\StructType\AnalyticsCloudComponent
     */
    public function setWidth($width = null)
    {
        // validation for constraint: string
        if (!is_null($width) && !is_string($width)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->width = $width;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\AnalyticsCloudComponent
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
