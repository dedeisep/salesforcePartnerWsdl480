<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChildRelationship StructType
 * @subpackage Structs
 */
class ChildRelationship extends AbstractStructBase
{
    /**
     * The cascadeDelete
     * @var bool
     */
    public $cascadeDelete;
    /**
     * The childSObject
     * @var string
     */
    public $childSObject;
    /**
     * The deprecatedAndHidden
     * @var bool
     */
    public $deprecatedAndHidden;
    /**
     * The field
     * @var string
     */
    public $field;
    /**
     * The junctionIdListNames
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $junctionIdListNames;
    /**
     * The junctionReferenceTo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $junctionReferenceTo;
    /**
     * The relationshipName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $relationshipName;
    /**
     * The restrictedDelete
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $restrictedDelete;
    /**
     * Constructor method for ChildRelationship
     * @uses ChildRelationship::setCascadeDelete()
     * @uses ChildRelationship::setChildSObject()
     * @uses ChildRelationship::setDeprecatedAndHidden()
     * @uses ChildRelationship::setField()
     * @uses ChildRelationship::setJunctionIdListNames()
     * @uses ChildRelationship::setJunctionReferenceTo()
     * @uses ChildRelationship::setRelationshipName()
     * @uses ChildRelationship::setRestrictedDelete()
     * @param bool $cascadeDelete
     * @param string $childSObject
     * @param bool $deprecatedAndHidden
     * @param string $field
     * @param string[] $junctionIdListNames
     * @param string[] $junctionReferenceTo
     * @param string $relationshipName
     * @param bool $restrictedDelete
     */
    public function __construct($cascadeDelete = null, $childSObject = null, $deprecatedAndHidden = null, $field = null, array $junctionIdListNames = array(), array $junctionReferenceTo = array(), $relationshipName = null, $restrictedDelete = null)
    {
        $this
            ->setCascadeDelete($cascadeDelete)
            ->setChildSObject($childSObject)
            ->setDeprecatedAndHidden($deprecatedAndHidden)
            ->setField($field)
            ->setJunctionIdListNames($junctionIdListNames)
            ->setJunctionReferenceTo($junctionReferenceTo)
            ->setRelationshipName($relationshipName)
            ->setRestrictedDelete($restrictedDelete);
    }
    /**
     * Get cascadeDelete value
     * @return bool|null
     */
    public function getCascadeDelete()
    {
        return $this->cascadeDelete;
    }
    /**
     * Set cascadeDelete value
     * @param bool $cascadeDelete
     * @return \SFPartnerApi\v480\StructType\ChildRelationship
     */
    public function setCascadeDelete($cascadeDelete = null)
    {
        // validation for constraint: boolean
        if (!is_null($cascadeDelete) && !is_bool($cascadeDelete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cascadeDelete, true), gettype($cascadeDelete)), __LINE__);
        }
        $this->cascadeDelete = $cascadeDelete;
        return $this;
    }
    /**
     * Get childSObject value
     * @return string|null
     */
    public function getChildSObject()
    {
        return $this->childSObject;
    }
    /**
     * Set childSObject value
     * @param string $childSObject
     * @return \SFPartnerApi\v480\StructType\ChildRelationship
     */
    public function setChildSObject($childSObject = null)
    {
        // validation for constraint: string
        if (!is_null($childSObject) && !is_string($childSObject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($childSObject, true), gettype($childSObject)), __LINE__);
        }
        $this->childSObject = $childSObject;
        return $this;
    }
    /**
     * Get deprecatedAndHidden value
     * @return bool|null
     */
    public function getDeprecatedAndHidden()
    {
        return $this->deprecatedAndHidden;
    }
    /**
     * Set deprecatedAndHidden value
     * @param bool $deprecatedAndHidden
     * @return \SFPartnerApi\v480\StructType\ChildRelationship
     */
    public function setDeprecatedAndHidden($deprecatedAndHidden = null)
    {
        // validation for constraint: boolean
        if (!is_null($deprecatedAndHidden) && !is_bool($deprecatedAndHidden)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deprecatedAndHidden, true), gettype($deprecatedAndHidden)), __LINE__);
        }
        $this->deprecatedAndHidden = $deprecatedAndHidden;
        return $this;
    }
    /**
     * Get field value
     * @return string|null
     */
    public function getField()
    {
        return $this->field;
    }
    /**
     * Set field value
     * @param string $field
     * @return \SFPartnerApi\v480\StructType\ChildRelationship
     */
    public function setField($field = null)
    {
        // validation for constraint: string
        if (!is_null($field) && !is_string($field)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field, true), gettype($field)), __LINE__);
        }
        $this->field = $field;
        return $this;
    }
    /**
     * Get junctionIdListNames value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getJunctionIdListNames()
    {
        return isset($this->junctionIdListNames) ? $this->junctionIdListNames : null;
    }
    /**
     * This method is responsible for validating the values passed to the setJunctionIdListNames method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJunctionIdListNames method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJunctionIdListNamesForArrayConstraintsFromSetJunctionIdListNames(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $childRelationshipJunctionIdListNamesItem) {
            // validation for constraint: itemType
            if (!is_string($childRelationshipJunctionIdListNamesItem)) {
                $invalidValues[] = is_object($childRelationshipJunctionIdListNamesItem) ? get_class($childRelationshipJunctionIdListNamesItem) : sprintf('%s(%s)', gettype($childRelationshipJunctionIdListNamesItem), var_export($childRelationshipJunctionIdListNamesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The junctionIdListNames property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set junctionIdListNames value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $junctionIdListNames
     * @return \SFPartnerApi\v480\StructType\ChildRelationship
     */
    public function setJunctionIdListNames(array $junctionIdListNames = array())
    {
        // validation for constraint: array
        if ('' !== ($junctionIdListNamesArrayErrorMessage = self::validateJunctionIdListNamesForArrayConstraintsFromSetJunctionIdListNames($junctionIdListNames))) {
            throw new \InvalidArgumentException($junctionIdListNamesArrayErrorMessage, __LINE__);
        }
        if (is_null($junctionIdListNames) || (is_array($junctionIdListNames) && empty($junctionIdListNames))) {
            unset($this->junctionIdListNames);
        } else {
            $this->junctionIdListNames = $junctionIdListNames;
        }
        return $this;
    }
    /**
     * Add item to junctionIdListNames value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\ChildRelationship
     */
    public function addToJunctionIdListNames($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The junctionIdListNames property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->junctionIdListNames[] = $item;
        return $this;
    }
    /**
     * Get junctionReferenceTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getJunctionReferenceTo()
    {
        return isset($this->junctionReferenceTo) ? $this->junctionReferenceTo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setJunctionReferenceTo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJunctionReferenceTo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJunctionReferenceToForArrayConstraintsFromSetJunctionReferenceTo(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $childRelationshipJunctionReferenceToItem) {
            // validation for constraint: itemType
            if (!is_string($childRelationshipJunctionReferenceToItem)) {
                $invalidValues[] = is_object($childRelationshipJunctionReferenceToItem) ? get_class($childRelationshipJunctionReferenceToItem) : sprintf('%s(%s)', gettype($childRelationshipJunctionReferenceToItem), var_export($childRelationshipJunctionReferenceToItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The junctionReferenceTo property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set junctionReferenceTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $junctionReferenceTo
     * @return \SFPartnerApi\v480\StructType\ChildRelationship
     */
    public function setJunctionReferenceTo(array $junctionReferenceTo = array())
    {
        // validation for constraint: array
        if ('' !== ($junctionReferenceToArrayErrorMessage = self::validateJunctionReferenceToForArrayConstraintsFromSetJunctionReferenceTo($junctionReferenceTo))) {
            throw new \InvalidArgumentException($junctionReferenceToArrayErrorMessage, __LINE__);
        }
        if (is_null($junctionReferenceTo) || (is_array($junctionReferenceTo) && empty($junctionReferenceTo))) {
            unset($this->junctionReferenceTo);
        } else {
            $this->junctionReferenceTo = $junctionReferenceTo;
        }
        return $this;
    }
    /**
     * Add item to junctionReferenceTo value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\ChildRelationship
     */
    public function addToJunctionReferenceTo($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The junctionReferenceTo property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->junctionReferenceTo[] = $item;
        return $this;
    }
    /**
     * Get relationshipName value
     * @return string|null
     */
    public function getRelationshipName()
    {
        return $this->relationshipName;
    }
    /**
     * Set relationshipName value
     * @param string $relationshipName
     * @return \SFPartnerApi\v480\StructType\ChildRelationship
     */
    public function setRelationshipName($relationshipName = null)
    {
        // validation for constraint: string
        if (!is_null($relationshipName) && !is_string($relationshipName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relationshipName, true), gettype($relationshipName)), __LINE__);
        }
        $this->relationshipName = $relationshipName;
        return $this;
    }
    /**
     * Get restrictedDelete value
     * @return bool|null
     */
    public function getRestrictedDelete()
    {
        return $this->restrictedDelete;
    }
    /**
     * Set restrictedDelete value
     * @param bool $restrictedDelete
     * @return \SFPartnerApi\v480\StructType\ChildRelationship
     */
    public function setRestrictedDelete($restrictedDelete = null)
    {
        // validation for constraint: boolean
        if (!is_null($restrictedDelete) && !is_bool($restrictedDelete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($restrictedDelete, true), gettype($restrictedDelete)), __LINE__);
        }
        $this->restrictedDelete = $restrictedDelete;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\ChildRelationship
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
