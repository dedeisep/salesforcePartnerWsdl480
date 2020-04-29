<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deleteByExample StructType
 * @subpackage Structs
 */
class DeleteByExample extends AbstractStructBase
{
    /**
     * The sObjects
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\SObject[]
     */
    public $sObjects;
    /**
     * Constructor method for deleteByExample
     * @uses DeleteByExample::setSObjects()
     * @param \SFPartnerApi\v480\StructType\SObject[] $sObjects
     */
    public function __construct(array $sObjects = array())
    {
        $this
            ->setSObjects($sObjects);
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
        foreach ($values as $deleteByExampleSObjectsItem) {
            // validation for constraint: itemType
            if (!$deleteByExampleSObjectsItem instanceof \SFPartnerApi\v480\StructType\SObject) {
                $invalidValues[] = is_object($deleteByExampleSObjectsItem) ? get_class($deleteByExampleSObjectsItem) : sprintf('%s(%s)', gettype($deleteByExampleSObjectsItem), var_export($deleteByExampleSObjectsItem, true));
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
     * @return \SFPartnerApi\v480\StructType\DeleteByExample
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
     * @return \SFPartnerApi\v480\StructType\DeleteByExample
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
     * @return \SFPartnerApi\v480\StructType\DeleteByExample
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
