<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchResult StructType
 * @subpackage Structs
 */
class SearchResult extends AbstractStructBase
{
    /**
     * The queryId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    public $queryId;
    /**
     * The searchRecords
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\SearchRecord[]
     */
    public $searchRecords;
    /**
     * The searchResultsMetadata
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\SearchResultsMetadata
     */
    public $searchResultsMetadata;
    /**
     * Constructor method for SearchResult
     * @uses SearchResult::setQueryId()
     * @uses SearchResult::setSearchRecords()
     * @uses SearchResult::setSearchResultsMetadata()
     * @param string $queryId
     * @param \SFPartnerApi\v480\StructType\SearchRecord[] $searchRecords
     * @param \SFPartnerApi\v480\StructType\SearchResultsMetadata $searchResultsMetadata
     */
    public function __construct($queryId = null, array $searchRecords = array(), \SFPartnerApi\v480\StructType\SearchResultsMetadata $searchResultsMetadata = null)
    {
        $this
            ->setQueryId($queryId)
            ->setSearchRecords($searchRecords)
            ->setSearchResultsMetadata($searchResultsMetadata);
    }
    /**
     * Get queryId value
     * @return string
     */
    public function getQueryId()
    {
        return $this->queryId;
    }
    /**
     * Set queryId value
     * @param string $queryId
     * @return \SFPartnerApi\v480\StructType\SearchResult
     */
    public function setQueryId($queryId = null)
    {
        // validation for constraint: string
        if (!is_null($queryId) && !is_string($queryId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryId, true), gettype($queryId)), __LINE__);
        }
        $this->queryId = $queryId;
        return $this;
    }
    /**
     * Get searchRecords value
     * @return \SFPartnerApi\v480\StructType\SearchRecord[]|null
     */
    public function getSearchRecords()
    {
        return $this->searchRecords;
    }
    /**
     * This method is responsible for validating the values passed to the setSearchRecords method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSearchRecords method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSearchRecordsForArrayConstraintsFromSetSearchRecords(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchResultSearchRecordsItem) {
            // validation for constraint: itemType
            if (!$searchResultSearchRecordsItem instanceof \SFPartnerApi\v480\StructType\SearchRecord) {
                $invalidValues[] = is_object($searchResultSearchRecordsItem) ? get_class($searchResultSearchRecordsItem) : sprintf('%s(%s)', gettype($searchResultSearchRecordsItem), var_export($searchResultSearchRecordsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The searchRecords property can only contain items of type \SFPartnerApi\v480\StructType\SearchRecord, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set searchRecords value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\SearchRecord[] $searchRecords
     * @return \SFPartnerApi\v480\StructType\SearchResult
     */
    public function setSearchRecords(array $searchRecords = array())
    {
        // validation for constraint: array
        if ('' !== ($searchRecordsArrayErrorMessage = self::validateSearchRecordsForArrayConstraintsFromSetSearchRecords($searchRecords))) {
            throw new \InvalidArgumentException($searchRecordsArrayErrorMessage, __LINE__);
        }
        $this->searchRecords = $searchRecords;
        return $this;
    }
    /**
     * Add item to searchRecords value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\SearchRecord $item
     * @return \SFPartnerApi\v480\StructType\SearchResult
     */
    public function addToSearchRecords(\SFPartnerApi\v480\StructType\SearchRecord $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\SearchRecord) {
            throw new \InvalidArgumentException(sprintf('The searchRecords property can only contain items of type \SFPartnerApi\v480\StructType\SearchRecord, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->searchRecords[] = $item;
        return $this;
    }
    /**
     * Get searchResultsMetadata value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SFPartnerApi\v480\StructType\SearchResultsMetadata|null
     */
    public function getSearchResultsMetadata()
    {
        return isset($this->searchResultsMetadata) ? $this->searchResultsMetadata : null;
    }
    /**
     * Set searchResultsMetadata value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SFPartnerApi\v480\StructType\SearchResultsMetadata $searchResultsMetadata
     * @return \SFPartnerApi\v480\StructType\SearchResult
     */
    public function setSearchResultsMetadata(\SFPartnerApi\v480\StructType\SearchResultsMetadata $searchResultsMetadata = null)
    {
        if (is_null($searchResultsMetadata) || (is_array($searchResultsMetadata) && empty($searchResultsMetadata))) {
            unset($this->searchResultsMetadata);
        } else {
            $this->searchResultsMetadata = $searchResultsMetadata;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\SearchResult
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
