<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeDataCategoryGroupResult StructType
 * @subpackage Structs
 */
class DescribeDataCategoryGroupResult extends AbstractStructBase
{
    /**
     * The categoryCount
     * @var int
     */
    public $categoryCount;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The label
     * @var string
     */
    public $label;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The sobject
     * @var string
     */
    public $sobject;
    /**
     * Constructor method for DescribeDataCategoryGroupResult
     * @uses DescribeDataCategoryGroupResult::setCategoryCount()
     * @uses DescribeDataCategoryGroupResult::setDescription()
     * @uses DescribeDataCategoryGroupResult::setLabel()
     * @uses DescribeDataCategoryGroupResult::setName()
     * @uses DescribeDataCategoryGroupResult::setSobject()
     * @param int $categoryCount
     * @param string $description
     * @param string $label
     * @param string $name
     * @param string $sobject
     */
    public function __construct($categoryCount = null, $description = null, $label = null, $name = null, $sobject = null)
    {
        $this
            ->setCategoryCount($categoryCount)
            ->setDescription($description)
            ->setLabel($label)
            ->setName($name)
            ->setSobject($sobject);
    }
    /**
     * Get categoryCount value
     * @return int|null
     */
    public function getCategoryCount()
    {
        return $this->categoryCount;
    }
    /**
     * Set categoryCount value
     * @param int $categoryCount
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupResult
     */
    public function setCategoryCount($categoryCount = null)
    {
        // validation for constraint: int
        if (!is_null($categoryCount) && !(is_int($categoryCount) || ctype_digit($categoryCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryCount, true), gettype($categoryCount)), __LINE__);
        }
        $this->categoryCount = $categoryCount;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupResult
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
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
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupResult
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
     * Get sobject value
     * @return string|null
     */
    public function getSobject()
    {
        return $this->sobject;
    }
    /**
     * Set sobject value
     * @param string $sobject
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupResult
     */
    public function setSobject($sobject = null)
    {
        // validation for constraint: string
        if (!is_null($sobject) && !is_string($sobject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sobject, true), gettype($sobject)), __LINE__);
        }
        $this->sobject = $sobject;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupResult
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
