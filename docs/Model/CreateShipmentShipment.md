# CreateShipmentShipment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipper** | [**\Swagger\Client\Model\Shipper**](Shipper.md) | The Shipper&lt;br /&gt;Who and where the parcel is coming from.&lt;br /&gt;Optional. If not supplied, the posting location address will be used.&lt;br /&gt;*Whether this is required or not is dependent on your account settings. | [optional] 
**destination** | [**\Swagger\Client\Model\CreateShipmentDestination**](CreateShipmentDestination.md) | The Destination&lt;br /&gt;Who and where the parcel is going to.&lt;br /&gt;It is the shipper???s responsibility to provide accurate and concise information to ensure the best possible delivery experience for the consumer. | 
**shipment_information** | [**\Swagger\Client\Model\CreateShipmentShipmentInformation**](CreateShipmentShipmentInformation.md) | Shipment Information&lt;br /&gt;Overall package details and requested service information | 
**customs_information** | [**\Swagger\Client\Model\CreateShipmentCustomsInformation**](CreateShipmentCustomsInformation.md) | Customs Information | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


