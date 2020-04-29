<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeSObjectResult StructType
 * @subpackage Structs
 */
class DescribeSObjectResult extends AbstractStructBase
{
    /**
     * The actionOverrides
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\ActionOverride[]
     */
    public $actionOverrides;
    /**
     * The activateable
     * @var bool
     */
    public $activateable;
    /**
     * The childRelationships
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\ChildRelationship[]
     */
    public $childRelationships;
    /**
     * The compactLayoutable
     * @var bool
     */
    public $compactLayoutable;
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
     * The customSetting
     * @var bool
     */
    public $customSetting;
    /**
     * The dataTranslationEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $dataTranslationEnabled;
    /**
     * The deepCloneable
     * @var bool
     */
    public $deepCloneable;
    /**
     * The defaultImplementation
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $defaultImplementation;
    /**
     * The deletable
     * @var bool
     */
    public $deletable;
    /**
     * The deprecatedAndHidden
     * @var bool
     */
    public $deprecatedAndHidden;
    /**
     * The feedEnabled
     * @var bool
     */
    public $feedEnabled;
    /**
     * The fields
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\Field[]
     */
    public $fields;
    /**
     * The hasSubtypes
     * @var bool
     */
    public $hasSubtypes;
    /**
     * The idEnabled
     * @var bool
     */
    public $idEnabled;
    /**
     * The implementedBy
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $implementedBy;
    /**
     * The implementsInterfaces
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $implementsInterfaces;
    /**
     * The isInterface
     * @var bool
     */
    public $isInterface;
    /**
     * The isSubtype
     * @var bool
     */
    public $isSubtype;
    /**
     * The keyPrefix
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $keyPrefix;
    /**
     * The label
     * @var string
     */
    public $label;
    /**
     * The labelPlural
     * @var string
     */
    public $labelPlural;
    /**
     * The layoutable
     * @var bool
     */
    public $layoutable;
    /**
     * The mergeable
     * @var bool
     */
    public $mergeable;
    /**
     * The mruEnabled
     * @var bool
     */
    public $mruEnabled;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The namedLayoutInfos
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\NamedLayoutInfo[]
     */
    public $namedLayoutInfos;
    /**
     * The networkScopeFieldName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $networkScopeFieldName;
    /**
     * The queryable
     * @var bool
     */
    public $queryable;
    /**
     * The recordTypeInfos
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\RecordTypeInfo[]
     */
    public $recordTypeInfos;
    /**
     * The replicateable
     * @var bool
     */
    public $replicateable;
    /**
     * The retrieveable
     * @var bool
     */
    public $retrieveable;
    /**
     * The searchLayoutable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $searchLayoutable;
    /**
     * The searchable
     * @var bool
     */
    public $searchable;
    /**
     * The supportedScopes
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\ScopeInfo[]
     */
    public $supportedScopes;
    /**
     * The triggerable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $triggerable;
    /**
     * The undeletable
     * @var bool
     */
    public $undeletable;
    /**
     * The updateable
     * @var bool
     */
    public $updateable;
    /**
     * The urlDetail
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $urlDetail;
    /**
     * The urlEdit
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $urlEdit;
    /**
     * The urlNew
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $urlNew;
    /**
     * Constructor method for DescribeSObjectResult
     * @uses DescribeSObjectResult::setActionOverrides()
     * @uses DescribeSObjectResult::setActivateable()
     * @uses DescribeSObjectResult::setChildRelationships()
     * @uses DescribeSObjectResult::setCompactLayoutable()
     * @uses DescribeSObjectResult::setCreateable()
     * @uses DescribeSObjectResult::setCustom()
     * @uses DescribeSObjectResult::setCustomSetting()
     * @uses DescribeSObjectResult::setDataTranslationEnabled()
     * @uses DescribeSObjectResult::setDeepCloneable()
     * @uses DescribeSObjectResult::setDefaultImplementation()
     * @uses DescribeSObjectResult::setDeletable()
     * @uses DescribeSObjectResult::setDeprecatedAndHidden()
     * @uses DescribeSObjectResult::setFeedEnabled()
     * @uses DescribeSObjectResult::setFields()
     * @uses DescribeSObjectResult::setHasSubtypes()
     * @uses DescribeSObjectResult::setIdEnabled()
     * @uses DescribeSObjectResult::setImplementedBy()
     * @uses DescribeSObjectResult::setImplementsInterfaces()
     * @uses DescribeSObjectResult::setIsInterface()
     * @uses DescribeSObjectResult::setIsSubtype()
     * @uses DescribeSObjectResult::setKeyPrefix()
     * @uses DescribeSObjectResult::setLabel()
     * @uses DescribeSObjectResult::setLabelPlural()
     * @uses DescribeSObjectResult::setLayoutable()
     * @uses DescribeSObjectResult::setMergeable()
     * @uses DescribeSObjectResult::setMruEnabled()
     * @uses DescribeSObjectResult::setName()
     * @uses DescribeSObjectResult::setNamedLayoutInfos()
     * @uses DescribeSObjectResult::setNetworkScopeFieldName()
     * @uses DescribeSObjectResult::setQueryable()
     * @uses DescribeSObjectResult::setRecordTypeInfos()
     * @uses DescribeSObjectResult::setReplicateable()
     * @uses DescribeSObjectResult::setRetrieveable()
     * @uses DescribeSObjectResult::setSearchLayoutable()
     * @uses DescribeSObjectResult::setSearchable()
     * @uses DescribeSObjectResult::setSupportedScopes()
     * @uses DescribeSObjectResult::setTriggerable()
     * @uses DescribeSObjectResult::setUndeletable()
     * @uses DescribeSObjectResult::setUpdateable()
     * @uses DescribeSObjectResult::setUrlDetail()
     * @uses DescribeSObjectResult::setUrlEdit()
     * @uses DescribeSObjectResult::setUrlNew()
     * @param \SFPartnerApi\v480\StructType\ActionOverride[] $actionOverrides
     * @param bool $activateable
     * @param \SFPartnerApi\v480\StructType\ChildRelationship[] $childRelationships
     * @param bool $compactLayoutable
     * @param bool $createable
     * @param bool $custom
     * @param bool $customSetting
     * @param bool $dataTranslationEnabled
     * @param bool $deepCloneable
     * @param string $defaultImplementation
     * @param bool $deletable
     * @param bool $deprecatedAndHidden
     * @param bool $feedEnabled
     * @param \SFPartnerApi\v480\StructType\Field[] $fields
     * @param bool $hasSubtypes
     * @param bool $idEnabled
     * @param string $implementedBy
     * @param string $implementsInterfaces
     * @param bool $isInterface
     * @param bool $isSubtype
     * @param string $keyPrefix
     * @param string $label
     * @param string $labelPlural
     * @param bool $layoutable
     * @param bool $mergeable
     * @param bool $mruEnabled
     * @param string $name
     * @param \SFPartnerApi\v480\StructType\NamedLayoutInfo[] $namedLayoutInfos
     * @param string $networkScopeFieldName
     * @param bool $queryable
     * @param \SFPartnerApi\v480\StructType\RecordTypeInfo[] $recordTypeInfos
     * @param bool $replicateable
     * @param bool $retrieveable
     * @param bool $searchLayoutable
     * @param bool $searchable
     * @param \SFPartnerApi\v480\StructType\ScopeInfo[] $supportedScopes
     * @param bool $triggerable
     * @param bool $undeletable
     * @param bool $updateable
     * @param string $urlDetail
     * @param string $urlEdit
     * @param string $urlNew
     */
    public function __construct(array $actionOverrides = array(), $activateable = null, array $childRelationships = array(), $compactLayoutable = null, $createable = null, $custom = null, $customSetting = null, $dataTranslationEnabled = null, $deepCloneable = null, $defaultImplementation = null, $deletable = null, $deprecatedAndHidden = null, $feedEnabled = null, array $fields = array(), $hasSubtypes = null, $idEnabled = null, $implementedBy = null, $implementsInterfaces = null, $isInterface = null, $isSubtype = null, $keyPrefix = null, $label = null, $labelPlural = null, $layoutable = null, $mergeable = null, $mruEnabled = null, $name = null, array $namedLayoutInfos = array(), $networkScopeFieldName = null, $queryable = null, array $recordTypeInfos = array(), $replicateable = null, $retrieveable = null, $searchLayoutable = null, $searchable = null, array $supportedScopes = array(), $triggerable = null, $undeletable = null, $updateable = null, $urlDetail = null, $urlEdit = null, $urlNew = null)
    {
        $this
            ->setActionOverrides($actionOverrides)
            ->setActivateable($activateable)
            ->setChildRelationships($childRelationships)
            ->setCompactLayoutable($compactLayoutable)
            ->setCreateable($createable)
            ->setCustom($custom)
            ->setCustomSetting($customSetting)
            ->setDataTranslationEnabled($dataTranslationEnabled)
            ->setDeepCloneable($deepCloneable)
            ->setDefaultImplementation($defaultImplementation)
            ->setDeletable($deletable)
            ->setDeprecatedAndHidden($deprecatedAndHidden)
            ->setFeedEnabled($feedEnabled)
            ->setFields($fields)
            ->setHasSubtypes($hasSubtypes)
            ->setIdEnabled($idEnabled)
            ->setImplementedBy($implementedBy)
            ->setImplementsInterfaces($implementsInterfaces)
            ->setIsInterface($isInterface)
            ->setIsSubtype($isSubtype)
            ->setKeyPrefix($keyPrefix)
            ->setLabel($label)
            ->setLabelPlural($labelPlural)
            ->setLayoutable($layoutable)
            ->setMergeable($mergeable)
            ->setMruEnabled($mruEnabled)
            ->setName($name)
            ->setNamedLayoutInfos($namedLayoutInfos)
            ->setNetworkScopeFieldName($networkScopeFieldName)
            ->setQueryable($queryable)
            ->setRecordTypeInfos($recordTypeInfos)
            ->setReplicateable($replicateable)
            ->setRetrieveable($retrieveable)
            ->setSearchLayoutable($searchLayoutable)
            ->setSearchable($searchable)
            ->setSupportedScopes($supportedScopes)
            ->setTriggerable($triggerable)
            ->setUndeletable($undeletable)
            ->setUpdateable($updateable)
            ->setUrlDetail($urlDetail)
            ->setUrlEdit($urlEdit)
            ->setUrlNew($urlNew);
    }
    /**
     * Get actionOverrides value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SFPartnerApi\v480\StructType\ActionOverride[]|null
     */
    public function getActionOverrides()
    {
        return isset($this->actionOverrides) ? $this->actionOverrides : null;
    }
    /**
     * This method is responsible for validating the values passed to the setActionOverrides method
     * This method is willingly generated in order to preserve the one-line inline validation within the setActionOverrides method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateActionOverridesForArrayConstraintsFromSetActionOverrides(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeSObjectResultActionOverridesItem) {
            // validation for constraint: itemType
            if (!$describeSObjectResultActionOverridesItem instanceof \SFPartnerApi\v480\StructType\ActionOverride) {
                $invalidValues[] = is_object($describeSObjectResultActionOverridesItem) ? get_class($describeSObjectResultActionOverridesItem) : sprintf('%s(%s)', gettype($describeSObjectResultActionOverridesItem), var_export($describeSObjectResultActionOverridesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The actionOverrides property can only contain items of type \SFPartnerApi\v480\StructType\ActionOverride, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set actionOverrides value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\ActionOverride[] $actionOverrides
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setActionOverrides(array $actionOverrides = array())
    {
        // validation for constraint: array
        if ('' !== ($actionOverridesArrayErrorMessage = self::validateActionOverridesForArrayConstraintsFromSetActionOverrides($actionOverrides))) {
            throw new \InvalidArgumentException($actionOverridesArrayErrorMessage, __LINE__);
        }
        if (is_null($actionOverrides) || (is_array($actionOverrides) && empty($actionOverrides))) {
            unset($this->actionOverrides);
        } else {
            $this->actionOverrides = $actionOverrides;
        }
        return $this;
    }
    /**
     * Add item to actionOverrides value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\ActionOverride $item
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function addToActionOverrides(\SFPartnerApi\v480\StructType\ActionOverride $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\ActionOverride) {
            throw new \InvalidArgumentException(sprintf('The actionOverrides property can only contain items of type \SFPartnerApi\v480\StructType\ActionOverride, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->actionOverrides[] = $item;
        return $this;
    }
    /**
     * Get activateable value
     * @return bool|null
     */
    public function getActivateable()
    {
        return $this->activateable;
    }
    /**
     * Set activateable value
     * @param bool $activateable
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setActivateable($activateable = null)
    {
        // validation for constraint: boolean
        if (!is_null($activateable) && !is_bool($activateable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($activateable, true), gettype($activateable)), __LINE__);
        }
        $this->activateable = $activateable;
        return $this;
    }
    /**
     * Get childRelationships value
     * @return \SFPartnerApi\v480\StructType\ChildRelationship[]|null
     */
    public function getChildRelationships()
    {
        return $this->childRelationships;
    }
    /**
     * This method is responsible for validating the values passed to the setChildRelationships method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChildRelationships method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChildRelationshipsForArrayConstraintsFromSetChildRelationships(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeSObjectResultChildRelationshipsItem) {
            // validation for constraint: itemType
            if (!$describeSObjectResultChildRelationshipsItem instanceof \SFPartnerApi\v480\StructType\ChildRelationship) {
                $invalidValues[] = is_object($describeSObjectResultChildRelationshipsItem) ? get_class($describeSObjectResultChildRelationshipsItem) : sprintf('%s(%s)', gettype($describeSObjectResultChildRelationshipsItem), var_export($describeSObjectResultChildRelationshipsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The childRelationships property can only contain items of type \SFPartnerApi\v480\StructType\ChildRelationship, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set childRelationships value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\ChildRelationship[] $childRelationships
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setChildRelationships(array $childRelationships = array())
    {
        // validation for constraint: array
        if ('' !== ($childRelationshipsArrayErrorMessage = self::validateChildRelationshipsForArrayConstraintsFromSetChildRelationships($childRelationships))) {
            throw new \InvalidArgumentException($childRelationshipsArrayErrorMessage, __LINE__);
        }
        $this->childRelationships = $childRelationships;
        return $this;
    }
    /**
     * Add item to childRelationships value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\ChildRelationship $item
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function addToChildRelationships(\SFPartnerApi\v480\StructType\ChildRelationship $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\ChildRelationship) {
            throw new \InvalidArgumentException(sprintf('The childRelationships property can only contain items of type \SFPartnerApi\v480\StructType\ChildRelationship, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->childRelationships[] = $item;
        return $this;
    }
    /**
     * Get compactLayoutable value
     * @return bool|null
     */
    public function getCompactLayoutable()
    {
        return $this->compactLayoutable;
    }
    /**
     * Set compactLayoutable value
     * @param bool $compactLayoutable
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setCompactLayoutable($compactLayoutable = null)
    {
        // validation for constraint: boolean
        if (!is_null($compactLayoutable) && !is_bool($compactLayoutable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($compactLayoutable, true), gettype($compactLayoutable)), __LINE__);
        }
        $this->compactLayoutable = $compactLayoutable;
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
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
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
     * Get customSetting value
     * @return bool|null
     */
    public function getCustomSetting()
    {
        return $this->customSetting;
    }
    /**
     * Set customSetting value
     * @param bool $customSetting
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setCustomSetting($customSetting = null)
    {
        // validation for constraint: boolean
        if (!is_null($customSetting) && !is_bool($customSetting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($customSetting, true), gettype($customSetting)), __LINE__);
        }
        $this->customSetting = $customSetting;
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
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
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
     * Get deepCloneable value
     * @return bool|null
     */
    public function getDeepCloneable()
    {
        return $this->deepCloneable;
    }
    /**
     * Set deepCloneable value
     * @param bool $deepCloneable
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setDeepCloneable($deepCloneable = null)
    {
        // validation for constraint: boolean
        if (!is_null($deepCloneable) && !is_bool($deepCloneable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deepCloneable, true), gettype($deepCloneable)), __LINE__);
        }
        $this->deepCloneable = $deepCloneable;
        return $this;
    }
    /**
     * Get defaultImplementation value
     * @return string|null
     */
    public function getDefaultImplementation()
    {
        return $this->defaultImplementation;
    }
    /**
     * Set defaultImplementation value
     * @param string $defaultImplementation
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setDefaultImplementation($defaultImplementation = null)
    {
        // validation for constraint: string
        if (!is_null($defaultImplementation) && !is_string($defaultImplementation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultImplementation, true), gettype($defaultImplementation)), __LINE__);
        }
        $this->defaultImplementation = $defaultImplementation;
        return $this;
    }
    /**
     * Get deletable value
     * @return bool|null
     */
    public function getDeletable()
    {
        return $this->deletable;
    }
    /**
     * Set deletable value
     * @param bool $deletable
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setDeletable($deletable = null)
    {
        // validation for constraint: boolean
        if (!is_null($deletable) && !is_bool($deletable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deletable, true), gettype($deletable)), __LINE__);
        }
        $this->deletable = $deletable;
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
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
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
     * Get feedEnabled value
     * @return bool|null
     */
    public function getFeedEnabled()
    {
        return $this->feedEnabled;
    }
    /**
     * Set feedEnabled value
     * @param bool $feedEnabled
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setFeedEnabled($feedEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($feedEnabled) && !is_bool($feedEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($feedEnabled, true), gettype($feedEnabled)), __LINE__);
        }
        $this->feedEnabled = $feedEnabled;
        return $this;
    }
    /**
     * Get fields value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SFPartnerApi\v480\StructType\Field[]|null
     */
    public function getFields()
    {
        return isset($this->fields) ? $this->fields : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFields method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFields method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFieldsForArrayConstraintsFromSetFields(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeSObjectResultFieldsItem) {
            // validation for constraint: itemType
            if (!$describeSObjectResultFieldsItem instanceof \SFPartnerApi\v480\StructType\Field) {
                $invalidValues[] = is_object($describeSObjectResultFieldsItem) ? get_class($describeSObjectResultFieldsItem) : sprintf('%s(%s)', gettype($describeSObjectResultFieldsItem), var_export($describeSObjectResultFieldsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The fields property can only contain items of type \SFPartnerApi\v480\StructType\Field, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set fields value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\Field[] $fields
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setFields(array $fields = array())
    {
        // validation for constraint: array
        if ('' !== ($fieldsArrayErrorMessage = self::validateFieldsForArrayConstraintsFromSetFields($fields))) {
            throw new \InvalidArgumentException($fieldsArrayErrorMessage, __LINE__);
        }
        if (is_null($fields) || (is_array($fields) && empty($fields))) {
            unset($this->fields);
        } else {
            $this->fields = $fields;
        }
        return $this;
    }
    /**
     * Add item to fields value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\Field $item
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function addToFields(\SFPartnerApi\v480\StructType\Field $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\Field) {
            throw new \InvalidArgumentException(sprintf('The fields property can only contain items of type \SFPartnerApi\v480\StructType\Field, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->fields[] = $item;
        return $this;
    }
    /**
     * Get hasSubtypes value
     * @return bool|null
     */
    public function getHasSubtypes()
    {
        return $this->hasSubtypes;
    }
    /**
     * Set hasSubtypes value
     * @param bool $hasSubtypes
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setHasSubtypes($hasSubtypes = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasSubtypes) && !is_bool($hasSubtypes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasSubtypes, true), gettype($hasSubtypes)), __LINE__);
        }
        $this->hasSubtypes = $hasSubtypes;
        return $this;
    }
    /**
     * Get idEnabled value
     * @return bool|null
     */
    public function getIdEnabled()
    {
        return $this->idEnabled;
    }
    /**
     * Set idEnabled value
     * @param bool $idEnabled
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setIdEnabled($idEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($idEnabled) && !is_bool($idEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($idEnabled, true), gettype($idEnabled)), __LINE__);
        }
        $this->idEnabled = $idEnabled;
        return $this;
    }
    /**
     * Get implementedBy value
     * @return string|null
     */
    public function getImplementedBy()
    {
        return $this->implementedBy;
    }
    /**
     * Set implementedBy value
     * @param string $implementedBy
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setImplementedBy($implementedBy = null)
    {
        // validation for constraint: string
        if (!is_null($implementedBy) && !is_string($implementedBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($implementedBy, true), gettype($implementedBy)), __LINE__);
        }
        $this->implementedBy = $implementedBy;
        return $this;
    }
    /**
     * Get implementsInterfaces value
     * @return string|null
     */
    public function getImplementsInterfaces()
    {
        return $this->implementsInterfaces;
    }
    /**
     * Set implementsInterfaces value
     * @param string $implementsInterfaces
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setImplementsInterfaces($implementsInterfaces = null)
    {
        // validation for constraint: string
        if (!is_null($implementsInterfaces) && !is_string($implementsInterfaces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($implementsInterfaces, true), gettype($implementsInterfaces)), __LINE__);
        }
        $this->implementsInterfaces = $implementsInterfaces;
        return $this;
    }
    /**
     * Get isInterface value
     * @return bool|null
     */
    public function getIsInterface()
    {
        return $this->isInterface;
    }
    /**
     * Set isInterface value
     * @param bool $isInterface
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setIsInterface($isInterface = null)
    {
        // validation for constraint: boolean
        if (!is_null($isInterface) && !is_bool($isInterface)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInterface, true), gettype($isInterface)), __LINE__);
        }
        $this->isInterface = $isInterface;
        return $this;
    }
    /**
     * Get isSubtype value
     * @return bool|null
     */
    public function getIsSubtype()
    {
        return $this->isSubtype;
    }
    /**
     * Set isSubtype value
     * @param bool $isSubtype
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setIsSubtype($isSubtype = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSubtype) && !is_bool($isSubtype)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSubtype, true), gettype($isSubtype)), __LINE__);
        }
        $this->isSubtype = $isSubtype;
        return $this;
    }
    /**
     * Get keyPrefix value
     * @return string|null
     */
    public function getKeyPrefix()
    {
        return $this->keyPrefix;
    }
    /**
     * Set keyPrefix value
     * @param string $keyPrefix
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setKeyPrefix($keyPrefix = null)
    {
        // validation for constraint: string
        if (!is_null($keyPrefix) && !is_string($keyPrefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($keyPrefix, true), gettype($keyPrefix)), __LINE__);
        }
        $this->keyPrefix = $keyPrefix;
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
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
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
     * Get labelPlural value
     * @return string|null
     */
    public function getLabelPlural()
    {
        return $this->labelPlural;
    }
    /**
     * Set labelPlural value
     * @param string $labelPlural
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setLabelPlural($labelPlural = null)
    {
        // validation for constraint: string
        if (!is_null($labelPlural) && !is_string($labelPlural)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($labelPlural, true), gettype($labelPlural)), __LINE__);
        }
        $this->labelPlural = $labelPlural;
        return $this;
    }
    /**
     * Get layoutable value
     * @return bool|null
     */
    public function getLayoutable()
    {
        return $this->layoutable;
    }
    /**
     * Set layoutable value
     * @param bool $layoutable
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setLayoutable($layoutable = null)
    {
        // validation for constraint: boolean
        if (!is_null($layoutable) && !is_bool($layoutable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($layoutable, true), gettype($layoutable)), __LINE__);
        }
        $this->layoutable = $layoutable;
        return $this;
    }
    /**
     * Get mergeable value
     * @return bool|null
     */
    public function getMergeable()
    {
        return $this->mergeable;
    }
    /**
     * Set mergeable value
     * @param bool $mergeable
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setMergeable($mergeable = null)
    {
        // validation for constraint: boolean
        if (!is_null($mergeable) && !is_bool($mergeable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mergeable, true), gettype($mergeable)), __LINE__);
        }
        $this->mergeable = $mergeable;
        return $this;
    }
    /**
     * Get mruEnabled value
     * @return bool|null
     */
    public function getMruEnabled()
    {
        return $this->mruEnabled;
    }
    /**
     * Set mruEnabled value
     * @param bool $mruEnabled
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setMruEnabled($mruEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($mruEnabled) && !is_bool($mruEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mruEnabled, true), gettype($mruEnabled)), __LINE__);
        }
        $this->mruEnabled = $mruEnabled;
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
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
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
     * Get namedLayoutInfos value
     * @return \SFPartnerApi\v480\StructType\NamedLayoutInfo[]|null
     */
    public function getNamedLayoutInfos()
    {
        return $this->namedLayoutInfos;
    }
    /**
     * This method is responsible for validating the values passed to the setNamedLayoutInfos method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNamedLayoutInfos method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNamedLayoutInfosForArrayConstraintsFromSetNamedLayoutInfos(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeSObjectResultNamedLayoutInfosItem) {
            // validation for constraint: itemType
            if (!$describeSObjectResultNamedLayoutInfosItem instanceof \SFPartnerApi\v480\StructType\NamedLayoutInfo) {
                $invalidValues[] = is_object($describeSObjectResultNamedLayoutInfosItem) ? get_class($describeSObjectResultNamedLayoutInfosItem) : sprintf('%s(%s)', gettype($describeSObjectResultNamedLayoutInfosItem), var_export($describeSObjectResultNamedLayoutInfosItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The namedLayoutInfos property can only contain items of type \SFPartnerApi\v480\StructType\NamedLayoutInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set namedLayoutInfos value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\NamedLayoutInfo[] $namedLayoutInfos
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setNamedLayoutInfos(array $namedLayoutInfos = array())
    {
        // validation for constraint: array
        if ('' !== ($namedLayoutInfosArrayErrorMessage = self::validateNamedLayoutInfosForArrayConstraintsFromSetNamedLayoutInfos($namedLayoutInfos))) {
            throw new \InvalidArgumentException($namedLayoutInfosArrayErrorMessage, __LINE__);
        }
        $this->namedLayoutInfos = $namedLayoutInfos;
        return $this;
    }
    /**
     * Add item to namedLayoutInfos value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\NamedLayoutInfo $item
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function addToNamedLayoutInfos(\SFPartnerApi\v480\StructType\NamedLayoutInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\NamedLayoutInfo) {
            throw new \InvalidArgumentException(sprintf('The namedLayoutInfos property can only contain items of type \SFPartnerApi\v480\StructType\NamedLayoutInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->namedLayoutInfos[] = $item;
        return $this;
    }
    /**
     * Get networkScopeFieldName value
     * @return string|null
     */
    public function getNetworkScopeFieldName()
    {
        return $this->networkScopeFieldName;
    }
    /**
     * Set networkScopeFieldName value
     * @param string $networkScopeFieldName
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setNetworkScopeFieldName($networkScopeFieldName = null)
    {
        // validation for constraint: string
        if (!is_null($networkScopeFieldName) && !is_string($networkScopeFieldName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($networkScopeFieldName, true), gettype($networkScopeFieldName)), __LINE__);
        }
        $this->networkScopeFieldName = $networkScopeFieldName;
        return $this;
    }
    /**
     * Get queryable value
     * @return bool|null
     */
    public function getQueryable()
    {
        return $this->queryable;
    }
    /**
     * Set queryable value
     * @param bool $queryable
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setQueryable($queryable = null)
    {
        // validation for constraint: boolean
        if (!is_null($queryable) && !is_bool($queryable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($queryable, true), gettype($queryable)), __LINE__);
        }
        $this->queryable = $queryable;
        return $this;
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
        foreach ($values as $describeSObjectResultRecordTypeInfosItem) {
            // validation for constraint: itemType
            if (!$describeSObjectResultRecordTypeInfosItem instanceof \SFPartnerApi\v480\StructType\RecordTypeInfo) {
                $invalidValues[] = is_object($describeSObjectResultRecordTypeInfosItem) ? get_class($describeSObjectResultRecordTypeInfosItem) : sprintf('%s(%s)', gettype($describeSObjectResultRecordTypeInfosItem), var_export($describeSObjectResultRecordTypeInfosItem, true));
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
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
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
     * Get replicateable value
     * @return bool|null
     */
    public function getReplicateable()
    {
        return $this->replicateable;
    }
    /**
     * Set replicateable value
     * @param bool $replicateable
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setReplicateable($replicateable = null)
    {
        // validation for constraint: boolean
        if (!is_null($replicateable) && !is_bool($replicateable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($replicateable, true), gettype($replicateable)), __LINE__);
        }
        $this->replicateable = $replicateable;
        return $this;
    }
    /**
     * Get retrieveable value
     * @return bool|null
     */
    public function getRetrieveable()
    {
        return $this->retrieveable;
    }
    /**
     * Set retrieveable value
     * @param bool $retrieveable
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setRetrieveable($retrieveable = null)
    {
        // validation for constraint: boolean
        if (!is_null($retrieveable) && !is_bool($retrieveable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($retrieveable, true), gettype($retrieveable)), __LINE__);
        }
        $this->retrieveable = $retrieveable;
        return $this;
    }
    /**
     * Get searchLayoutable value
     * @return bool|null
     */
    public function getSearchLayoutable()
    {
        return $this->searchLayoutable;
    }
    /**
     * Set searchLayoutable value
     * @param bool $searchLayoutable
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setSearchLayoutable($searchLayoutable = null)
    {
        // validation for constraint: boolean
        if (!is_null($searchLayoutable) && !is_bool($searchLayoutable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($searchLayoutable, true), gettype($searchLayoutable)), __LINE__);
        }
        $this->searchLayoutable = $searchLayoutable;
        return $this;
    }
    /**
     * Get searchable value
     * @return bool|null
     */
    public function getSearchable()
    {
        return $this->searchable;
    }
    /**
     * Set searchable value
     * @param bool $searchable
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setSearchable($searchable = null)
    {
        // validation for constraint: boolean
        if (!is_null($searchable) && !is_bool($searchable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($searchable, true), gettype($searchable)), __LINE__);
        }
        $this->searchable = $searchable;
        return $this;
    }
    /**
     * Get supportedScopes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SFPartnerApi\v480\StructType\ScopeInfo[]|null
     */
    public function getSupportedScopes()
    {
        return isset($this->supportedScopes) ? $this->supportedScopes : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSupportedScopes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupportedScopes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupportedScopesForArrayConstraintsFromSetSupportedScopes(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeSObjectResultSupportedScopesItem) {
            // validation for constraint: itemType
            if (!$describeSObjectResultSupportedScopesItem instanceof \SFPartnerApi\v480\StructType\ScopeInfo) {
                $invalidValues[] = is_object($describeSObjectResultSupportedScopesItem) ? get_class($describeSObjectResultSupportedScopesItem) : sprintf('%s(%s)', gettype($describeSObjectResultSupportedScopesItem), var_export($describeSObjectResultSupportedScopesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The supportedScopes property can only contain items of type \SFPartnerApi\v480\StructType\ScopeInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set supportedScopes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\ScopeInfo[] $supportedScopes
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setSupportedScopes(array $supportedScopes = array())
    {
        // validation for constraint: array
        if ('' !== ($supportedScopesArrayErrorMessage = self::validateSupportedScopesForArrayConstraintsFromSetSupportedScopes($supportedScopes))) {
            throw new \InvalidArgumentException($supportedScopesArrayErrorMessage, __LINE__);
        }
        if (is_null($supportedScopes) || (is_array($supportedScopes) && empty($supportedScopes))) {
            unset($this->supportedScopes);
        } else {
            $this->supportedScopes = $supportedScopes;
        }
        return $this;
    }
    /**
     * Add item to supportedScopes value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\ScopeInfo $item
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function addToSupportedScopes(\SFPartnerApi\v480\StructType\ScopeInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\ScopeInfo) {
            throw new \InvalidArgumentException(sprintf('The supportedScopes property can only contain items of type \SFPartnerApi\v480\StructType\ScopeInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->supportedScopes[] = $item;
        return $this;
    }
    /**
     * Get triggerable value
     * @return bool|null
     */
    public function getTriggerable()
    {
        return $this->triggerable;
    }
    /**
     * Set triggerable value
     * @param bool $triggerable
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setTriggerable($triggerable = null)
    {
        // validation for constraint: boolean
        if (!is_null($triggerable) && !is_bool($triggerable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($triggerable, true), gettype($triggerable)), __LINE__);
        }
        $this->triggerable = $triggerable;
        return $this;
    }
    /**
     * Get undeletable value
     * @return bool|null
     */
    public function getUndeletable()
    {
        return $this->undeletable;
    }
    /**
     * Set undeletable value
     * @param bool $undeletable
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setUndeletable($undeletable = null)
    {
        // validation for constraint: boolean
        if (!is_null($undeletable) && !is_bool($undeletable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($undeletable, true), gettype($undeletable)), __LINE__);
        }
        $this->undeletable = $undeletable;
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
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
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
     * Get urlDetail value
     * @return string|null
     */
    public function getUrlDetail()
    {
        return $this->urlDetail;
    }
    /**
     * Set urlDetail value
     * @param string $urlDetail
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setUrlDetail($urlDetail = null)
    {
        // validation for constraint: string
        if (!is_null($urlDetail) && !is_string($urlDetail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($urlDetail, true), gettype($urlDetail)), __LINE__);
        }
        $this->urlDetail = $urlDetail;
        return $this;
    }
    /**
     * Get urlEdit value
     * @return string|null
     */
    public function getUrlEdit()
    {
        return $this->urlEdit;
    }
    /**
     * Set urlEdit value
     * @param string $urlEdit
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setUrlEdit($urlEdit = null)
    {
        // validation for constraint: string
        if (!is_null($urlEdit) && !is_string($urlEdit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($urlEdit, true), gettype($urlEdit)), __LINE__);
        }
        $this->urlEdit = $urlEdit;
        return $this;
    }
    /**
     * Get urlNew value
     * @return string|null
     */
    public function getUrlNew()
    {
        return $this->urlNew;
    }
    /**
     * Set urlNew value
     * @param string $urlNew
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
     */
    public function setUrlNew($urlNew = null)
    {
        // validation for constraint: string
        if (!is_null($urlNew) && !is_string($urlNew)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($urlNew, true), gettype($urlNew)), __LINE__);
        }
        $this->urlNew = $urlNew;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResult
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
