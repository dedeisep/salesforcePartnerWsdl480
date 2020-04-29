<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for upsert StructType
 * @subpackage Structs
 */
class Upsert extends AbstractStructBase
{
    /**
     * The externalIDFieldName
     * @var string
     */
    public $externalIDFieldName;
    /**
     * The sObjects
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\SObject[]
     */
    public $sObjects;
    /**
     * Constructor method for upsert
     * @uses Upsert::setExternalIDFieldName()
     * @uses Upsert::setSObjects()
     * @param string $externalIDFieldName
     * @param \SFPartnerApi\v480\StructType\SObject[] $sObjects
     */
    public function __construct($externalIDFieldName = null, array $sObjects = array())
    {
        $this
            ->setExternalIDFieldName($externalIDFieldName)
            ->setSObjects($sObjects);
    }
    /**
     * Get externalIDFieldName value
     * @return string|null
     */
    public function getExternalIDFieldName()
    {
        return $this->externalIDFieldName;
    }
    /**
     * Set externalIDFieldName value
     * @param string $externalIDFieldName
     * @return \SFPartnerApi\v480\StructType\Upsert
     */
    public function setExternalIDFieldName($externalIDFieldName = null)
    {
        // validation for constraint: string
        if (!is_null($externalIDFieldName) && !is_string($externalIDFieldName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalIDFieldName, true), gettype($externalIDFieldName)), __LINE__);
        }
        $this->externalIDFieldName = $externalIDFieldName;
        return $this;
    }
    /**
     * Get sObjects value
     * @return \SFPartnerApi\v480\StructType\SObject[]|null
     */
    public function getSObjects()
    {
        return $this->sObjects;
    }
    /**
     * This method is responsible for validating the values passed to the setSObjects method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSObjects method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSObjectsForArrayConstraintsFromSetSObjects(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $upsertSObjectsItem) {
            // validation for constraint: itemType
            if (!$upsertSObjectsItem instanceof \SFPartnerApi\v480\StructType\SObject) {
                $invalidValues[] = is_object($upsertSObjectsItem) ? get_class($upsertSObjectsItem) : sprintf('%s(%s)', gettype($upsertSObjectsItem), var_export($upsertSObjectsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The sObjects property can only contain items of type \SFPartnerApi\v480\StructType\SObject, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set sObjects value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\SObject[] $sObjects
     * @return \SFPartnerApi\v480\StructType\Upsert
     */
    public function setSObjects(array $sObjects = array())
    {
        // validation for constraint: array
        if ('' !== ($sObjectsArrayErrorMessage = self::validateSObjectsForArrayConstraintsFromSetSObjects($sObjects))) {
            throw new \InvalidArgumentException($sObjectsArrayErrorMessage, __LINE__);
        }
        $this->sObjects = $sObjects;
        return $this;
    }
    /**
     * Add item to sObjects value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\SObject $item
     * @return \SFPartnerApi\v480\StructType\Upsert
     */
    public function addToSObjects(\SFPartnerApi\v480\StructType\SObject $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\SObject) {
            throw new \InvalidArgumentException(sprintf('The sObjects property can only contain items of type \SFPartnerApi\v480\StructType\SObject, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->sObjects[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\Upsert
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
