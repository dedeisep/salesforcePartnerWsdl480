<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeLayoutButtonSection StructType
 * @subpackage Structs
 */
class DescribeLayoutButtonSection extends AbstractStructBase
{
    /**
     * The detailButtons
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \SFPartnerApi\v480\StructType\DescribeLayoutButton[]
     */
    public $detailButtons;
    /**
     * Constructor method for DescribeLayoutButtonSection
     * @uses DescribeLayoutButtonSection::setDetailButtons()
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutButton[] $detailButtons
     */
    public function __construct(array $detailButtons = array())
    {
        $this
            ->setDetailButtons($detailButtons);
    }
    /**
     * Get detailButtons value
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton[]
     */
    public function getDetailButtons()
    {
        return $this->detailButtons;
    }
    /**
     * This method is responsible for validating the values passed to the setDetailButtons method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDetailButtons method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDetailButtonsForArrayConstraintsFromSetDetailButtons(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeLayoutButtonSectionDetailButtonsItem) {
            // validation for constraint: itemType
            if (!$describeLayoutButtonSectionDetailButtonsItem instanceof \SFPartnerApi\v480\StructType\DescribeLayoutButton) {
                $invalidValues[] = is_object($describeLayoutButtonSectionDetailButtonsItem) ? get_class($describeLayoutButtonSectionDetailButtonsItem) : sprintf('%s(%s)', gettype($describeLayoutButtonSectionDetailButtonsItem), var_export($describeLayoutButtonSectionDetailButtonsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The detailButtons property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutButton, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set detailButtons value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutButton[] $detailButtons
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButtonSection
     */
    public function setDetailButtons(array $detailButtons = array())
    {
        // validation for constraint: array
        if ('' !== ($detailButtonsArrayErrorMessage = self::validateDetailButtonsForArrayConstraintsFromSetDetailButtons($detailButtons))) {
            throw new \InvalidArgumentException($detailButtonsArrayErrorMessage, __LINE__);
        }
        $this->detailButtons = $detailButtons;
        return $this;
    }
    /**
     * Add item to detailButtons value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutButton $item
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButtonSection
     */
    public function addToDetailButtons(\SFPartnerApi\v480\StructType\DescribeLayoutButton $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeLayoutButton) {
            throw new \InvalidArgumentException(sprintf('The detailButtons property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutButton, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->detailButtons[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButtonSection
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
