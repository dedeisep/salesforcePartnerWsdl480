<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sendEmailMessage StructType
 * @subpackage Structs
 */
class SendEmailMessage extends AbstractStructBase
{
    /**
     * The ids
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - maxOccurs: 10
     * - minOccurs: 0
     * - pattern: [a-zA-Z0-9]{18}
     * @var string[]
     */
    public $ids;
    /**
     * Constructor method for sendEmailMessage
     * @uses SendEmailMessage::setIds()
     * @param string[] $ids
     */
    public function __construct(array $ids = array())
    {
        $this
            ->setIds($ids);
    }
    /**
     * Get ids value
     * @return string[]|null
     */
    public function getIds()
    {
        return $this->ids;
    }
    /**
     * This method is responsible for validating the values passed to the setIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIdsForArrayConstraintsFromSetIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sendEmailMessageIdsItem) {
            // validation for constraint: itemType
            if (!is_string($sendEmailMessageIdsItem)) {
                $invalidValues[] = is_object($sendEmailMessageIdsItem) ? get_class($sendEmailMessageIdsItem) : sprintf('%s(%s)', gettype($sendEmailMessageIdsItem), var_export($sendEmailMessageIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ids property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIds method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIdsForLengthConstraintFromSetIds($values)
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sendEmailMessageIdsItem) {
            // validation for constraint: length(18)
            if (mb_strlen($sendEmailMessageIdsItem) !== 18) {
                $invalidValues[] = var_export($sendEmailMessageIdsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 18', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ids value
     * @throws \InvalidArgumentException
     * @param string[] $ids
     * @return \SFPartnerApi\v480\StructType\SendEmailMessage
     */
    public function setIds(array $ids = array())
    {
        // validation for constraint: array
        if ('' !== ($idsArrayErrorMessage = self::validateIdsForArrayConstraintsFromSetIds($ids))) {
            throw new \InvalidArgumentException($idsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(18)
        if ('' !== ($idsLengthErrorMessage = self::validateIdsForLengthConstraintFromSetIds($ids))) {
            throw new \InvalidArgumentException($idsLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($ids) && count($ids) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($ids)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($ids) && !preg_match('/[a-zA-Z0-9]{18}/', $ids)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($ids, true)), __LINE__);
        }
        $this->ids = $ids;
        return $this;
    }
    /**
     * Add item to ids value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\SendEmailMessage
     */
    public function addToIds($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ids property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(18)
        if (mb_strlen($item) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($item)), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->ids) && count($this->ids) >= 10) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->ids)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!preg_match('/[a-zA-Z0-9]{18}/', $item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($item, true)), __LINE__);
        }
        $this->ids[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\SendEmailMessage
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
