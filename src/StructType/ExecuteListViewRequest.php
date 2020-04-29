<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteListViewRequest StructType
 * @subpackage Structs
 */
class ExecuteListViewRequest extends AbstractStructBase
{
    /**
     * The orderBy
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \SFPartnerApi\v480\StructType\ListViewOrderBy[]
     */
    public $orderBy;
    /**
     * The developerNameOrId
     * @var string
     */
    public $developerNameOrId;
    /**
     * The limit
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $limit;
    /**
     * The offset
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $offset;
    /**
     * The sobjectType
     * @var string
     */
    public $sobjectType;
    /**
     * Constructor method for ExecuteListViewRequest
     * @uses ExecuteListViewRequest::setOrderBy()
     * @uses ExecuteListViewRequest::setDeveloperNameOrId()
     * @uses ExecuteListViewRequest::setLimit()
     * @uses ExecuteListViewRequest::setOffset()
     * @uses ExecuteListViewRequest::setSobjectType()
     * @param \SFPartnerApi\v480\StructType\ListViewOrderBy[] $orderBy
     * @param string $developerNameOrId
     * @param int $limit
     * @param int $offset
     * @param string $sobjectType
     */
    public function __construct(array $orderBy = array(), $developerNameOrId = null, $limit = null, $offset = null, $sobjectType = null)
    {
        $this
            ->setOrderBy($orderBy)
            ->setDeveloperNameOrId($developerNameOrId)
            ->setLimit($limit)
            ->setOffset($offset)
            ->setSobjectType($sobjectType);
    }
    /**
     * Get orderBy value
     * @return \SFPartnerApi\v480\StructType\ListViewOrderBy[]
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }
    /**
     * This method is responsible for validating the values passed to the setOrderBy method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderBy method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderByForArrayConstraintsFromSetOrderBy(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeListViewRequestOrderByItem) {
            // validation for constraint: itemType
            if (!$executeListViewRequestOrderByItem instanceof \SFPartnerApi\v480\StructType\ListViewOrderBy) {
                $invalidValues[] = is_object($executeListViewRequestOrderByItem) ? get_class($executeListViewRequestOrderByItem) : sprintf('%s(%s)', gettype($executeListViewRequestOrderByItem), var_export($executeListViewRequestOrderByItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orderBy property can only contain items of type \SFPartnerApi\v480\StructType\ListViewOrderBy, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set orderBy value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\ListViewOrderBy[] $orderBy
     * @return \SFPartnerApi\v480\StructType\ExecuteListViewRequest
     */
    public function setOrderBy(array $orderBy = array())
    {
        // validation for constraint: array
        if ('' !== ($orderByArrayErrorMessage = self::validateOrderByForArrayConstraintsFromSetOrderBy($orderBy))) {
            throw new \InvalidArgumentException($orderByArrayErrorMessage, __LINE__);
        }
        $this->orderBy = $orderBy;
        return $this;
    }
    /**
     * Add item to orderBy value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\ListViewOrderBy $item
     * @return \SFPartnerApi\v480\StructType\ExecuteListViewRequest
     */
    public function addToOrderBy(\SFPartnerApi\v480\StructType\ListViewOrderBy $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\ListViewOrderBy) {
            throw new \InvalidArgumentException(sprintf('The orderBy property can only contain items of type \SFPartnerApi\v480\StructType\ListViewOrderBy, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orderBy[] = $item;
        return $this;
    }
    /**
     * Get developerNameOrId value
     * @return string|null
     */
    public function getDeveloperNameOrId()
    {
        return $this->developerNameOrId;
    }
    /**
     * Set developerNameOrId value
     * @param string $developerNameOrId
     * @return \SFPartnerApi\v480\StructType\ExecuteListViewRequest
     */
    public function setDeveloperNameOrId($developerNameOrId = null)
    {
        // validation for constraint: string
        if (!is_null($developerNameOrId) && !is_string($developerNameOrId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($developerNameOrId, true), gettype($developerNameOrId)), __LINE__);
        }
        $this->developerNameOrId = $developerNameOrId;
        return $this;
    }
    /**
     * Get limit value
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }
    /**
     * Set limit value
     * @param int $limit
     * @return \SFPartnerApi\v480\StructType\ExecuteListViewRequest
     */
    public function setLimit($limit = null)
    {
        // validation for constraint: int
        if (!is_null($limit) && !(is_int($limit) || ctype_digit($limit))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($limit, true), gettype($limit)), __LINE__);
        }
        $this->limit = $limit;
        return $this;
    }
    /**
     * Get offset value
     * @return int|null
     */
    public function getOffset()
    {
        return $this->offset;
    }
    /**
     * Set offset value
     * @param int $offset
     * @return \SFPartnerApi\v480\StructType\ExecuteListViewRequest
     */
    public function setOffset($offset = null)
    {
        // validation for constraint: int
        if (!is_null($offset) && !(is_int($offset) || ctype_digit($offset))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offset, true), gettype($offset)), __LINE__);
        }
        $this->offset = $offset;
        return $this;
    }
    /**
     * Get sobjectType value
     * @return string|null
     */
    public function getSobjectType()
    {
        return $this->sobjectType;
    }
    /**
     * Set sobjectType value
     * @param string $sobjectType
     * @return \SFPartnerApi\v480\StructType\ExecuteListViewRequest
     */
    public function setSobjectType($sobjectType = null)
    {
        // validation for constraint: string
        if (!is_null($sobjectType) && !is_string($sobjectType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sobjectType, true), gettype($sobjectType)), __LINE__);
        }
        $this->sobjectType = $sobjectType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\ExecuteListViewRequest
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
