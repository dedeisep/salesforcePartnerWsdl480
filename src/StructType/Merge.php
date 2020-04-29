<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for merge StructType
 * @subpackage Structs
 */
class Merge extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\MergeRequest[]
     */
    public $request;
    /**
     * Constructor method for merge
     * @uses Merge::setRequest()
     * @param \SFPartnerApi\v480\StructType\MergeRequest[] $request
     */
    public function __construct(array $request = array())
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \SFPartnerApi\v480\StructType\MergeRequest[]|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * This method is responsible for validating the values passed to the setRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRequest method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRequestForArrayConstraintsFromSetRequest(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $mergeRequestItem) {
            // validation for constraint: itemType
            if (!$mergeRequestItem instanceof \SFPartnerApi\v480\StructType\MergeRequest) {
                $invalidValues[] = is_object($mergeRequestItem) ? get_class($mergeRequestItem) : sprintf('%s(%s)', gettype($mergeRequestItem), var_export($mergeRequestItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The request property can only contain items of type \SFPartnerApi\v480\StructType\MergeRequest, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set request value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\MergeRequest[] $request
     * @return \SFPartnerApi\v480\StructType\Merge
     */
    public function setRequest(array $request = array())
    {
        // validation for constraint: array
        if ('' !== ($requestArrayErrorMessage = self::validateRequestForArrayConstraintsFromSetRequest($request))) {
            throw new \InvalidArgumentException($requestArrayErrorMessage, __LINE__);
        }
        $this->request = $request;
        return $this;
    }
    /**
     * Add item to request value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\MergeRequest $item
     * @return \SFPartnerApi\v480\StructType\Merge
     */
    public function addToRequest(\SFPartnerApi\v480\StructType\MergeRequest $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\MergeRequest) {
            throw new \InvalidArgumentException(sprintf('The request property can only contain items of type \SFPartnerApi\v480\StructType\MergeRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->request[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\Merge
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
