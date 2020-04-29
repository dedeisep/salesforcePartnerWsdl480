<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QueryOptions StructType
 * @subpackage Structs
 */
class QueryOptions extends AbstractStructBase
{
    /**
     * The batchSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $batchSize;
    /**
     * Constructor method for QueryOptions
     * @uses QueryOptions::setBatchSize()
     * @param int $batchSize
     */
    public function __construct($batchSize = null)
    {
        $this
            ->setBatchSize($batchSize);
    }
    /**
     * Get batchSize value
     * @return int|null
     */
    public function getBatchSize()
    {
        return $this->batchSize;
    }
    /**
     * Set batchSize value
     * @param int $batchSize
     * @return \SFPartnerApi\v480\StructType\QueryOptions
     */
    public function setBatchSize($batchSize = null)
    {
        // validation for constraint: int
        if (!is_null($batchSize) && !(is_int($batchSize) || ctype_digit($batchSize))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchSize, true), gettype($batchSize)), __LINE__);
        }
        $this->batchSize = $batchSize;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\QueryOptions
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
