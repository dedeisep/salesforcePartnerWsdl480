<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeNounResult StructType
 * @subpackage Structs
 */
class DescribeNounResult extends AbstractStructBase
{
    /**
     * The caseValues
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\NameCaseValue[]
     */
    public $caseValues;
    /**
     * The developerName
     * @var string
     */
    public $developerName;
    /**
     * The gender
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $gender;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The pluralAlias
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pluralAlias;
    /**
     * The startsWith
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $startsWith;
    /**
     * Constructor method for DescribeNounResult
     * @uses DescribeNounResult::setCaseValues()
     * @uses DescribeNounResult::setDeveloperName()
     * @uses DescribeNounResult::setGender()
     * @uses DescribeNounResult::setName()
     * @uses DescribeNounResult::setPluralAlias()
     * @uses DescribeNounResult::setStartsWith()
     * @param \SFPartnerApi\v480\StructType\NameCaseValue[] $caseValues
     * @param string $developerName
     * @param string $gender
     * @param string $name
     * @param string $pluralAlias
     * @param string $startsWith
     */
    public function __construct(array $caseValues = array(), $developerName = null, $gender = null, $name = null, $pluralAlias = null, $startsWith = null)
    {
        $this
            ->setCaseValues($caseValues)
            ->setDeveloperName($developerName)
            ->setGender($gender)
            ->setName($name)
            ->setPluralAlias($pluralAlias)
            ->setStartsWith($startsWith);
    }
    /**
     * Get caseValues value
     * @return \SFPartnerApi\v480\StructType\NameCaseValue[]|null
     */
    public function getCaseValues()
    {
        return $this->caseValues;
    }
    /**
     * This method is responsible for validating the values passed to the setCaseValues method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCaseValues method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCaseValuesForArrayConstraintsFromSetCaseValues(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeNounResultCaseValuesItem) {
            // validation for constraint: itemType
            if (!$describeNounResultCaseValuesItem instanceof \SFPartnerApi\v480\StructType\NameCaseValue) {
                $invalidValues[] = is_object($describeNounResultCaseValuesItem) ? get_class($describeNounResultCaseValuesItem) : sprintf('%s(%s)', gettype($describeNounResultCaseValuesItem), var_export($describeNounResultCaseValuesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The caseValues property can only contain items of type \SFPartnerApi\v480\StructType\NameCaseValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set caseValues value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\NameCaseValue[] $caseValues
     * @return \SFPartnerApi\v480\StructType\DescribeNounResult
     */
    public function setCaseValues(array $caseValues = array())
    {
        // validation for constraint: array
        if ('' !== ($caseValuesArrayErrorMessage = self::validateCaseValuesForArrayConstraintsFromSetCaseValues($caseValues))) {
            throw new \InvalidArgumentException($caseValuesArrayErrorMessage, __LINE__);
        }
        $this->caseValues = $caseValues;
        return $this;
    }
    /**
     * Add item to caseValues value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\NameCaseValue $item
     * @return \SFPartnerApi\v480\StructType\DescribeNounResult
     */
    public function addToCaseValues(\SFPartnerApi\v480\StructType\NameCaseValue $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\NameCaseValue) {
            throw new \InvalidArgumentException(sprintf('The caseValues property can only contain items of type \SFPartnerApi\v480\StructType\NameCaseValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->caseValues[] = $item;
        return $this;
    }
    /**
     * Get developerName value
     * @return string|null
     */
    public function getDeveloperName()
    {
        return $this->developerName;
    }
    /**
     * Set developerName value
     * @param string $developerName
     * @return \SFPartnerApi\v480\StructType\DescribeNounResult
     */
    public function setDeveloperName($developerName = null)
    {
        // validation for constraint: string
        if (!is_null($developerName) && !is_string($developerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($developerName, true), gettype($developerName)), __LINE__);
        }
        $this->developerName = $developerName;
        return $this;
    }
    /**
     * Get gender value
     * @return string|null
     */
    public function getGender()
    {
        return $this->gender;
    }
    /**
     * Set gender value
     * @uses \SFPartnerApi\v480\EnumType\Gender::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\Gender::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $gender
     * @return \SFPartnerApi\v480\StructType\DescribeNounResult
     */
    public function setGender($gender = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\Gender::valueIsValid($gender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\Gender', is_array($gender) ? implode(', ', $gender) : var_export($gender, true), implode(', ', \SFPartnerApi\v480\EnumType\Gender::getValidValues())), __LINE__);
        }
        $this->gender = $gender;
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
     * @return \SFPartnerApi\v480\StructType\DescribeNounResult
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
     * Get pluralAlias value
     * @return string|null
     */
    public function getPluralAlias()
    {
        return $this->pluralAlias;
    }
    /**
     * Set pluralAlias value
     * @param string $pluralAlias
     * @return \SFPartnerApi\v480\StructType\DescribeNounResult
     */
    public function setPluralAlias($pluralAlias = null)
    {
        // validation for constraint: string
        if (!is_null($pluralAlias) && !is_string($pluralAlias)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pluralAlias, true), gettype($pluralAlias)), __LINE__);
        }
        $this->pluralAlias = $pluralAlias;
        return $this;
    }
    /**
     * Get startsWith value
     * @return string|null
     */
    public function getStartsWith()
    {
        return $this->startsWith;
    }
    /**
     * Set startsWith value
     * @uses \SFPartnerApi\v480\EnumType\StartsWith::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\StartsWith::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $startsWith
     * @return \SFPartnerApi\v480\StructType\DescribeNounResult
     */
    public function setStartsWith($startsWith = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\StartsWith::valueIsValid($startsWith)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\StartsWith', is_array($startsWith) ? implode(', ', $startsWith) : var_export($startsWith, true), implode(', ', \SFPartnerApi\v480\EnumType\StartsWith::getValidValues())), __LINE__);
        }
        $this->startsWith = $startsWith;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeNounResult
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
