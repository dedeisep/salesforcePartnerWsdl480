<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for queryAll StructType
 * @subpackage Structs
 */
class QueryAll extends AbstractStructBase
{
    /**
     * The queryString
     * @var string
     */
    public $queryString;
    /**
     * Constructor method for queryAll
     * @uses QueryAll::setQueryString()
     * @param string $queryString
     */
    public function __construct($queryString = null)
    {
        $this
            ->setQueryString($queryString);
    }
    /**
     * Get queryString value
     * @return string|null
     */
    public function getQueryString()
    {
        return $this->queryString;
    }
    /**
     * Set queryString value
     * @param string $queryString
     * @return \SFPartnerApi\v480\StructType\QueryAll
     */
    public function setQueryString($queryString = null)
    {
        // validation for constraint: string
        if (!is_null($queryString) && !is_string($queryString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryString, true), gettype($queryString)), __LINE__);
        }
        $this->queryString = $queryString;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\QueryAll
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
