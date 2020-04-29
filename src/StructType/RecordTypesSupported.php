<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecordTypesSupported StructType
 * @subpackage Structs
 */
class RecordTypesSupported extends AbstractStructBase
{
    /**
     * The recordTypeInfos
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\RecordTypeInfo[]
     */
    public $recordTypeInfos;
    /**
     * Constructor method for RecordTypesSupported
     * @uses RecordTypesSupported::setRecordTypeInfos()
     * @param \SFPartnerApi\v480\StructType\RecordTypeInfo[] $recordTypeInfos
     */
    public function __construct(array $recordTypeInfos = array())
    {
        $this
            ->setRecordTypeInfos($recordTypeInfos);
    }
    /**
     * Get recordTypeInfos value
     * @return \SFPartnerApi\v480\StructType\RecordTypeInfo[]|null
     */
    public function getRecordTypeInfos()
    {
        return $this->recordTypeInfos;
    }
    /**
     * This method is responsible for validating the values passed to the setRecordTypeInfos method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecordTypeInfos method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecordTypeInfosForArrayConstraintsFromSetRecordTypeInfos(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $recordTypesSupportedRecordTypeInfosItem) {
            // validation for constraint: itemType
            if (!$recordTypesSupportedRecordTypeInfosItem instanceof \SFPartnerApi\v480\StructType\RecordTypeInfo) {
                $invalidValues[] = is_object($recordTypesSupportedRecordTypeInfosItem) ? get_class($recordTypesSupportedRecordTypeInfosItem) : sprintf('%s(%s)', gettype($recordTypesSupportedRecordTypeInfosItem), var_export($recordTypesSupportedRecordTypeInfosItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recordTypeInfos property can only contain items of type \SFPartnerApi\v480\StructType\RecordTypeInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set recordTypeInfos value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\RecordTypeInfo[] $recordTypeInfos
     * @return \SFPartnerApi\v480\StructType\RecordTypesSupported
     */
    public function setRecordTypeInfos(array $recordTypeInfos = array())
    {
        // validation for constraint: array
        if ('' !== ($recordTypeInfosArrayErrorMessage = self::validateRecordTypeInfosForArrayConstraintsFromSetRecordTypeInfos($recordTypeInfos))) {
            throw new \InvalidArgumentException($recordTypeInfosArrayErrorMessage, __LINE__);
        }
        $this->recordTypeInfos = $recordTypeInfos;
        return $this;
    }
    /**
     * Add item to recordTypeInfos value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\RecordTypeInfo $item
     * @return \SFPartnerApi\v480\StructType\RecordTypesSupported
     */
    public function addToRecordTypeInfos(\SFPartnerApi\v480\StructType\RecordTypeInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\RecordTypeInfo) {
            throw new \InvalidArgumentException(sprintf('The recordTypeInfos property can only contain items of type \SFPartnerApi\v480\StructType\RecordTypeInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recordTypeInfos[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\RecordTypesSupported
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
