<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserTerritoryDeleteHeader StructType
 * @subpackage Structs
 */
class UserTerritoryDeleteHeader extends AbstractStructBase
{
    /**
     * The transferToUserId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $transferToUserId;
    /**
     * Constructor method for UserTerritoryDeleteHeader
     * @uses UserTerritoryDeleteHeader::setTransferToUserId()
     * @param string $transferToUserId
     */
    public function __construct($transferToUserId = null)
    {
        $this
            ->setTransferToUserId($transferToUserId);
    }
    /**
     * Get transferToUserId value
     * @return string|null
     */
    public function getTransferToUserId()
    {
        return $this->transferToUserId;
    }
    /**
     * Set transferToUserId value
     * @param string $transferToUserId
     * @return \SFPartnerApi\v480\StructType\UserTerritoryDeleteHeader
     */
    public function setTransferToUserId($transferToUserId = null)
    {
        // validation for constraint: string
        if (!is_null($transferToUserId) && !is_string($transferToUserId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transferToUserId, true), gettype($transferToUserId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($transferToUserId) && mb_strlen($transferToUserId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($transferToUserId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($transferToUserId) && !preg_match('/[a-zA-Z0-9]{18}/', $transferToUserId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($transferToUserId, true)), __LINE__);
        }
        $this->transferToUserId = $transferToUserId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\UserTerritoryDeleteHeader
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
