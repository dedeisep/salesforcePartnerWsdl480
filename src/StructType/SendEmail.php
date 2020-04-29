<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sendEmail StructType
 * @subpackage Structs
 */
class SendEmail extends AbstractStructBase
{
    /**
     * The messages
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\Email[]
     */
    public $messages;
    /**
     * Constructor method for sendEmail
     * @uses SendEmail::setMessages()
     * @param \SFPartnerApi\v480\StructType\Email[] $messages
     */
    public function __construct(array $messages = array())
    {
        $this
            ->setMessages($messages);
    }
    /**
     * Get messages value
     * @return \SFPartnerApi\v480\StructType\Email[]|null
     */
    public function getMessages()
    {
        return $this->messages;
    }
    /**
     * This method is responsible for validating the values passed to the setMessages method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessages method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessagesForArrayConstraintsFromSetMessages(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sendEmailMessagesItem) {
            // validation for constraint: itemType
            if (!$sendEmailMessagesItem instanceof \SFPartnerApi\v480\StructType\Email) {
                $invalidValues[] = is_object($sendEmailMessagesItem) ? get_class($sendEmailMessagesItem) : sprintf('%s(%s)', gettype($sendEmailMessagesItem), var_export($sendEmailMessagesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The messages property can only contain items of type \SFPartnerApi\v480\StructType\Email, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set messages value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\Email[] $messages
     * @return \SFPartnerApi\v480\StructType\SendEmail
     */
    public function setMessages(array $messages = array())
    {
        // validation for constraint: array
        if ('' !== ($messagesArrayErrorMessage = self::validateMessagesForArrayConstraintsFromSetMessages($messages))) {
            throw new \InvalidArgumentException($messagesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($messages) && count($messages) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($messages)), __LINE__);
        }
        $this->messages = $messages;
        return $this;
    }
    /**
     * Add item to messages value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\Email $item
     * @return \SFPartnerApi\v480\StructType\SendEmail
     */
    public function addToMessages(\SFPartnerApi\v480\StructType\Email $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\Email) {
            throw new \InvalidArgumentException(sprintf('The messages property can only contain items of type \SFPartnerApi\v480\StructType\Email, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->messages) && count($this->messages) >= 10) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->messages)), __LINE__);
        }
        $this->messages[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\SendEmail
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
