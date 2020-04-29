<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeSoqlListViewParams StructType
 * @subpackage Structs
 */
class DescribeSoqlListViewParams extends AbstractStructBase
{
    /**
     * The developerNameOrId
     * @var string
     */
    public $developerNameOrId;
    /**
     * The sobjectType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sobjectType;
    /**
     * Constructor method for DescribeSoqlListViewParams
     * @uses DescribeSoqlListViewParams::setDeveloperNameOrId()
     * @uses DescribeSoqlListViewParams::setSobjectType()
     * @param string $developerNameOrId
     * @param string $sobjectType
     */
    public function __construct($developerNameOrId = null, $sobjectType = null)
    {
        $this
            ->setDeveloperNameOrId($developerNameOrId)
            ->setSobjectType($sobjectType);
    }
    /**
     * Get developerNameOrId value
     * @return string|null
     */
    public function getDeveloperNameOrId()
    {
        return $this->developerNameOrId;
    }
    /**
     * Set developerNameOrId value
     * @param string $developerNameOrId
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListViewParams
     */
    public function setDeveloperNameOrId($developerNameOrId = null)
    {
        // validation for constraint: string
        if (!is_null($developerNameOrId) && !is_string($developerNameOrId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($developerNameOrId, true), gettype($developerNameOrId)), __LINE__);
        }
        $this->developerNameOrId = $developerNameOrId;
        return $this;
    }
    /**
     * Get sobjectType value
     * @return string|null
     */
    public function getSobjectType()
    {
        return $this->sobjectType;
    }
    /**
     * Set sobjectType value
     * @param string $sobjectType
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListViewParams
     */
    public function setSobjectType($sobjectType = null)
    {
        // validation for constraint: string
        if (!is_null($sobjectType) && !is_string($sobjectType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sobjectType, true), gettype($sobjectType)), __LINE__);
        }
        $this->sobjectType = $sobjectType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListViewParams
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
