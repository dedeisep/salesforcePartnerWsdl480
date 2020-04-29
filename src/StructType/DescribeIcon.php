<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeIcon StructType
 * @subpackage Structs
 */
class DescribeIcon extends AbstractStructBase
{
    /**
     * The contentType
     * @var string
     */
    public $contentType;
    /**
     * The height
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $height;
    /**
     * The theme
     * @var string
     */
    public $theme;
    /**
     * The url
     * @var string
     */
    public $url;
    /**
     * The width
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $width;
    /**
     * Constructor method for DescribeIcon
     * @uses DescribeIcon::setContentType()
     * @uses DescribeIcon::setHeight()
     * @uses DescribeIcon::setTheme()
     * @uses DescribeIcon::setUrl()
     * @uses DescribeIcon::setWidth()
     * @param string $contentType
     * @param int $height
     * @param string $theme
     * @param string $url
     * @param int $width
     */
    public function __construct($contentType = null, $height = null, $theme = null, $url = null, $width = null)
    {
        $this
            ->setContentType($contentType)
            ->setHeight($height)
            ->setTheme($theme)
            ->setUrl($url)
            ->setWidth($width);
    }
    /**
     * Get contentType value
     * @return string|null
     */
    public function getContentType()
    {
        return $this->contentType;
    }
    /**
     * Set contentType value
     * @param string $contentType
     * @return \SFPartnerApi\v480\StructType\DescribeIcon
     */
    public function setContentType($contentType = null)
    {
        // validation for constraint: string
        if (!is_null($contentType) && !is_string($contentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentType, true), gettype($contentType)), __LINE__);
        }
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * Get height value
     * @return int|null
     */
    public function getHeight()
    {
        return $this->height;
    }
    /**
     * Set height value
     * @param int $height
     * @return \SFPartnerApi\v480\StructType\DescribeIcon
     */
    public function setHeight($height = null)
    {
        // validation for constraint: int
        if (!is_null($height) && !(is_int($height) || ctype_digit($height))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->height = $height;
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
     * @return \SFPartnerApi\v480\StructType\DescribeIcon
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
     * @return \SFPartnerApi\v480\StructType\DescribeIcon
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
     * Get width value
     * @return int|null
     */
    public function getWidth()
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param int $width
     * @return \SFPartnerApi\v480\StructType\DescribeIcon
     */
    public function setWidth($width = null)
    {
        // validation for constraint: int
        if (!is_null($width) && !(is_int($width) || ctype_digit($width))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($width, true), gettype($width)), __LINE__);
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
     * @return \SFPartnerApi\v480\StructType\DescribeIcon
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
