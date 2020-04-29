<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchRecordMetadata StructType
 * @subpackage Structs
 */
class SearchRecordMetadata extends AbstractStructBase
{
    /**
     * The searchPromoted
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $searchPromoted;
    /**
     * The spellCorrected
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $spellCorrected;
    /**
     * Constructor method for SearchRecordMetadata
     * @uses SearchRecordMetadata::setSearchPromoted()
     * @uses SearchRecordMetadata::setSpellCorrected()
     * @param bool $searchPromoted
     * @param bool $spellCorrected
     */
    public function __construct($searchPromoted = null, $spellCorrected = null)
    {
        $this
            ->setSearchPromoted($searchPromoted)
            ->setSpellCorrected($spellCorrected);
    }
    /**
     * Get searchPromoted value
     * @return bool
     */
    public function getSearchPromoted()
    {
        return $this->searchPromoted;
    }
    /**
     * Set searchPromoted value
     * @param bool $searchPromoted
     * @return \SFPartnerApi\v480\StructType\SearchRecordMetadata
     */
    public function setSearchPromoted($searchPromoted = null)
    {
        // validation for constraint: boolean
        if (!is_null($searchPromoted) && !is_bool($searchPromoted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($searchPromoted, true), gettype($searchPromoted)), __LINE__);
        }
        $this->searchPromoted = $searchPromoted;
        return $this;
    }
    /**
     * Get spellCorrected value
     * @return bool
     */
    public function getSpellCorrected()
    {
        return $this->spellCorrected;
    }
    /**
     * Set spellCorrected value
     * @param bool $spellCorrected
     * @return \SFPartnerApi\v480\StructType\SearchRecordMetadata
     */
    public function setSpellCorrected($spellCorrected = null)
    {
        // validation for constraint: boolean
        if (!is_null($spellCorrected) && !is_bool($spellCorrected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($spellCorrected, true), gettype($spellCorrected)), __LINE__);
        }
        $this->spellCorrected = $spellCorrected;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\SearchRecordMetadata
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
