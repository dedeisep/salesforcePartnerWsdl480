<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomLinkComponent StructType
 * @subpackage Structs
 */
class CustomLinkComponent extends DescribeLayoutComponent
{
    /**
     * The customLink
     * @var \SFPartnerApi\v480\StructType\DescribeLayoutButton
     */
    public $customLink;
    /**
     * Constructor method for CustomLinkComponent
     * @uses CustomLinkComponent::setCustomLink()
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutButton $customLink
     */
    public function __construct(\SFPartnerApi\v480\StructType\DescribeLayoutButton $customLink = null)
    {
        $this
            ->setCustomLink($customLink);
    }
    /**
     * Get customLink value
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton|null
     */
    public function getCustomLink()
    {
        return $this->customLink;
    }
    /**
     * Set customLink value
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutButton $customLink
     * @return \SFPartnerApi\v480\StructType\CustomLinkComponent
     */
    public function setCustomLink(\SFPartnerApi\v480\StructType\DescribeLayoutButton $customLink = null)
    {
        $this->customLink = $customLink;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\CustomLinkComponent
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
