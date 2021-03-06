<?php
/**
 * Stock
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
 * Stock Class Doc Comment
 *
 * @category Class
 * @package  Seacommerce\Unit4\Multivers\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Stock implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Stock';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'availableStock' => 'float',
        'canChange' => 'bool',
        'cannotChangeReason' => 'string',
        'description' => 'string',
        'economicalStock' => 'float',
        'location' => 'string',
        'maximumStock' => 'float',
        'minimumStock' => 'float',
        'quantityClearedForDelivery' => 'float',
        'quantityOrdered' => 'float',
        'quantityOrderedSales' => 'float',
        'quantityReserved' => 'float',
        'quantityToDeliver' => 'float',
        'technicalStock' => 'float',
        'warehouseId' => 'string',
        'customProperties' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'availableStock' => null,
        'canChange' => null,
        'cannotChangeReason' => null,
        'description' => null,
        'economicalStock' => null,
        'location' => null,
        'maximumStock' => null,
        'minimumStock' => null,
        'quantityClearedForDelivery' => null,
        'quantityOrdered' => null,
        'quantityOrderedSales' => null,
        'quantityReserved' => null,
        'quantityToDeliver' => null,
        'technicalStock' => null,
        'warehouseId' => null,
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
        'availableStock' => 'availableStock',
        'canChange' => 'canChange',
        'cannotChangeReason' => 'cannotChangeReason',
        'description' => 'description',
        'economicalStock' => 'economicalStock',
        'location' => 'location',
        'maximumStock' => 'maximumStock',
        'minimumStock' => 'minimumStock',
        'quantityClearedForDelivery' => 'quantityClearedForDelivery',
        'quantityOrdered' => 'quantityOrdered',
        'quantityOrderedSales' => 'quantityOrderedSales',
        'quantityReserved' => 'quantityReserved',
        'quantityToDeliver' => 'quantityToDeliver',
        'technicalStock' => 'technicalStock',
        'warehouseId' => 'warehouseId',
        'customProperties' => 'customProperties'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'availableStock' => 'setAvailableStock',
        'canChange' => 'setCanChange',
        'cannotChangeReason' => 'setCannotChangeReason',
        'description' => 'setDescription',
        'economicalStock' => 'setEconomicalStock',
        'location' => 'setLocation',
        'maximumStock' => 'setMaximumStock',
        'minimumStock' => 'setMinimumStock',
        'quantityClearedForDelivery' => 'setQuantityClearedForDelivery',
        'quantityOrdered' => 'setQuantityOrdered',
        'quantityOrderedSales' => 'setQuantityOrderedSales',
        'quantityReserved' => 'setQuantityReserved',
        'quantityToDeliver' => 'setQuantityToDeliver',
        'technicalStock' => 'setTechnicalStock',
        'warehouseId' => 'setWarehouseId',
        'customProperties' => 'setCustomProperties'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'availableStock' => 'getAvailableStock',
        'canChange' => 'getCanChange',
        'cannotChangeReason' => 'getCannotChangeReason',
        'description' => 'getDescription',
        'economicalStock' => 'getEconomicalStock',
        'location' => 'getLocation',
        'maximumStock' => 'getMaximumStock',
        'minimumStock' => 'getMinimumStock',
        'quantityClearedForDelivery' => 'getQuantityClearedForDelivery',
        'quantityOrdered' => 'getQuantityOrdered',
        'quantityOrderedSales' => 'getQuantityOrderedSales',
        'quantityReserved' => 'getQuantityReserved',
        'quantityToDeliver' => 'getQuantityToDeliver',
        'technicalStock' => 'getTechnicalStock',
        'warehouseId' => 'getWarehouseId',
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
        $this->container['availableStock'] = isset($data['availableStock']) ? $data['availableStock'] : null;
        $this->container['canChange'] = isset($data['canChange']) ? $data['canChange'] : null;
        $this->container['cannotChangeReason'] = isset($data['cannotChangeReason']) ? $data['cannotChangeReason'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['economicalStock'] = isset($data['economicalStock']) ? $data['economicalStock'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['maximumStock'] = isset($data['maximumStock']) ? $data['maximumStock'] : null;
        $this->container['minimumStock'] = isset($data['minimumStock']) ? $data['minimumStock'] : null;
        $this->container['quantityClearedForDelivery'] = isset($data['quantityClearedForDelivery']) ? $data['quantityClearedForDelivery'] : null;
        $this->container['quantityOrdered'] = isset($data['quantityOrdered']) ? $data['quantityOrdered'] : null;
        $this->container['quantityOrderedSales'] = isset($data['quantityOrderedSales']) ? $data['quantityOrderedSales'] : null;
        $this->container['quantityReserved'] = isset($data['quantityReserved']) ? $data['quantityReserved'] : null;
        $this->container['quantityToDeliver'] = isset($data['quantityToDeliver']) ? $data['quantityToDeliver'] : null;
        $this->container['technicalStock'] = isset($data['technicalStock']) ? $data['technicalStock'] : null;
        $this->container['warehouseId'] = isset($data['warehouseId']) ? $data['warehouseId'] : null;
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

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 30)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['location']) && (mb_strlen($this->container['location']) > 8)) {
            $invalidProperties[] = "invalid value for 'location', the character length must be smaller than or equal to 8.";
        }

        if ($this->container['warehouseId'] === null) {
            $invalidProperties[] = "'warehouseId' can't be null";
        }
        if ((mb_strlen($this->container['warehouseId']) > 3)) {
            $invalidProperties[] = "invalid value for 'warehouseId', the character length must be smaller than or equal to 3.";
        }

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
     * Gets availableStock
     *
     * @return float|null
     */
    public function getAvailableStock()
    {
        return $this->container['availableStock'];
    }

    /**
     * Sets availableStock
     *
     * @param float|null $availableStock availableStock
     *
     * @return $this
     */
    public function setAvailableStock($availableStock)
    {
        $this->container['availableStock'] = $availableStock;

        return $this;
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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 30)) {
            throw new \InvalidArgumentException('invalid length for $description when calling Stock., must be smaller than or equal to 30.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets economicalStock
     *
     * @return float|null
     */
    public function getEconomicalStock()
    {
        return $this->container['economicalStock'];
    }

    /**
     * Sets economicalStock
     *
     * @param float|null $economicalStock economicalStock
     *
     * @return $this
     */
    public function setEconomicalStock($economicalStock)
    {
        $this->container['economicalStock'] = $economicalStock;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        if (!is_null($location) && (mb_strlen($location) > 8)) {
            throw new \InvalidArgumentException('invalid length for $location when calling Stock., must be smaller than or equal to 8.');
        }

        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets maximumStock
     *
     * @return float|null
     */
    public function getMaximumStock()
    {
        return $this->container['maximumStock'];
    }

    /**
     * Sets maximumStock
     *
     * @param float|null $maximumStock maximumStock
     *
     * @return $this
     */
    public function setMaximumStock($maximumStock)
    {
        $this->container['maximumStock'] = $maximumStock;

        return $this;
    }

    /**
     * Gets minimumStock
     *
     * @return float|null
     */
    public function getMinimumStock()
    {
        return $this->container['minimumStock'];
    }

    /**
     * Sets minimumStock
     *
     * @param float|null $minimumStock minimumStock
     *
     * @return $this
     */
    public function setMinimumStock($minimumStock)
    {
        $this->container['minimumStock'] = $minimumStock;

        return $this;
    }

    /**
     * Gets quantityClearedForDelivery
     *
     * @return float|null
     */
    public function getQuantityClearedForDelivery()
    {
        return $this->container['quantityClearedForDelivery'];
    }

    /**
     * Sets quantityClearedForDelivery
     *
     * @param float|null $quantityClearedForDelivery quantityClearedForDelivery
     *
     * @return $this
     */
    public function setQuantityClearedForDelivery($quantityClearedForDelivery)
    {
        $this->container['quantityClearedForDelivery'] = $quantityClearedForDelivery;

        return $this;
    }

    /**
     * Gets quantityOrdered
     *
     * @return float|null
     */
    public function getQuantityOrdered()
    {
        return $this->container['quantityOrdered'];
    }

    /**
     * Sets quantityOrdered
     *
     * @param float|null $quantityOrdered quantityOrdered
     *
     * @return $this
     */
    public function setQuantityOrdered($quantityOrdered)
    {
        $this->container['quantityOrdered'] = $quantityOrdered;

        return $this;
    }

    /**
     * Gets quantityOrderedSales
     *
     * @return float|null
     */
    public function getQuantityOrderedSales()
    {
        return $this->container['quantityOrderedSales'];
    }

    /**
     * Sets quantityOrderedSales
     *
     * @param float|null $quantityOrderedSales quantityOrderedSales
     *
     * @return $this
     */
    public function setQuantityOrderedSales($quantityOrderedSales)
    {
        $this->container['quantityOrderedSales'] = $quantityOrderedSales;

        return $this;
    }

    /**
     * Gets quantityReserved
     *
     * @return float|null
     */
    public function getQuantityReserved()
    {
        return $this->container['quantityReserved'];
    }

    /**
     * Sets quantityReserved
     *
     * @param float|null $quantityReserved quantityReserved
     *
     * @return $this
     */
    public function setQuantityReserved($quantityReserved)
    {
        $this->container['quantityReserved'] = $quantityReserved;

        return $this;
    }

    /**
     * Gets quantityToDeliver
     *
     * @return float|null
     */
    public function getQuantityToDeliver()
    {
        return $this->container['quantityToDeliver'];
    }

    /**
     * Sets quantityToDeliver
     *
     * @param float|null $quantityToDeliver quantityToDeliver
     *
     * @return $this
     */
    public function setQuantityToDeliver($quantityToDeliver)
    {
        $this->container['quantityToDeliver'] = $quantityToDeliver;

        return $this;
    }

    /**
     * Gets technicalStock
     *
     * @return float|null
     */
    public function getTechnicalStock()
    {
        return $this->container['technicalStock'];
    }

    /**
     * Sets technicalStock
     *
     * @param float|null $technicalStock technicalStock
     *
     * @return $this
     */
    public function setTechnicalStock($technicalStock)
    {
        $this->container['technicalStock'] = $technicalStock;

        return $this;
    }

    /**
     * Gets warehouseId
     *
     * @return string
     */
    public function getWarehouseId()
    {
        return $this->container['warehouseId'];
    }

    /**
     * Sets warehouseId
     *
     * @param string $warehouseId warehouseId
     *
     * @return $this
     */
    public function setWarehouseId($warehouseId)
    {
        if ((mb_strlen($warehouseId) > 3)) {
            throw new \InvalidArgumentException('invalid length for $warehouseId when calling Stock., must be smaller than or equal to 3.');
        }

        $this->container['warehouseId'] = $warehouseId;

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


