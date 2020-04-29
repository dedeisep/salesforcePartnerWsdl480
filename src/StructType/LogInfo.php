<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LogInfo StructType
 * @subpackage Structs
 */
class LogInfo extends AbstractStructBase
{
    /**
     * The category
     * @var string
     */
    public $category;
    /**
     * The level
     * @var string
     */
    public $level;
    /**
     * Constructor method for LogInfo
     * @uses LogInfo::setCategory()
     * @uses LogInfo::setLevel()
     * @param string $category
     * @param string $level
     */
    public function __construct($category = null, $level = null)
    {
        $this
            ->setCategory($category)
            ->setLevel($level);
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Set category value
     * @uses \SFPartnerApi\v480\EnumType\LogCategory::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\LogCategory::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $category
     * @return \SFPartnerApi\v480\StructType\LogInfo
     */
    public function setCategory($category = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\LogCategory::valueIsValid($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\LogCategory', is_array($category) ? implode(', ', $category) : var_export($category, true), implode(', ', \SFPartnerApi\v480\EnumType\LogCategory::getValidValues())), __LINE__);
        }
        $this->category = $category;
        return $this;
    }
    /**
     * Get level value
     * @return string|null
     */
    public function getLevel()
    {
        return $this->level;
    }
    /**
     * Set level value
     * @uses \SFPartnerApi\v480\EnumType\LogCategoryLevel::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\LogCategoryLevel::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $level
     * @return \SFPartnerApi\v480\StructType\LogInfo
     */
    public function setLevel($level = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\LogCategoryLevel::valueIsValid($level)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\LogCategoryLevel', is_array($level) ? implode(', ', $level) : var_export($level, true), implode(', ', \SFPartnerApi\v480\EnumType\LogCategoryLevel::getValidValues())), __LINE__);
        }
        $this->level = $level;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\LogInfo
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
