<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeSoqlListViewsRequest StructType
 * @subpackage Structs
 */
class DescribeSoqlListViewsRequest extends AbstractStructBase
{
    /**
     * The listViewParams
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \SFPartnerApi\v480\StructType\DescribeSoqlListViewParams[]
     */
    public $listViewParams;
    /**
     * Constructor method for DescribeSoqlListViewsRequest
     * @uses DescribeSoqlListViewsRequest::setListViewParams()
     * @param \SFPartnerApi\v480\StructType\DescribeSoqlListViewParams[] $listViewParams
     */
    public function __construct(array $listViewParams = array())
    {
        $this
            ->setListViewParams($listViewParams);
    }
    /**
     * Get listViewParams value
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListViewParams[]
     */
    public function getListViewParams()
    {
        return $this->listViewParams;
    }
    /**
     * This method is responsible for validating the values passed to the setListViewParams method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListViewParams method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListViewParamsForArrayConstraintsFromSetListViewParams(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeSoqlListViewsRequestListViewParamsItem) {
            // validation for constraint: itemType
            if (!$describeSoqlListViewsRequestListViewParamsItem instanceof \SFPartnerApi\v480\StructType\DescribeSoqlListViewParams) {
                $invalidValues[] = is_object($describeSoqlListViewsRequestListViewParamsItem) ? get_class($describeSoqlListViewsRequestListViewParamsItem) : sprintf('%s(%s)', gettype($describeSoqlListViewsRequestListViewParamsItem), var_export($describeSoqlListViewsRequestListViewParamsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The listViewParams property can only contain items of type \SFPartnerApi\v480\StructType\DescribeSoqlListViewParams, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set listViewParams value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeSoqlListViewParams[] $listViewParams
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListViewsRequest
     */
    public function setListViewParams(array $listViewParams = array())
    {
        // validation for constraint: array
        if ('' !== ($listViewParamsArrayErrorMessage = self::validateListViewParamsForArrayConstraintsFromSetListViewParams($listViewParams))) {
            throw new \InvalidArgumentException($listViewParamsArrayErrorMessage, __LINE__);
        }
        $this->listViewParams = $listViewParams;
        return $this;
    }
    /**
     * Add item to listViewParams value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeSoqlListViewParams $item
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListViewsRequest
     */
    public function addToListViewParams(\SFPartnerApi\v480\StructType\DescribeSoqlListViewParams $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeSoqlListViewParams) {
            throw new \InvalidArgumentException(sprintf('The listViewParams property can only contain items of type \SFPartnerApi\v480\StructType\DescribeSoqlListViewParams, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->listViewParams[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListViewsRequest
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
