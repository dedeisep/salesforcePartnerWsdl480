<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for describeNouns StructType
 * @subpackage Structs
 */
class DescribeNouns extends AbstractStructBase
{
    /**
     * The nouns
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var string[]
     */
    public $nouns;
    /**
     * The onlyRenamed
     * @var bool
     */
    public $onlyRenamed;
    /**
     * The includeFields
     * @var bool
     */
    public $includeFields;
    /**
     * Constructor method for describeNouns
     * @uses DescribeNouns::setNouns()
     * @uses DescribeNouns::setOnlyRenamed()
     * @uses DescribeNouns::setIncludeFields()
     * @param string[] $nouns
     * @param bool $onlyRenamed
     * @param bool $includeFields
     */
    public function __construct(array $nouns = array(), $onlyRenamed = null, $includeFields = null)
    {
        $this
            ->setNouns($nouns)
            ->setOnlyRenamed($onlyRenamed)
            ->setIncludeFields($includeFields);
    }
    /**
     * Get nouns value
     * @return string[]|null
     */
    public function getNouns()
    {
        return $this->nouns;
    }
    /**
     * This method is responsible for validating the values passed to the setNouns method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNouns method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNounsForArrayConstraintsFromSetNouns(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeNounsNounsItem) {
            // validation for constraint: itemType
            if (!is_string($describeNounsNounsItem)) {
                $invalidValues[] = is_object($describeNounsNounsItem) ? get_class($describeNounsNounsItem) : sprintf('%s(%s)', gettype($describeNounsNounsItem), var_export($describeNounsNounsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The nouns property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set nouns value
     * @throws \InvalidArgumentException
     * @param string[] $nouns
     * @return \SFPartnerApi\v480\StructType\DescribeNouns
     */
    public function setNouns(array $nouns = array())
    {
        // validation for constraint: array
        if ('' !== ($nounsArrayErrorMessage = self::validateNounsForArrayConstraintsFromSetNouns($nouns))) {
            throw new \InvalidArgumentException($nounsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($nouns) && count($nouns) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($nouns)), __LINE__);
        }
        $this->nouns = $nouns;
        return $this;
    }
    /**
     * Add item to nouns value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\DescribeNouns
     */
    public function addToNouns($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The nouns property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->nouns) && count($this->nouns) >= 100) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->nouns)), __LINE__);
        }
        $this->nouns[] = $item;
        return $this;
    }
    /**
     * Get onlyRenamed value
     * @return bool|null
     */
    public function getOnlyRenamed()
    {
        return $this->onlyRenamed;
    }
    /**
     * Set onlyRenamed value
     * @param bool $onlyRenamed
     * @return \SFPartnerApi\v480\StructType\DescribeNouns
     */
    public function setOnlyRenamed($onlyRenamed = null)
    {
        // validation for constraint: boolean
        if (!is_null($onlyRenamed) && !is_bool($onlyRenamed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyRenamed, true), gettype($onlyRenamed)), __LINE__);
        }
        $this->onlyRenamed = $onlyRenamed;
        return $this;
    }
    /**
     * Get includeFields value
     * @return bool|null
     */
    public function getIncludeFields()
    {
        return $this->includeFields;
    }
    /**
     * Set includeFields value
     * @param bool $includeFields
     * @return \SFPartnerApi\v480\StructType\DescribeNouns
     */
    public function setIncludeFields($includeFields = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeFields) && !is_bool($includeFields)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeFields, true), gettype($includeFields)), __LINE__);
        }
        $this->includeFields = $includeFields;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeNouns
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
