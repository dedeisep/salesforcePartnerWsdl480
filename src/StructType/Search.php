<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for search StructType
 * @subpackage Structs
 */
class Search extends AbstractStructBase
{
    /**
     * The searchString
     * @var string
     */
    public $searchString;
    /**
     * Constructor method for search
     * @uses Search::setSearchString()
     * @param string $searchString
     */
    public function __construct($searchString = null)
    {
        $this
            ->setSearchString($searchString);
    }
    /**
     * Get searchString value
     * @return string|null
     */
    public function getSearchString()
    {
        return $this->searchString;
    }
    /**
     * Set searchString value
     * @param string $searchString
     * @return \SFPartnerApi\v480\StructType\Search
     */
    public function setSearchString($searchString = null)
    {
        // validation for constraint: string
        if (!is_null($searchString) && !is_string($searchString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchString, true), gettype($searchString)), __LINE__);
        }
        $this->searchString = $searchString;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\Search
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
