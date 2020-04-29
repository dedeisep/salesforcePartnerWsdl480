<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelatedListColumn StructType
 * @subpackage Structs
 */
class RelatedListColumn extends AbstractStructBase
{
    /**
     * The field
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $field;
    /**
     * The fieldApiName
     * @var string
     */
    public $fieldApiName;
    /**
     * The format
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $format;
    /**
     * The label
     * @var string
     */
    public $label;
    /**
     * The lookupId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $lookupId;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The sortable
     * @var bool
     */
    public $sortable;
    /**
     * Constructor method for RelatedListColumn
     * @uses RelatedListColumn::setField()
     * @uses RelatedListColumn::setFieldApiName()
     * @uses RelatedListColumn::setFormat()
     * @uses RelatedListColumn::setLabel()
     * @uses RelatedListColumn::setLookupId()
     * @uses RelatedListColumn::setName()
     * @uses RelatedListColumn::setSortable()
     * @param string $field
     * @param string $fieldApiName
     * @param string $format
     * @param string $label
     * @param string $lookupId
     * @param string $name
     * @param bool $sortable
     */
    public function __construct($field = null, $fieldApiName = null, $format = null, $label = null, $lookupId = null, $name = null, $sortable = null)
    {
        $this
            ->setField($field)
            ->setFieldApiName($fieldApiName)
            ->setFormat($format)
            ->setLabel($label)
            ->setLookupId($lookupId)
            ->setName($name)
            ->setSortable($sortable);
    }
    /**
     * Get field value
     * @return string|null
     */
    public function getField()
    {
        return $this->field;
    }
    /**
     * Set field value
     * @param string $field
     * @return \SFPartnerApi\v480\StructType\RelatedListColumn
     */
    public function setField($field = null)
    {
        // validation for constraint: string
        if (!is_null($field) && !is_string($field)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field, true), gettype($field)), __LINE__);
        }
        $this->field = $field;
        return $this;
    }
    /**
     * Get fieldApiName value
     * @return string|null
     */
    public function getFieldApiName()
    {
        return $this->fieldApiName;
    }
    /**
     * Set fieldApiName value
     * @param string $fieldApiName
     * @return \SFPartnerApi\v480\StructType\RelatedListColumn
     */
    public function setFieldApiName($fieldApiName = null)
    {
        // validation for constraint: string
        if (!is_null($fieldApiName) && !is_string($fieldApiName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldApiName, true), gettype($fieldApiName)), __LINE__);
        }
        $this->fieldApiName = $fieldApiName;
        return $this;
    }
    /**
     * Get format value
     * @return string|null
     */
    public function getFormat()
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \SFPartnerApi\v480\StructType\RelatedListColumn
     */
    public function setFormat($format = null)
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($format, true), gettype($format)), __LINE__);
        }
        $this->format = $format;
        return $this;
    }
    /**
     * Get label value
     * @return string|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param string $label
     * @return \SFPartnerApi\v480\StructType\RelatedListColumn
     */
    public function setLabel($label = null)
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        $this->label = $label;
        return $this;
    }
    /**
     * Get lookupId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLookupId()
    {
        return isset($this->lookupId) ? $this->lookupId : null;
    }
    /**
     * Set lookupId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lookupId
     * @return \SFPartnerApi\v480\StructType\RelatedListColumn
     */
    public function setLookupId($lookupId = null)
    {
        // validation for constraint: string
        if (!is_null($lookupId) && !is_string($lookupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lookupId, true), gettype($lookupId)), __LINE__);
        }
        if (is_null($lookupId) || (is_array($lookupId) && empty($lookupId))) {
            unset($this->lookupId);
        } else {
            $this->lookupId = $lookupId;
        }
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
     * @return \SFPartnerApi\v480\StructType\RelatedListColumn
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
     * Get sortable value
     * @return bool|null
     */
    public function getSortable()
    {
        return $this->sortable;
    }
    /**
     * Set sortable value
     * @param bool $sortable
     * @return \SFPartnerApi\v480\StructType\RelatedListColumn
     */
    public function setSortable($sortable = null)
    {
        // validation for constraint: boolean
        if (!is_null($sortable) && !is_bool($sortable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sortable, true), gettype($sortable)), __LINE__);
        }
        $this->sortable = $sortable;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\RelatedListColumn
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
