<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportChartComponent StructType
 * @subpackage Structs
 */
class ReportChartComponent extends DescribeLayoutComponent
{
    /**
     * The cacheData
     * @var bool
     */
    public $cacheData;
    /**
     * The contextFilterableField
     * @var string
     */
    public $contextFilterableField;
    /**
     * The error
     * @var string
     */
    public $error;
    /**
     * The hideOnError
     * @var bool
     */
    public $hideOnError;
    /**
     * The includeContext
     * @var bool
     */
    public $includeContext;
    /**
     * The showTitle
     * @var bool
     */
    public $showTitle;
    /**
     * The size
     * @var string
     */
    public $size;
    /**
     * Constructor method for ReportChartComponent
     * @uses ReportChartComponent::setCacheData()
     * @uses ReportChartComponent::setContextFilterableField()
     * @uses ReportChartComponent::setError()
     * @uses ReportChartComponent::setHideOnError()
     * @uses ReportChartComponent::setIncludeContext()
     * @uses ReportChartComponent::setShowTitle()
     * @uses ReportChartComponent::setSize()
     * @param bool $cacheData
     * @param string $contextFilterableField
     * @param string $error
     * @param bool $hideOnError
     * @param bool $includeContext
     * @param bool $showTitle
     * @param string $size
     */
    public function __construct($cacheData = null, $contextFilterableField = null, $error = null, $hideOnError = null, $includeContext = null, $showTitle = null, $size = null)
    {
        $this
            ->setCacheData($cacheData)
            ->setContextFilterableField($contextFilterableField)
            ->setError($error)
            ->setHideOnError($hideOnError)
            ->setIncludeContext($includeContext)
            ->setShowTitle($showTitle)
            ->setSize($size);
    }
    /**
     * Get cacheData value
     * @return bool|null
     */
    public function getCacheData()
    {
        return $this->cacheData;
    }
    /**
     * Set cacheData value
     * @param bool $cacheData
     * @return \SFPartnerApi\v480\StructType\ReportChartComponent
     */
    public function setCacheData($cacheData = null)
    {
        // validation for constraint: boolean
        if (!is_null($cacheData) && !is_bool($cacheData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cacheData, true), gettype($cacheData)), __LINE__);
        }
        $this->cacheData = $cacheData;
        return $this;
    }
    /**
     * Get contextFilterableField value
     * @return string|null
     */
    public function getContextFilterableField()
    {
        return $this->contextFilterableField;
    }
    /**
     * Set contextFilterableField value
     * @param string $contextFilterableField
     * @return \SFPartnerApi\v480\StructType\ReportChartComponent
     */
    public function setContextFilterableField($contextFilterableField = null)
    {
        // validation for constraint: string
        if (!is_null($contextFilterableField) && !is_string($contextFilterableField)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contextFilterableField, true), gettype($contextFilterableField)), __LINE__);
        }
        $this->contextFilterableField = $contextFilterableField;
        return $this;
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
     * @return \SFPartnerApi\v480\StructType\ReportChartComponent
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
     * @return \SFPartnerApi\v480\StructType\ReportChartComponent
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
     * Get includeContext value
     * @return bool|null
     */
    public function getIncludeContext()
    {
        return $this->includeContext;
    }
    /**
     * Set includeContext value
     * @param bool $includeContext
     * @return \SFPartnerApi\v480\StructType\ReportChartComponent
     */
    public function setIncludeContext($includeContext = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeContext) && !is_bool($includeContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeContext, true), gettype($includeContext)), __LINE__);
        }
        $this->includeContext = $includeContext;
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
     * @return \SFPartnerApi\v480\StructType\ReportChartComponent
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
     * Get size value
     * @return string|null
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * Set size value
     * @uses \SFPartnerApi\v480\EnumType\ReportChartSize::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\ReportChartSize::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $size
     * @return \SFPartnerApi\v480\StructType\ReportChartComponent
     */
    public function setSize($size = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\ReportChartSize::valueIsValid($size)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\ReportChartSize', is_array($size) ? implode(', ', $size) : var_export($size, true), implode(', ', \SFPartnerApi\v480\EnumType\ReportChartSize::getValidValues())), __LINE__);
        }
        $this->size = $size;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\ReportChartComponent
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
