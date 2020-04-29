<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchLayoutField StructType
 * @subpackage Structs
 */
class SearchLayoutField extends AbstractStructBase
{
    /**
     * The apiName
     * @var string
     */
    public $apiName;
    /**
     * The label
     * @var string
     */
    public $label;
    /**
     * The sortable
     * @var bool
     */
    public $sortable;
    /**
     * Constructor method for SearchLayoutField
     * @uses SearchLayoutField::setApiName()
     * @uses SearchLayoutField::setLabel()
     * @uses SearchLayoutField::setSortable()
     * @param string $apiName
     * @param string $label
     * @param bool $sortable
     */
    public function __construct($apiName = null, $label = null, $sortable = null)
    {
        $this
            ->setApiName($apiName)
            ->setLabel($label)
            ->setSortable($sortable);
    }
    /**
     * Get apiName value
     * @return string|null
     */
    public function getApiName()
    {
        return $this->apiName;
    }
    /**
     * Set apiName value
     * @param string $apiName
     * @return \SFPartnerApi\v480\StructType\SearchLayoutField
     */
    public function setApiName($apiName = null)
    {
        // validation for constraint: string
        if (!is_null($apiName) && !is_string($apiName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apiName, true), gettype($apiName)), __LINE__);
        }
        $this->apiName = $apiName;
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
     * @return \SFPartnerApi\v480\StructType\SearchLayoutField
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
     * Get sortable value
     * @return bool|null
     */
    public function getSortable()
    {
        return $this->sortable;
    }
    /**
     * Set sortable value
     * @param bool $sortable
     * @return \SFPartnerApi\v480\StructType\SearchLayoutField
     */
    public function setSortable($sortable = null)
    {
        // validation for constraint: boolean
        if (!is_null($sortable) && !is_bool($sortable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sortable, true), gettype($sortable)), __LINE__);
        }
        $this->sortable = $sortable;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\SearchLayoutField
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
