# Swagger\Client\ManifestsApi

All URIs are relative to *https://localhost/shipping/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**manifestsCreate**](ManifestsApi.md#manifestsCreate) | **POST** /manifests | Manifest All Shipments
[**manifestsCreateByCarrier**](ManifestsApi.md#manifestsCreateByCarrier) | **POST** /manifests/bycarrier | Manifest by Carrier Code(s)
[**manifestsCreateByService**](ManifestsApi.md#manifestsCreateByService) | **POST** /manifests/byservice | Manifest by Service Code(s)


# **manifestsCreate**
> \Swagger\Client\Model\ManifestResponse manifestsCreate($x_rmg_auth_token, $request)

Manifest All Shipments

Manifest all shipments that are ready to manifest for a single Posting Location.<br />             <br />Required to confirm parcels are ready to despatch.<br />Generates the required paperwork to despatch your parcels. <br />One or more manifests, including the base 64 encoded PDF and manifest number will be returned.<br />            <br />*Note: All average weight shipments are ignored and need to be closed out via Shipment Processing*

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$request = new \Swagger\Client\Model\ManifestRequest(); // \Swagger\Client\Model\ManifestRequest | Request

try {
    $result = $apiInstance->manifestsCreate($x_rmg_auth_token, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->manifestsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **request** | [**\Swagger\Client\Model\ManifestRequest**](../Model/ManifestRequest.md)| Request |

### Return type

[**\Swagger\Client\Model\ManifestResponse**](../Model/ManifestResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **manifestsCreateByCarrier**
> \Swagger\Client\Model\ManifestResponse manifestsCreateByCarrier($x_rmg_auth_token, $request)

Manifest by Carrier Code(s)

Manifest shipments created with the given carrier codes that are ready to manifest for a single Posting Location.<br />            <br />Required to confirm parcels are ready to despatch.<br />Generates the required paperwork to despatch your parcels. <br />One or more manifests, including the base 64 encoded PDF and manifest number will be returned.<br />            <br />*Note: All average weight shipments are ignored and need to be closed out via Shipment Processing*

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$request = new \Swagger\Client\Model\ManifestCarrierCodesRequest(); // \Swagger\Client\Model\ManifestCarrierCodesRequest | 

try {
    $result = $apiInstance->manifestsCreateByCarrier($x_rmg_auth_token, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->manifestsCreateByCarrier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **request** | [**\Swagger\Client\Model\ManifestCarrierCodesRequest**](../Model/ManifestCarrierCodesRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ManifestResponse**](../Model/ManifestResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **manifestsCreateByService**
> \Swagger\Client\Model\ManifestResponse manifestsCreateByService($x_rmg_auth_token, $request)

Manifest by Service Code(s)

Manifest shipments created with the given service codes that are ready to manifest for a single Posting Location.<br />            <br />Required to confirm parcels are ready to despatch.<br />Generates the required paperwork to despatch your parcels. <br />One or more manifests, including the base 64 encoded PDF and manifest number will be returned.<br />            <br />*Note: All average weight shipments are ignored and need to be closed out via Shipment Processing*

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\ManifestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$request = new \Swagger\Client\Model\ManifestServiceCodesRequest(); // \Swagger\Client\Model\ManifestServiceCodesRequest | 

try {
    $result = $apiInstance->manifestsCreateByService($x_rmg_auth_token, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManifestsApi->manifestsCreateByService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **request** | [**\Swagger\Client\Model\ManifestServiceCodesRequest**](../Model/ManifestServiceCodesRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ManifestResponse**](../Model/ManifestResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

