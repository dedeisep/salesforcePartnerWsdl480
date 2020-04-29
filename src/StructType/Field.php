<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Field StructType
 * @subpackage Structs
 */
class Field extends AbstractStructBase
{
    /**
     * The aggregatable
     * @var bool
     */
    public $aggregatable;
    /**
     * The aiPredictionField
     * @var bool
     */
    public $aiPredictionField;
    /**
     * The autoNumber
     * @var bool
     */
    public $autoNumber;
    /**
     * The byteLength
     * @var int
     */
    public $byteLength;
    /**
     * The calculated
     * @var bool
     */
    public $calculated;
    /**
     * The calculatedFormula
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $calculatedFormula;
    /**
     * The cascadeDelete
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $cascadeDelete;
    /**
     * The caseSensitive
     * @var bool
     */
    public $caseSensitive;
    /**
     * The compoundFieldName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $compoundFieldName;
    /**
     * The controllerName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $controllerName;
    /**
     * The createable
     * @var bool
     */
    public $createable;
    /**
     * The custom
     * @var bool
     */
    public $custom;
    /**
     * The dataTranslationEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $dataTranslationEnabled;
    /**
     * The defaultValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $defaultValue;
    /**
     * The defaultValueFormula
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $defaultValueFormula;
    /**
     * The defaultedOnCreate
     * @var bool
     */
    public $defaultedOnCreate;
    /**
     * The dependentPicklist
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $dependentPicklist;
    /**
     * The deprecatedAndHidden
     * @var bool
     */
    public $deprecatedAndHidden;
    /**
     * The digits
     * @var int
     */
    public $digits;
    /**
     * The displayLocationInDecimal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $displayLocationInDecimal;
    /**
     * The encrypted
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $encrypted;
    /**
     * The externalId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $externalId;
    /**
     * The extraTypeInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $extraTypeInfo;
    /**
     * The filterable
     * @var bool
     */
    public $filterable;
    /**
     * The filteredLookupInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\FilteredLookupInfo
     */
    public $filteredLookupInfo;
    /**
     * The formulaTreatNullNumberAsZero
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $formulaTreatNullNumberAsZero;
    /**
     * The groupable
     * @var bool
     */
    public $groupable;
    /**
     * The highScaleNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $highScaleNumber;
    /**
     * The htmlFormatted
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $htmlFormatted;
    /**
     * The idLookup
     * @var bool
     */
    public $idLookup;
    /**
     * The inlineHelpText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $inlineHelpText;
    /**
     * The label
     * @var string
     */
    public $label;
    /**
     * The length
     * @var int
     */
    public $length;
    /**
     * The mask
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $mask;
    /**
     * The maskType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $maskType;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The nameField
     * @var bool
     */
    public $nameField;
    /**
     * The namePointing
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $namePointing;
    /**
     * The nillable
     * @var bool
     */
    public $nillable;
    /**
     * The permissionable
     * @var bool
     */
    public $permissionable;
    /**
     * The picklistValues
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\PicklistEntry[]
     */
    public $picklistValues;
    /**
     * The polymorphicForeignKey
     * @var bool
     */
    public $polymorphicForeignKey;
    /**
     * The precision
     * @var int
     */
    public $precision;
    /**
     * The queryByDistance
     * @var bool
     */
    public $queryByDistance;
    /**
     * The referenceTargetField
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $referenceTargetField;
    /**
     * The referenceTo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $referenceTo;
    /**
     * The relationshipName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $relationshipName;
    /**
     * The relationshipOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $relationshipOrder;
    /**
     * The restrictedDelete
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $restrictedDelete;
    /**
     * The restrictedPicklist
     * @var bool
     */
    public $restrictedPicklist;
    /**
     * The scale
     * @var int
     */
    public $scale;
    /**
     * The searchPrefilterable
     * @var bool
     */
    public $searchPrefilterable;
    /**
     * The soapType
     * @var string
     */
    public $soapType;
    /**
     * The sortable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $sortable;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The unique
     * @var bool
     */
    public $unique;
    /**
     * The updateable
     * @var bool
     */
    public $updateable;
    /**
     * The writeRequiresMasterRead
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $writeRequiresMasterRead;
    /**
     * Constructor method for Field
     * @uses Field::setAggregatable()
     * @uses Field::setAiPredictionField()
     * @uses Field::setAutoNumber()
     * @uses Field::setByteLength()
     * @uses Field::setCalculated()
     * @uses Field::setCalculatedFormula()
     * @uses Field::setCascadeDelete()
     * @uses Field::setCaseSensitive()
     * @uses Field::setCompoundFieldName()
     * @uses Field::setControllerName()
     * @uses Field::setCreateable()
     * @uses Field::setCustom()
     * @uses Field::setDataTranslationEnabled()
     * @uses Field::setDefaultValue()
     * @uses Field::setDefaultValueFormula()
     * @uses Field::setDefaultedOnCreate()
     * @uses Field::setDependentPicklist()
     * @uses Field::setDeprecatedAndHidden()
     * @uses Field::setDigits()
     * @uses Field::setDisplayLocationInDecimal()
     * @uses Field::setEncrypted()
     * @uses Field::setExternalId()
     * @uses Field::setExtraTypeInfo()
     * @uses Field::setFilterable()
     * @uses Field::setFilteredLookupInfo()
     * @uses Field::setFormulaTreatNullNumberAsZero()
     * @uses Field::setGroupable()
     * @uses Field::setHighScaleNumber()
     * @uses Field::setHtmlFormatted()
     * @uses Field::setIdLookup()
     * @uses Field::setInlineHelpText()
     * @uses Field::setLabel()
     * @uses Field::setLength()
     * @uses Field::setMask()
     * @uses Field::setMaskType()
     * @uses Field::setName()
     * @uses Field::setNameField()
     * @uses Field::setNamePointing()
     * @uses Field::setNillable()
     * @uses Field::setPermissionable()
     * @uses Field::setPicklistValues()
     * @uses Field::setPolymorphicForeignKey()
     * @uses Field::setPrecision()
     * @uses Field::setQueryByDistance()
     * @uses Field::setReferenceTargetField()
     * @uses Field::setReferenceTo()
     * @uses Field::setRelationshipName()
     * @uses Field::setRelationshipOrder()
     * @uses Field::setRestrictedDelete()
     * @uses Field::setRestrictedPicklist()
     * @uses Field::setScale()
     * @uses Field::setSearchPrefilterable()
     * @uses Field::setSoapType()
     * @uses Field::setSortable()
     * @uses Field::setType()
     * @uses Field::setUnique()
     * @uses Field::setUpdateable()
     * @uses Field::setWriteRequiresMasterRead()
     * @param bool $aggregatable
     * @param bool $aiPredictionField
     * @param bool $autoNumber
     * @param int $byteLength
     * @param bool $calculated
     * @param string $calculatedFormula
     * @param bool $cascadeDelete
     * @param bool $caseSensitive
     * @param string $compoundFieldName
     * @param string $controllerName
     * @param bool $createable
     * @param bool $custom
     * @param bool $dataTranslationEnabled
     * @param mixed $defaultValue
     * @param string $defaultValueFormula
     * @param bool $defaultedOnCreate
     * @param bool $dependentPicklist
     * @param bool $deprecatedAndHidden
     * @param int $digits
     * @param bool $displayLocationInDecimal
     * @param bool $encrypted
     * @param bool $externalId
     * @param string $extraTypeInfo
     * @param bool $filterable
     * @param \SFPartnerApi\v480\StructType\FilteredLookupInfo $filteredLookupInfo
     * @param bool $formulaTreatNullNumberAsZero
     * @param bool $groupable
     * @param bool $highScaleNumber
     * @param bool $htmlFormatted
     * @param bool $idLookup
     * @param string $inlineHelpText
     * @param string $label
     * @param int $length
     * @param string $mask
     * @param string $maskType
     * @param string $name
     * @param bool $nameField
     * @param bool $namePointing
     * @param bool $nillable
     * @param bool $permissionable
     * @param \SFPartnerApi\v480\StructType\PicklistEntry[] $picklistValues
     * @param bool $polymorphicForeignKey
     * @param int $precision
     * @param bool $queryByDistance
     * @param string $referenceTargetField
     * @param string[] $referenceTo
     * @param string $relationshipName
     * @param int $relationshipOrder
     * @param bool $restrictedDelete
     * @param bool $restrictedPicklist
     * @param int $scale
     * @param bool $searchPrefilterable
     * @param string $soapType
     * @param bool $sortable
     * @param string $type
     * @param bool $unique
     * @param bool $updateable
     * @param bool $writeRequiresMasterRead
     */
    public function __construct($aggregatable = null, $aiPredictionField = null, $autoNumber = null, $byteLength = null, $calculated = null, $calculatedFormula = null, $cascadeDelete = null, $caseSensitive = null, $compoundFieldName = null, $controllerName = null, $createable = null, $custom = null, $dataTranslationEnabled = null, $defaultValue = null, $defaultValueFormula = null, $defaultedOnCreate = null, $dependentPicklist = null, $deprecatedAndHidden = null, $digits = null, $displayLocationInDecimal = null, $encrypted = null, $externalId = null, $extraTypeInfo = null, $filterable = null, \SFPartnerApi\v480\StructType\FilteredLookupInfo $filteredLookupInfo = null, $formulaTreatNullNumberAsZero = null, $groupable = null, $highScaleNumber = null, $htmlFormatted = null, $idLookup = null, $inlineHelpText = null, $label = null, $length = null, $mask = null, $maskType = null, $name = null, $nameField = null, $namePointing = null, $nillable = null, $permissionable = null, array $picklistValues = array(), $polymorphicForeignKey = null, $precision = null, $queryByDistance = null, $referenceTargetField = null, array $referenceTo = array(), $relationshipName = null, $relationshipOrder = null, $restrictedDelete = null, $restrictedPicklist = null, $scale = null, $searchPrefilterable = null, $soapType = null, $sortable = null, $type = null, $unique = null, $updateable = null, $writeRequiresMasterRead = null)
    {
        $this
            ->setAggregatable($aggregatable)
            ->setAiPredictionField($aiPredictionField)
            ->setAutoNumber($autoNumber)
            ->setByteLength($byteLength)
            ->setCalculated($calculated)
            ->setCalculatedFormula($calculatedFormula)
            ->setCascadeDelete($cascadeDelete)
            ->setCaseSensitive($caseSensitive)
            ->setCompoundFieldName($compoundFieldName)
            ->setControllerName($controllerName)
            ->setCreateable($createable)
            ->setCustom($custom)
            ->setDataTranslationEnabled($dataTranslationEnabled)
            ->setDefaultValue($defaultValue)
            ->setDefaultValueFormula($defaultValueFormula)
            ->setDefaultedOnCreate($defaultedOnCreate)
            ->setDependentPicklist($dependentPicklist)
            ->setDeprecatedAndHidden($deprecatedAndHidden)
            ->setDigits($digits)
            ->setDisplayLocationInDecimal($displayLocationInDecimal)
            ->setEncrypted($encrypted)
            ->setExternalId($externalId)
            ->setExtraTypeInfo($extraTypeInfo)
            ->setFilterable($filterable)
            ->setFilteredLookupInfo($filteredLookupInfo)
            ->setFormulaTreatNullNumberAsZero($formulaTreatNullNumberAsZero)
            ->setGroupable($groupable)
            ->setHighScaleNumber($highScaleNumber)
            ->setHtmlFormatted($htmlFormatted)
            ->setIdLookup($idLookup)
            ->setInlineHelpText($inlineHelpText)
            ->setLabel($label)
            ->setLength($length)
            ->setMask($mask)
            ->setMaskType($maskType)
            ->setName($name)
            ->setNameField($nameField)
            ->setNamePointing($namePointing)
            ->setNillable($nillable)
            ->setPermissionable($permissionable)
            ->setPicklistValues($picklistValues)
            ->setPolymorphicForeignKey($polymorphicForeignKey)
            ->setPrecision($precision)
            ->setQueryByDistance($queryByDistance)
            ->setReferenceTargetField($referenceTargetField)
            ->setReferenceTo($referenceTo)
            ->setRelationshipName($relationshipName)
            ->setRelationshipOrder($relationshipOrder)
            ->setRestrictedDelete($restrictedDelete)
            ->setRestrictedPicklist($restrictedPicklist)
            ->setScale($scale)
            ->setSearchPrefilterable($searchPrefilterable)
            ->setSoapType($soapType)
            ->setSortable($sortable)
            ->setType($type)
            ->setUnique($unique)
            ->setUpdateable($updateable)
            ->setWriteRequiresMasterRead($writeRequiresMasterRead);
    }
    /**
     * Get aggregatable value
     * @return bool|null
     */
    public function getAggregatable()
    {
        return $this->aggregatable;
    }
    /**
     * Set aggregatable value
     * @param bool $aggregatable
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setAggregatable($aggregatable = null)
    {
        // validation for constraint: boolean
        if (!is_null($aggregatable) && !is_bool($aggregatable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($aggregatable, true), gettype($aggregatable)), __LINE__);
        }
        $this->aggregatable = $aggregatable;
        return $this;
    }
    /**
     * Get aiPredictionField value
     * @return bool|null
     */
    public function getAiPredictionField()
    {
        return $this->aiPredictionField;
    }
    /**
     * Set aiPredictionField value
     * @param bool $aiPredictionField
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setAiPredictionField($aiPredictionField = null)
    {
        // validation for constraint: boolean
        if (!is_null($aiPredictionField) && !is_bool($aiPredictionField)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($aiPredictionField, true), gettype($aiPredictionField)), __LINE__);
        }
        $this->aiPredictionField = $aiPredictionField;
        return $this;
    }
    /**
     * Get autoNumber value
     * @return bool|null
     */
    public function getAutoNumber()
    {
        return $this->autoNumber;
    }
    /**
     * Set autoNumber value
     * @param bool $autoNumber
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setAutoNumber($autoNumber = null)
    {
        // validation for constraint: boolean
        if (!is_null($autoNumber) && !is_bool($autoNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($autoNumber, true), gettype($autoNumber)), __LINE__);
        }
        $this->autoNumber = $autoNumber;
        return $this;
    }
    /**
     * Get byteLength value
     * @return int|null
     */
    public function getByteLength()
    {
        return $this->byteLength;
    }
    /**
     * Set byteLength value
     * @param int $byteLength
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setByteLength($byteLength = null)
    {
        // validation for constraint: int
        if (!is_null($byteLength) && !(is_int($byteLength) || ctype_digit($byteLength))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($byteLength, true), gettype($byteLength)), __LINE__);
        }
        $this->byteLength = $byteLength;
        return $this;
    }
    /**
     * Get calculated value
     * @return bool|null
     */
    public function getCalculated()
    {
        return $this->calculated;
    }
    /**
     * Set calculated value
     * @param bool $calculated
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setCalculated($calculated = null)
    {
        // validation for constraint: boolean
        if (!is_null($calculated) && !is_bool($calculated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($calculated, true), gettype($calculated)), __LINE__);
        }
        $this->calculated = $calculated;
        return $this;
    }
    /**
     * Get calculatedFormula value
     * @return string|null
     */
    public function getCalculatedFormula()
    {
        return $this->calculatedFormula;
    }
    /**
     * Set calculatedFormula value
     * @param string $calculatedFormula
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setCalculatedFormula($calculatedFormula = null)
    {
        // validation for constraint: string
        if (!is_null($calculatedFormula) && !is_string($calculatedFormula)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calculatedFormula, true), gettype($calculatedFormula)), __LINE__);
        }
        $this->calculatedFormula = $calculatedFormula;
        return $this;
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
     * @return \SFPartnerApi\v480\StructType\Field
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
     * Get caseSensitive value
     * @return bool|null
     */
    public function getCaseSensitive()
    {
        return $this->caseSensitive;
    }
    /**
     * Set caseSensitive value
     * @param bool $caseSensitive
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setCaseSensitive($caseSensitive = null)
    {
        // validation for constraint: boolean
        if (!is_null($caseSensitive) && !is_bool($caseSensitive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($caseSensitive, true), gettype($caseSensitive)), __LINE__);
        }
        $this->caseSensitive = $caseSensitive;
        return $this;
    }
    /**
     * Get compoundFieldName value
     * @return string|null
     */
    public function getCompoundFieldName()
    {
        return $this->compoundFieldName;
    }
    /**
     * Set compoundFieldName value
     * @param string $compoundFieldName
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setCompoundFieldName($compoundFieldName = null)
    {
        // validation for constraint: string
        if (!is_null($compoundFieldName) && !is_string($compoundFieldName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($compoundFieldName, true), gettype($compoundFieldName)), __LINE__);
        }
        $this->compoundFieldName = $compoundFieldName;
        return $this;
    }
    /**
     * Get controllerName value
     * @return string|null
     */
    public function getControllerName()
    {
        return $this->controllerName;
    }
    /**
     * Set controllerName value
     * @param string $controllerName
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setControllerName($controllerName = null)
    {
        // validation for constraint: string
        if (!is_null($controllerName) && !is_string($controllerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($controllerName, true), gettype($controllerName)), __LINE__);
        }
        $this->controllerName = $controllerName;
        return $this;
    }
    /**
     * Get createable value
     * @return bool|null
     */
    public function getCreateable()
    {
        return $this->createable;
    }
    /**
     * Set createable value
     * @param bool $createable
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setCreateable($createable = null)
    {
        // validation for constraint: boolean
        if (!is_null($createable) && !is_bool($createable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createable, true), gettype($createable)), __LINE__);
        }
        $this->createable = $createable;
        return $this;
    }
    /**
     * Get custom value
     * @return bool|null
     */
    public function getCustom()
    {
        return $this->custom;
    }
    /**
     * Set custom value
     * @param bool $custom
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setCustom($custom = null)
    {
        // validation for constraint: boolean
        if (!is_null($custom) && !is_bool($custom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($custom, true), gettype($custom)), __LINE__);
        }
        $this->custom = $custom;
        return $this;
    }
    /**
     * Get dataTranslationEnabled value
     * @return bool|null
     */
    public function getDataTranslationEnabled()
    {
        return $this->dataTranslationEnabled;
    }
    /**
     * Set dataTranslationEnabled value
     * @param bool $dataTranslationEnabled
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setDataTranslationEnabled($dataTranslationEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($dataTranslationEnabled) && !is_bool($dataTranslationEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dataTranslationEnabled, true), gettype($dataTranslationEnabled)), __LINE__);
        }
        $this->dataTranslationEnabled = $dataTranslationEnabled;
        return $this;
    }
    /**
     * Get defaultValue value
     * @return mixed|null
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }
    /**
     * Set defaultValue value
     * @param mixed $defaultValue
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setDefaultValue($defaultValue = null)
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }
    /**
     * Get defaultValueFormula value
     * @return string|null
     */
    public function getDefaultValueFormula()
    {
        return $this->defaultValueFormula;
    }
    /**
     * Set defaultValueFormula value
     * @param string $defaultValueFormula
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setDefaultValueFormula($defaultValueFormula = null)
    {
        // validation for constraint: string
        if (!is_null($defaultValueFormula) && !is_string($defaultValueFormula)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultValueFormula, true), gettype($defaultValueFormula)), __LINE__);
        }
        $this->defaultValueFormula = $defaultValueFormula;
        return $this;
    }
    /**
     * Get defaultedOnCreate value
     * @return bool|null
     */
    public function getDefaultedOnCreate()
    {
        return $this->defaultedOnCreate;
    }
    /**
     * Set defaultedOnCreate value
     * @param bool $defaultedOnCreate
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setDefaultedOnCreate($defaultedOnCreate = null)
    {
        // validation for constraint: boolean
        if (!is_null($defaultedOnCreate) && !is_bool($defaultedOnCreate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($defaultedOnCreate, true), gettype($defaultedOnCreate)), __LINE__);
        }
        $this->defaultedOnCreate = $defaultedOnCreate;
        return $this;
    }
    /**
     * Get dependentPicklist value
     * @return bool|null
     */
    public function getDependentPicklist()
    {
        return $this->dependentPicklist;
    }
    /**
     * Set dependentPicklist value
     * @param bool $dependentPicklist
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setDependentPicklist($dependentPicklist = null)
    {
        // validation for constraint: boolean
        if (!is_null($dependentPicklist) && !is_bool($dependentPicklist)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dependentPicklist, true), gettype($dependentPicklist)), __LINE__);
        }
        $this->dependentPicklist = $dependentPicklist;
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
     * @return \SFPartnerApi\v480\StructType\Field
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
     * Get digits value
     * @return int|null
     */
    public function getDigits()
    {
        return $this->digits;
    }
    /**
     * Set digits value
     * @param int $digits
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setDigits($digits = null)
    {
        // validation for constraint: int
        if (!is_null($digits) && !(is_int($digits) || ctype_digit($digits))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($digits, true), gettype($digits)), __LINE__);
        }
        $this->digits = $digits;
        return $this;
    }
    /**
     * Get displayLocationInDecimal value
     * @return bool|null
     */
    public function getDisplayLocationInDecimal()
    {
        return $this->displayLocationInDecimal;
    }
    /**
     * Set displayLocationInDecimal value
     * @param bool $displayLocationInDecimal
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setDisplayLocationInDecimal($displayLocationInDecimal = null)
    {
        // validation for constraint: boolean
        if (!is_null($displayLocationInDecimal) && !is_bool($displayLocationInDecimal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($displayLocationInDecimal, true), gettype($displayLocationInDecimal)), __LINE__);
        }
        $this->displayLocationInDecimal = $displayLocationInDecimal;
        return $this;
    }
    /**
     * Get encrypted value
     * @return bool|null
     */
    public function getEncrypted()
    {
        return $this->encrypted;
    }
    /**
     * Set encrypted value
     * @param bool $encrypted
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setEncrypted($encrypted = null)
    {
        // validation for constraint: boolean
        if (!is_null($encrypted) && !is_bool($encrypted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($encrypted, true), gettype($encrypted)), __LINE__);
        }
        $this->encrypted = $encrypted;
        return $this;
    }
    /**
     * Get externalId value
     * @return bool|null
     */
    public function getExternalId()
    {
        return $this->externalId;
    }
    /**
     * Set externalId value
     * @param bool $externalId
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setExternalId($externalId = null)
    {
        // validation for constraint: boolean
        if (!is_null($externalId) && !is_bool($externalId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($externalId, true), gettype($externalId)), __LINE__);
        }
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * Get extraTypeInfo value
     * @return string|null
     */
    public function getExtraTypeInfo()
    {
        return $this->extraTypeInfo;
    }
    /**
     * Set extraTypeInfo value
     * @param string $extraTypeInfo
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setExtraTypeInfo($extraTypeInfo = null)
    {
        // validation for constraint: string
        if (!is_null($extraTypeInfo) && !is_string($extraTypeInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extraTypeInfo, true), gettype($extraTypeInfo)), __LINE__);
        }
        $this->extraTypeInfo = $extraTypeInfo;
        return $this;
    }
    /**
     * Get filterable value
     * @return bool|null
     */
    public function getFilterable()
    {
        return $this->filterable;
    }
    /**
     * Set filterable value
     * @param bool $filterable
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setFilterable($filterable = null)
    {
        // validation for constraint: boolean
        if (!is_null($filterable) && !is_bool($filterable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($filterable, true), gettype($filterable)), __LINE__);
        }
        $this->filterable = $filterable;
        return $this;
    }
    /**
     * Get filteredLookupInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SFPartnerApi\v480\StructType\FilteredLookupInfo|null
     */
    public function getFilteredLookupInfo()
    {
        return isset($this->filteredLookupInfo) ? $this->filteredLookupInfo : null;
    }
    /**
     * Set filteredLookupInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SFPartnerApi\v480\StructType\FilteredLookupInfo $filteredLookupInfo
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setFilteredLookupInfo(\SFPartnerApi\v480\StructType\FilteredLookupInfo $filteredLookupInfo = null)
    {
        if (is_null($filteredLookupInfo) || (is_array($filteredLookupInfo) && empty($filteredLookupInfo))) {
            unset($this->filteredLookupInfo);
        } else {
            $this->filteredLookupInfo = $filteredLookupInfo;
        }
        return $this;
    }
    /**
     * Get formulaTreatNullNumberAsZero value
     * @return bool|null
     */
    public function getFormulaTreatNullNumberAsZero()
    {
        return $this->formulaTreatNullNumberAsZero;
    }
    /**
     * Set formulaTreatNullNumberAsZero value
     * @param bool $formulaTreatNullNumberAsZero
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setFormulaTreatNullNumberAsZero($formulaTreatNullNumberAsZero = null)
    {
        // validation for constraint: boolean
        if (!is_null($formulaTreatNullNumberAsZero) && !is_bool($formulaTreatNullNumberAsZero)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($formulaTreatNullNumberAsZero, true), gettype($formulaTreatNullNumberAsZero)), __LINE__);
        }
        $this->formulaTreatNullNumberAsZero = $formulaTreatNullNumberAsZero;
        return $this;
    }
    /**
     * Get groupable value
     * @return bool|null
     */
    public function getGroupable()
    {
        return $this->groupable;
    }
    /**
     * Set groupable value
     * @param bool $groupable
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setGroupable($groupable = null)
    {
        // validation for constraint: boolean
        if (!is_null($groupable) && !is_bool($groupable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($groupable, true), gettype($groupable)), __LINE__);
        }
        $this->groupable = $groupable;
        return $this;
    }
    /**
     * Get highScaleNumber value
     * @return bool|null
     */
    public function getHighScaleNumber()
    {
        return $this->highScaleNumber;
    }
    /**
     * Set highScaleNumber value
     * @param bool $highScaleNumber
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setHighScaleNumber($highScaleNumber = null)
    {
        // validation for constraint: boolean
        if (!is_null($highScaleNumber) && !is_bool($highScaleNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($highScaleNumber, true), gettype($highScaleNumber)), __LINE__);
        }
        $this->highScaleNumber = $highScaleNumber;
        return $this;
    }
    /**
     * Get htmlFormatted value
     * @return bool|null
     */
    public function getHtmlFormatted()
    {
        return $this->htmlFormatted;
    }
    /**
     * Set htmlFormatted value
     * @param bool $htmlFormatted
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setHtmlFormatted($htmlFormatted = null)
    {
        // validation for constraint: boolean
        if (!is_null($htmlFormatted) && !is_bool($htmlFormatted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($htmlFormatted, true), gettype($htmlFormatted)), __LINE__);
        }
        $this->htmlFormatted = $htmlFormatted;
        return $this;
    }
    /**
     * Get idLookup value
     * @return bool|null
     */
    public function getIdLookup()
    {
        return $this->idLookup;
    }
    /**
     * Set idLookup value
     * @param bool $idLookup
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setIdLookup($idLookup = null)
    {
        // validation for constraint: boolean
        if (!is_null($idLookup) && !is_bool($idLookup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($idLookup, true), gettype($idLookup)), __LINE__);
        }
        $this->idLookup = $idLookup;
        return $this;
    }
    /**
     * Get inlineHelpText value
     * @return string|null
     */
    public function getInlineHelpText()
    {
        return $this->inlineHelpText;
    }
    /**
     * Set inlineHelpText value
     * @param string $inlineHelpText
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setInlineHelpText($inlineHelpText = null)
    {
        // validation for constraint: string
        if (!is_null($inlineHelpText) && !is_string($inlineHelpText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inlineHelpText, true), gettype($inlineHelpText)), __LINE__);
        }
        $this->inlineHelpText = $inlineHelpText;
        return $this;
    }
    /**
     * Get label value
     * @return string|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param string $label
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setLabel($label = null)
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        $this->label = $label;
        return $this;
    }
    /**
     * Get length value
     * @return int|null
     */
    public function getLength()
    {
        return $this->length;
    }
    /**
     * Set length value
     * @param int $length
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setLength($length = null)
    {
        // validation for constraint: int
        if (!is_null($length) && !(is_int($length) || ctype_digit($length))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($length, true), gettype($length)), __LINE__);
        }
        $this->length = $length;
        return $this;
    }
    /**
     * Get mask value
     * @return string|null
     */
    public function getMask()
    {
        return $this->mask;
    }
    /**
     * Set mask value
     * @param string $mask
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setMask($mask = null)
    {
        // validation for constraint: string
        if (!is_null($mask) && !is_string($mask)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mask, true), gettype($mask)), __LINE__);
        }
        $this->mask = $mask;
        return $this;
    }
    /**
     * Get maskType value
     * @return string|null
     */
    public function getMaskType()
    {
        return $this->maskType;
    }
    /**
     * Set maskType value
     * @param string $maskType
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setMaskType($maskType = null)
    {
        // validation for constraint: string
        if (!is_null($maskType) && !is_string($maskType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maskType, true), gettype($maskType)), __LINE__);
        }
        $this->maskType = $maskType;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get nameField value
     * @return bool|null
     */
    public function getNameField()
    {
        return $this->nameField;
    }
    /**
     * Set nameField value
     * @param bool $nameField
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setNameField($nameField = null)
    {
        // validation for constraint: boolean
        if (!is_null($nameField) && !is_bool($nameField)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($nameField, true), gettype($nameField)), __LINE__);
        }
        $this->nameField = $nameField;
        return $this;
    }
    /**
     * Get namePointing value
     * @return bool|null
     */
    public function getNamePointing()
    {
        return $this->namePointing;
    }
    /**
     * Set namePointing value
     * @param bool $namePointing
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setNamePointing($namePointing = null)
    {
        // validation for constraint: boolean
        if (!is_null($namePointing) && !is_bool($namePointing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($namePointing, true), gettype($namePointing)), __LINE__);
        }
        $this->namePointing = $namePointing;
        return $this;
    }
    /**
     * Get nillable value
     * @return bool|null
     */
    public function getNillable()
    {
        return $this->nillable;
    }
    /**
     * Set nillable value
     * @param bool $nillable
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setNillable($nillable = null)
    {
        // validation for constraint: boolean
        if (!is_null($nillable) && !is_bool($nillable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($nillable, true), gettype($nillable)), __LINE__);
        }
        $this->nillable = $nillable;
        return $this;
    }
    /**
     * Get permissionable value
     * @return bool|null
     */
    public function getPermissionable()
    {
        return $this->permissionable;
    }
    /**
     * Set permissionable value
     * @param bool $permissionable
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setPermissionable($permissionable = null)
    {
        // validation for constraint: boolean
        if (!is_null($permissionable) && !is_bool($permissionable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($permissionable, true), gettype($permissionable)), __LINE__);
        }
        $this->permissionable = $permissionable;
        return $this;
    }
    /**
     * Get picklistValues value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SFPartnerApi\v480\StructType\PicklistEntry[]|null
     */
    public function getPicklistValues()
    {
        return isset($this->picklistValues) ? $this->picklistValues : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPicklistValues method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPicklistValues method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePicklistValuesForArrayConstraintsFromSetPicklistValues(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $fieldPicklistValuesItem) {
            // validation for constraint: itemType
            if (!$fieldPicklistValuesItem instanceof \SFPartnerApi\v480\StructType\PicklistEntry) {
                $invalidValues[] = is_object($fieldPicklistValuesItem) ? get_class($fieldPicklistValuesItem) : sprintf('%s(%s)', gettype($fieldPicklistValuesItem), var_export($fieldPicklistValuesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The picklistValues property can only contain items of type \SFPartnerApi\v480\StructType\PicklistEntry, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set picklistValues value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\PicklistEntry[] $picklistValues
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setPicklistValues(array $picklistValues = array())
    {
        // validation for constraint: array
        if ('' !== ($picklistValuesArrayErrorMessage = self::validatePicklistValuesForArrayConstraintsFromSetPicklistValues($picklistValues))) {
            throw new \InvalidArgumentException($picklistValuesArrayErrorMessage, __LINE__);
        }
        if (is_null($picklistValues) || (is_array($picklistValues) && empty($picklistValues))) {
            unset($this->picklistValues);
        } else {
            $this->picklistValues = $picklistValues;
        }
        return $this;
    }
    /**
     * Add item to picklistValues value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\PicklistEntry $item
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function addToPicklistValues(\SFPartnerApi\v480\StructType\PicklistEntry $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\PicklistEntry) {
            throw new \InvalidArgumentException(sprintf('The picklistValues property can only contain items of type \SFPartnerApi\v480\StructType\PicklistEntry, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->picklistValues[] = $item;
        return $this;
    }
    /**
     * Get polymorphicForeignKey value
     * @return bool|null
     */
    public function getPolymorphicForeignKey()
    {
        return $this->polymorphicForeignKey;
    }
    /**
     * Set polymorphicForeignKey value
     * @param bool $polymorphicForeignKey
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setPolymorphicForeignKey($polymorphicForeignKey = null)
    {
        // validation for constraint: boolean
        if (!is_null($polymorphicForeignKey) && !is_bool($polymorphicForeignKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($polymorphicForeignKey, true), gettype($polymorphicForeignKey)), __LINE__);
        }
        $this->polymorphicForeignKey = $polymorphicForeignKey;
        return $this;
    }
    /**
     * Get precision value
     * @return int|null
     */
    public function getPrecision()
    {
        return $this->precision;
    }
    /**
     * Set precision value
     * @param int $precision
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setPrecision($precision = null)
    {
        // validation for constraint: int
        if (!is_null($precision) && !(is_int($precision) || ctype_digit($precision))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($precision, true), gettype($precision)), __LINE__);
        }
        $this->precision = $precision;
        return $this;
    }
    /**
     * Get queryByDistance value
     * @return bool|null
     */
    public function getQueryByDistance()
    {
        return $this->queryByDistance;
    }
    /**
     * Set queryByDistance value
     * @param bool $queryByDistance
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setQueryByDistance($queryByDistance = null)
    {
        // validation for constraint: boolean
        if (!is_null($queryByDistance) && !is_bool($queryByDistance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($queryByDistance, true), gettype($queryByDistance)), __LINE__);
        }
        $this->queryByDistance = $queryByDistance;
        return $this;
    }
    /**
     * Get referenceTargetField value
     * @return string|null
     */
    public function getReferenceTargetField()
    {
        return $this->referenceTargetField;
    }
    /**
     * Set referenceTargetField value
     * @param string $referenceTargetField
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setReferenceTargetField($referenceTargetField = null)
    {
        // validation for constraint: string
        if (!is_null($referenceTargetField) && !is_string($referenceTargetField)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceTargetField, true), gettype($referenceTargetField)), __LINE__);
        }
        $this->referenceTargetField = $referenceTargetField;
        return $this;
    }
    /**
     * Get referenceTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getReferenceTo()
    {
        return isset($this->referenceTo) ? $this->referenceTo : null;
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
        foreach ($values as $fieldReferenceToItem) {
            // validation for constraint: itemType
            if (!is_string($fieldReferenceToItem)) {
                $invalidValues[] = is_object($fieldReferenceToItem) ? get_class($fieldReferenceToItem) : sprintf('%s(%s)', gettype($fieldReferenceToItem), var_export($fieldReferenceToItem, true));
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
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $referenceTo
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setReferenceTo(array $referenceTo = array())
    {
        // validation for constraint: array
        if ('' !== ($referenceToArrayErrorMessage = self::validateReferenceToForArrayConstraintsFromSetReferenceTo($referenceTo))) {
            throw new \InvalidArgumentException($referenceToArrayErrorMessage, __LINE__);
        }
        if (is_null($referenceTo) || (is_array($referenceTo) && empty($referenceTo))) {
            unset($this->referenceTo);
        } else {
            $this->referenceTo = $referenceTo;
        }
        return $this;
    }
    /**
     * Add item to referenceTo value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\Field
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
     * @return \SFPartnerApi\v480\StructType\Field
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
     * Get relationshipOrder value
     * @return int|null
     */
    public function getRelationshipOrder()
    {
        return $this->relationshipOrder;
    }
    /**
     * Set relationshipOrder value
     * @param int $relationshipOrder
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setRelationshipOrder($relationshipOrder = null)
    {
        // validation for constraint: int
        if (!is_null($relationshipOrder) && !(is_int($relationshipOrder) || ctype_digit($relationshipOrder))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($relationshipOrder, true), gettype($relationshipOrder)), __LINE__);
        }
        $this->relationshipOrder = $relationshipOrder;
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
     * @return \SFPartnerApi\v480\StructType\Field
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
     * Get restrictedPicklist value
     * @return bool|null
     */
    public function getRestrictedPicklist()
    {
        return $this->restrictedPicklist;
    }
    /**
     * Set restrictedPicklist value
     * @param bool $restrictedPicklist
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setRestrictedPicklist($restrictedPicklist = null)
    {
        // validation for constraint: boolean
        if (!is_null($restrictedPicklist) && !is_bool($restrictedPicklist)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($restrictedPicklist, true), gettype($restrictedPicklist)), __LINE__);
        }
        $this->restrictedPicklist = $restrictedPicklist;
        return $this;
    }
    /**
     * Get scale value
     * @return int|null
     */
    public function getScale()
    {
        return $this->scale;
    }
    /**
     * Set scale value
     * @param int $scale
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setScale($scale = null)
    {
        // validation for constraint: int
        if (!is_null($scale) && !(is_int($scale) || ctype_digit($scale))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($scale, true), gettype($scale)), __LINE__);
        }
        $this->scale = $scale;
        return $this;
    }
    /**
     * Get searchPrefilterable value
     * @return bool|null
     */
    public function getSearchPrefilterable()
    {
        return $this->searchPrefilterable;
    }
    /**
     * Set searchPrefilterable value
     * @param bool $searchPrefilterable
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setSearchPrefilterable($searchPrefilterable = null)
    {
        // validation for constraint: boolean
        if (!is_null($searchPrefilterable) && !is_bool($searchPrefilterable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($searchPrefilterable, true), gettype($searchPrefilterable)), __LINE__);
        }
        $this->searchPrefilterable = $searchPrefilterable;
        return $this;
    }
    /**
     * Get soapType value
     * @return string|null
     */
    public function getSoapType()
    {
        return $this->soapType;
    }
    /**
     * Set soapType value
     * @uses \SFPartnerApi\v480\EnumType\SoapType::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\SoapType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $soapType
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setSoapType($soapType = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\SoapType::valueIsValid($soapType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\SoapType', is_array($soapType) ? implode(', ', $soapType) : var_export($soapType, true), implode(', ', \SFPartnerApi\v480\EnumType\SoapType::getValidValues())), __LINE__);
        }
        $this->soapType = $soapType;
        return $this;
    }
    /**
     * Get sortable value
     * @return bool|null
     */
    public function getSortable()
    {
        return $this->sortable;
    }
    /**
     * Set sortable value
     * @param bool $sortable
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setSortable($sortable = null)
    {
        // validation for constraint: boolean
        if (!is_null($sortable) && !is_bool($sortable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sortable, true), gettype($sortable)), __LINE__);
        }
        $this->sortable = $sortable;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \SFPartnerApi\v480\EnumType\FieldType::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\FieldType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\FieldType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\FieldType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \SFPartnerApi\v480\EnumType\FieldType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get unique value
     * @return bool|null
     */
    public function getUnique()
    {
        return $this->unique;
    }
    /**
     * Set unique value
     * @param bool $unique
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setUnique($unique = null)
    {
        // validation for constraint: boolean
        if (!is_null($unique) && !is_bool($unique)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($unique, true), gettype($unique)), __LINE__);
        }
        $this->unique = $unique;
        return $this;
    }
    /**
     * Get updateable value
     * @return bool|null
     */
    public function getUpdateable()
    {
        return $this->updateable;
    }
    /**
     * Set updateable value
     * @param bool $updateable
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setUpdateable($updateable = null)
    {
        // validation for constraint: boolean
        if (!is_null($updateable) && !is_bool($updateable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($updateable, true), gettype($updateable)), __LINE__);
        }
        $this->updateable = $updateable;
        return $this;
    }
    /**
     * Get writeRequiresMasterRead value
     * @return bool|null
     */
    public function getWriteRequiresMasterRead()
    {
        return $this->writeRequiresMasterRead;
    }
    /**
     * Set writeRequiresMasterRead value
     * @param bool $writeRequiresMasterRead
     * @return \SFPartnerApi\v480\StructType\Field
     */
    public function setWriteRequiresMasterRead($writeRequiresMasterRead = null)
    {
        // validation for constraint: boolean
        if (!is_null($writeRequiresMasterRead) && !is_bool($writeRequiresMasterRead)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($writeRequiresMasterRead, true), gettype($writeRequiresMasterRead)), __LINE__);
        }
        $this->writeRequiresMasterRead = $writeRequiresMasterRead;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\Field
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
