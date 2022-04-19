# CreateShipmentDestination

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_id** | **string** | Destination Address ID&lt;br /&gt;If supplied all destination address fields will be ignored and the stored address will be used.&lt;br /&gt;*If a Safeplace is present in the stored address, the Safeplace enhancement will be used if the service allows it, otherwise it will be ignored. ShipmentInformation.ServiceOptions.Safeplace overrides the address Safeplace and forces Safeplace to be required enhancement of the service.* | [optional] 
**company_name** | **string** | Company Name | [optional] 
**contact_name** | **string** | Contact Name&lt;br /&gt;Required if Address Id is not provided. | [optional] 
**address_line1** | **string** | Address Line 1&lt;br /&gt;Required if Address Id is not provided. | [optional] 
**address_line2** | **string** | Address Line 2&lt;br /&gt;*Please ensure the address data is presented in line with the destination country formats.* | [optional] 
**address_line3** | **string** | Address Line 3&lt;br /&gt;*Please ensure the address data is presented in line with the destination country formats.* | [optional] 
**town** | **string** | Town&lt;br /&gt;Required if Address Id is not provided. | [optional] 
**county** | **string** | County / State / Province&lt;br /&gt;Whether this is required or not is dependent on the country settings. | [optional] 
**country_code** | **string** | Country Code&lt;br /&gt;[ISO Alpha-2 Country Code](https://www.nationsonline.org/oneworld/country_code_list.htm)  per ISO 3166 Standard.  Required if Address Id is not provided | [optional] 
**postcode** | **string** | Postcode / Zip&lt;br /&gt;Mandatory for all domestic shipments and some international shipments if the Address Id is not provided. | [optional] 
**phone_number** | **string** | Contact Phone Number&lt;br /&gt;Required if SMS notifications are requested (Service Enhancement Code 13 or 16) and Address Id is not provided.&lt;br /&gt;Must be a valid phone number. | [optional] 
**email_address** | **string** | Contact Email Address&lt;br /&gt;Required if email notifications are requested (Service Enhancement Code 14 or 16) and Address Id is not provided.&lt;br /&gt;Must be a valid email address. | [optional] 
**vat_number** | **string** | VAT Number | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


