<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeSoftphoneLayoutCallType StructType
 * @subpackage Structs
 */
class DescribeSoftphoneLayoutCallType extends AbstractStructBase
{
    /**
     * The infoFields
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutInfoField[]
     */
    public $infoFields;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The screenPopOptions
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeSoftphoneScreenPopOption[]
     */
    public $screenPopOptions;
    /**
     * The screenPopsOpenWithin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $screenPopsOpenWithin;
    /**
     * The sections
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutSection[]
     */
    public $sections;
    /**
     * Constructor method for DescribeSoftphoneLayoutCallType
     * @uses DescribeSoftphoneLayoutCallType::setInfoFields()
     * @uses DescribeSoftphoneLayoutCallType::setName()
     * @uses DescribeSoftphoneLayoutCallType::setScreenPopOptions()
     * @uses DescribeSoftphoneLayoutCallType::setScreenPopsOpenWithin()
     * @uses DescribeSoftphoneLayoutCallType::setSections()
     * @param \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutInfoField[] $infoFields
     * @param string $name
     * @param \SFPartnerApi\v480\StructType\DescribeSoftphoneScreenPopOption[] $screenPopOptions
     * @param string $screenPopsOpenWithin
     * @param \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutSection[] $sections
     */
    public function __construct(array $infoFields = array(), $name = null, array $screenPopOptions = array(), $screenPopsOpenWithin = null, array $sections = array())
    {
        $this
            ->setInfoFields($infoFields)
            ->setName($name)
            ->setScreenPopOptions($screenPopOptions)
            ->setScreenPopsOpenWithin($screenPopsOpenWithin)
            ->setSections($sections);
    }
    /**
     * Get infoFields value
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutInfoField[]
     */
    public function getInfoFields()
    {
        return $this->infoFields;
    }
    /**
     * This method is responsible for validating the values passed to the setInfoFields method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInfoFields method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInfoFieldsForArrayConstraintsFromSetInfoFields(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeSoftphoneLayoutCallTypeInfoFieldsItem) {
            // validation for constraint: itemType
            if (!$describeSoftphoneLayoutCallTypeInfoFieldsItem instanceof \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutInfoField) {
                $invalidValues[] = is_object($describeSoftphoneLayoutCallTypeInfoFieldsItem) ? get_class($describeSoftphoneLayoutCallTypeInfoFieldsItem) : sprintf('%s(%s)', gettype($describeSoftphoneLayoutCallTypeInfoFieldsItem), var_export($describeSoftphoneLayoutCallTypeInfoFieldsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The infoFields property can only contain items of type \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutInfoField, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set infoFields value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutInfoField[] $infoFields
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutCallType
     */
    public function setInfoFields(array $infoFields = array())
    {
        // validation for constraint: array
        if ('' !== ($infoFieldsArrayErrorMessage = self::validateInfoFieldsForArrayConstraintsFromSetInfoFields($infoFields))) {
            throw new \InvalidArgumentException($infoFieldsArrayErrorMessage, __LINE__);
        }
        $this->infoFields = $infoFields;
        return $this;
    }
    /**
     * Add item to infoFields value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutInfoField $item
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutCallType
     */
    public function addToInfoFields(\SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutInfoField $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutInfoField) {
            throw new \InvalidArgumentException(sprintf('The infoFields property can only contain items of type \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutInfoField, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->infoFields[] = $item;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutCallType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get screenPopOptions value
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneScreenPopOption[]|null
     */
    public function getScreenPopOptions()
    {
        return $this->screenPopOptions;
    }
    /**
     * This method is responsible for validating the values passed to the setScreenPopOptions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setScreenPopOptions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateScreenPopOptionsForArrayConstraintsFromSetScreenPopOptions(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeSoftphoneLayoutCallTypeScreenPopOptionsItem) {
            // validation for constraint: itemType
            if (!$describeSoftphoneLayoutCallTypeScreenPopOptionsItem instanceof \SFPartnerApi\v480\StructType\DescribeSoftphoneScreenPopOption) {
                $invalidValues[] = is_object($describeSoftphoneLayoutCallTypeScreenPopOptionsItem) ? get_class($describeSoftphoneLayoutCallTypeScreenPopOptionsItem) : sprintf('%s(%s)', gettype($describeSoftphoneLayoutCallTypeScreenPopOptionsItem), var_export($describeSoftphoneLayoutCallTypeScreenPopOptionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The screenPopOptions property can only contain items of type \SFPartnerApi\v480\StructType\DescribeSoftphoneScreenPopOption, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set screenPopOptions value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeSoftphoneScreenPopOption[] $screenPopOptions
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutCallType
     */
    public function setScreenPopOptions(array $screenPopOptions = array())
    {
        // validation for constraint: array
        if ('' !== ($screenPopOptionsArrayErrorMessage = self::validateScreenPopOptionsForArrayConstraintsFromSetScreenPopOptions($screenPopOptions))) {
            throw new \InvalidArgumentException($screenPopOptionsArrayErrorMessage, __LINE__);
        }
        $this->screenPopOptions = $screenPopOptions;
        return $this;
    }
    /**
     * Add item to screenPopOptions value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeSoftphoneScreenPopOption $item
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutCallType
     */
    public function addToScreenPopOptions(\SFPartnerApi\v480\StructType\DescribeSoftphoneScreenPopOption $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeSoftphoneScreenPopOption) {
            throw new \InvalidArgumentException(sprintf('The screenPopOptions property can only contain items of type \SFPartnerApi\v480\StructType\DescribeSoftphoneScreenPopOption, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->screenPopOptions[] = $item;
        return $this;
    }
    /**
     * Get screenPopsOpenWithin value
     * @return string|null
     */
    public function getScreenPopsOpenWithin()
    {
        return $this->screenPopsOpenWithin;
    }
    /**
     * Set screenPopsOpenWithin value
     * @param string $screenPopsOpenWithin
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutCallType
     */
    public function setScreenPopsOpenWithin($screenPopsOpenWithin = null)
    {
        // validation for constraint: string
        if (!is_null($screenPopsOpenWithin) && !is_string($screenPopsOpenWithin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($screenPopsOpenWithin, true), gettype($screenPopsOpenWithin)), __LINE__);
        }
        $this->screenPopsOpenWithin = $screenPopsOpenWithin;
        return $this;
    }
    /**
     * Get sections value
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutSection[]|null
     */
    public function getSections()
    {
        return $this->sections;
    }
    /**
     * This method is responsible for validating the values passed to the setSections method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSections method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSectionsForArrayConstraintsFromSetSections(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeSoftphoneLayoutCallTypeSectionsItem) {
            // validation for constraint: itemType
            if (!$describeSoftphoneLayoutCallTypeSectionsItem instanceof \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutSection) {
                $invalidValues[] = is_object($describeSoftphoneLayoutCallTypeSectionsItem) ? get_class($describeSoftphoneLayoutCallTypeSectionsItem) : sprintf('%s(%s)', gettype($describeSoftphoneLayoutCallTypeSectionsItem), var_export($describeSoftphoneLayoutCallTypeSectionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The sections property can only contain items of type \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutSection, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set sections value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutSection[] $sections
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutCallType
     */
    public function setSections(array $sections = array())
    {
        // validation for constraint: array
        if ('' !== ($sectionsArrayErrorMessage = self::validateSectionsForArrayConstraintsFromSetSections($sections))) {
            throw new \InvalidArgumentException($sectionsArrayErrorMessage, __LINE__);
        }
        $this->sections = $sections;
        return $this;
    }
    /**
     * Add item to sections value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutSection $item
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutCallType
     */
    public function addToSections(\SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutSection $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutSection) {
            throw new \InvalidArgumentException(sprintf('The sections property can only contain items of type \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutSection, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->sections[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutCallType
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
