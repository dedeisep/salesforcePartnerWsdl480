<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KnowledgeLanguageItem StructType
 * @subpackage Structs
 */
class KnowledgeLanguageItem extends AbstractStructBase
{
    /**
     * The active
     * @var bool
     */
    public $active;
    /**
     * The assigneeId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $assigneeId;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * Constructor method for KnowledgeLanguageItem
     * @uses KnowledgeLanguageItem::setActive()
     * @uses KnowledgeLanguageItem::setAssigneeId()
     * @uses KnowledgeLanguageItem::setName()
     * @param bool $active
     * @param string $assigneeId
     * @param string $name
     */
    public function __construct($active = null, $assigneeId = null, $name = null)
    {
        $this
            ->setActive($active)
            ->setAssigneeId($assigneeId)
            ->setName($name);
    }
    /**
     * Get active value
     * @return bool|null
     */
    public function getActive()
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param bool $active
     * @return \SFPartnerApi\v480\StructType\KnowledgeLanguageItem
     */
    public function setActive($active = null)
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->active = $active;
        return $this;
    }
    /**
     * Get assigneeId value
     * @return string|null
     */
    public function getAssigneeId()
    {
        return $this->assigneeId;
    }
    /**
     * Set assigneeId value
     * @param string $assigneeId
     * @return \SFPartnerApi\v480\StructType\KnowledgeLanguageItem
     */
    public function setAssigneeId($assigneeId = null)
    {
        // validation for constraint: string
        if (!is_null($assigneeId) && !is_string($assigneeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assigneeId, true), gettype($assigneeId)), __LINE__);
        }
        $this->assigneeId = $assigneeId;
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
     * @return \SFPartnerApi\v480\StructType\KnowledgeLanguageItem
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\KnowledgeLanguageItem
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
