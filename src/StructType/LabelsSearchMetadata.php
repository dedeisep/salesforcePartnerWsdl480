<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelsSearchMetadata StructType
 * @subpackage Structs
 */
class LabelsSearchMetadata extends AbstractStructBase
{
    /**
     * The entityName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    public $entityName;
    /**
     * The entityFieldLabels
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: false
     * @var \SFPartnerApi\v480\StructType\NameValuePair[]
     */
    public $entityFieldLabels;
    /**
     * Constructor method for LabelsSearchMetadata
     * @uses LabelsSearchMetadata::setEntityName()
     * @uses LabelsSearchMetadata::setEntityFieldLabels()
     * @param string $entityName
     * @param \SFPartnerApi\v480\StructType\NameValuePair[] $entityFieldLabels
     */
    public function __construct($entityName = null, array $entityFieldLabels = array())
    {
        $this
            ->setEntityName($entityName)
            ->setEntityFieldLabels($entityFieldLabels);
    }
    /**
     * Get entityName value
     * @return string
     */
    public function getEntityName()
    {
        return $this->entityName;
    }
    /**
     * Set entityName value
     * @param string $entityName
     * @return \SFPartnerApi\v480\StructType\LabelsSearchMetadata
     */
    public function setEntityName($entityName = null)
    {
        // validation for constraint: string
        if (!is_null($entityName) && !is_string($entityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entityName, true), gettype($entityName)), __LINE__);
        }
        $this->entityName = $entityName;
        return $this;
    }
    /**
     * Get entityFieldLabels value
     * @return \SFPartnerApi\v480\StructType\NameValuePair[]|null
     */
    public function getEntityFieldLabels()
    {
        return $this->entityFieldLabels;
    }
    /**
     * This method is responsible for validating the values passed to the setEntityFieldLabels method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntityFieldLabels method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntityFieldLabelsForArrayConstraintsFromSetEntityFieldLabels(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $labelsSearchMetadataEntityFieldLabelsItem) {
            // validation for constraint: itemType
            if (!$labelsSearchMetadataEntityFieldLabelsItem instanceof \SFPartnerApi\v480\StructType\NameValuePair) {
                $invalidValues[] = is_object($labelsSearchMetadataEntityFieldLabelsItem) ? get_class($labelsSearchMetadataEntityFieldLabelsItem) : sprintf('%s(%s)', gettype($labelsSearchMetadataEntityFieldLabelsItem), var_export($labelsSearchMetadataEntityFieldLabelsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The entityFieldLabels property can only contain items of type \SFPartnerApi\v480\StructType\NameValuePair, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set entityFieldLabels value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\NameValuePair[] $entityFieldLabels
     * @return \SFPartnerApi\v480\StructType\LabelsSearchMetadata
     */
    public function setEntityFieldLabels(array $entityFieldLabels = array())
    {
        // validation for constraint: array
        if ('' !== ($entityFieldLabelsArrayErrorMessage = self::validateEntityFieldLabelsForArrayConstraintsFromSetEntityFieldLabels($entityFieldLabels))) {
            throw new \InvalidArgumentException($entityFieldLabelsArrayErrorMessage, __LINE__);
        }
        $this->entityFieldLabels = $entityFieldLabels;
        return $this;
    }
    /**
     * Add item to entityFieldLabels value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\NameValuePair $item
     * @return \SFPartnerApi\v480\StructType\LabelsSearchMetadata
     */
    public function addToEntityFieldLabels(\SFPartnerApi\v480\StructType\NameValuePair $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\NameValuePair) {
            throw new \InvalidArgumentException(sprintf('The entityFieldLabels property can only contain items of type \SFPartnerApi\v480\StructType\NameValuePair, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->entityFieldLabels[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\LabelsSearchMetadata
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
