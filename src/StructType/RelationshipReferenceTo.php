<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelationshipReferenceTo StructType
 * @subpackage Structs
 */
class RelationshipReferenceTo extends AbstractStructBase
{
    /**
     * The referenceTo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $referenceTo;
    /**
     * Constructor method for RelationshipReferenceTo
     * @uses RelationshipReferenceTo::setReferenceTo()
     * @param string[] $referenceTo
     */
    public function __construct(array $referenceTo = array())
    {
        $this
            ->setReferenceTo($referenceTo);
    }
    /**
     * Get referenceTo value
     * @return string[]|null
     */
    public function getReferenceTo()
    {
        return $this->referenceTo;
    }
    /**
     * This method is responsible for validating the values passed to the setReferenceTo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReferenceTo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReferenceToForArrayConstraintsFromSetReferenceTo(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $relationshipReferenceToReferenceToItem) {
            // validation for constraint: itemType
            if (!is_string($relationshipReferenceToReferenceToItem)) {
                $invalidValues[] = is_object($relationshipReferenceToReferenceToItem) ? get_class($relationshipReferenceToReferenceToItem) : sprintf('%s(%s)', gettype($relationshipReferenceToReferenceToItem), var_export($relationshipReferenceToReferenceToItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The referenceTo property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set referenceTo value
     * @throws \InvalidArgumentException
     * @param string[] $referenceTo
     * @return \SFPartnerApi\v480\StructType\RelationshipReferenceTo
     */
    public function setReferenceTo(array $referenceTo = array())
    {
        // validation for constraint: array
        if ('' !== ($referenceToArrayErrorMessage = self::validateReferenceToForArrayConstraintsFromSetReferenceTo($referenceTo))) {
            throw new \InvalidArgumentException($referenceToArrayErrorMessage, __LINE__);
        }
        $this->referenceTo = $referenceTo;
        return $this;
    }
    /**
     * Add item to referenceTo value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\RelationshipReferenceTo
     */
    public function addToReferenceTo($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The referenceTo property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->referenceTo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\RelationshipReferenceTo
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
