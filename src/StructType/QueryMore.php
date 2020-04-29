<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for queryMore StructType
 * @subpackage Structs
 */
class QueryMore extends AbstractStructBase
{
    /**
     * The queryLocator
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * @var string
     */
    public $queryLocator;
    /**
     * Constructor method for queryMore
     * @uses QueryMore::setQueryLocator()
     * @param string $queryLocator
     */
    public function __construct($queryLocator = null)
    {
        $this
            ->setQueryLocator($queryLocator);
    }
    /**
     * Get queryLocator value
     * @return string|null
     */
    public function getQueryLocator()
    {
        return $this->queryLocator;
    }
    /**
     * Set queryLocator value
     * @param string $queryLocator
     * @return \SFPartnerApi\v480\StructType\QueryMore
     */
    public function setQueryLocator($queryLocator = null)
    {
        // validation for constraint: string
        if (!is_null($queryLocator) && !is_string($queryLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryLocator, true), gettype($queryLocator)), __LINE__);
        }
        $this->queryLocator = $queryLocator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\QueryMore
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
