<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeGlobalTheme StructType
 * @subpackage Structs
 */
class DescribeGlobalTheme extends AbstractStructBase
{
    /**
     * The global
     * @var \SFPartnerApi\v480\StructType\DescribeGlobalResult
     */
    public $global;
    /**
     * The theme
     * @var \SFPartnerApi\v480\StructType\DescribeThemeResult
     */
    public $theme;
    /**
     * Constructor method for DescribeGlobalTheme
     * @uses DescribeGlobalTheme::setGlobal()
     * @uses DescribeGlobalTheme::setTheme()
     * @param \SFPartnerApi\v480\StructType\DescribeGlobalResult $global
     * @param \SFPartnerApi\v480\StructType\DescribeThemeResult $theme
     */
    public function __construct(\SFPartnerApi\v480\StructType\DescribeGlobalResult $global = null, \SFPartnerApi\v480\StructType\DescribeThemeResult $theme = null)
    {
        $this
            ->setGlobal($global)
            ->setTheme($theme);
    }
    /**
     * Get global value
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalResult|null
     */
    public function getGlobal()
    {
        return $this->global;
    }
    /**
     * Set global value
     * @param \SFPartnerApi\v480\StructType\DescribeGlobalResult $global
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalTheme
     */
    public function setGlobal(\SFPartnerApi\v480\StructType\DescribeGlobalResult $global = null)
    {
        $this->global = $global;
        return $this;
    }
    /**
     * Get theme value
     * @return \SFPartnerApi\v480\StructType\DescribeThemeResult|null
     */
    public function getTheme()
    {
        return $this->theme;
    }
    /**
     * Set theme value
     * @param \SFPartnerApi\v480\StructType\DescribeThemeResult $theme
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalTheme
     */
    public function setTheme(\SFPartnerApi\v480\StructType\DescribeThemeResult $theme = null)
    {
        $this->theme = $theme;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalTheme
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
