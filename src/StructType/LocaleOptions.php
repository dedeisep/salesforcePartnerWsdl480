<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocaleOptions StructType
 * @subpackage Structs
 */
class LocaleOptions extends AbstractStructBase
{
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $language;
    /**
     * The localizeErrors
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $localizeErrors;
    /**
     * Constructor method for LocaleOptions
     * @uses LocaleOptions::setLanguage()
     * @uses LocaleOptions::setLocalizeErrors()
     * @param string $language
     * @param bool $localizeErrors
     */
    public function __construct($language = null, $localizeErrors = null)
    {
        $this
            ->setLanguage($language)
            ->setLocalizeErrors($localizeErrors);
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \SFPartnerApi\v480\StructType\LocaleOptions
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
    /**
     * Get localizeErrors value
     * @return bool|null
     */
    public function getLocalizeErrors()
    {
        return $this->localizeErrors;
    }
    /**
     * Set localizeErrors value
     * @param bool $localizeErrors
     * @return \SFPartnerApi\v480\StructType\LocaleOptions
     */
    public function setLocalizeErrors($localizeErrors = null)
    {
        // validation for constraint: boolean
        if (!is_null($localizeErrors) && !is_bool($localizeErrors)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localizeErrors, true), gettype($localizeErrors)), __LINE__);
        }
        $this->localizeErrors = $localizeErrors;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\LocaleOptions
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
