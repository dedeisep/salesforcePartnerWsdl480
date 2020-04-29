<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EntitySearchMetadata StructType
 * @subpackage Structs
 */
class EntitySearchMetadata extends AbstractStructBase
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
     * The errorMetadata
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: false
     * @var \SFPartnerApi\v480\StructType\EntityErrorMetadata
     */
    public $errorMetadata;
    /**
     * The fieldMetadata
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: false
     * @var \SFPartnerApi\v480\StructType\FieldLevelSearchMetadata[]
     */
    public $fieldMetadata;
    /**
     * The intentQueryMetadata
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: false
     * @var \SFPartnerApi\v480\StructType\EntityIntentQueryMetadata
     */
    public $intentQueryMetadata;
    /**
     * The searchPromotionMetadata
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: false
     * @var \SFPartnerApi\v480\StructType\EntitySearchPromotionMetadata
     */
    public $searchPromotionMetadata;
    /**
     * The spellCorrectionMetadata
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: false
     * @var \SFPartnerApi\v480\StructType\EntitySpellCorrectionMetadata
     */
    public $spellCorrectionMetadata;
    /**
     * Constructor method for EntitySearchMetadata
     * @uses EntitySearchMetadata::setEntityName()
     * @uses EntitySearchMetadata::setErrorMetadata()
     * @uses EntitySearchMetadata::setFieldMetadata()
     * @uses EntitySearchMetadata::setIntentQueryMetadata()
     * @uses EntitySearchMetadata::setSearchPromotionMetadata()
     * @uses EntitySearchMetadata::setSpellCorrectionMetadata()
     * @param string $entityName
     * @param \SFPartnerApi\v480\StructType\EntityErrorMetadata $errorMetadata
     * @param \SFPartnerApi\v480\StructType\FieldLevelSearchMetadata[] $fieldMetadata
     * @param \SFPartnerApi\v480\StructType\EntityIntentQueryMetadata $intentQueryMetadata
     * @param \SFPartnerApi\v480\StructType\EntitySearchPromotionMetadata $searchPromotionMetadata
     * @param \SFPartnerApi\v480\StructType\EntitySpellCorrectionMetadata $spellCorrectionMetadata
     */
    public function __construct($entityName = null, \SFPartnerApi\v480\StructType\EntityErrorMetadata $errorMetadata = null, array $fieldMetadata = array(), \SFPartnerApi\v480\StructType\EntityIntentQueryMetadata $intentQueryMetadata = null, \SFPartnerApi\v480\StructType\EntitySearchPromotionMetadata $searchPromotionMetadata = null, \SFPartnerApi\v480\StructType\EntitySpellCorrectionMetadata $spellCorrectionMetadata = null)
    {
        $this
            ->setEntityName($entityName)
            ->setErrorMetadata($errorMetadata)
            ->setFieldMetadata($fieldMetadata)
            ->setIntentQueryMetadata($intentQueryMetadata)
            ->setSearchPromotionMetadata($searchPromotionMetadata)
            ->setSpellCorrectionMetadata($spellCorrectionMetadata);
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
     * @return \SFPartnerApi\v480\StructType\EntitySearchMetadata
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
     * Get errorMetadata value
     * @return \SFPartnerApi\v480\StructType\EntityErrorMetadata|null
     */
    public function getErrorMetadata()
    {
        return $this->errorMetadata;
    }
    /**
     * Set errorMetadata value
     * @param \SFPartnerApi\v480\StructType\EntityErrorMetadata $errorMetadata
     * @return \SFPartnerApi\v480\StructType\EntitySearchMetadata
     */
    public function setErrorMetadata(\SFPartnerApi\v480\StructType\EntityErrorMetadata $errorMetadata = null)
    {
        $this->errorMetadata = $errorMetadata;
        return $this;
    }
    /**
     * Get fieldMetadata value
     * @return \SFPartnerApi\v480\StructType\FieldLevelSearchMetadata[]|null
     */
    public function getFieldMetadata()
    {
        return $this->fieldMetadata;
    }
    /**
     * This method is responsible for validating the values passed to the setFieldMetadata method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFieldMetadata method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFieldMetadataForArrayConstraintsFromSetFieldMetadata(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $entitySearchMetadataFieldMetadataItem) {
            // validation for constraint: itemType
            if (!$entitySearchMetadataFieldMetadataItem instanceof \SFPartnerApi\v480\StructType\FieldLevelSearchMetadata) {
                $invalidValues[] = is_object($entitySearchMetadataFieldMetadataItem) ? get_class($entitySearchMetadataFieldMetadataItem) : sprintf('%s(%s)', gettype($entitySearchMetadataFieldMetadataItem), var_export($entitySearchMetadataFieldMetadataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The fieldMetadata property can only contain items of type \SFPartnerApi\v480\StructType\FieldLevelSearchMetadata, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set fieldMetadata value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\FieldLevelSearchMetadata[] $fieldMetadata
     * @return \SFPartnerApi\v480\StructType\EntitySearchMetadata
     */
    public function setFieldMetadata(array $fieldMetadata = array())
    {
        // validation for constraint: array
        if ('' !== ($fieldMetadataArrayErrorMessage = self::validateFieldMetadataForArrayConstraintsFromSetFieldMetadata($fieldMetadata))) {
            throw new \InvalidArgumentException($fieldMetadataArrayErrorMessage, __LINE__);
        }
        $this->fieldMetadata = $fieldMetadata;
        return $this;
    }
    /**
     * Add item to fieldMetadata value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\FieldLevelSearchMetadata $item
     * @return \SFPartnerApi\v480\StructType\EntitySearchMetadata
     */
    public function addToFieldMetadata(\SFPartnerApi\v480\StructType\FieldLevelSearchMetadata $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\FieldLevelSearchMetadata) {
            throw new \InvalidArgumentException(sprintf('The fieldMetadata property can only contain items of type \SFPartnerApi\v480\StructType\FieldLevelSearchMetadata, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->fieldMetadata[] = $item;
        return $this;
    }
    /**
     * Get intentQueryMetadata value
     * @return \SFPartnerApi\v480\StructType\EntityIntentQueryMetadata|null
     */
    public function getIntentQueryMetadata()
    {
        return $this->intentQueryMetadata;
    }
    /**
     * Set intentQueryMetadata value
     * @param \SFPartnerApi\v480\StructType\EntityIntentQueryMetadata $intentQueryMetadata
     * @return \SFPartnerApi\v480\StructType\EntitySearchMetadata
     */
    public function setIntentQueryMetadata(\SFPartnerApi\v480\StructType\EntityIntentQueryMetadata $intentQueryMetadata = null)
    {
        $this->intentQueryMetadata = $intentQueryMetadata;
        return $this;
    }
    /**
     * Get searchPromotionMetadata value
     * @return \SFPartnerApi\v480\StructType\EntitySearchPromotionMetadata|null
     */
    public function getSearchPromotionMetadata()
    {
        return $this->searchPromotionMetadata;
    }
    /**
     * Set searchPromotionMetadata value
     * @param \SFPartnerApi\v480\StructType\EntitySearchPromotionMetadata $searchPromotionMetadata
     * @return \SFPartnerApi\v480\StructType\EntitySearchMetadata
     */
    public function setSearchPromotionMetadata(\SFPartnerApi\v480\StructType\EntitySearchPromotionMetadata $searchPromotionMetadata = null)
    {
        $this->searchPromotionMetadata = $searchPromotionMetadata;
        return $this;
    }
    /**
     * Get spellCorrectionMetadata value
     * @return \SFPartnerApi\v480\StructType\EntitySpellCorrectionMetadata|null
     */
    public function getSpellCorrectionMetadata()
    {
        return $this->spellCorrectionMetadata;
    }
    /**
     * Set spellCorrectionMetadata value
     * @param \SFPartnerApi\v480\StructType\EntitySpellCorrectionMetadata $spellCorrectionMetadata
     * @return \SFPartnerApi\v480\StructType\EntitySearchMetadata
     */
    public function setSpellCorrectionMetadata(\SFPartnerApi\v480\StructType\EntitySpellCorrectionMetadata $spellCorrectionMetadata = null)
    {
        $this->spellCorrectionMetadata = $spellCorrectionMetadata;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\EntitySearchMetadata
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
