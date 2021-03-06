# Seacommerce\Unit4\Multivers\Sdk\CustomerApi

All URIs are relative to *https://sandbox.api.online.unit4.nl/v110*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomer**](CustomerApi.md#createCustomer) | **POST** /api/{database}/Customer | Creates a new Customer with the specified values
[**deleteCustomer**](CustomerApi.md#deleteCustomer) | **DELETE** /api/{database}/Customer/{customerId} | Deletes the specified Customer
[**deleteCustomerAndOrganization**](CustomerApi.md#deleteCustomerAndOrganization) | **DELETE** /api/{database}/Customer/CustomerAndOrganization/{customerId} | Deletes the specified Customer
[**getCustomer**](CustomerApi.md#getCustomer) | **GET** /api/{database}/Customer/{customerId} | Gets the specified Customer.
[**updateCustomer**](CustomerApi.md#updateCustomer) | **PUT** /api/{database}/Customer/{customerId} | Updates the specified Customer



## createCustomer

> \Seacommerce\Unit4\Multivers\Sdk\Model\Customer createCustomer($database, $customer)

Creates a new Customer with the specified values

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$customer = new \Seacommerce\Unit4\Multivers\Sdk\Model\Customer(); // \Seacommerce\Unit4\Multivers\Sdk\Model\Customer | 

try {
    $result = $apiInstance->createCustomer($database, $customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **customer** | [**\Seacommerce\Unit4\Multivers\Sdk\Model\Customer**](../Model/Customer.md)|  | [optional]

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\Customer**](../Model/Customer.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCustomer

> deleteCustomer($database, $customerId)

Deletes the specified Customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$customerId = 'customerId_example'; // string | 

try {
    $apiInstance->deleteCustomer($database, $customerId);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **customerId** | **string**|  |

### Return type

void (empty response body)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCustomerAndOrganization

> deleteCustomerAndOrganization($database, $customerId)

Deletes the specified Customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$customerId = 'customerId_example'; // string | 

try {
    $apiInstance->deleteCustomerAndOrganization($database, $customerId);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->deleteCustomerAndOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **customerId** | **string**|  |

### Return type

void (empty response body)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomer

> \Seacommerce\Unit4\Multivers\Sdk\Model\Customer getCustomer($database, $customerId)

Gets the specified Customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$customerId = 'customerId_example'; // string | 

try {
    $result = $apiInstance->getCustomer($database, $customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **customerId** | **string**|  |

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\Customer**](../Model/Customer.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCustomer

> \Seacommerce\Unit4\Multivers\Sdk\Model\Customer updateCustomer($database, $customerId, $customer)

Updates the specified Customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: production
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: sandbox
$config = Seacommerce\Unit4\Multivers\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Seacommerce\Unit4\Multivers\Sdk\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database = 'database_example'; // string | 
$customerId = 'customerId_example'; // string | 
$customer = new \Seacommerce\Unit4\Multivers\Sdk\Model\Customer(); // \Seacommerce\Unit4\Multivers\Sdk\Model\Customer | 

try {
    $result = $apiInstance->updateCustomer($database, $customerId, $customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database** | **string**|  |
 **customerId** | **string**|  |
 **customer** | [**\Seacommerce\Unit4\Multivers\Sdk\Model\Customer**](../Model/Customer.md)|  | [optional]

### Return type

[**\Seacommerce\Unit4\Multivers\Sdk\Model\Customer**](../Model/Customer.md)

### Authorization

[production](../../README.md#production), [sandbox](../../README.md#sandbox)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

