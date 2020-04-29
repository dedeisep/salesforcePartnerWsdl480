<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchLayoutButtonsDisplayed StructType
 * @subpackage Structs
 */
class SearchLayoutButtonsDisplayed extends AbstractStructBase
{
    /**
     * The applicable
     * @var bool
     */
    public $applicable;
    /**
     * The buttons
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\SearchLayoutButton[]
     */
    public $buttons;
    /**
     * Constructor method for SearchLayoutButtonsDisplayed
     * @uses SearchLayoutButtonsDisplayed::setApplicable()
     * @uses SearchLayoutButtonsDisplayed::setButtons()
     * @param bool $applicable
     * @param \SFPartnerApi\v480\StructType\SearchLayoutButton[] $buttons
     */
    public function __construct($applicable = null, array $buttons = array())
    {
        $this
            ->setApplicable($applicable)
            ->setButtons($buttons);
    }
    /**
     * Get applicable value
     * @return bool|null
     */
    public function getApplicable()
    {
        return $this->applicable;
    }
    /**
     * Set applicable value
     * @param bool $applicable
     * @return \SFPartnerApi\v480\StructType\SearchLayoutButtonsDisplayed
     */
    public function setApplicable($applicable = null)
    {
        // validation for constraint: boolean
        if (!is_null($applicable) && !is_bool($applicable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($applicable, true), gettype($applicable)), __LINE__);
        }
        $this->applicable = $applicable;
        return $this;
    }
    /**
     * Get buttons value
     * @return \SFPartnerApi\v480\StructType\SearchLayoutButton[]|null
     */
    public function getButtons()
    {
        return $this->buttons;
    }
    /**
     * This method is responsible for validating the values passed to the setButtons method
     * This method is willingly generated in order to preserve the one-line inline validation within the setButtons method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateButtonsForArrayConstraintsFromSetButtons(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchLayoutButtonsDisplayedButtonsItem) {
            // validation for constraint: itemType
            if (!$searchLayoutButtonsDisplayedButtonsItem instanceof \SFPartnerApi\v480\StructType\SearchLayoutButton) {
                $invalidValues[] = is_object($searchLayoutButtonsDisplayedButtonsItem) ? get_class($searchLayoutButtonsDisplayedButtonsItem) : sprintf('%s(%s)', gettype($searchLayoutButtonsDisplayedButtonsItem), var_export($searchLayoutButtonsDisplayedButtonsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The buttons property can only contain items of type \SFPartnerApi\v480\StructType\SearchLayoutButton, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set buttons value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\SearchLayoutButton[] $buttons
     * @return \SFPartnerApi\v480\StructType\SearchLayoutButtonsDisplayed
     */
    public function setButtons(array $buttons = array())
    {
        // validation for constraint: array
        if ('' !== ($buttonsArrayErrorMessage = self::validateButtonsForArrayConstraintsFromSetButtons($buttons))) {
            throw new \InvalidArgumentException($buttonsArrayErrorMessage, __LINE__);
        }
        $this->buttons = $buttons;
        return $this;
    }
    /**
     * Add item to buttons value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\SearchLayoutButton $item
     * @return \SFPartnerApi\v480\StructType\SearchLayoutButtonsDisplayed
     */
    public function addToButtons(\SFPartnerApi\v480\StructType\SearchLayoutButton $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\SearchLayoutButton) {
            throw new \InvalidArgumentException(sprintf('The buttons property can only contain items of type \SFPartnerApi\v480\StructType\SearchLayoutButton, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->buttons[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\SearchLayoutButtonsDisplayed
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
