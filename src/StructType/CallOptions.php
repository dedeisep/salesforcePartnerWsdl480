<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CallOptions StructType
 * @subpackage Structs
 */
class CallOptions extends AbstractStructBase
{
    /**
     * The client
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $client;
    /**
     * The defaultNamespace
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $defaultNamespace;
    /**
     * Constructor method for CallOptions
     * @uses CallOptions::setClient()
     * @uses CallOptions::setDefaultNamespace()
     * @param string $client
     * @param string $defaultNamespace
     */
    public function __construct($client = null, $defaultNamespace = null)
    {
        $this
            ->setClient($client)
            ->setDefaultNamespace($defaultNamespace);
    }
    /**
     * Get client value
     * @return string|null
     */
    public function getClient()
    {
        return $this->client;
    }
    /**
     * Set client value
     * @param string $client
     * @return \SFPartnerApi\v480\StructType\CallOptions
     */
    public function setClient($client = null)
    {
        // validation for constraint: string
        if (!is_null($client) && !is_string($client)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($client, true), gettype($client)), __LINE__);
        }
        $this->client = $client;
        return $this;
    }
    /**
     * Get defaultNamespace value
     * @return string|null
     */
    public function getDefaultNamespace()
    {
        return $this->defaultNamespace;
    }
    /**
     * Set defaultNamespace value
     * @param string $defaultNamespace
     * @return \SFPartnerApi\v480\StructType\CallOptions
     */
    public function setDefaultNamespace($defaultNamespace = null)
    {
        // validation for constraint: string
        if (!is_null($defaultNamespace) && !is_string($defaultNamespace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultNamespace, true), gettype($defaultNamespace)), __LINE__);
        }
        $this->defaultNamespace = $defaultNamespace;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\CallOptions
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
