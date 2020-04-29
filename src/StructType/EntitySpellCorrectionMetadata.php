<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EntitySpellCorrectionMetadata StructType
 * @subpackage Structs
 */
class EntitySpellCorrectionMetadata extends AbstractStructBase
{
    /**
     * The correctedQuery
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    public $correctedQuery;
    /**
     * The hasNonCorrectedResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var bool
     */
    public $hasNonCorrectedResults;
    /**
     * Constructor method for EntitySpellCorrectionMetadata
     * @uses EntitySpellCorrectionMetadata::setCorrectedQuery()
     * @uses EntitySpellCorrectionMetadata::setHasNonCorrectedResults()
     * @param string $correctedQuery
     * @param bool $hasNonCorrectedResults
     */
    public function __construct($correctedQuery = null, $hasNonCorrectedResults = null)
    {
        $this
            ->setCorrectedQuery($correctedQuery)
            ->setHasNonCorrectedResults($hasNonCorrectedResults);
    }
    /**
     * Get correctedQuery value
     * @return string
     */
    public function getCorrectedQuery()
    {
        return $this->correctedQuery;
    }
    /**
     * Set correctedQuery value
     * @param string $correctedQuery
     * @return \SFPartnerApi\v480\StructType\EntitySpellCorrectionMetadata
     */
    public function setCorrectedQuery($correctedQuery = null)
    {
        // validation for constraint: string
        if (!is_null($correctedQuery) && !is_string($correctedQuery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($correctedQuery, true), gettype($correctedQuery)), __LINE__);
        }
        $this->correctedQuery = $correctedQuery;
        return $this;
    }
    /**
     * Get hasNonCorrectedResults value
     * @return bool
     */
    public function getHasNonCorrectedResults()
    {
        return $this->hasNonCorrectedResults;
    }
    /**
     * Set hasNonCorrectedResults value
     * @param bool $hasNonCorrectedResults
     * @return \SFPartnerApi\v480\StructType\EntitySpellCorrectionMetadata
     */
    public function setHasNonCorrectedResults($hasNonCorrectedResults = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasNonCorrectedResults) && !is_bool($hasNonCorrectedResults)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasNonCorrectedResults, true), gettype($hasNonCorrectedResults)), __LINE__);
        }
        $this->hasNonCorrectedResults = $hasNonCorrectedResults;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\EntitySpellCorrectionMetadata
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
