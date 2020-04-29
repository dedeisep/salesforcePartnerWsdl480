<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FieldComponent StructType
 * @subpackage Structs
 */
class FieldComponent extends DescribeLayoutComponent
{
    /**
     * The field
     * @var \SFPartnerApi\v480\StructType\Field
     */
    public $field;
    /**
     * Constructor method for FieldComponent
     * @uses FieldComponent::setField()
     * @param \SFPartnerApi\v480\StructType\Field $field
     */
    public function __construct(\SFPartnerApi\v480\StructType\Field $field = null)
    {
        $this
            ->setField($field);
    }
    /**
     * Get field value
     * @return \SFPartnerApi\v480\StructType\Field|null
     */
    public function getField()
    {
        return $this->field;
    }
    /**
     * Set field value
     * @param \SFPartnerApi\v480\StructType\Field $field
     * @return \SFPartnerApi\v480\StructType\FieldComponent
     */
    public function setField(\SFPartnerApi\v480\StructType\Field $field = null)
    {
        $this->field = $field;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\FieldComponent
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
