<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeRelatedContentItem StructType
 * @subpackage Structs
 */
class DescribeRelatedContentItem extends AbstractStructBase
{
    /**
     * The describeLayoutItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * @var \SFPartnerApi\v480\StructType\DescribeLayoutItem
     */
    public $describeLayoutItem;
    /**
     * Constructor method for DescribeRelatedContentItem
     * @uses DescribeRelatedContentItem::setDescribeLayoutItem()
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutItem $describeLayoutItem
     */
    public function __construct(\SFPartnerApi\v480\StructType\DescribeLayoutItem $describeLayoutItem = null)
    {
        $this
            ->setDescribeLayoutItem($describeLayoutItem);
    }
    /**
     * Get describeLayoutItem value
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutItem|null
     */
    public function getDescribeLayoutItem()
    {
        return $this->describeLayoutItem;
    }
    /**
     * Set describeLayoutItem value
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutItem $describeLayoutItem
     * @return \SFPartnerApi\v480\StructType\DescribeRelatedContentItem
     */
    public function setDescribeLayoutItem(\SFPartnerApi\v480\StructType\DescribeLayoutItem $describeLayoutItem = null)
    {
        $this->describeLayoutItem = $describeLayoutItem;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeRelatedContentItem
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
