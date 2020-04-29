<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LimitInfoHeader StructType
 * @subpackage Structs
 */
class LimitInfoHeader extends AbstractStructBase
{
    /**
     * The limitInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\LimitInfo[]
     */
    public $limitInfo;
    /**
     * Constructor method for LimitInfoHeader
     * @uses LimitInfoHeader::setLimitInfo()
     * @param \SFPartnerApi\v480\StructType\LimitInfo[] $limitInfo
     */
    public function __construct(array $limitInfo = array())
    {
        $this
            ->setLimitInfo($limitInfo);
    }
    /**
     * Get limitInfo value
     * @return \SFPartnerApi\v480\StructType\LimitInfo[]|null
     */
    public function getLimitInfo()
    {
        return $this->limitInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setLimitInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLimitInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLimitInfoForArrayConstraintsFromSetLimitInfo(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $limitInfoHeaderLimitInfoItem) {
            // validation for constraint: itemType
            if (!$limitInfoHeaderLimitInfoItem instanceof \SFPartnerApi\v480\StructType\LimitInfo) {
                $invalidValues[] = is_object($limitInfoHeaderLimitInfoItem) ? get_class($limitInfoHeaderLimitInfoItem) : sprintf('%s(%s)', gettype($limitInfoHeaderLimitInfoItem), var_export($limitInfoHeaderLimitInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The limitInfo property can only contain items of type \SFPartnerApi\v480\StructType\LimitInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set limitInfo value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\LimitInfo[] $limitInfo
     * @return \SFPartnerApi\v480\StructType\LimitInfoHeader
     */
    public function setLimitInfo(array $limitInfo = array())
    {
        // validation for constraint: array
        if ('' !== ($limitInfoArrayErrorMessage = self::validateLimitInfoForArrayConstraintsFromSetLimitInfo($limitInfo))) {
            throw new \InvalidArgumentException($limitInfoArrayErrorMessage, __LINE__);
        }
        $this->limitInfo = $limitInfo;
        return $this;
    }
    /**
     * Add item to limitInfo value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\LimitInfo $item
     * @return \SFPartnerApi\v480\StructType\LimitInfoHeader
     */
    public function addToLimitInfo(\SFPartnerApi\v480\StructType\LimitInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\LimitInfo) {
            throw new \InvalidArgumentException(sprintf('The limitInfo property can only contain items of type \SFPartnerApi\v480\StructType\LimitInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->limitInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\LimitInfoHeader
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
