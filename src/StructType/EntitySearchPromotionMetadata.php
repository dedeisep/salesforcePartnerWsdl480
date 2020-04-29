<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EntitySearchPromotionMetadata StructType
 * @subpackage Structs
 */
class EntitySearchPromotionMetadata extends AbstractStructBase
{
    /**
     * The promotedResultCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var int
     */
    public $promotedResultCount;
    /**
     * Constructor method for EntitySearchPromotionMetadata
     * @uses EntitySearchPromotionMetadata::setPromotedResultCount()
     * @param int $promotedResultCount
     */
    public function __construct($promotedResultCount = null)
    {
        $this
            ->setPromotedResultCount($promotedResultCount);
    }
    /**
     * Get promotedResultCount value
     * @return int
     */
    public function getPromotedResultCount()
    {
        return $this->promotedResultCount;
    }
    /**
     * Set promotedResultCount value
     * @param int $promotedResultCount
     * @return \SFPartnerApi\v480\StructType\EntitySearchPromotionMetadata
     */
    public function setPromotedResultCount($promotedResultCount = null)
    {
        // validation for constraint: int
        if (!is_null($promotedResultCount) && !(is_int($promotedResultCount) || ctype_digit($promotedResultCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($promotedResultCount, true), gettype($promotedResultCount)), __LINE__);
        }
        $this->promotedResultCount = $promotedResultCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\EntitySearchPromotionMetadata
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
