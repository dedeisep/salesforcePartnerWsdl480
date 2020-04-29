<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LimitInfo StructType
 * @subpackage Structs
 */
class LimitInfo extends AbstractStructBase
{
    /**
     * The current
     * @var int
     */
    public $current;
    /**
     * The limit
     * @var int
     */
    public $limit;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * Constructor method for LimitInfo
     * @uses LimitInfo::setCurrent()
     * @uses LimitInfo::setLimit()
     * @uses LimitInfo::setType()
     * @param int $current
     * @param int $limit
     * @param string $type
     */
    public function __construct($current = null, $limit = null, $type = null)
    {
        $this
            ->setCurrent($current)
            ->setLimit($limit)
            ->setType($type);
    }
    /**
     * Get current value
     * @return int|null
     */
    public function getCurrent()
    {
        return $this->current;
    }
    /**
     * Set current value
     * @param int $current
     * @return \SFPartnerApi\v480\StructType\LimitInfo
     */
    public function setCurrent($current = null)
    {
        // validation for constraint: int
        if (!is_null($current) && !(is_int($current) || ctype_digit($current))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($current, true), gettype($current)), __LINE__);
        }
        $this->current = $current;
        return $this;
    }
    /**
     * Get limit value
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }
    /**
     * Set limit value
     * @param int $limit
     * @return \SFPartnerApi\v480\StructType\LimitInfo
     */
    public function setLimit($limit = null)
    {
        // validation for constraint: int
        if (!is_null($limit) && !(is_int($limit) || ctype_digit($limit))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($limit, true), gettype($limit)), __LINE__);
        }
        $this->limit = $limit;
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
     * @return \SFPartnerApi\v480\StructType\LimitInfo
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
     * @return \SFPartnerApi\v480\StructType\LimitInfo
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
