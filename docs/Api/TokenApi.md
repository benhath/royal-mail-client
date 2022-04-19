# Swagger\Client\TokenApi

All URIs are relative to *https://localhost/shipping/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticatePost**](TokenApi.md#authenticatePost) | **POST** /token | Authenticates a User and provides token.


# **authenticatePost**
> \Swagger\Client\Model\TokenResponse authenticatePost($x_rmg_security_username, $x_rmg_security_password)

Authenticates a User and provides token.

Provides security token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');
// Configure API key authorization: clientSecret
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Secret', 'Bearer');

$apiInstance = new Swagger\Client\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_security_username = "x_rmg_security_username_example"; // string | User Name
$x_rmg_security_password = "x_rmg_security_password_example"; // string | Password in plain text

try {
    $result = $apiInstance->authenticatePost($x_rmg_security_username, $x_rmg_security_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->authenticatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_security_username** | **string**| User Name |
 **x_rmg_security_password** | **string**| Password in plain text |

### Return type

[**\Swagger\Client\Model\TokenResponse**](../Model/TokenResponse.md)

### Authorization

[clientID](../../README.md#clientID), [clientSecret](../../README.md#clientSecret)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

