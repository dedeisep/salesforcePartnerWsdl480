<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeLayoutFeedFilter StructType
 * @subpackage Structs
 */
class DescribeLayoutFeedFilter extends AbstractStructBase
{
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
     * The type
     * @var string
     */
    public $type;
    /**
     * Constructor method for DescribeLayoutFeedFilter
     * @uses DescribeLayoutFeedFilter::setLabel()
     * @uses DescribeLayoutFeedFilter::setName()
     * @uses DescribeLayoutFeedFilter::setType()
     * @param string $label
     * @param string $name
     * @param string $type
     */
    public function __construct($label = null, $name = null, $type = null)
    {
        $this
            ->setLabel($label)
            ->setName($name)
            ->setType($type);
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
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutFeedFilter
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
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutFeedFilter
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \SFPartnerApi\v480\EnumType\FeedLayoutFilterType::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\FeedLayoutFilterType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutFeedFilter
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\FeedLayoutFilterType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\FeedLayoutFilterType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \SFPartnerApi\v480\EnumType\FeedLayoutFilterType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutFeedFilter
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
