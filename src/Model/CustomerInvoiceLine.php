<?php
/**
 * CustomerInvoiceLine
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
 * CustomerInvoiceLine Class Doc Comment
 *
 * @category Class
 * @package  Seacommerce\Unit4\Multivers\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomerInvoiceLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerInvoiceLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'string',
        'canChange' => 'bool',
        'cannotChangeReason' => 'string',
        'costCentreId' => 'string',
        'costCentreIdRequired' => 'bool',
        'costUnitId' => 'string',
        'costUnitIdRequired' => 'bool',
        'creditAmount' => 'float',
        'creditAmountCur' => 'float',
        'currencyId' => 'string',
        'debitAmount' => 'float',
        'debitAmountCur' => 'float',
        'description' => 'string',
        'documentNumber' => 'int',
        'entryType' => 'int',
        'exchangeRate' => 'float',
        'isSubAdminSpecificationRequired' => 'bool',
        'journalSection' => 'int',
        'lineNumbers' => 'int[]',
        'quantity' => 'float',
        'subAdminSpecifications' => '\Seacommerce\Unit4\Multivers\Sdk\Model\SubAdminSpec[]',
        'subTransaction' => 'string',
        'teleBankGuid' => 'string',
        'transactionDate' => 'string',
        'vatAmount' => 'float',
        'vatAmountCur' => 'float',
        'vatCodeId' => 'int',
        'vatType' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'accountId' => null,
        'canChange' => null,
        'cannotChangeReason' => null,
        'costCentreId' => null,
        'costCentreIdRequired' => null,
        'costUnitId' => null,
        'costUnitIdRequired' => null,
        'creditAmount' => null,
        'creditAmountCur' => null,
        'currencyId' => null,
        'debitAmount' => null,
        'debitAmountCur' => null,
        'description' => null,
        'documentNumber' => 'int32',
        'entryType' => null,
        'exchangeRate' => null,
        'isSubAdminSpecificationRequired' => null,
        'journalSection' => 'int32',
        'lineNumbers' => 'int32',
        'quantity' => null,
        'subAdminSpecifications' => null,
        'subTransaction' => null,
        'teleBankGuid' => null,
        'transactionDate' => null,
        'vatAmount' => null,
        'vatAmountCur' => null,
        'vatCodeId' => null,
        'vatType' => null
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
        'accountId' => 'accountId',
        'canChange' => 'canChange',
        'cannotChangeReason' => 'cannotChangeReason',
        'costCentreId' => 'costCentreId',
        'costCentreIdRequired' => 'costCentreIdRequired',
        'costUnitId' => 'costUnitId',
        'costUnitIdRequired' => 'costUnitIdRequired',
        'creditAmount' => 'creditAmount',
        'creditAmountCur' => 'creditAmountCur',
        'currencyId' => 'currencyId',
        'debitAmount' => 'debitAmount',
        'debitAmountCur' => 'debitAmountCur',
        'description' => 'description',
        'documentNumber' => 'documentNumber',
        'entryType' => 'entryType',
        'exchangeRate' => 'exchangeRate',
        'isSubAdminSpecificationRequired' => 'isSubAdminSpecificationRequired',
        'journalSection' => 'journalSection',
        'lineNumbers' => 'lineNumbers',
        'quantity' => 'quantity',
        'subAdminSpecifications' => 'subAdminSpecifications',
        'subTransaction' => 'subTransaction',
        'teleBankGuid' => 'teleBankGuid',
        'transactionDate' => 'transactionDate',
        'vatAmount' => 'vatAmount',
        'vatAmountCur' => 'vatAmountCur',
        'vatCodeId' => 'vatCodeId',
        'vatType' => 'vatType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'canChange' => 'setCanChange',
        'cannotChangeReason' => 'setCannotChangeReason',
        'costCentreId' => 'setCostCentreId',
        'costCentreIdRequired' => 'setCostCentreIdRequired',
        'costUnitId' => 'setCostUnitId',
        'costUnitIdRequired' => 'setCostUnitIdRequired',
        'creditAmount' => 'setCreditAmount',
        'creditAmountCur' => 'setCreditAmountCur',
        'currencyId' => 'setCurrencyId',
        'debitAmount' => 'setDebitAmount',
        'debitAmountCur' => 'setDebitAmountCur',
        'description' => 'setDescription',
        'documentNumber' => 'setDocumentNumber',
        'entryType' => 'setEntryType',
        'exchangeRate' => 'setExchangeRate',
        'isSubAdminSpecificationRequired' => 'setIsSubAdminSpecificationRequired',
        'journalSection' => 'setJournalSection',
        'lineNumbers' => 'setLineNumbers',
        'quantity' => 'setQuantity',
        'subAdminSpecifications' => 'setSubAdminSpecifications',
        'subTransaction' => 'setSubTransaction',
        'teleBankGuid' => 'setTeleBankGuid',
        'transactionDate' => 'setTransactionDate',
        'vatAmount' => 'setVatAmount',
        'vatAmountCur' => 'setVatAmountCur',
        'vatCodeId' => 'setVatCodeId',
        'vatType' => 'setVatType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'canChange' => 'getCanChange',
        'cannotChangeReason' => 'getCannotChangeReason',
        'costCentreId' => 'getCostCentreId',
        'costCentreIdRequired' => 'getCostCentreIdRequired',
        'costUnitId' => 'getCostUnitId',
        'costUnitIdRequired' => 'getCostUnitIdRequired',
        'creditAmount' => 'getCreditAmount',
        'creditAmountCur' => 'getCreditAmountCur',
        'currencyId' => 'getCurrencyId',
        'debitAmount' => 'getDebitAmount',
        'debitAmountCur' => 'getDebitAmountCur',
        'description' => 'getDescription',
        'documentNumber' => 'getDocumentNumber',
        'entryType' => 'getEntryType',
        'exchangeRate' => 'getExchangeRate',
        'isSubAdminSpecificationRequired' => 'getIsSubAdminSpecificationRequired',
        'journalSection' => 'getJournalSection',
        'lineNumbers' => 'getLineNumbers',
        'quantity' => 'getQuantity',
        'subAdminSpecifications' => 'getSubAdminSpecifications',
        'subTransaction' => 'getSubTransaction',
        'teleBankGuid' => 'getTeleBankGuid',
        'transactionDate' => 'getTransactionDate',
        'vatAmount' => 'getVatAmount',
        'vatAmountCur' => 'getVatAmountCur',
        'vatCodeId' => 'getVatCodeId',
        'vatType' => 'getVatType'
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
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['canChange'] = isset($data['canChange']) ? $data['canChange'] : null;
        $this->container['cannotChangeReason'] = isset($data['cannotChangeReason']) ? $data['cannotChangeReason'] : null;
        $this->container['costCentreId'] = isset($data['costCentreId']) ? $data['costCentreId'] : null;
        $this->container['costCentreIdRequired'] = isset($data['costCentreIdRequired']) ? $data['costCentreIdRequired'] : null;
        $this->container['costUnitId'] = isset($data['costUnitId']) ? $data['costUnitId'] : null;
        $this->container['costUnitIdRequired'] = isset($data['costUnitIdRequired']) ? $data['costUnitIdRequired'] : null;
        $this->container['creditAmount'] = isset($data['creditAmount']) ? $data['creditAmount'] : null;
        $this->container['creditAmountCur'] = isset($data['creditAmountCur']) ? $data['creditAmountCur'] : null;
        $this->container['currencyId'] = isset($data['currencyId']) ? $data['currencyId'] : null;
        $this->container['debitAmount'] = isset($data['debitAmount']) ? $data['debitAmount'] : null;
        $this->container['debitAmountCur'] = isset($data['debitAmountCur']) ? $data['debitAmountCur'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['documentNumber'] = isset($data['documentNumber']) ? $data['documentNumber'] : null;
        $this->container['entryType'] = isset($data['entryType']) ? $data['entryType'] : null;
        $this->container['exchangeRate'] = isset($data['exchangeRate']) ? $data['exchangeRate'] : null;
        $this->container['isSubAdminSpecificationRequired'] = isset($data['isSubAdminSpecificationRequired']) ? $data['isSubAdminSpecificationRequired'] : null;
        $this->container['journalSection'] = isset($data['journalSection']) ? $data['journalSection'] : null;
        $this->container['lineNumbers'] = isset($data['lineNumbers']) ? $data['lineNumbers'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['subAdminSpecifications'] = isset($data['subAdminSpecifications']) ? $data['subAdminSpecifications'] : null;
        $this->container['subTransaction'] = isset($data['subTransaction']) ? $data['subTransaction'] : null;
        $this->container['teleBankGuid'] = isset($data['teleBankGuid']) ? $data['teleBankGuid'] : null;
        $this->container['transactionDate'] = isset($data['transactionDate']) ? $data['transactionDate'] : null;
        $this->container['vatAmount'] = isset($data['vatAmount']) ? $data['vatAmount'] : null;
        $this->container['vatAmountCur'] = isset($data['vatAmountCur']) ? $data['vatAmountCur'] : null;
        $this->container['vatCodeId'] = isset($data['vatCodeId']) ? $data['vatCodeId'] : null;
        $this->container['vatType'] = isset($data['vatType']) ? $data['vatType'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['accountId']) && (mb_strlen($this->container['accountId']) > 8)) {
            $invalidProperties[] = "invalid value for 'accountId', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['costCentreId']) && (mb_strlen($this->container['costCentreId']) > 8)) {
            $invalidProperties[] = "invalid value for 'costCentreId', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['costUnitId']) && (mb_strlen($this->container['costUnitId']) > 8)) {
            $invalidProperties[] = "invalid value for 'costUnitId', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 100)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['subTransaction']) && (mb_strlen($this->container['subTransaction']) > 8)) {
            $invalidProperties[] = "invalid value for 'subTransaction', the character length must be smaller than or equal to 8.";
        }

        if ($this->container['transactionDate'] === null) {
            $invalidProperties[] = "'transactionDate' can't be null";
        }
        if (!is_null($this->container['vatCodeId']) && ($this->container['vatCodeId'] > 99)) {
            $invalidProperties[] = "invalid value for 'vatCodeId', must be smaller than or equal to 99.";
        }

        if (!is_null($this->container['vatCodeId']) && ($this->container['vatCodeId'] < 0)) {
            $invalidProperties[] = "invalid value for 'vatCodeId', must be bigger than or equal to 0.";
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
     * Gets accountId
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param string|null $accountId accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        if (!is_null($accountId) && (mb_strlen($accountId) > 8)) {
            throw new \InvalidArgumentException('invalid length for $accountId when calling CustomerInvoiceLine., must be smaller than or equal to 8.');
        }

        $this->container['accountId'] = $accountId;

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
     * Gets costCentreId
     *
     * @return string|null
     */
    public function getCostCentreId()
    {
        return $this->container['costCentreId'];
    }

    /**
     * Sets costCentreId
     *
     * @param string|null $costCentreId costCentreId
     *
     * @return $this
     */
    public function setCostCentreId($costCentreId)
    {
        if (!is_null($costCentreId) && (mb_strlen($costCentreId) > 8)) {
            throw new \InvalidArgumentException('invalid length for $costCentreId when calling CustomerInvoiceLine., must be smaller than or equal to 8.');
        }

        $this->container['costCentreId'] = $costCentreId;

        return $this;
    }

    /**
     * Gets costCentreIdRequired
     *
     * @return bool|null
     */
    public function getCostCentreIdRequired()
    {
        return $this->container['costCentreIdRequired'];
    }

    /**
     * Sets costCentreIdRequired
     *
     * @param bool|null $costCentreIdRequired costCentreIdRequired
     *
     * @return $this
     */
    public function setCostCentreIdRequired($costCentreIdRequired)
    {
        $this->container['costCentreIdRequired'] = $costCentreIdRequired;

        return $this;
    }

    /**
     * Gets costUnitId
     *
     * @return string|null
     */
    public function getCostUnitId()
    {
        return $this->container['costUnitId'];
    }

    /**
     * Sets costUnitId
     *
     * @param string|null $costUnitId costUnitId
     *
     * @return $this
     */
    public function setCostUnitId($costUnitId)
    {
        if (!is_null($costUnitId) && (mb_strlen($costUnitId) > 8)) {
            throw new \InvalidArgumentException('invalid length for $costUnitId when calling CustomerInvoiceLine., must be smaller than or equal to 8.');
        }

        $this->container['costUnitId'] = $costUnitId;

        return $this;
    }

    /**
     * Gets costUnitIdRequired
     *
     * @return bool|null
     */
    public function getCostUnitIdRequired()
    {
        return $this->container['costUnitIdRequired'];
    }

    /**
     * Sets costUnitIdRequired
     *
     * @param bool|null $costUnitIdRequired costUnitIdRequired
     *
     * @return $this
     */
    public function setCostUnitIdRequired($costUnitIdRequired)
    {
        $this->container['costUnitIdRequired'] = $costUnitIdRequired;

        return $this;
    }

    /**
     * Gets creditAmount
     *
     * @return float|null
     */
    public function getCreditAmount()
    {
        return $this->container['creditAmount'];
    }

    /**
     * Sets creditAmount
     *
     * @param float|null $creditAmount creditAmount
     *
     * @return $this
     */
    public function setCreditAmount($creditAmount)
    {
        $this->container['creditAmount'] = $creditAmount;

        return $this;
    }

    /**
     * Gets creditAmountCur
     *
     * @return float|null
     */
    public function getCreditAmountCur()
    {
        return $this->container['creditAmountCur'];
    }

    /**
     * Sets creditAmountCur
     *
     * @param float|null $creditAmountCur creditAmountCur
     *
     * @return $this
     */
    public function setCreditAmountCur($creditAmountCur)
    {
        $this->container['creditAmountCur'] = $creditAmountCur;

        return $this;
    }

    /**
     * Gets currencyId
     *
     * @return string|null
     */
    public function getCurrencyId()
    {
        return $this->container['currencyId'];
    }

    /**
     * Sets currencyId
     *
     * @param string|null $currencyId currencyId
     *
     * @return $this
     */
    public function setCurrencyId($currencyId)
    {
        $this->container['currencyId'] = $currencyId;

        return $this;
    }

    /**
     * Gets debitAmount
     *
     * @return float|null
     */
    public function getDebitAmount()
    {
        return $this->container['debitAmount'];
    }

    /**
     * Sets debitAmount
     *
     * @param float|null $debitAmount debitAmount
     *
     * @return $this
     */
    public function setDebitAmount($debitAmount)
    {
        $this->container['debitAmount'] = $debitAmount;

        return $this;
    }

    /**
     * Gets debitAmountCur
     *
     * @return float|null
     */
    public function getDebitAmountCur()
    {
        return $this->container['debitAmountCur'];
    }

    /**
     * Sets debitAmountCur
     *
     * @param float|null $debitAmountCur debitAmountCur
     *
     * @return $this
     */
    public function setDebitAmountCur($debitAmountCur)
    {
        $this->container['debitAmountCur'] = $debitAmountCur;

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
        if (!is_null($description) && (mb_strlen($description) > 100)) {
            throw new \InvalidArgumentException('invalid length for $description when calling CustomerInvoiceLine., must be smaller than or equal to 100.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets documentNumber
     *
     * @return int|null
     */
    public function getDocumentNumber()
    {
        return $this->container['documentNumber'];
    }

    /**
     * Sets documentNumber
     *
     * @param int|null $documentNumber documentNumber
     *
     * @return $this
     */
    public function setDocumentNumber($documentNumber)
    {
        $this->container['documentNumber'] = $documentNumber;

        return $this;
    }

    /**
     * Gets entryType
     *
     * @return int|null
     */
    public function getEntryType()
    {
        return $this->container['entryType'];
    }

    /**
     * Sets entryType
     *
     * @param int|null $entryType 0 = BasicEntry 1 = CustomerEntry 2 = SupplierEntry 3 = ProjectEntry 4 = FixedAssetEntry 5 = InterCompanyEntry 6 = UnMatchedBankTransactionsEntry -1 = Internal
     *
     * @return $this
     */
    public function setEntryType($entryType)
    {
        $this->container['entryType'] = $entryType;

        return $this;
    }

    /**
     * Gets exchangeRate
     *
     * @return float|null
     */
    public function getExchangeRate()
    {
        return $this->container['exchangeRate'];
    }

    /**
     * Sets exchangeRate
     *
     * @param float|null $exchangeRate exchangeRate
     *
     * @return $this
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->container['exchangeRate'] = $exchangeRate;

        return $this;
    }

    /**
     * Gets isSubAdminSpecificationRequired
     *
     * @return bool|null
     */
    public function getIsSubAdminSpecificationRequired()
    {
        return $this->container['isSubAdminSpecificationRequired'];
    }

    /**
     * Sets isSubAdminSpecificationRequired
     *
     * @param bool|null $isSubAdminSpecificationRequired isSubAdminSpecificationRequired
     *
     * @return $this
     */
    public function setIsSubAdminSpecificationRequired($isSubAdminSpecificationRequired)
    {
        $this->container['isSubAdminSpecificationRequired'] = $isSubAdminSpecificationRequired;

        return $this;
    }

    /**
     * Gets journalSection
     *
     * @return int|null
     */
    public function getJournalSection()
    {
        return $this->container['journalSection'];
    }

    /**
     * Sets journalSection
     *
     * @param int|null $journalSection journalSection
     *
     * @return $this
     */
    public function setJournalSection($journalSection)
    {
        $this->container['journalSection'] = $journalSection;

        return $this;
    }

    /**
     * Gets lineNumbers
     *
     * @return int[]|null
     */
    public function getLineNumbers()
    {
        return $this->container['lineNumbers'];
    }

    /**
     * Sets lineNumbers
     *
     * @param int[]|null $lineNumbers lineNumbers
     *
     * @return $this
     */
    public function setLineNumbers($lineNumbers)
    {
        $this->container['lineNumbers'] = $lineNumbers;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float|null $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets subAdminSpecifications
     *
     * @return \Seacommerce\Unit4\Multivers\Sdk\Model\SubAdminSpec[]|null
     */
    public function getSubAdminSpecifications()
    {
        return $this->container['subAdminSpecifications'];
    }

    /**
     * Sets subAdminSpecifications
     *
     * @param \Seacommerce\Unit4\Multivers\Sdk\Model\SubAdminSpec[]|null $subAdminSpecifications subAdminSpecifications
     *
     * @return $this
     */
    public function setSubAdminSpecifications($subAdminSpecifications)
    {
        $this->container['subAdminSpecifications'] = $subAdminSpecifications;

        return $this;
    }

    /**
     * Gets subTransaction
     *
     * @return string|null
     */
    public function getSubTransaction()
    {
        return $this->container['subTransaction'];
    }

    /**
     * Sets subTransaction
     *
     * @param string|null $subTransaction subTransaction
     *
     * @return $this
     */
    public function setSubTransaction($subTransaction)
    {
        if (!is_null($subTransaction) && (mb_strlen($subTransaction) > 8)) {
            throw new \InvalidArgumentException('invalid length for $subTransaction when calling CustomerInvoiceLine., must be smaller than or equal to 8.');
        }

        $this->container['subTransaction'] = $subTransaction;

        return $this;
    }

    /**
     * Gets teleBankGuid
     *
     * @return string|null
     */
    public function getTeleBankGuid()
    {
        return $this->container['teleBankGuid'];
    }

    /**
     * Sets teleBankGuid
     *
     * @param string|null $teleBankGuid teleBankGuid
     *
     * @return $this
     */
    public function setTeleBankGuid($teleBankGuid)
    {
        $this->container['teleBankGuid'] = $teleBankGuid;

        return $this;
    }

    /**
     * Gets transactionDate
     *
     * @return string
     */
    public function getTransactionDate()
    {
        return $this->container['transactionDate'];
    }

    /**
     * Sets transactionDate
     *
     * @param string $transactionDate transactionDate
     *
     * @return $this
     */
    public function setTransactionDate($transactionDate)
    {
        $this->container['transactionDate'] = $transactionDate;

        return $this;
    }

    /**
     * Gets vatAmount
     *
     * @return float|null
     */
    public function getVatAmount()
    {
        return $this->container['vatAmount'];
    }

    /**
     * Sets vatAmount
     *
     * @param float|null $vatAmount vatAmount
     *
     * @return $this
     */
    public function setVatAmount($vatAmount)
    {
        $this->container['vatAmount'] = $vatAmount;

        return $this;
    }

    /**
     * Gets vatAmountCur
     *
     * @return float|null
     */
    public function getVatAmountCur()
    {
        return $this->container['vatAmountCur'];
    }

    /**
     * Sets vatAmountCur
     *
     * @param float|null $vatAmountCur vatAmountCur
     *
     * @return $this
     */
    public function setVatAmountCur($vatAmountCur)
    {
        $this->container['vatAmountCur'] = $vatAmountCur;

        return $this;
    }

    /**
     * Gets vatCodeId
     *
     * @return int|null
     */
    public function getVatCodeId()
    {
        return $this->container['vatCodeId'];
    }

    /**
     * Sets vatCodeId
     *
     * @param int|null $vatCodeId vatCodeId
     *
     * @return $this
     */
    public function setVatCodeId($vatCodeId)
    {

        if (!is_null($vatCodeId) && ($vatCodeId > 99)) {
            throw new \InvalidArgumentException('invalid value for $vatCodeId when calling CustomerInvoiceLine., must be smaller than or equal to 99.');
        }
        if (!is_null($vatCodeId) && ($vatCodeId < 0)) {
            throw new \InvalidArgumentException('invalid value for $vatCodeId when calling CustomerInvoiceLine., must be bigger than or equal to 0.');
        }

        $this->container['vatCodeId'] = $vatCodeId;

        return $this;
    }

    /**
     * Gets vatType
     *
     * @return int|null
     */
    public function getVatType()
    {
        return $this->container['vatType'];
    }

    /**
     * Sets vatType
     *
     * @param int|null $vatType 0 = Goods 1 = Services 2 = Investments 3 = NoVat 4 = NotApplicable 5 = Purchase 6 = Sales 7 = Empty
     *
     * @return $this
     */
    public function setVatType($vatType)
    {
        $this->container['vatType'] = $vatType;

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


