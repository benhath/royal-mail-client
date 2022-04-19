# Swagger\Client\ShipmentsApi

All URIs are relative to *https://localhost/shipping/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shipmentsCancel**](ShipmentsApi.md#shipmentsCancel) | **PUT** /shipments/cancel | Cancel Shipments
[**shipmentsCreate**](ShipmentsApi.md#shipmentsCreate) | **POST** /shipments | Create Shipment
[**shipmentsDefer**](ShipmentsApi.md#shipmentsDefer) | **PUT** /shipments/defer | Defer Shipments
[**shipmentsHold**](ShipmentsApi.md#shipmentsHold) | **PUT** /shipments/hold | Hold Shipments
[**shipmentsPrintDocument**](ShipmentsApi.md#shipmentsPrintDocument) | **PUT** /shipments/{shipmentId}/printDocument | Print Document
[**shipmentsPrintLabel**](ShipmentsApi.md#shipmentsPrintLabel) | **PUT** /shipments/{shipmentId}/printLabel | Print Label
[**shipmentsRelease**](ShipmentsApi.md#shipmentsRelease) | **PUT** /shipments/release | Release Shipments
[**shipmentsServiceAvailability**](ShipmentsApi.md#shipmentsServiceAvailability) | **POST** /shipments/serviceAvailability | Service Availability


# **shipmentsCancel**
> \Swagger\Client\Model\ShipmentsCancelResponse shipmentsCancel($x_rmg_auth_token, $shipment_cancel_requests)

Cancel Shipments

Can be used to cancel/void one or more current shipping labels.<br />This service can only be used before the shipment has been confirmed either by calling the manifest create request or by closing out via the User Interface.<br />There can be a maximum of 99 cancellation requests per call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$shipment_cancel_requests = array(new \Swagger\Client\Model\ShipmentCancelRequest()); // \Swagger\Client\Model\ShipmentCancelRequest[] | Shipment Cancel Requests

try {
    $result = $apiInstance->shipmentsCancel($x_rmg_auth_token, $shipment_cancel_requests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentsCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **shipment_cancel_requests** | [**\Swagger\Client\Model\ShipmentCancelRequest[]**](../Model/ShipmentCancelRequest.md)| Shipment Cancel Requests |

### Return type

[**\Swagger\Client\Model\ShipmentsCancelResponse**](../Model/ShipmentsCancelResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsCreate**
> \Swagger\Client\Model\ShipmentCreateResponse shipmentsCreate($x_rmg_auth_token, $shipment)

Create Shipment

Use to generate the final delivery label for your packages.<br />            <br />The request is split into several sections:<br />            <br />**Shipper** - who and where the parcel is coming from - optional if the posting location is to be used.<br />**Destination** - who and where the parcel is going to.<br />**Shipment Information** - overall package details, individual item details and requested service information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$shipment = new \Swagger\Client\Model\CreateShipmentShipment(); // \Swagger\Client\Model\CreateShipmentShipment | The shipment.

try {
    $result = $apiInstance->shipmentsCreate($x_rmg_auth_token, $shipment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **shipment** | [**\Swagger\Client\Model\CreateShipmentShipment**](../Model/CreateShipmentShipment.md)| The shipment. |

### Return type

[**\Swagger\Client\Model\ShipmentCreateResponse**](../Model/ShipmentCreateResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsDefer**
> \Swagger\Client\Model\ShipmentsDeferResponse shipmentsDefer($x_rmg_auth_token, $shipment_defer_requests)

Defer Shipments

Used to update the shipment shipping date for a current shipment.<br />A shipment can be deferred by a maximum of 28 days from the date of the request.<br />This service can only be used before the shipment has been confirmed either by calling the manifest create request or by closing out via the User Interface.<br />There can be a maximum of 99 defer requests per call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$shipment_defer_requests = array(new \Swagger\Client\Model\ShipmentDeferRequest()); // \Swagger\Client\Model\ShipmentDeferRequest[] | The shipments to defer.

try {
    $result = $apiInstance->shipmentsDefer($x_rmg_auth_token, $shipment_defer_requests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentsDefer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **shipment_defer_requests** | [**\Swagger\Client\Model\ShipmentDeferRequest[]**](../Model/ShipmentDeferRequest.md)| The shipments to defer. |

### Return type

[**\Swagger\Client\Model\ShipmentsDeferResponse**](../Model/ShipmentsDeferResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsHold**
> \Swagger\Client\Model\ShipmentsHoldResponse shipmentsHold($x_rmg_auth_token, $shipment_hold_requests)

Hold Shipments

Used to put a shipment on hold indefinitely.<br />A shipment on hold will not be included in any closeouts, but instead will remain in its current state.<br />Calling printLabel will release the shipment from being held.<br />This service can only be used before the shipment has been confirmed either by calling the manifest create request or by closing out via the User Interface.<br />            <br />A hold reason must be provided and must match those set in Pro Shipping under your maintenance screens.<br />If no hold reasons exist, then shipments cannot be put on hold.<br />            <br />There can be a maximum of 99 hold requests per call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$shipment_hold_requests = array(new \Swagger\Client\Model\ShipmentHoldRequest()); // \Swagger\Client\Model\ShipmentHoldRequest[] | The shipments to hold.

try {
    $result = $apiInstance->shipmentsHold($x_rmg_auth_token, $shipment_hold_requests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentsHold: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **shipment_hold_requests** | [**\Swagger\Client\Model\ShipmentHoldRequest[]**](../Model/ShipmentHoldRequest.md)| The shipments to hold. |

### Return type

[**\Swagger\Client\Model\ShipmentsHoldResponse**](../Model/ShipmentsHoldResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsPrintDocument**
> \Swagger\Client\Model\PrintDocumentResponse shipmentsPrintDocument($x_rmg_auth_token, $shipment_id, $print_document_request)

Print Document

Prints the requested document for the shipment.<br />If item information, description of goods or reason for export have not been provided then the document cannot be printed.<br />            <br />This service can only be used before the shipment has been confirmed either by calling the manifest create request or by closing out via the User Interface.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$shipment_id = "shipment_id_example"; // string | Shipment Id<br />The tracking number or Unique Id of the shipment to print.
$print_document_request = new \Swagger\Client\Model\PrintDocumentRequest(); // \Swagger\Client\Model\PrintDocumentRequest | Print Document Request

try {
    $result = $apiInstance->shipmentsPrintDocument($x_rmg_auth_token, $shipment_id, $print_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentsPrintDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **shipment_id** | **string**| Shipment Id&lt;br /&gt;The tracking number or Unique Id of the shipment to print. |
 **print_document_request** | [**\Swagger\Client\Model\PrintDocumentRequest**](../Model/PrintDocumentRequest.md)| Print Document Request |

### Return type

[**\Swagger\Client\Model\PrintDocumentResponse**](../Model/PrintDocumentResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsPrintLabel**
> \Swagger\Client\Model\PrintLabelResponse shipmentsPrintLabel($x_rmg_auth_token, $shipment_id, $print_label_request)

Print Label

Prints the label for the shipment.<br />Moves the shipment to processed, ready to manifest, if the shipment was not already in a processed state.<br />This service can only be used before the shipment has been confirmed either by calling the manifest create request or by closing out via the User Interface.<br />**On Hold Shipment**<br />Calling print label on a held shipment will release the shipment from hold and update the shipment date to today.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$shipment_id = "shipment_id_example"; // string | Shipment Id<br />The tracking number or Unique Id of the shipment to print.
$print_label_request = new \Swagger\Client\Model\PrintLabelRequest(); // \Swagger\Client\Model\PrintLabelRequest | Print Label Request

try {
    $result = $apiInstance->shipmentsPrintLabel($x_rmg_auth_token, $shipment_id, $print_label_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentsPrintLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **shipment_id** | **string**| Shipment Id&lt;br /&gt;The tracking number or Unique Id of the shipment to print. |
 **print_label_request** | [**\Swagger\Client\Model\PrintLabelRequest**](../Model/PrintLabelRequest.md)| Print Label Request |

### Return type

[**\Swagger\Client\Model\PrintLabelResponse**](../Model/PrintLabelResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsRelease**
> \Swagger\Client\Model\ShipmentsReleaseResponse shipmentsRelease($x_rmg_auth_token, $shipments_release_request)

Release Shipments

Used to release a shipment from being on hold.<br />This service can only be used for shipments on hold.<br />            <br />Releasing a shipment from hold will update the shipment date to today's date and if the shipment is processed it will be included the next requested manifest.<br />            <br />There can be a maximum of 99 release requests per call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$shipments_release_request = new \Swagger\Client\Model\ShipmentsReleaseRequest(); // \Swagger\Client\Model\ShipmentsReleaseRequest | Shipments Release Request

try {
    $result = $apiInstance->shipmentsRelease($x_rmg_auth_token, $shipments_release_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentsRelease: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **shipments_release_request** | [**\Swagger\Client\Model\ShipmentsReleaseRequest**](../Model/ShipmentsReleaseRequest.md)| Shipments Release Request |

### Return type

[**\Swagger\Client\Model\ShipmentsReleaseResponse**](../Model/ShipmentsReleaseResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentsServiceAvailability**
> \Swagger\Client\Model\ServiceAvailabilityResponse shipmentsServiceAvailability($x_rmg_auth_token, $shipment)

Service Availability

Retrieve a list of available services for a potential shipment.<br />            <br />**Destination** - where the parcel is going to.<br />**Shipment Information** - overall package details and requested service requirements.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: clientID
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-IBM-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-IBM-Client-Id', 'Bearer');

$apiInstance = new Swagger\Client\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_rmg_auth_token = "x_rmg_auth_token_example"; // string | Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation.
$shipment = new \Swagger\Client\Model\ServiceAvailabilityShipment(); // \Swagger\Client\Model\ServiceAvailabilityShipment | The shipment.

try {
    $result = $apiInstance->shipmentsServiceAvailability($x_rmg_auth_token, $shipment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->shipmentsServiceAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_rmg_auth_token** | **string**| Authorisation token required to invoke this operation. Can be retrieved by invoking the **_/token** operation. |
 **shipment** | [**\Swagger\Client\Model\ServiceAvailabilityShipment**](../Model/ServiceAvailabilityShipment.md)| The shipment. |

### Return type

[**\Swagger\Client\Model\ServiceAvailabilityResponse**](../Model/ServiceAvailabilityResponse.md)

### Authorization

[clientID](../../README.md#clientID)

### HTTP request headers

 - **Content-Type**: application/xml, application/json
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

