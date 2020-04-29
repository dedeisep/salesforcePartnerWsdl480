<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignmentRuleHeader StructType
 * @subpackage Structs
 */
class AssignmentRuleHeader extends AbstractStructBase
{
    /**
     * The assignmentRuleId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $assignmentRuleId;
    /**
     * The useDefaultRule
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $useDefaultRule;
    /**
     * Constructor method for AssignmentRuleHeader
     * @uses AssignmentRuleHeader::setAssignmentRuleId()
     * @uses AssignmentRuleHeader::setUseDefaultRule()
     * @param string $assignmentRuleId
     * @param bool $useDefaultRule
     */
    public function __construct($assignmentRuleId = null, $useDefaultRule = null)
    {
        $this
            ->setAssignmentRuleId($assignmentRuleId)
            ->setUseDefaultRule($useDefaultRule);
    }
    /**
     * Get assignmentRuleId value
     * @return string|null
     */
    public function getAssignmentRuleId()
    {
        return $this->assignmentRuleId;
    }
    /**
     * Set assignmentRuleId value
     * @param string $assignmentRuleId
     * @return \SFPartnerApi\v480\StructType\AssignmentRuleHeader
     */
    public function setAssignmentRuleId($assignmentRuleId = null)
    {
        // validation for constraint: string
        if (!is_null($assignmentRuleId) && !is_string($assignmentRuleId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignmentRuleId, true), gettype($assignmentRuleId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($assignmentRuleId) && mb_strlen($assignmentRuleId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($assignmentRuleId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($assignmentRuleId) && !preg_match('/[a-zA-Z0-9]{18}/', $assignmentRuleId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($assignmentRuleId, true)), __LINE__);
        }
        $this->assignmentRuleId = $assignmentRuleId;
        return $this;
    }
    /**
     * Get useDefaultRule value
     * @return bool|null
     */
    public function getUseDefaultRule()
    {
        return $this->useDefaultRule;
    }
    /**
     * Set useDefaultRule value
     * @param bool $useDefaultRule
     * @return \SFPartnerApi\v480\StructType\AssignmentRuleHeader
     */
    public function setUseDefaultRule($useDefaultRule = null)
    {
        // validation for constraint: boolean
        if (!is_null($useDefaultRule) && !is_bool($useDefaultRule)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useDefaultRule, true), gettype($useDefaultRule)), __LINE__);
        }
        $this->useDefaultRule = $useDefaultRule;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\AssignmentRuleHeader
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
