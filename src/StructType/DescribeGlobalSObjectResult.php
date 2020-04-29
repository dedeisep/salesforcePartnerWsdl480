<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeGlobalSObjectResult StructType
 * @subpackage Structs
 */
class DescribeGlobalSObjectResult extends AbstractStructBase
{
    /**
     * The activateable
     * @var bool
     */
    public $activateable;
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
     * The queryable
     * @var bool
     */
    public $queryable;
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
     * The searchable
     * @var bool
     */
    public $searchable;
    /**
     * The triggerable
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
     * Constructor method for DescribeGlobalSObjectResult
     * @uses DescribeGlobalSObjectResult::setActivateable()
     * @uses DescribeGlobalSObjectResult::setCreateable()
     * @uses DescribeGlobalSObjectResult::setCustom()
     * @uses DescribeGlobalSObjectResult::setCustomSetting()
     * @uses DescribeGlobalSObjectResult::setDataTranslationEnabled()
     * @uses DescribeGlobalSObjectResult::setDeepCloneable()
     * @uses DescribeGlobalSObjectResult::setDeletable()
     * @uses DescribeGlobalSObjectResult::setDeprecatedAndHidden()
     * @uses DescribeGlobalSObjectResult::setFeedEnabled()
     * @uses DescribeGlobalSObjectResult::setHasSubtypes()
     * @uses DescribeGlobalSObjectResult::setIdEnabled()
     * @uses DescribeGlobalSObjectResult::setIsInterface()
     * @uses DescribeGlobalSObjectResult::setIsSubtype()
     * @uses DescribeGlobalSObjectResult::setKeyPrefix()
     * @uses DescribeGlobalSObjectResult::setLabel()
     * @uses DescribeGlobalSObjectResult::setLabelPlural()
     * @uses DescribeGlobalSObjectResult::setLayoutable()
     * @uses DescribeGlobalSObjectResult::setMergeable()
     * @uses DescribeGlobalSObjectResult::setMruEnabled()
     * @uses DescribeGlobalSObjectResult::setName()
     * @uses DescribeGlobalSObjectResult::setQueryable()
     * @uses DescribeGlobalSObjectResult::setReplicateable()
     * @uses DescribeGlobalSObjectResult::setRetrieveable()
     * @uses DescribeGlobalSObjectResult::setSearchable()
     * @uses DescribeGlobalSObjectResult::setTriggerable()
     * @uses DescribeGlobalSObjectResult::setUndeletable()
     * @uses DescribeGlobalSObjectResult::setUpdateable()
     * @param bool $activateable
     * @param bool $createable
     * @param bool $custom
     * @param bool $customSetting
     * @param bool $dataTranslationEnabled
     * @param bool $deepCloneable
     * @param bool $deletable
     * @param bool $deprecatedAndHidden
     * @param bool $feedEnabled
     * @param bool $hasSubtypes
     * @param bool $idEnabled
     * @param bool $isInterface
     * @param bool $isSubtype
     * @param string $keyPrefix
     * @param string $label
     * @param string $labelPlural
     * @param bool $layoutable
     * @param bool $mergeable
     * @param bool $mruEnabled
     * @param string $name
     * @param bool $queryable
     * @param bool $replicateable
     * @param bool $retrieveable
     * @param bool $searchable
     * @param bool $triggerable
     * @param bool $undeletable
     * @param bool $updateable
     */
    public function __construct($activateable = null, $createable = null, $custom = null, $customSetting = null, $dataTranslationEnabled = null, $deepCloneable = null, $deletable = null, $deprecatedAndHidden = null, $feedEnabled = null, $hasSubtypes = null, $idEnabled = null, $isInterface = null, $isSubtype = null, $keyPrefix = null, $label = null, $labelPlural = null, $layoutable = null, $mergeable = null, $mruEnabled = null, $name = null, $queryable = null, $replicateable = null, $retrieveable = null, $searchable = null, $triggerable = null, $undeletable = null, $updateable = null)
    {
        $this
            ->setActivateable($activateable)
            ->setCreateable($createable)
            ->setCustom($custom)
            ->setCustomSetting($customSetting)
            ->setDataTranslationEnabled($dataTranslationEnabled)
            ->setDeepCloneable($deepCloneable)
            ->setDeletable($deletable)
            ->setDeprecatedAndHidden($deprecatedAndHidden)
            ->setFeedEnabled($feedEnabled)
            ->setHasSubtypes($hasSubtypes)
            ->setIdEnabled($idEnabled)
            ->setIsInterface($isInterface)
            ->setIsSubtype($isSubtype)
            ->setKeyPrefix($keyPrefix)
            ->setLabel($label)
            ->setLabelPlural($labelPlural)
            ->setLayoutable($layoutable)
            ->setMergeable($mergeable)
            ->setMruEnabled($mruEnabled)
            ->setName($name)
            ->setQueryable($queryable)
            ->setReplicateable($replicateable)
            ->setRetrieveable($retrieveable)
            ->setSearchable($searchable)
            ->setTriggerable($triggerable)
            ->setUndeletable($undeletable)
            ->setUpdateable($updateable);
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult
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
