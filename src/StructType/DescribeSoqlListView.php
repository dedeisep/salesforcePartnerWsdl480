<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeSoqlListView StructType
 * @subpackage Structs
 */
class DescribeSoqlListView extends AbstractStructBase
{
    /**
     * The columns
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \SFPartnerApi\v480\StructType\ListViewColumn[]
     */
    public $columns;
    /**
     * The orderBy
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \SFPartnerApi\v480\StructType\ListViewOrderBy[]
     */
    public $orderBy;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $id;
    /**
     * The query
     * @var string
     */
    public $query;
    /**
     * The relatedEntityId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $relatedEntityId;
    /**
     * The scope
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $scope;
    /**
     * The scopeEntityId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $scopeEntityId;
    /**
     * The sobjectType
     * @var string
     */
    public $sobjectType;
    /**
     * The whereCondition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\SoqlWhereCondition
     */
    public $whereCondition;
    /**
     * Constructor method for DescribeSoqlListView
     * @uses DescribeSoqlListView::setColumns()
     * @uses DescribeSoqlListView::setOrderBy()
     * @uses DescribeSoqlListView::setId()
     * @uses DescribeSoqlListView::setQuery()
     * @uses DescribeSoqlListView::setRelatedEntityId()
     * @uses DescribeSoqlListView::setScope()
     * @uses DescribeSoqlListView::setScopeEntityId()
     * @uses DescribeSoqlListView::setSobjectType()
     * @uses DescribeSoqlListView::setWhereCondition()
     * @param \SFPartnerApi\v480\StructType\ListViewColumn[] $columns
     * @param \SFPartnerApi\v480\StructType\ListViewOrderBy[] $orderBy
     * @param string $id
     * @param string $query
     * @param string $relatedEntityId
     * @param string $scope
     * @param string $scopeEntityId
     * @param string $sobjectType
     * @param \SFPartnerApi\v480\StructType\SoqlWhereCondition $whereCondition
     */
    public function __construct(array $columns = array(), array $orderBy = array(), $id = null, $query = null, $relatedEntityId = null, $scope = null, $scopeEntityId = null, $sobjectType = null, \SFPartnerApi\v480\StructType\SoqlWhereCondition $whereCondition = null)
    {
        $this
            ->setColumns($columns)
            ->setOrderBy($orderBy)
            ->setId($id)
            ->setQuery($query)
            ->setRelatedEntityId($relatedEntityId)
            ->setScope($scope)
            ->setScopeEntityId($scopeEntityId)
            ->setSobjectType($sobjectType)
            ->setWhereCondition($whereCondition);
    }
    /**
     * Get columns value
     * @return \SFPartnerApi\v480\StructType\ListViewColumn[]
     */
    public function getColumns()
    {
        return $this->columns;
    }
    /**
     * This method is responsible for validating the values passed to the setColumns method
     * This method is willingly generated in order to preserve the one-line inline validation within the setColumns method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateColumnsForArrayConstraintsFromSetColumns(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeSoqlListViewColumnsItem) {
            // validation for constraint: itemType
            if (!$describeSoqlListViewColumnsItem instanceof \SFPartnerApi\v480\StructType\ListViewColumn) {
                $invalidValues[] = is_object($describeSoqlListViewColumnsItem) ? get_class($describeSoqlListViewColumnsItem) : sprintf('%s(%s)', gettype($describeSoqlListViewColumnsItem), var_export($describeSoqlListViewColumnsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The columns property can only contain items of type \SFPartnerApi\v480\StructType\ListViewColumn, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set columns value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\ListViewColumn[] $columns
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListView
     */
    public function setColumns(array $columns = array())
    {
        // validation for constraint: array
        if ('' !== ($columnsArrayErrorMessage = self::validateColumnsForArrayConstraintsFromSetColumns($columns))) {
            throw new \InvalidArgumentException($columnsArrayErrorMessage, __LINE__);
        }
        $this->columns = $columns;
        return $this;
    }
    /**
     * Add item to columns value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\ListViewColumn $item
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListView
     */
    public function addToColumns(\SFPartnerApi\v480\StructType\ListViewColumn $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\ListViewColumn) {
            throw new \InvalidArgumentException(sprintf('The columns property can only contain items of type \SFPartnerApi\v480\StructType\ListViewColumn, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->columns[] = $item;
        return $this;
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
        foreach ($values as $describeSoqlListViewOrderByItem) {
            // validation for constraint: itemType
            if (!$describeSoqlListViewOrderByItem instanceof \SFPartnerApi\v480\StructType\ListViewOrderBy) {
                $invalidValues[] = is_object($describeSoqlListViewOrderByItem) ? get_class($describeSoqlListViewOrderByItem) : sprintf('%s(%s)', gettype($describeSoqlListViewOrderByItem), var_export($describeSoqlListViewOrderByItem, true));
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
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListView
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
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListView
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
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListView
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($id) && mb_strlen($id) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($id)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($id) && !preg_match('/[a-zA-Z0-9]{18}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($id, true)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get query value
     * @return string|null
     */
    public function getQuery()
    {
        return $this->query;
    }
    /**
     * Set query value
     * @param string $query
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListView
     */
    public function setQuery($query = null)
    {
        // validation for constraint: string
        if (!is_null($query) && !is_string($query)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($query, true), gettype($query)), __LINE__);
        }
        $this->query = $query;
        return $this;
    }
    /**
     * Get relatedEntityId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRelatedEntityId()
    {
        return isset($this->relatedEntityId) ? $this->relatedEntityId : null;
    }
    /**
     * Set relatedEntityId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $relatedEntityId
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListView
     */
    public function setRelatedEntityId($relatedEntityId = null)
    {
        // validation for constraint: string
        if (!is_null($relatedEntityId) && !is_string($relatedEntityId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relatedEntityId, true), gettype($relatedEntityId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($relatedEntityId) && mb_strlen($relatedEntityId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($relatedEntityId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($relatedEntityId) && !preg_match('/[a-zA-Z0-9]{18}/', $relatedEntityId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($relatedEntityId, true)), __LINE__);
        }
        if (is_null($relatedEntityId) || (is_array($relatedEntityId) && empty($relatedEntityId))) {
            unset($this->relatedEntityId);
        } else {
            $this->relatedEntityId = $relatedEntityId;
        }
        return $this;
    }
    /**
     * Get scope value
     * @return string|null
     */
    public function getScope()
    {
        return $this->scope;
    }
    /**
     * Set scope value
     * @param string $scope
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListView
     */
    public function setScope($scope = null)
    {
        // validation for constraint: string
        if (!is_null($scope) && !is_string($scope)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scope, true), gettype($scope)), __LINE__);
        }
        $this->scope = $scope;
        return $this;
    }
    /**
     * Get scopeEntityId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getScopeEntityId()
    {
        return isset($this->scopeEntityId) ? $this->scopeEntityId : null;
    }
    /**
     * Set scopeEntityId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $scopeEntityId
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListView
     */
    public function setScopeEntityId($scopeEntityId = null)
    {
        // validation for constraint: string
        if (!is_null($scopeEntityId) && !is_string($scopeEntityId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scopeEntityId, true), gettype($scopeEntityId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($scopeEntityId) && mb_strlen($scopeEntityId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($scopeEntityId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($scopeEntityId) && !preg_match('/[a-zA-Z0-9]{18}/', $scopeEntityId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($scopeEntityId, true)), __LINE__);
        }
        if (is_null($scopeEntityId) || (is_array($scopeEntityId) && empty($scopeEntityId))) {
            unset($this->scopeEntityId);
        } else {
            $this->scopeEntityId = $scopeEntityId;
        }
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
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListView
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
     * Get whereCondition value
     * @return \SFPartnerApi\v480\StructType\SoqlWhereCondition|null
     */
    public function getWhereCondition()
    {
        return $this->whereCondition;
    }
    /**
     * Set whereCondition value
     * @param \SFPartnerApi\v480\StructType\SoqlWhereCondition $whereCondition
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListView
     */
    public function setWhereCondition(\SFPartnerApi\v480\StructType\SoqlWhereCondition $whereCondition = null)
    {
        $this->whereCondition = $whereCondition;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListView
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
