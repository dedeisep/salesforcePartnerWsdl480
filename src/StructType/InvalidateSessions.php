<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for invalidateSessions StructType
 * @subpackage Structs
 */
class InvalidateSessions extends AbstractStructBase
{
    /**
     * The sessionIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $sessionIds;
    /**
     * Constructor method for invalidateSessions
     * @uses InvalidateSessions::setSessionIds()
     * @param string[] $sessionIds
     */
    public function __construct(array $sessionIds = array())
    {
        $this
            ->setSessionIds($sessionIds);
    }
    /**
     * Get sessionIds value
     * @return string[]|null
     */
    public function getSessionIds()
    {
        return $this->sessionIds;
    }
    /**
     * This method is responsible for validating the values passed to the setSessionIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSessionIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSessionIdsForArrayConstraintsFromSetSessionIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $invalidateSessionsSessionIdsItem) {
            // validation for constraint: itemType
            if (!is_string($invalidateSessionsSessionIdsItem)) {
                $invalidValues[] = is_object($invalidateSessionsSessionIdsItem) ? get_class($invalidateSessionsSessionIdsItem) : sprintf('%s(%s)', gettype($invalidateSessionsSessionIdsItem), var_export($invalidateSessionsSessionIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The sessionIds property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set sessionIds value
     * @throws \InvalidArgumentException
     * @param string[] $sessionIds
     * @return \SFPartnerApi\v480\StructType\InvalidateSessions
     */
    public function setSessionIds(array $sessionIds = array())
    {
        // validation for constraint: array
        if ('' !== ($sessionIdsArrayErrorMessage = self::validateSessionIdsForArrayConstraintsFromSetSessionIds($sessionIds))) {
            throw new \InvalidArgumentException($sessionIdsArrayErrorMessage, __LINE__);
        }
        $this->sessionIds = $sessionIds;
        return $this;
    }
    /**
     * Add item to sessionIds value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\InvalidateSessions
     */
    public function addToSessionIds($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The sessionIds property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->sessionIds[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\InvalidateSessions
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
