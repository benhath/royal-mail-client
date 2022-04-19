# Swagger\Client\PackagingApi

All URIs are relative to *https://localhost/shipping/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**packagingCreate**](PackagingApi.md#packagingCreate) | **POST** /packaging | Create Packaging
[**packagingDelete**](PackagingApi.md#packagingDelete) | **DELETE** /packaging/{packagingId} | Delete Packaging
[**packagingGet**](PackagingApi.md#packagingGet) | **GET** /packaging/{packagingId} | Get Packaging
[**packagingGetAll**](PackagingApi.md#packagingGetAll) | **GET** /packaging | Get All Packaging
[**packagingUpdate**](PackagingApi.md#packagingUpdate) | **PUT** /packaging/{packagingId} | Update packaging


# **packagingCreate**
> \Swagger\Client\Model\PackagingResponse packagingCreate($x_rmg_auth_token, $packaging)

Create Packaging

Add new packaging to your stored packaging details that you can then use in your shipment requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\PackagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$packaging = new \Swagger\Client\Model\Packaging(); // \Swagger\Client\Model\Packaging | The packaging details.

try {
    $result = $apiInstance->packagingCreate($x_rmg_auth_token, $packaging);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagingApi->packagingCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **packaging** | [**\Swagger\Client\Model\Packaging**](../Model/Packaging.md)| The packaging details. |

### Return type

[**\Swagger\Client\Model\PackagingResponse**](../Model/PackagingResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **packagingDelete**
> \Swagger\Client\Model\PackagingResponse packagingDelete($x_rmg_auth_token, $packaging_id)

Delete Packaging

Deletes the specified packaging.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\PackagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$packaging_id = "packaging_id_example"; // string | Your unique Packaging ID of the packaging details to delete.

try {
    $result = $apiInstance->packagingDelete($x_rmg_auth_token, $packaging_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagingApi->packagingDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **packaging_id** | **string**| Your unique Packaging ID of the packaging details to delete. |

### Return type

[**\Swagger\Client\Model\PackagingResponse**](../Model/PackagingResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **packagingGet**
> \Swagger\Client\Model\Packaging packagingGet($x_rmg_auth_token, $packaging_id)

Get Packaging

Get the packaging details specified by your unique Packaging ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\PackagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$packaging_id = "packaging_id_example"; // string | Your Unique Packaging ID.

try {
    $result = $apiInstance->packagingGet($x_rmg_auth_token, $packaging_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagingApi->packagingGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **packaging_id** | **string**| Your Unique Packaging ID. |

### Return type

[**\Swagger\Client\Model\Packaging**](../Model/Packaging.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **packagingGetAll**
> \Swagger\Client\Model\Packaging[] packagingGetAll($x_rmg_auth_token)

Get All Packaging

Get all of your stored packaging details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\PackagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.

try {
    $result = $apiInstance->packagingGetAll($x_rmg_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagingApi->packagingGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |

### Return type

[**\Swagger\Client\Model\Packaging[]**](../Model/Packaging.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **packagingUpdate**
> \Swagger\Client\Model\PackagingResponse packagingUpdate($x_rmg_auth_token, $packaging_id, $packaging)

Update packaging

Update packaging details that is already stored with new details. All details will be replaced with new details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\PackagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$packaging_id = "packaging_id_example"; // string | Your unique Packaging ID of the packaging details to update.
$packaging = new \Swagger\Client\Model\Packaging(); // \Swagger\Client\Model\Packaging | The packaging with the updated details.

try {
    $result = $apiInstance->packagingUpdate($x_rmg_auth_token, $packaging_id, $packaging);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackagingApi->packagingUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **packaging_id** | **string**| Your unique Packaging ID of the packaging details to update. |
 **packaging** | [**\Swagger\Client\Model\Packaging**](../Model/Packaging.md)| The packaging with the updated details. |

### Return type

[**\Swagger\Client\Model\PackagingResponse**](../Model/PackagingResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

