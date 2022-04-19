# Swagger\Client\ItemsApi

All URIs are relative to *https://localhost/shipping/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**itemsCreate**](ItemsApi.md#itemsCreate) | **POST** /items | Create Item
[**itemsDelete**](ItemsApi.md#itemsDelete) | **DELETE** /items/{itemId} | Delete Item
[**itemsGet**](ItemsApi.md#itemsGet) | **GET** /items/{itemId} | Get Item
[**itemsGetAll**](ItemsApi.md#itemsGetAll) | **GET** /items | Get Items
[**itemsUpdate**](ItemsApi.md#itemsUpdate) | **PUT** /items/{itemId} | Update item


# **itemsCreate**
> \Swagger\Client\Model\ItemResponse itemsCreate($x_rmg_auth_token, $item)

Create Item

Add a new item to your stored items that you can then use in your shipment requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$item = new \Swagger\Client\Model\Item(); // \Swagger\Client\Model\Item | The item.

try {
    $result = $apiInstance->itemsCreate($x_rmg_auth_token, $item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **item** | [**\Swagger\Client\Model\Item**](../Model/Item.md)| The item. |

### Return type

[**\Swagger\Client\Model\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsDelete**
> \Swagger\Client\Model\ItemResponse itemsDelete($x_rmg_auth_token, $item_id)

Delete Item

Deletes the specified item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$item_id = "item_id_example"; // string | Your unique Item ID of the item to delete.

try {
    $result = $apiInstance->itemsDelete($x_rmg_auth_token, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **item_id** | **string**| Your unique Item ID of the item to delete. |

### Return type

[**\Swagger\Client\Model\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsGet**
> \Swagger\Client\Model\Item itemsGet($x_rmg_auth_token, $item_id)

Get Item

Get the item specified by your unique Item ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$item_id = "item_id_example"; // string | Your unique Item ID.

try {
    $result = $apiInstance->itemsGet($x_rmg_auth_token, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **item_id** | **string**| Your unique Item ID. |

### Return type

[**\Swagger\Client\Model\Item**](../Model/Item.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsGetAll**
> \Swagger\Client\Model\Item[] itemsGetAll($x_rmg_auth_token)

Get Items

Get all of your stored items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.

try {
    $result = $apiInstance->itemsGetAll($x_rmg_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |

### Return type

[**\Swagger\Client\Model\Item[]**](../Model/Item.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsUpdate**
> \Swagger\Client\Model\ItemResponse itemsUpdate($x_rmg_auth_token, $item_id, $item)

Update item

Update an item that is already stored with new details. The whole item will be replaced with new details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$item_id = "item_id_example"; // string | Your unique Item ID of the item to update.
$item = new \Swagger\Client\Model\Item(); // \Swagger\Client\Model\Item | The item with the updated details.

try {
    $result = $apiInstance->itemsUpdate($x_rmg_auth_token, $item_id, $item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **item_id** | **string**| Your unique Item ID of the item to update. |
 **item** | [**\Swagger\Client\Model\Item**](../Model/Item.md)| The item with the updated details. |

### Return type

[**\Swagger\Client\Model\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

