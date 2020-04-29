<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchResultsMetadata StructType
 * @subpackage Structs
 */
class SearchResultsMetadata extends AbstractStructBase
{
    /**
     * The entityLabelMetadata
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: false
     * @var \SFPartnerApi\v480\StructType\LabelsSearchMetadata[]
     */
    public $entityLabelMetadata;
    /**
     * The entityMetadata
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: false
     * @var \SFPartnerApi\v480\StructType\EntitySearchMetadata[]
     */
    public $entityMetadata;
    /**
     * Constructor method for SearchResultsMetadata
     * @uses SearchResultsMetadata::setEntityLabelMetadata()
     * @uses SearchResultsMetadata::setEntityMetadata()
     * @param \SFPartnerApi\v480\StructType\LabelsSearchMetadata[] $entityLabelMetadata
     * @param \SFPartnerApi\v480\StructType\EntitySearchMetadata[] $entityMetadata
     */
    public function __construct(array $entityLabelMetadata = array(), array $entityMetadata = array())
    {
        $this
            ->setEntityLabelMetadata($entityLabelMetadata)
            ->setEntityMetadata($entityMetadata);
    }
    /**
     * Get entityLabelMetadata value
     * @return \SFPartnerApi\v480\StructType\LabelsSearchMetadata[]|null
     */
    public function getEntityLabelMetadata()
    {
        return $this->entityLabelMetadata;
    }
    /**
     * This method is responsible for validating the values passed to the setEntityLabelMetadata method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntityLabelMetadata method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntityLabelMetadataForArrayConstraintsFromSetEntityLabelMetadata(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchResultsMetadataEntityLabelMetadataItem) {
            // validation for constraint: itemType
            if (!$searchResultsMetadataEntityLabelMetadataItem instanceof \SFPartnerApi\v480\StructType\LabelsSearchMetadata) {
                $invalidValues[] = is_object($searchResultsMetadataEntityLabelMetadataItem) ? get_class($searchResultsMetadataEntityLabelMetadataItem) : sprintf('%s(%s)', gettype($searchResultsMetadataEntityLabelMetadataItem), var_export($searchResultsMetadataEntityLabelMetadataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The entityLabelMetadata property can only contain items of type \SFPartnerApi\v480\StructType\LabelsSearchMetadata, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set entityLabelMetadata value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\LabelsSearchMetadata[] $entityLabelMetadata
     * @return \SFPartnerApi\v480\StructType\SearchResultsMetadata
     */
    public function setEntityLabelMetadata(array $entityLabelMetadata = array())
    {
        // validation for constraint: array
        if ('' !== ($entityLabelMetadataArrayErrorMessage = self::validateEntityLabelMetadataForArrayConstraintsFromSetEntityLabelMetadata($entityLabelMetadata))) {
            throw new \InvalidArgumentException($entityLabelMetadataArrayErrorMessage, __LINE__);
        }
        $this->entityLabelMetadata = $entityLabelMetadata;
        return $this;
    }
    /**
     * Add item to entityLabelMetadata value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\LabelsSearchMetadata $item
     * @return \SFPartnerApi\v480\StructType\SearchResultsMetadata
     */
    public function addToEntityLabelMetadata(\SFPartnerApi\v480\StructType\LabelsSearchMetadata $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\LabelsSearchMetadata) {
            throw new \InvalidArgumentException(sprintf('The entityLabelMetadata property can only contain items of type \SFPartnerApi\v480\StructType\LabelsSearchMetadata, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->entityLabelMetadata[] = $item;
        return $this;
    }
    /**
     * Get entityMetadata value
     * @return \SFPartnerApi\v480\StructType\EntitySearchMetadata[]|null
     */
    public function getEntityMetadata()
    {
        return $this->entityMetadata;
    }
    /**
     * This method is responsible for validating the values passed to the setEntityMetadata method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntityMetadata method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntityMetadataForArrayConstraintsFromSetEntityMetadata(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchResultsMetadataEntityMetadataItem) {
            // validation for constraint: itemType
            if (!$searchResultsMetadataEntityMetadataItem instanceof \SFPartnerApi\v480\StructType\EntitySearchMetadata) {
                $invalidValues[] = is_object($searchResultsMetadataEntityMetadataItem) ? get_class($searchResultsMetadataEntityMetadataItem) : sprintf('%s(%s)', gettype($searchResultsMetadataEntityMetadataItem), var_export($searchResultsMetadataEntityMetadataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The entityMetadata property can only contain items of type \SFPartnerApi\v480\StructType\EntitySearchMetadata, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set entityMetadata value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\EntitySearchMetadata[] $entityMetadata
     * @return \SFPartnerApi\v480\StructType\SearchResultsMetadata
     */
    public function setEntityMetadata(array $entityMetadata = array())
    {
        // validation for constraint: array
        if ('' !== ($entityMetadataArrayErrorMessage = self::validateEntityMetadataForArrayConstraintsFromSetEntityMetadata($entityMetadata))) {
            throw new \InvalidArgumentException($entityMetadataArrayErrorMessage, __LINE__);
        }
        $this->entityMetadata = $entityMetadata;
        return $this;
    }
    /**
     * Add item to entityMetadata value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\EntitySearchMetadata $item
     * @return \SFPartnerApi\v480\StructType\SearchResultsMetadata
     */
    public function addToEntityMetadata(\SFPartnerApi\v480\StructType\EntitySearchMetadata $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\EntitySearchMetadata) {
            throw new \InvalidArgumentException(sprintf('The entityMetadata property can only contain items of type \SFPartnerApi\v480\StructType\EntitySearchMetadata, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->entityMetadata[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\SearchResultsMetadata
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
