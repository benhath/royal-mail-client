# ServiceAvailabilityShipmentInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_code** | **string** | Service Code&lt;br /&gt;Must be a valid system service code OR a customer mapped service code.&lt;br /&gt;If service code is not supplied a list of all available service options will be returned, otherwise only information about the service requested will be returned. | [optional] 
**service_options** | [**\Swagger\Client\Model\ServiceAvailabilityServiceOptions**](ServiceAvailabilityServiceOptions.md) | Service Options&lt;br /&gt;Specify any service requirements such as format required or enhancements required. | [optional] 
**total_packages** | **int** | Number of Packages&lt;br /&gt;The total number of packages. | 
**total_weight** | **double** | Total Weight&lt;br /&gt;The total weight of the shipment including packaging. Validated againt package weight.&lt;br /&gt;Min weight: 1 gram. | 
**weight_unit_of_measure** | **string** | Weight Unit of Measure | [optional] [default to 'KG']
**product** | **string** | Shipment/Product type being shipped&lt;br /&gt;            &lt;br /&gt;**DOX** - Documents Only&lt;br /&gt;**NDX** - All other shipment product types | [optional] [default to 'NDX']
**value** | **double** | Total Shipment Value&lt;br /&gt;Required for Non-Document International and BFPO Shipments.&lt;br /&gt;Ignored for Documents Only shipments. | [optional] 
**currency** | **string** | Currency&lt;br /&gt;This currency will be used for all values across the shipment request.&lt;br /&gt;3 digit ISO Currency Code.&lt;br /&gt;Required for Non-Document International and BFPO Shipments, or when value is provided.&lt;br /&gt;Ignored for Documents Only shipments. | [optional] 
**packages** | [**\Swagger\Client\Model\ServiceAvailabilityShipmentPackage[]**](ServiceAvailabilityShipmentPackage.md) | Shipment Packages&lt;br /&gt;The packages in the shipment.&lt;br /&gt;Required if TotalPackages is more than 1. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


