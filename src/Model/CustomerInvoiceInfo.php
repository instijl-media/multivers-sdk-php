<?php
/**
 * CustomerInvoiceInfo
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
 * CustomerInvoiceInfo Class Doc Comment
 *
 * @category Class
 * @package  Seacommerce\Unit4\Multivers\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomerInvoiceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerInvoiceInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'city' => 'string',
        'contactPerson' => 'string',
        'creditSqueezeRemaining' => 'float',
        'creditSqueezeRemainingCur' => 'float',
        'currencyDescription' => 'string',
        'currencyId' => 'string',
        'currentExchangeRate' => 'float',
        'customerId' => 'string',
        'customerInvoiceLines' => '\Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInvoiceLineInfo[]',
        'customerName' => 'string',
        'daysOld' => 'int',
        'dunForPayment' => 'bool',
        'exchangeRate' => 'float',
        'fiscalYear' => 'int',
        'invoiceAmount' => 'float',
        'invoiceAmountCur' => 'float',
        'invoiceBalance' => 'float',
        'invoiceBalanceCur' => 'float',
        'invoiceDate' => 'string',
        'invoiceExpirationDate' => 'string',
        'invoiceId' => 'string',
        'invoiceReference' => 'string',
        'isAdvance' => 'bool',
        'journalId' => 'string',
        'name' => 'string',
        'paymentConditionId' => 'string',
        'paymentDate' => 'string',
        'paymentReference' => 'string',
        'payments' => '\Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInvoicePaymentInfo[]',
        'phoneNumber' => 'string',
        'rebateExpirationDate' => 'string',
        'rebateRemaining' => 'float',
        'rebateRemainingCur' => 'float',
        'reminderCount' => 'int',
        'settledAmount' => 'float',
        'settledAmountCur' => 'float',
        'shortName' => 'string',
        'state' => 'int',
        'street' => 'string',
        'turnoverAmount' => 'float',
        'vatAmount' => 'float',
        'vatAmountCur' => 'float',
        'zipCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'city' => null,
        'contactPerson' => null,
        'creditSqueezeRemaining' => null,
        'creditSqueezeRemainingCur' => null,
        'currencyDescription' => null,
        'currencyId' => null,
        'currentExchangeRate' => null,
        'customerId' => null,
        'customerInvoiceLines' => null,
        'customerName' => null,
        'daysOld' => 'int32',
        'dunForPayment' => null,
        'exchangeRate' => null,
        'fiscalYear' => 'int32',
        'invoiceAmount' => null,
        'invoiceAmountCur' => null,
        'invoiceBalance' => null,
        'invoiceBalanceCur' => null,
        'invoiceDate' => null,
        'invoiceExpirationDate' => null,
        'invoiceId' => null,
        'invoiceReference' => null,
        'isAdvance' => null,
        'journalId' => null,
        'name' => null,
        'paymentConditionId' => null,
        'paymentDate' => null,
        'paymentReference' => null,
        'payments' => null,
        'phoneNumber' => null,
        'rebateExpirationDate' => null,
        'rebateRemaining' => null,
        'rebateRemainingCur' => null,
        'reminderCount' => 'int32',
        'settledAmount' => null,
        'settledAmountCur' => null,
        'shortName' => null,
        'state' => null,
        'street' => null,
        'turnoverAmount' => null,
        'vatAmount' => null,
        'vatAmountCur' => null,
        'zipCode' => null
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
        'city' => 'city',
        'contactPerson' => 'contactPerson',
        'creditSqueezeRemaining' => 'creditSqueezeRemaining',
        'creditSqueezeRemainingCur' => 'creditSqueezeRemainingCur',
        'currencyDescription' => 'currencyDescription',
        'currencyId' => 'currencyId',
        'currentExchangeRate' => 'currentExchangeRate',
        'customerId' => 'customerId',
        'customerInvoiceLines' => 'customerInvoiceLines',
        'customerName' => 'customerName',
        'daysOld' => 'daysOld',
        'dunForPayment' => 'dunForPayment',
        'exchangeRate' => 'exchangeRate',
        'fiscalYear' => 'fiscalYear',
        'invoiceAmount' => 'invoiceAmount',
        'invoiceAmountCur' => 'invoiceAmountCur',
        'invoiceBalance' => 'invoiceBalance',
        'invoiceBalanceCur' => 'invoiceBalanceCur',
        'invoiceDate' => 'invoiceDate',
        'invoiceExpirationDate' => 'invoiceExpirationDate',
        'invoiceId' => 'invoiceId',
        'invoiceReference' => 'invoiceReference',
        'isAdvance' => 'isAdvance',
        'journalId' => 'journalId',
        'name' => 'name',
        'paymentConditionId' => 'paymentConditionId',
        'paymentDate' => 'paymentDate',
        'paymentReference' => 'paymentReference',
        'payments' => 'payments',
        'phoneNumber' => 'phoneNumber',
        'rebateExpirationDate' => 'rebateExpirationDate',
        'rebateRemaining' => 'rebateRemaining',
        'rebateRemainingCur' => 'rebateRemainingCur',
        'reminderCount' => 'reminderCount',
        'settledAmount' => 'settledAmount',
        'settledAmountCur' => 'settledAmountCur',
        'shortName' => 'shortName',
        'state' => 'state',
        'street' => 'street',
        'turnoverAmount' => 'turnoverAmount',
        'vatAmount' => 'vatAmount',
        'vatAmountCur' => 'vatAmountCur',
        'zipCode' => 'zipCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'city' => 'setCity',
        'contactPerson' => 'setContactPerson',
        'creditSqueezeRemaining' => 'setCreditSqueezeRemaining',
        'creditSqueezeRemainingCur' => 'setCreditSqueezeRemainingCur',
        'currencyDescription' => 'setCurrencyDescription',
        'currencyId' => 'setCurrencyId',
        'currentExchangeRate' => 'setCurrentExchangeRate',
        'customerId' => 'setCustomerId',
        'customerInvoiceLines' => 'setCustomerInvoiceLines',
        'customerName' => 'setCustomerName',
        'daysOld' => 'setDaysOld',
        'dunForPayment' => 'setDunForPayment',
        'exchangeRate' => 'setExchangeRate',
        'fiscalYear' => 'setFiscalYear',
        'invoiceAmount' => 'setInvoiceAmount',
        'invoiceAmountCur' => 'setInvoiceAmountCur',
        'invoiceBalance' => 'setInvoiceBalance',
        'invoiceBalanceCur' => 'setInvoiceBalanceCur',
        'invoiceDate' => 'setInvoiceDate',
        'invoiceExpirationDate' => 'setInvoiceExpirationDate',
        'invoiceId' => 'setInvoiceId',
        'invoiceReference' => 'setInvoiceReference',
        'isAdvance' => 'setIsAdvance',
        'journalId' => 'setJournalId',
        'name' => 'setName',
        'paymentConditionId' => 'setPaymentConditionId',
        'paymentDate' => 'setPaymentDate',
        'paymentReference' => 'setPaymentReference',
        'payments' => 'setPayments',
        'phoneNumber' => 'setPhoneNumber',
        'rebateExpirationDate' => 'setRebateExpirationDate',
        'rebateRemaining' => 'setRebateRemaining',
        'rebateRemainingCur' => 'setRebateRemainingCur',
        'reminderCount' => 'setReminderCount',
        'settledAmount' => 'setSettledAmount',
        'settledAmountCur' => 'setSettledAmountCur',
        'shortName' => 'setShortName',
        'state' => 'setState',
        'street' => 'setStreet',
        'turnoverAmount' => 'setTurnoverAmount',
        'vatAmount' => 'setVatAmount',
        'vatAmountCur' => 'setVatAmountCur',
        'zipCode' => 'setZipCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'city' => 'getCity',
        'contactPerson' => 'getContactPerson',
        'creditSqueezeRemaining' => 'getCreditSqueezeRemaining',
        'creditSqueezeRemainingCur' => 'getCreditSqueezeRemainingCur',
        'currencyDescription' => 'getCurrencyDescription',
        'currencyId' => 'getCurrencyId',
        'currentExchangeRate' => 'getCurrentExchangeRate',
        'customerId' => 'getCustomerId',
        'customerInvoiceLines' => 'getCustomerInvoiceLines',
        'customerName' => 'getCustomerName',
        'daysOld' => 'getDaysOld',
        'dunForPayment' => 'getDunForPayment',
        'exchangeRate' => 'getExchangeRate',
        'fiscalYear' => 'getFiscalYear',
        'invoiceAmount' => 'getInvoiceAmount',
        'invoiceAmountCur' => 'getInvoiceAmountCur',
        'invoiceBalance' => 'getInvoiceBalance',
        'invoiceBalanceCur' => 'getInvoiceBalanceCur',
        'invoiceDate' => 'getInvoiceDate',
        'invoiceExpirationDate' => 'getInvoiceExpirationDate',
        'invoiceId' => 'getInvoiceId',
        'invoiceReference' => 'getInvoiceReference',
        'isAdvance' => 'getIsAdvance',
        'journalId' => 'getJournalId',
        'name' => 'getName',
        'paymentConditionId' => 'getPaymentConditionId',
        'paymentDate' => 'getPaymentDate',
        'paymentReference' => 'getPaymentReference',
        'payments' => 'getPayments',
        'phoneNumber' => 'getPhoneNumber',
        'rebateExpirationDate' => 'getRebateExpirationDate',
        'rebateRemaining' => 'getRebateRemaining',
        'rebateRemainingCur' => 'getRebateRemainingCur',
        'reminderCount' => 'getReminderCount',
        'settledAmount' => 'getSettledAmount',
        'settledAmountCur' => 'getSettledAmountCur',
        'shortName' => 'getShortName',
        'state' => 'getState',
        'street' => 'getStreet',
        'turnoverAmount' => 'getTurnoverAmount',
        'vatAmount' => 'getVatAmount',
        'vatAmountCur' => 'getVatAmountCur',
        'zipCode' => 'getZipCode'
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
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['contactPerson'] = isset($data['contactPerson']) ? $data['contactPerson'] : null;
        $this->container['creditSqueezeRemaining'] = isset($data['creditSqueezeRemaining']) ? $data['creditSqueezeRemaining'] : null;
        $this->container['creditSqueezeRemainingCur'] = isset($data['creditSqueezeRemainingCur']) ? $data['creditSqueezeRemainingCur'] : null;
        $this->container['currencyDescription'] = isset($data['currencyDescription']) ? $data['currencyDescription'] : null;
        $this->container['currencyId'] = isset($data['currencyId']) ? $data['currencyId'] : null;
        $this->container['currentExchangeRate'] = isset($data['currentExchangeRate']) ? $data['currentExchangeRate'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['customerInvoiceLines'] = isset($data['customerInvoiceLines']) ? $data['customerInvoiceLines'] : null;
        $this->container['customerName'] = isset($data['customerName']) ? $data['customerName'] : null;
        $this->container['daysOld'] = isset($data['daysOld']) ? $data['daysOld'] : null;
        $this->container['dunForPayment'] = isset($data['dunForPayment']) ? $data['dunForPayment'] : null;
        $this->container['exchangeRate'] = isset($data['exchangeRate']) ? $data['exchangeRate'] : null;
        $this->container['fiscalYear'] = isset($data['fiscalYear']) ? $data['fiscalYear'] : null;
        $this->container['invoiceAmount'] = isset($data['invoiceAmount']) ? $data['invoiceAmount'] : null;
        $this->container['invoiceAmountCur'] = isset($data['invoiceAmountCur']) ? $data['invoiceAmountCur'] : null;
        $this->container['invoiceBalance'] = isset($data['invoiceBalance']) ? $data['invoiceBalance'] : null;
        $this->container['invoiceBalanceCur'] = isset($data['invoiceBalanceCur']) ? $data['invoiceBalanceCur'] : null;
        $this->container['invoiceDate'] = isset($data['invoiceDate']) ? $data['invoiceDate'] : null;
        $this->container['invoiceExpirationDate'] = isset($data['invoiceExpirationDate']) ? $data['invoiceExpirationDate'] : null;
        $this->container['invoiceId'] = isset($data['invoiceId']) ? $data['invoiceId'] : null;
        $this->container['invoiceReference'] = isset($data['invoiceReference']) ? $data['invoiceReference'] : null;
        $this->container['isAdvance'] = isset($data['isAdvance']) ? $data['isAdvance'] : null;
        $this->container['journalId'] = isset($data['journalId']) ? $data['journalId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['paymentConditionId'] = isset($data['paymentConditionId']) ? $data['paymentConditionId'] : null;
        $this->container['paymentDate'] = isset($data['paymentDate']) ? $data['paymentDate'] : null;
        $this->container['paymentReference'] = isset($data['paymentReference']) ? $data['paymentReference'] : null;
        $this->container['payments'] = isset($data['payments']) ? $data['payments'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
        $this->container['rebateExpirationDate'] = isset($data['rebateExpirationDate']) ? $data['rebateExpirationDate'] : null;
        $this->container['rebateRemaining'] = isset($data['rebateRemaining']) ? $data['rebateRemaining'] : null;
        $this->container['rebateRemainingCur'] = isset($data['rebateRemainingCur']) ? $data['rebateRemainingCur'] : null;
        $this->container['reminderCount'] = isset($data['reminderCount']) ? $data['reminderCount'] : null;
        $this->container['settledAmount'] = isset($data['settledAmount']) ? $data['settledAmount'] : null;
        $this->container['settledAmountCur'] = isset($data['settledAmountCur']) ? $data['settledAmountCur'] : null;
        $this->container['shortName'] = isset($data['shortName']) ? $data['shortName'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['turnoverAmount'] = isset($data['turnoverAmount']) ? $data['turnoverAmount'] : null;
        $this->container['vatAmount'] = isset($data['vatAmount']) ? $data['vatAmount'] : null;
        $this->container['vatAmountCur'] = isset($data['vatAmountCur']) ? $data['vatAmountCur'] : null;
        $this->container['zipCode'] = isset($data['zipCode']) ? $data['zipCode'] : null;
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
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets contactPerson
     *
     * @return string|null
     */
    public function getContactPerson()
    {
        return $this->container['contactPerson'];
    }

    /**
     * Sets contactPerson
     *
     * @param string|null $contactPerson contactPerson
     *
     * @return $this
     */
    public function setContactPerson($contactPerson)
    {
        $this->container['contactPerson'] = $contactPerson;

        return $this;
    }

    /**
     * Gets creditSqueezeRemaining
     *
     * @return float|null
     */
    public function getCreditSqueezeRemaining()
    {
        return $this->container['creditSqueezeRemaining'];
    }

    /**
     * Sets creditSqueezeRemaining
     *
     * @param float|null $creditSqueezeRemaining creditSqueezeRemaining
     *
     * @return $this
     */
    public function setCreditSqueezeRemaining($creditSqueezeRemaining)
    {
        $this->container['creditSqueezeRemaining'] = $creditSqueezeRemaining;

        return $this;
    }

    /**
     * Gets creditSqueezeRemainingCur
     *
     * @return float|null
     */
    public function getCreditSqueezeRemainingCur()
    {
        return $this->container['creditSqueezeRemainingCur'];
    }

    /**
     * Sets creditSqueezeRemainingCur
     *
     * @param float|null $creditSqueezeRemainingCur creditSqueezeRemainingCur
     *
     * @return $this
     */
    public function setCreditSqueezeRemainingCur($creditSqueezeRemainingCur)
    {
        $this->container['creditSqueezeRemainingCur'] = $creditSqueezeRemainingCur;

        return $this;
    }

    /**
     * Gets currencyDescription
     *
     * @return string|null
     */
    public function getCurrencyDescription()
    {
        return $this->container['currencyDescription'];
    }

    /**
     * Sets currencyDescription
     *
     * @param string|null $currencyDescription currencyDescription
     *
     * @return $this
     */
    public function setCurrencyDescription($currencyDescription)
    {
        $this->container['currencyDescription'] = $currencyDescription;

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
     * Gets currentExchangeRate
     *
     * @return float|null
     */
    public function getCurrentExchangeRate()
    {
        return $this->container['currentExchangeRate'];
    }

    /**
     * Sets currentExchangeRate
     *
     * @param float|null $currentExchangeRate currentExchangeRate
     *
     * @return $this
     */
    public function setCurrentExchangeRate($currentExchangeRate)
    {
        $this->container['currentExchangeRate'] = $currentExchangeRate;

        return $this;
    }

    /**
     * Gets customerId
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
     * Sets customerId
     *
     * @param string|null $customerId customerId
     *
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;

        return $this;
    }

    /**
     * Gets customerInvoiceLines
     *
     * @return \Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInvoiceLineInfo[]|null
     */
    public function getCustomerInvoiceLines()
    {
        return $this->container['customerInvoiceLines'];
    }

    /**
     * Sets customerInvoiceLines
     *
     * @param \Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInvoiceLineInfo[]|null $customerInvoiceLines customerInvoiceLines
     *
     * @return $this
     */
    public function setCustomerInvoiceLines($customerInvoiceLines)
    {
        $this->container['customerInvoiceLines'] = $customerInvoiceLines;

        return $this;
    }

    /**
     * Gets customerName
     *
     * @return string|null
     */
    public function getCustomerName()
    {
        return $this->container['customerName'];
    }

    /**
     * Sets customerName
     *
     * @param string|null $customerName customerName
     *
     * @return $this
     */
    public function setCustomerName($customerName)
    {
        $this->container['customerName'] = $customerName;

        return $this;
    }

    /**
     * Gets daysOld
     *
     * @return int|null
     */
    public function getDaysOld()
    {
        return $this->container['daysOld'];
    }

    /**
     * Sets daysOld
     *
     * @param int|null $daysOld daysOld
     *
     * @return $this
     */
    public function setDaysOld($daysOld)
    {
        $this->container['daysOld'] = $daysOld;

        return $this;
    }

    /**
     * Gets dunForPayment
     *
     * @return bool|null
     */
    public function getDunForPayment()
    {
        return $this->container['dunForPayment'];
    }

    /**
     * Sets dunForPayment
     *
     * @param bool|null $dunForPayment dunForPayment
     *
     * @return $this
     */
    public function setDunForPayment($dunForPayment)
    {
        $this->container['dunForPayment'] = $dunForPayment;

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
     * Gets fiscalYear
     *
     * @return int|null
     */
    public function getFiscalYear()
    {
        return $this->container['fiscalYear'];
    }

    /**
     * Sets fiscalYear
     *
     * @param int|null $fiscalYear fiscalYear
     *
     * @return $this
     */
    public function setFiscalYear($fiscalYear)
    {
        $this->container['fiscalYear'] = $fiscalYear;

        return $this;
    }

    /**
     * Gets invoiceAmount
     *
     * @return float|null
     */
    public function getInvoiceAmount()
    {
        return $this->container['invoiceAmount'];
    }

    /**
     * Sets invoiceAmount
     *
     * @param float|null $invoiceAmount invoiceAmount
     *
     * @return $this
     */
    public function setInvoiceAmount($invoiceAmount)
    {
        $this->container['invoiceAmount'] = $invoiceAmount;

        return $this;
    }

    /**
     * Gets invoiceAmountCur
     *
     * @return float|null
     */
    public function getInvoiceAmountCur()
    {
        return $this->container['invoiceAmountCur'];
    }

    /**
     * Sets invoiceAmountCur
     *
     * @param float|null $invoiceAmountCur invoiceAmountCur
     *
     * @return $this
     */
    public function setInvoiceAmountCur($invoiceAmountCur)
    {
        $this->container['invoiceAmountCur'] = $invoiceAmountCur;

        return $this;
    }

    /**
     * Gets invoiceBalance
     *
     * @return float|null
     */
    public function getInvoiceBalance()
    {
        return $this->container['invoiceBalance'];
    }

    /**
     * Sets invoiceBalance
     *
     * @param float|null $invoiceBalance invoiceBalance
     *
     * @return $this
     */
    public function setInvoiceBalance($invoiceBalance)
    {
        $this->container['invoiceBalance'] = $invoiceBalance;

        return $this;
    }

    /**
     * Gets invoiceBalanceCur
     *
     * @return float|null
     */
    public function getInvoiceBalanceCur()
    {
        return $this->container['invoiceBalanceCur'];
    }

    /**
     * Sets invoiceBalanceCur
     *
     * @param float|null $invoiceBalanceCur invoiceBalanceCur
     *
     * @return $this
     */
    public function setInvoiceBalanceCur($invoiceBalanceCur)
    {
        $this->container['invoiceBalanceCur'] = $invoiceBalanceCur;

        return $this;
    }

    /**
     * Gets invoiceDate
     *
     * @return string|null
     */
    public function getInvoiceDate()
    {
        return $this->container['invoiceDate'];
    }

    /**
     * Sets invoiceDate
     *
     * @param string|null $invoiceDate invoiceDate
     *
     * @return $this
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->container['invoiceDate'] = $invoiceDate;

        return $this;
    }

    /**
     * Gets invoiceExpirationDate
     *
     * @return string|null
     */
    public function getInvoiceExpirationDate()
    {
        return $this->container['invoiceExpirationDate'];
    }

    /**
     * Sets invoiceExpirationDate
     *
     * @param string|null $invoiceExpirationDate invoiceExpirationDate
     *
     * @return $this
     */
    public function setInvoiceExpirationDate($invoiceExpirationDate)
    {
        $this->container['invoiceExpirationDate'] = $invoiceExpirationDate;

        return $this;
    }

    /**
     * Gets invoiceId
     *
     * @return string|null
     */
    public function getInvoiceId()
    {
        return $this->container['invoiceId'];
    }

    /**
     * Sets invoiceId
     *
     * @param string|null $invoiceId invoiceId
     *
     * @return $this
     */
    public function setInvoiceId($invoiceId)
    {
        $this->container['invoiceId'] = $invoiceId;

        return $this;
    }

    /**
     * Gets invoiceReference
     *
     * @return string|null
     */
    public function getInvoiceReference()
    {
        return $this->container['invoiceReference'];
    }

    /**
     * Sets invoiceReference
     *
     * @param string|null $invoiceReference invoiceReference
     *
     * @return $this
     */
    public function setInvoiceReference($invoiceReference)
    {
        $this->container['invoiceReference'] = $invoiceReference;

        return $this;
    }

    /**
     * Gets isAdvance
     *
     * @return bool|null
     */
    public function getIsAdvance()
    {
        return $this->container['isAdvance'];
    }

    /**
     * Sets isAdvance
     *
     * @param bool|null $isAdvance isAdvance
     *
     * @return $this
     */
    public function setIsAdvance($isAdvance)
    {
        $this->container['isAdvance'] = $isAdvance;

        return $this;
    }

    /**
     * Gets journalId
     *
     * @return string|null
     */
    public function getJournalId()
    {
        return $this->container['journalId'];
    }

    /**
     * Sets journalId
     *
     * @param string|null $journalId journalId
     *
     * @return $this
     */
    public function setJournalId($journalId)
    {
        $this->container['journalId'] = $journalId;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets paymentConditionId
     *
     * @return string|null
     */
    public function getPaymentConditionId()
    {
        return $this->container['paymentConditionId'];
    }

    /**
     * Sets paymentConditionId
     *
     * @param string|null $paymentConditionId paymentConditionId
     *
     * @return $this
     */
    public function setPaymentConditionId($paymentConditionId)
    {
        $this->container['paymentConditionId'] = $paymentConditionId;

        return $this;
    }

    /**
     * Gets paymentDate
     *
     * @return string|null
     */
    public function getPaymentDate()
    {
        return $this->container['paymentDate'];
    }

    /**
     * Sets paymentDate
     *
     * @param string|null $paymentDate paymentDate
     *
     * @return $this
     */
    public function setPaymentDate($paymentDate)
    {
        $this->container['paymentDate'] = $paymentDate;

        return $this;
    }

    /**
     * Gets paymentReference
     *
     * @return string|null
     */
    public function getPaymentReference()
    {
        return $this->container['paymentReference'];
    }

    /**
     * Sets paymentReference
     *
     * @param string|null $paymentReference paymentReference
     *
     * @return $this
     */
    public function setPaymentReference($paymentReference)
    {
        $this->container['paymentReference'] = $paymentReference;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInvoicePaymentInfo[]|null
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \Seacommerce\Unit4\Multivers\Sdk\Model\CustomerInvoicePaymentInfo[]|null $payments payments
     *
     * @return $this
     */
    public function setPayments($payments)
    {
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets phoneNumber
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
     * Sets phoneNumber
     *
     * @param string|null $phoneNumber phoneNumber
     *
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->container['phoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * Gets rebateExpirationDate
     *
     * @return string|null
     */
    public function getRebateExpirationDate()
    {
        return $this->container['rebateExpirationDate'];
    }

    /**
     * Sets rebateExpirationDate
     *
     * @param string|null $rebateExpirationDate rebateExpirationDate
     *
     * @return $this
     */
    public function setRebateExpirationDate($rebateExpirationDate)
    {
        $this->container['rebateExpirationDate'] = $rebateExpirationDate;

        return $this;
    }

    /**
     * Gets rebateRemaining
     *
     * @return float|null
     */
    public function getRebateRemaining()
    {
        return $this->container['rebateRemaining'];
    }

    /**
     * Sets rebateRemaining
     *
     * @param float|null $rebateRemaining rebateRemaining
     *
     * @return $this
     */
    public function setRebateRemaining($rebateRemaining)
    {
        $this->container['rebateRemaining'] = $rebateRemaining;

        return $this;
    }

    /**
     * Gets rebateRemainingCur
     *
     * @return float|null
     */
    public function getRebateRemainingCur()
    {
        return $this->container['rebateRemainingCur'];
    }

    /**
     * Sets rebateRemainingCur
     *
     * @param float|null $rebateRemainingCur rebateRemainingCur
     *
     * @return $this
     */
    public function setRebateRemainingCur($rebateRemainingCur)
    {
        $this->container['rebateRemainingCur'] = $rebateRemainingCur;

        return $this;
    }

    /**
     * Gets reminderCount
     *
     * @return int|null
     */
    public function getReminderCount()
    {
        return $this->container['reminderCount'];
    }

    /**
     * Sets reminderCount
     *
     * @param int|null $reminderCount reminderCount
     *
     * @return $this
     */
    public function setReminderCount($reminderCount)
    {
        $this->container['reminderCount'] = $reminderCount;

        return $this;
    }

    /**
     * Gets settledAmount
     *
     * @return float|null
     */
    public function getSettledAmount()
    {
        return $this->container['settledAmount'];
    }

    /**
     * Sets settledAmount
     *
     * @param float|null $settledAmount settledAmount
     *
     * @return $this
     */
    public function setSettledAmount($settledAmount)
    {
        $this->container['settledAmount'] = $settledAmount;

        return $this;
    }

    /**
     * Gets settledAmountCur
     *
     * @return float|null
     */
    public function getSettledAmountCur()
    {
        return $this->container['settledAmountCur'];
    }

    /**
     * Sets settledAmountCur
     *
     * @param float|null $settledAmountCur settledAmountCur
     *
     * @return $this
     */
    public function setSettledAmountCur($settledAmountCur)
    {
        $this->container['settledAmountCur'] = $settledAmountCur;

        return $this;
    }

    /**
     * Gets shortName
     *
     * @return string|null
     */
    public function getShortName()
    {
        return $this->container['shortName'];
    }

    /**
     * Sets shortName
     *
     * @param string|null $shortName shortName
     *
     * @return $this
     */
    public function setShortName($shortName)
    {
        $this->container['shortName'] = $shortName;

        return $this;
    }

    /**
     * Gets state
     *
     * @return int|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param int|null $state 0 = Open 1 = Settled 2 = Overdue
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets turnoverAmount
     *
     * @return float|null
     */
    public function getTurnoverAmount()
    {
        return $this->container['turnoverAmount'];
    }

    /**
     * Sets turnoverAmount
     *
     * @param float|null $turnoverAmount turnoverAmount
     *
     * @return $this
     */
    public function setTurnoverAmount($turnoverAmount)
    {
        $this->container['turnoverAmount'] = $turnoverAmount;

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
     * Gets zipCode
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->container['zipCode'];
    }

    /**
     * Sets zipCode
     *
     * @param string|null $zipCode zipCode
     *
     * @return $this
     */
    public function setZipCode($zipCode)
    {
        $this->container['zipCode'] = $zipCode;

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


