<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameCaseValue StructType
 * @subpackage Structs
 */
class NameCaseValue extends AbstractStructBase
{
    /**
     * The article
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $article;
    /**
     * The caseType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $caseType;
    /**
     * The number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $number;
    /**
     * The possessive
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $possessive;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $value;
    /**
     * Constructor method for NameCaseValue
     * @uses NameCaseValue::setArticle()
     * @uses NameCaseValue::setCaseType()
     * @uses NameCaseValue::setNumber()
     * @uses NameCaseValue::setPossessive()
     * @uses NameCaseValue::setValue()
     * @param string $article
     * @param string $caseType
     * @param string $number
     * @param string $possessive
     * @param string $value
     */
    public function __construct($article = null, $caseType = null, $number = null, $possessive = null, $value = null)
    {
        $this
            ->setArticle($article)
            ->setCaseType($caseType)
            ->setNumber($number)
            ->setPossessive($possessive)
            ->setValue($value);
    }
    /**
     * Get article value
     * @return string|null
     */
    public function getArticle()
    {
        return $this->article;
    }
    /**
     * Set article value
     * @uses \SFPartnerApi\v480\EnumType\Article::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\Article::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $article
     * @return \SFPartnerApi\v480\StructType\NameCaseValue
     */
    public function setArticle($article = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\Article::valueIsValid($article)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\Article', is_array($article) ? implode(', ', $article) : var_export($article, true), implode(', ', \SFPartnerApi\v480\EnumType\Article::getValidValues())), __LINE__);
        }
        $this->article = $article;
        return $this;
    }
    /**
     * Get caseType value
     * @return string|null
     */
    public function getCaseType()
    {
        return $this->caseType;
    }
    /**
     * Set caseType value
     * @uses \SFPartnerApi\v480\EnumType\CaseType::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\CaseType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $caseType
     * @return \SFPartnerApi\v480\StructType\NameCaseValue
     */
    public function setCaseType($caseType = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\CaseType::valueIsValid($caseType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\CaseType', is_array($caseType) ? implode(', ', $caseType) : var_export($caseType, true), implode(', ', \SFPartnerApi\v480\EnumType\CaseType::getValidValues())), __LINE__);
        }
        $this->caseType = $caseType;
        return $this;
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @uses \SFPartnerApi\v480\EnumType\GrammaticalNumber::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\GrammaticalNumber::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $number
     * @return \SFPartnerApi\v480\StructType\NameCaseValue
     */
    public function setNumber($number = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\GrammaticalNumber::valueIsValid($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\GrammaticalNumber', is_array($number) ? implode(', ', $number) : var_export($number, true), implode(', ', \SFPartnerApi\v480\EnumType\GrammaticalNumber::getValidValues())), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get possessive value
     * @return string|null
     */
    public function getPossessive()
    {
        return $this->possessive;
    }
    /**
     * Set possessive value
     * @uses \SFPartnerApi\v480\EnumType\Possessive::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\Possessive::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $possessive
     * @return \SFPartnerApi\v480\StructType\NameCaseValue
     */
    public function setPossessive($possessive = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\Possessive::valueIsValid($possessive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\Possessive', is_array($possessive) ? implode(', ', $possessive) : var_export($possessive, true), implode(', ', \SFPartnerApi\v480\EnumType\Possessive::getValidValues())), __LINE__);
        }
        $this->possessive = $possessive;
        return $this;
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \SFPartnerApi\v480\StructType\NameCaseValue
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\NameCaseValue
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
