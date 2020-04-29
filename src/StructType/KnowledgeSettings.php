<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KnowledgeSettings StructType
 * @subpackage Structs
 */
class KnowledgeSettings extends AbstractStructBase
{
    /**
     * The defaultLanguage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $defaultLanguage;
    /**
     * The knowledgeEnabled
     * @var bool
     */
    public $knowledgeEnabled;
    /**
     * The languages
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\KnowledgeLanguageItem[]
     */
    public $languages;
    /**
     * Constructor method for KnowledgeSettings
     * @uses KnowledgeSettings::setDefaultLanguage()
     * @uses KnowledgeSettings::setKnowledgeEnabled()
     * @uses KnowledgeSettings::setLanguages()
     * @param string $defaultLanguage
     * @param bool $knowledgeEnabled
     * @param \SFPartnerApi\v480\StructType\KnowledgeLanguageItem[] $languages
     */
    public function __construct($defaultLanguage = null, $knowledgeEnabled = null, array $languages = array())
    {
        $this
            ->setDefaultLanguage($defaultLanguage)
            ->setKnowledgeEnabled($knowledgeEnabled)
            ->setLanguages($languages);
    }
    /**
     * Get defaultLanguage value
     * @return string|null
     */
    public function getDefaultLanguage()
    {
        return $this->defaultLanguage;
    }
    /**
     * Set defaultLanguage value
     * @param string $defaultLanguage
     * @return \SFPartnerApi\v480\StructType\KnowledgeSettings
     */
    public function setDefaultLanguage($defaultLanguage = null)
    {
        // validation for constraint: string
        if (!is_null($defaultLanguage) && !is_string($defaultLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultLanguage, true), gettype($defaultLanguage)), __LINE__);
        }
        $this->defaultLanguage = $defaultLanguage;
        return $this;
    }
    /**
     * Get knowledgeEnabled value
     * @return bool|null
     */
    public function getKnowledgeEnabled()
    {
        return $this->knowledgeEnabled;
    }
    /**
     * Set knowledgeEnabled value
     * @param bool $knowledgeEnabled
     * @return \SFPartnerApi\v480\StructType\KnowledgeSettings
     */
    public function setKnowledgeEnabled($knowledgeEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($knowledgeEnabled) && !is_bool($knowledgeEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($knowledgeEnabled, true), gettype($knowledgeEnabled)), __LINE__);
        }
        $this->knowledgeEnabled = $knowledgeEnabled;
        return $this;
    }
    /**
     * Get languages value
     * @return \SFPartnerApi\v480\StructType\KnowledgeLanguageItem[]|null
     */
    public function getLanguages()
    {
        return $this->languages;
    }
    /**
     * This method is responsible for validating the values passed to the setLanguages method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLanguages method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLanguagesForArrayConstraintsFromSetLanguages(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $knowledgeSettingsLanguagesItem) {
            // validation for constraint: itemType
            if (!$knowledgeSettingsLanguagesItem instanceof \SFPartnerApi\v480\StructType\KnowledgeLanguageItem) {
                $invalidValues[] = is_object($knowledgeSettingsLanguagesItem) ? get_class($knowledgeSettingsLanguagesItem) : sprintf('%s(%s)', gettype($knowledgeSettingsLanguagesItem), var_export($knowledgeSettingsLanguagesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The languages property can only contain items of type \SFPartnerApi\v480\StructType\KnowledgeLanguageItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set languages value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\KnowledgeLanguageItem[] $languages
     * @return \SFPartnerApi\v480\StructType\KnowledgeSettings
     */
    public function setLanguages(array $languages = array())
    {
        // validation for constraint: array
        if ('' !== ($languagesArrayErrorMessage = self::validateLanguagesForArrayConstraintsFromSetLanguages($languages))) {
            throw new \InvalidArgumentException($languagesArrayErrorMessage, __LINE__);
        }
        $this->languages = $languages;
        return $this;
    }
    /**
     * Add item to languages value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\KnowledgeLanguageItem $item
     * @return \SFPartnerApi\v480\StructType\KnowledgeSettings
     */
    public function addToLanguages(\SFPartnerApi\v480\StructType\KnowledgeLanguageItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\KnowledgeLanguageItem) {
            throw new \InvalidArgumentException(sprintf('The languages property can only contain items of type \SFPartnerApi\v480\StructType\KnowledgeLanguageItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->languages[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\KnowledgeSettings
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
