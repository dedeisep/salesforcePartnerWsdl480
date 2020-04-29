<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeletedRecord StructType
 * @subpackage Structs
 */
class DeletedRecord extends AbstractStructBase
{
    /**
     * The deletedDate
     * @var string
     */
    public $deletedDate;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $id;
    /**
     * Constructor method for DeletedRecord
     * @uses DeletedRecord::setDeletedDate()
     * @uses DeletedRecord::setId()
     * @param string $deletedDate
     * @param string $id
     */
    public function __construct($deletedDate = null, $id = null)
    {
        $this
            ->setDeletedDate($deletedDate)
            ->setId($id);
    }
    /**
     * Get deletedDate value
     * @return string|null
     */
    public function getDeletedDate()
    {
        return $this->deletedDate;
    }
    /**
     * Set deletedDate value
     * @param string $deletedDate
     * @return \SFPartnerApi\v480\StructType\DeletedRecord
     */
    public function setDeletedDate($deletedDate = null)
    {
        // validation for constraint: string
        if (!is_null($deletedDate) && !is_string($deletedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deletedDate, true), gettype($deletedDate)), __LINE__);
        }
        $this->deletedDate = $deletedDate;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \SFPartnerApi\v480\StructType\DeletedRecord
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($id) && mb_strlen($id) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($id)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($id) && !preg_match('/[a-zA-Z0-9]{18}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($id, true)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DeletedRecord
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
