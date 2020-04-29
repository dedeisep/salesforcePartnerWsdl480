<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeAnimationRule StructType
 * @subpackage Structs
 */
class DescribeAnimationRule extends AbstractStructBase
{
    /**
     * The animationFrequency
     * @var string
     */
    public $animationFrequency;
    /**
     * The isActive
     * @var bool
     */
    public $isActive;
    /**
     * The recordTypeContext
     * @var string
     */
    public $recordTypeContext;
    /**
     * The recordTypeId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $recordTypeId;
    /**
     * The targetField
     * @var string
     */
    public $targetField;
    /**
     * The targetFieldChangeToValues
     * @var string
     */
    public $targetFieldChangeToValues;
    /**
     * Constructor method for DescribeAnimationRule
     * @uses DescribeAnimationRule::setAnimationFrequency()
     * @uses DescribeAnimationRule::setIsActive()
     * @uses DescribeAnimationRule::setRecordTypeContext()
     * @uses DescribeAnimationRule::setRecordTypeId()
     * @uses DescribeAnimationRule::setTargetField()
     * @uses DescribeAnimationRule::setTargetFieldChangeToValues()
     * @param string $animationFrequency
     * @param bool $isActive
     * @param string $recordTypeContext
     * @param string $recordTypeId
     * @param string $targetField
     * @param string $targetFieldChangeToValues
     */
    public function __construct($animationFrequency = null, $isActive = null, $recordTypeContext = null, $recordTypeId = null, $targetField = null, $targetFieldChangeToValues = null)
    {
        $this
            ->setAnimationFrequency($animationFrequency)
            ->setIsActive($isActive)
            ->setRecordTypeContext($recordTypeContext)
            ->setRecordTypeId($recordTypeId)
            ->setTargetField($targetField)
            ->setTargetFieldChangeToValues($targetFieldChangeToValues);
    }
    /**
     * Get animationFrequency value
     * @return string|null
     */
    public function getAnimationFrequency()
    {
        return $this->animationFrequency;
    }
    /**
     * Set animationFrequency value
     * @param string $animationFrequency
     * @return \SFPartnerApi\v480\StructType\DescribeAnimationRule
     */
    public function setAnimationFrequency($animationFrequency = null)
    {
        // validation for constraint: string
        if (!is_null($animationFrequency) && !is_string($animationFrequency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($animationFrequency, true), gettype($animationFrequency)), __LINE__);
        }
        $this->animationFrequency = $animationFrequency;
        return $this;
    }
    /**
     * Get isActive value
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    /**
     * Set isActive value
     * @param bool $isActive
     * @return \SFPartnerApi\v480\StructType\DescribeAnimationRule
     */
    public function setIsActive($isActive = null)
    {
        // validation for constraint: boolean
        if (!is_null($isActive) && !is_bool($isActive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isActive, true), gettype($isActive)), __LINE__);
        }
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * Get recordTypeContext value
     * @return string|null
     */
    public function getRecordTypeContext()
    {
        return $this->recordTypeContext;
    }
    /**
     * Set recordTypeContext value
     * @param string $recordTypeContext
     * @return \SFPartnerApi\v480\StructType\DescribeAnimationRule
     */
    public function setRecordTypeContext($recordTypeContext = null)
    {
        // validation for constraint: string
        if (!is_null($recordTypeContext) && !is_string($recordTypeContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recordTypeContext, true), gettype($recordTypeContext)), __LINE__);
        }
        $this->recordTypeContext = $recordTypeContext;
        return $this;
    }
    /**
     * Get recordTypeId value
     * @return string|null
     */
    public function getRecordTypeId()
    {
        return $this->recordTypeId;
    }
    /**
     * Set recordTypeId value
     * @param string $recordTypeId
     * @return \SFPartnerApi\v480\StructType\DescribeAnimationRule
     */
    public function setRecordTypeId($recordTypeId = null)
    {
        // validation for constraint: string
        if (!is_null($recordTypeId) && !is_string($recordTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recordTypeId, true), gettype($recordTypeId)), __LINE__);
        }
        $this->recordTypeId = $recordTypeId;
        return $this;
    }
    /**
     * Get targetField value
     * @return string|null
     */
    public function getTargetField()
    {
        return $this->targetField;
    }
    /**
     * Set targetField value
     * @param string $targetField
     * @return \SFPartnerApi\v480\StructType\DescribeAnimationRule
     */
    public function setTargetField($targetField = null)
    {
        // validation for constraint: string
        if (!is_null($targetField) && !is_string($targetField)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetField, true), gettype($targetField)), __LINE__);
        }
        $this->targetField = $targetField;
        return $this;
    }
    /**
     * Get targetFieldChangeToValues value
     * @return string|null
     */
    public function getTargetFieldChangeToValues()
    {
        return $this->targetFieldChangeToValues;
    }
    /**
     * Set targetFieldChangeToValues value
     * @param string $targetFieldChangeToValues
     * @return \SFPartnerApi\v480\StructType\DescribeAnimationRule
     */
    public function setTargetFieldChangeToValues($targetFieldChangeToValues = null)
    {
        // validation for constraint: string
        if (!is_null($targetFieldChangeToValues) && !is_string($targetFieldChangeToValues)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetFieldChangeToValues, true), gettype($targetFieldChangeToValues)), __LINE__);
        }
        $this->targetFieldChangeToValues = $targetFieldChangeToValues;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeAnimationRule
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
