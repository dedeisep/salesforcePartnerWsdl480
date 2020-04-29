<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchRecord StructType
 * @subpackage Structs
 */
class SearchRecord extends AbstractStructBase
{
    /**
     * The record
     * @var \SFPartnerApi\v480\StructType\SObject
     */
    public $record;
    /**
     * The searchRecordMetadata
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: false
     * @var \SFPartnerApi\v480\StructType\SearchRecordMetadata
     */
    public $searchRecordMetadata;
    /**
     * The snippet
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\SearchSnippet
     */
    public $snippet;
    /**
     * Constructor method for SearchRecord
     * @uses SearchRecord::setRecord()
     * @uses SearchRecord::setSearchRecordMetadata()
     * @uses SearchRecord::setSnippet()
     * @param \SFPartnerApi\v480\StructType\SObject $record
     * @param \SFPartnerApi\v480\StructType\SearchRecordMetadata $searchRecordMetadata
     * @param \SFPartnerApi\v480\StructType\SearchSnippet $snippet
     */
    public function __construct(\SFPartnerApi\v480\StructType\SObject $record = null, \SFPartnerApi\v480\StructType\SearchRecordMetadata $searchRecordMetadata = null, \SFPartnerApi\v480\StructType\SearchSnippet $snippet = null)
    {
        $this
            ->setRecord($record)
            ->setSearchRecordMetadata($searchRecordMetadata)
            ->setSnippet($snippet);
    }
    /**
     * Get record value
     * @return \SFPartnerApi\v480\StructType\SObject|null
     */
    public function getRecord()
    {
        return $this->record;
    }
    /**
     * Set record value
     * @param \SFPartnerApi\v480\StructType\SObject $record
     * @return \SFPartnerApi\v480\StructType\SearchRecord
     */
    public function setRecord(\SFPartnerApi\v480\StructType\SObject $record = null)
    {
        $this->record = $record;
        return $this;
    }
    /**
     * Get searchRecordMetadata value
     * @return \SFPartnerApi\v480\StructType\SearchRecordMetadata|null
     */
    public function getSearchRecordMetadata()
    {
        return $this->searchRecordMetadata;
    }
    /**
     * Set searchRecordMetadata value
     * @param \SFPartnerApi\v480\StructType\SearchRecordMetadata $searchRecordMetadata
     * @return \SFPartnerApi\v480\StructType\SearchRecord
     */
    public function setSearchRecordMetadata(\SFPartnerApi\v480\StructType\SearchRecordMetadata $searchRecordMetadata = null)
    {
        $this->searchRecordMetadata = $searchRecordMetadata;
        return $this;
    }
    /**
     * Get snippet value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SFPartnerApi\v480\StructType\SearchSnippet|null
     */
    public function getSnippet()
    {
        return isset($this->snippet) ? $this->snippet : null;
    }
    /**
     * Set snippet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SFPartnerApi\v480\StructType\SearchSnippet $snippet
     * @return \SFPartnerApi\v480\StructType\SearchRecord
     */
    public function setSnippet(\SFPartnerApi\v480\StructType\SearchSnippet $snippet = null)
    {
        if (is_null($snippet) || (is_array($snippet) && empty($snippet))) {
            unset($this->snippet);
        } else {
            $this->snippet = $snippet;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\SearchRecord
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
