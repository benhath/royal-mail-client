# Swagger\Client\AddressesApi

All URIs are relative to *https://localhost/shipping/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addressesCreate**](AddressesApi.md#addressesCreate) | **POST** /addresses | Create Address
[**addressesDelete**](AddressesApi.md#addressesDelete) | **DELETE** /addresses/{addressId} | Delete Address
[**addressesGet**](AddressesApi.md#addressesGet) | **GET** /addresses/{addressId} | Get Address
[**addressesGetAll**](AddressesApi.md#addressesGetAll) | **GET** /addresses | Get Addresses
[**addressesUpdate**](AddressesApi.md#addressesUpdate) | **PUT** /addresses/{addressId} | Update address


# **addressesCreate**
> \Swagger\Client\Model\AddressResponse addressesCreate($x_rmg_auth_token, $address)

Create Address

Add a new address to your address book that you can then use in your shipment requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$address = new \Swagger\Client\Model\Address(); // \Swagger\Client\Model\Address | The address.

try {
    $result = $apiInstance->addressesCreate($x_rmg_auth_token, $address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->addressesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **address** | [**\Swagger\Client\Model\Address**](../Model/Address.md)| The address. |

### Return type

[**\Swagger\Client\Model\AddressResponse**](../Model/AddressResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressesDelete**
> \Swagger\Client\Model\AddressResponse addressesDelete($x_rmg_auth_token, $address_id)

Delete Address

Deletes the specified address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$address_id = "address_id_example"; // string | Your unique Address ID of the address to delete.

try {
    $result = $apiInstance->addressesDelete($x_rmg_auth_token, $address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->addressesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **address_id** | **string**| Your unique Address ID of the address to delete. |

### Return type

[**\Swagger\Client\Model\AddressResponse**](../Model/AddressResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressesGet**
> \Swagger\Client\Model\Address addressesGet($x_rmg_auth_token, $address_id)

Get Address

Get the address specified by your unique Address ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$address_id = "address_id_example"; // string | Your unique Address ID.

try {
    $result = $apiInstance->addressesGet($x_rmg_auth_token, $address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->addressesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **address_id** | **string**| Your unique Address ID. |

### Return type

[**\Swagger\Client\Model\Address**](../Model/Address.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressesGetAll**
> \Swagger\Client\Model\Address[] addressesGetAll($x_rmg_auth_token)

Get Addresses

Get all of your stored addresses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.

try {
    $result = $apiInstance->addressesGetAll($x_rmg_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->addressesGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |

### Return type

[**\Swagger\Client\Model\Address[]**](../Model/Address.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressesUpdate**
> \Swagger\Client\Model\AddressResponse addressesUpdate($x_rmg_auth_token, $address_id, $address)

Update address

Update an address that is already in your address book with new details. The whole address will be replaced with<br />new details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$address_id = "address_id_example"; // string | Your unique Address ID of the address to update.
$address = new \Swagger\Client\Model\Address(); // \Swagger\Client\Model\Address | The address with the updated details.

try {
    $result = $apiInstance->addressesUpdate($x_rmg_auth_token, $address_id, $address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->addressesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **address_id** | **string**| Your unique Address ID of the address to update. |
 **address** | [**\Swagger\Client\Model\Address**](../Model/Address.md)| The address with the updated details. |

### Return type

[**\Swagger\Client\Model\AddressResponse**](../Model/AddressResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

