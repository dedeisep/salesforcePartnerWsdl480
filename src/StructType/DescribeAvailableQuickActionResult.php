<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeAvailableQuickActionResult StructType
 * @subpackage Structs
 */
class DescribeAvailableQuickActionResult extends AbstractStructBase
{
    /**
     * The actionEnumOrId
     * @var string
     */
    public $actionEnumOrId;
    /**
     * The label
     * @var string
     */
    public $label;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * Constructor method for DescribeAvailableQuickActionResult
     * @uses DescribeAvailableQuickActionResult::setActionEnumOrId()
     * @uses DescribeAvailableQuickActionResult::setLabel()
     * @uses DescribeAvailableQuickActionResult::setName()
     * @uses DescribeAvailableQuickActionResult::setType()
     * @param string $actionEnumOrId
     * @param string $label
     * @param string $name
     * @param string $type
     */
    public function __construct($actionEnumOrId = null, $label = null, $name = null, $type = null)
    {
        $this
            ->setActionEnumOrId($actionEnumOrId)
            ->setLabel($label)
            ->setName($name)
            ->setType($type);
    }
    /**
     * Get actionEnumOrId value
     * @return string|null
     */
    public function getActionEnumOrId()
    {
        return $this->actionEnumOrId;
    }
    /**
     * Set actionEnumOrId value
     * @param string $actionEnumOrId
     * @return \SFPartnerApi\v480\StructType\DescribeAvailableQuickActionResult
     */
    public function setActionEnumOrId($actionEnumOrId = null)
    {
        // validation for constraint: string
        if (!is_null($actionEnumOrId) && !is_string($actionEnumOrId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actionEnumOrId, true), gettype($actionEnumOrId)), __LINE__);
        }
        $this->actionEnumOrId = $actionEnumOrId;
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
     * @return \SFPartnerApi\v480\StructType\DescribeAvailableQuickActionResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeAvailableQuickActionResult
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \SFPartnerApi\v480\StructType\DescribeAvailableQuickActionResult
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeAvailableQuickActionResult
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
