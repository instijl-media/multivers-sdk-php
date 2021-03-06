<?php
/**
 * CustomTableRow
 *
 * PHP version 5
 *
 * @category Class
 * @package  Seacommerce\Unit4\Multivers\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * UNIT4 Multivers WebApi
 *
 * Unofficial SDK for the UNIT4 Multivers WebApi version 1.10.0 (by Seacommerce).
 *
 * The version of the OpenAPI document: 1.10.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Seacommerce\Unit4\Multivers\Sdk\Model;

use \ArrayAccess;
use \Seacommerce\Unit4\Multivers\Sdk\ObjectSerializer;

/**
 * CustomTableRow Class Doc Comment
 *
 * @category Class
 * @package  Seacommerce\Unit4\Multivers\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomTableRow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomTableRow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'canChange' => 'bool',
        'cannotChangeReason' => 'string',
        'fieldValues' => 'string[]',
        'customProperties' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'canChange' => null,
        'cannotChangeReason' => null,
        'fieldValues' => null,
        'customProperties' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'canChange' => 'canChange',
        'cannotChangeReason' => 'cannotChangeReason',
        'fieldValues' => 'fieldValues',
        'customProperties' => 'customProperties'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'canChange' => 'setCanChange',
        'cannotChangeReason' => 'setCannotChangeReason',
        'fieldValues' => 'setFieldValues',
        'customProperties' => 'setCustomProperties'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'canChange' => 'getCanChange',
        'cannotChangeReason' => 'getCannotChangeReason',
        'fieldValues' => 'getFieldValues',
        'customProperties' => 'getCustomProperties'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['canChange'] = isset($data['canChange']) ? $data['canChange'] : null;
        $this->container['cannotChangeReason'] = isset($data['cannotChangeReason']) ? $data['cannotChangeReason'] : null;
        $this->container['fieldValues'] = isset($data['fieldValues']) ? $data['fieldValues'] : null;
        $this->container['customProperties'] = isset($data['customProperties']) ? $data['customProperties'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets canChange
     *
     * @return bool|null
     */
    public function getCanChange()
    {
        return $this->container['canChange'];
    }

    /**
     * Sets canChange
     *
     * @param bool|null $canChange canChange
     *
     * @return $this
     */
    public function setCanChange($canChange)
    {
        $this->container['canChange'] = $canChange;

        return $this;
    }

    /**
     * Gets cannotChangeReason
     *
     * @return string|null
     */
    public function getCannotChangeReason()
    {
        return $this->container['cannotChangeReason'];
    }

    /**
     * Sets cannotChangeReason
     *
     * @param string|null $cannotChangeReason cannotChangeReason
     *
     * @return $this
     */
    public function setCannotChangeReason($cannotChangeReason)
    {
        $this->container['cannotChangeReason'] = $cannotChangeReason;

        return $this;
    }

    /**
     * Gets fieldValues
     *
     * @return string[]|null
     */
    public function getFieldValues()
    {
        return $this->container['fieldValues'];
    }

    /**
     * Sets fieldValues
     *
     * @param string[]|null $fieldValues fieldValues
     *
     * @return $this
     */
    public function setFieldValues($fieldValues)
    {
        $this->container['fieldValues'] = $fieldValues;

        return $this;
    }

    /**
     * Gets customProperties
     *
     * @return object|null
     */
    public function getCustomProperties()
    {
        return $this->container['customProperties'];
    }

    /**
     * Sets customProperties
     *
     * @param object|null $customProperties customProperties
     *
     * @return $this
     */
    public function setCustomProperties($customProperties)
    {
        $this->container['customProperties'] = $customProperties;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


