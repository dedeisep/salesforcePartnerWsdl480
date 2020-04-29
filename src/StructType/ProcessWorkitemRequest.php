<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessWorkitemRequest StructType
 * @subpackage Structs
 */
class ProcessWorkitemRequest extends ProcessRequest
{
    /**
     * The action
     * @var string
     */
    public $action;
    /**
     * The workitemId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $workitemId;
    /**
     * Constructor method for ProcessWorkitemRequest
     * @uses ProcessWorkitemRequest::setAction()
     * @uses ProcessWorkitemRequest::setWorkitemId()
     * @param string $action
     * @param string $workitemId
     */
    public function __construct($action = null, $workitemId = null)
    {
        $this
            ->setAction($action)
            ->setWorkitemId($workitemId);
    }
    /**
     * Get action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->action;
    }
    /**
     * Set action value
     * @param string $action
     * @return \SFPartnerApi\v480\StructType\ProcessWorkitemRequest
     */
    public function setAction($action = null)
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($action, true), gettype($action)), __LINE__);
        }
        $this->action = $action;
        return $this;
    }
    /**
     * Get workitemId value
     * @return string|null
     */
    public function getWorkitemId()
    {
        return $this->workitemId;
    }
    /**
     * Set workitemId value
     * @param string $workitemId
     * @return \SFPartnerApi\v480\StructType\ProcessWorkitemRequest
     */
    public function setWorkitemId($workitemId = null)
    {
        // validation for constraint: string
        if (!is_null($workitemId) && !is_string($workitemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workitemId, true), gettype($workitemId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($workitemId) && mb_strlen($workitemId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($workitemId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($workitemId) && !preg_match('/[a-zA-Z0-9]{18}/', $workitemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($workitemId, true)), __LINE__);
        }
        $this->workitemId = $workitemId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\ProcessWorkitemRequest
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
