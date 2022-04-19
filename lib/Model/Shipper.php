<?php
/**
 * Shipper
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Royal Mail API Shipping V3 (REST)
 *
 * API Shipping V3 (REST) provides the functionality for customers to take a shipping transaction from creation to collection.   It specifically covers how the Royal Mail API Shipping V3 can be used by business customers to conduct shipping activity with Royal Mail and provides the technical information to build this integration. This specification must be used with the relevant accompanying specifications for customers wishing to interface their systems with Royal Mail services.  Royal Mail API Shipping V3 exposes a fully RESTful service that allows account customers to create shipments, produce labels, and produce documentation for all the tasks required to ship domestic and international items with Royal Mail.  Built on industry standards, Royal Mail API Shipping V3 provides a simple and low cost method for customers to integrate with Royal Mail, and allows them to get shipping quickly. The API offers data streaming to allow customers greater flexibility when generating their labels. There are no costs to customers for using the Royal Mail API Shipping V3 services, however customers??? own development costs must be covered by the customer developing the solution. Royal Mail will not accept any responsibility for these development, implementation and testing costs. Customers should address initial enquiries regarding development of systems for these purposes to their account handler.  This API can be used in conjunction with Royal Mail Pro Shipping, a GUI based shipping platform. For more details on Royal Mail Pro Shipping, including videos on and briefs on updating/ cancelling a shipment and Manifesting please refer to http://www.royalmail.com/pro-shipping-help.
 *
 * OpenAPI spec version: 3.0.20
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.27
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Shipper Class Doc Comment
 *
 * @category Class
 * @description The shipper details for a shipment request.&lt;br /&gt;Confirms the details of the shipper address and contact details.&lt;br /&gt;If not supplied, the the posting location address will be used.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Shipper implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Shipper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address_id' => 'string',
        'shipper_reference' => 'string',
        'shipper_reference2' => 'string',
        'shipper_department' => 'string',
        'company_name' => 'string',
        'contact_name' => 'string',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'address_line3' => 'string',
        'town' => 'string',
        'county' => 'string',
        'country_code' => 'string',
        'postcode' => 'string',
        'phone_number' => 'string',
        'email_address' => 'string',
        'vat_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address_id' => null,
        'shipper_reference' => null,
        'shipper_reference2' => null,
        'shipper_department' => null,
        'company_name' => null,
        'contact_name' => null,
        'address_line1' => null,
        'address_line2' => null,
        'address_line3' => null,
        'town' => null,
        'county' => null,
        'country_code' => null,
        'postcode' => null,
        'phone_number' => null,
        'email_address' => null,
        'vat_number' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'address_id' => 'AddressId',
        'shipper_reference' => 'ShipperReference',
        'shipper_reference2' => 'ShipperReference2',
        'shipper_department' => 'ShipperDepartment',
        'company_name' => 'CompanyName',
        'contact_name' => 'ContactName',
        'address_line1' => 'AddressLine1',
        'address_line2' => 'AddressLine2',
        'address_line3' => 'AddressLine3',
        'town' => 'Town',
        'county' => 'County',
        'country_code' => 'CountryCode',
        'postcode' => 'Postcode',
        'phone_number' => 'PhoneNumber',
        'email_address' => 'EmailAddress',
        'vat_number' => 'VatNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_id' => 'setAddressId',
        'shipper_reference' => 'setShipperReference',
        'shipper_reference2' => 'setShipperReference2',
        'shipper_department' => 'setShipperDepartment',
        'company_name' => 'setCompanyName',
        'contact_name' => 'setContactName',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'address_line3' => 'setAddressLine3',
        'town' => 'setTown',
        'county' => 'setCounty',
        'country_code' => 'setCountryCode',
        'postcode' => 'setPostcode',
        'phone_number' => 'setPhoneNumber',
        'email_address' => 'setEmailAddress',
        'vat_number' => 'setVatNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_id' => 'getAddressId',
        'shipper_reference' => 'getShipperReference',
        'shipper_reference2' => 'getShipperReference2',
        'shipper_department' => 'getShipperDepartment',
        'company_name' => 'getCompanyName',
        'contact_name' => 'getContactName',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'address_line3' => 'getAddressLine3',
        'town' => 'getTown',
        'county' => 'getCounty',
        'country_code' => 'getCountryCode',
        'postcode' => 'getPostcode',
        'phone_number' => 'getPhoneNumber',
        'email_address' => 'getEmailAddress',
        'vat_number' => 'getVatNumber'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['address_id'] = isset($data['address_id']) ? $data['address_id'] : null;
        $this->container['shipper_reference'] = isset($data['shipper_reference']) ? $data['shipper_reference'] : null;
        $this->container['shipper_reference2'] = isset($data['shipper_reference2']) ? $data['shipper_reference2'] : null;
        $this->container['shipper_department'] = isset($data['shipper_department']) ? $data['shipper_department'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['contact_name'] = isset($data['contact_name']) ? $data['contact_name'] : null;
        $this->container['address_line1'] = isset($data['address_line1']) ? $data['address_line1'] : null;
        $this->container['address_line2'] = isset($data['address_line2']) ? $data['address_line2'] : null;
        $this->container['address_line3'] = isset($data['address_line3']) ? $data['address_line3'] : null;
        $this->container['town'] = isset($data['town']) ? $data['town'] : null;
        $this->container['county'] = isset($data['county']) ? $data['county'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
        $this->container['vat_number'] = isset($data['vat_number']) ? $data['vat_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['address_id']) && (mb_strlen($this->container['address_id']) > 70)) {
            $invalidProperties[] = "invalid value for 'address_id', the character length must be smaller than or equal to 70.";
        }

        if (!is_null($this->container['shipper_reference']) && (mb_strlen($this->container['shipper_reference']) > 40)) {
            $invalidProperties[] = "invalid value for 'shipper_reference', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['shipper_reference2']) && (mb_strlen($this->container['shipper_reference2']) > 40)) {
            $invalidProperties[] = "invalid value for 'shipper_reference2', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['shipper_department']) && (mb_strlen($this->container['shipper_department']) > 30)) {
            $invalidProperties[] = "invalid value for 'shipper_department', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['company_name']) && (mb_strlen($this->container['company_name']) > 35)) {
            $invalidProperties[] = "invalid value for 'company_name', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['contact_name']) && (mb_strlen($this->container['contact_name']) > 40)) {
            $invalidProperties[] = "invalid value for 'contact_name', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['address_line1']) && (mb_strlen($this->container['address_line1']) > 35)) {
            $invalidProperties[] = "invalid value for 'address_line1', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['address_line2']) && (mb_strlen($this->container['address_line2']) > 35)) {
            $invalidProperties[] = "invalid value for 'address_line2', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['address_line3']) && (mb_strlen($this->container['address_line3']) > 35)) {
            $invalidProperties[] = "invalid value for 'address_line3', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['town']) && (mb_strlen($this->container['town']) > 35)) {
            $invalidProperties[] = "invalid value for 'town', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['county']) && (mb_strlen($this->container['county']) > 50)) {
            $invalidProperties[] = "invalid value for 'county', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['country_code']) && (mb_strlen($this->container['country_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['country_code']) && (mb_strlen($this->container['country_code']) < 2)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['postcode']) && (mb_strlen($this->container['postcode']) > 10)) {
            $invalidProperties[] = "invalid value for 'postcode', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['phone_number']) && (mb_strlen($this->container['phone_number']) > 20)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['email_address']) && (mb_strlen($this->container['email_address']) > 254)) {
            $invalidProperties[] = "invalid value for 'email_address', the character length must be smaller than or equal to 254.";
        }

        if (!is_null($this->container['vat_number']) && (mb_strlen($this->container['vat_number']) > 20)) {
            $invalidProperties[] = "invalid value for 'vat_number', the character length must be smaller than or equal to 20.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets address_id
     *
     * @return string
     */
    public function getAddressId()
    {
        return $this->container['address_id'];
    }

    /**
     * Sets address_id
     *
     * @param string $address_id Shipper Address Id<br />If supplied all shipper address fields will be ignored and the address from the Address Book will be used.
     *
     * @return $this
     */
    public function setAddressId($address_id)
    {
        if (!is_null($address_id) && (mb_strlen($address_id) > 70)) {
            throw new \InvalidArgumentException('invalid length for $address_id when calling Shipper., must be smaller than or equal to 70.');
        }

        $this->container['address_id'] = $address_id;

        return $this;
    }

    /**
     * Gets shipper_reference
     *
     * @return string
     */
    public function getShipperReference()
    {
        return $this->container['shipper_reference'];
    }

    /**
     * Sets shipper_reference
     *
     * @param string $shipper_reference Shipper Reference<br />Your reference for this shipment.<br />This field is used for Returns processing and is usually the shippers order number provided to the consumer.
     *
     * @return $this
     */
    public function setShipperReference($shipper_reference)
    {
        if (!is_null($shipper_reference) && (mb_strlen($shipper_reference) > 40)) {
            throw new \InvalidArgumentException('invalid length for $shipper_reference when calling Shipper., must be smaller than or equal to 40.');
        }

        $this->container['shipper_reference'] = $shipper_reference;

        return $this;
    }

    /**
     * Gets shipper_reference2
     *
     * @return string
     */
    public function getShipperReference2()
    {
        return $this->container['shipper_reference2'];
    }

    /**
     * Sets shipper_reference2
     *
     * @param string $shipper_reference2 Shipper Reference 2<br />Your second reference for this shipment. This field is used for tracking shipment usually the EBAY VTN number provided to the consumer.       <br />Optional
     *
     * @return $this
     */
    public function setShipperReference2($shipper_reference2)
    {
        if (!is_null($shipper_reference2) && (mb_strlen($shipper_reference2) > 40)) {
            throw new \InvalidArgumentException('invalid length for $shipper_reference2 when calling Shipper., must be smaller than or equal to 40.');
        }

        $this->container['shipper_reference2'] = $shipper_reference2;

        return $this;
    }

    /**
     * Gets shipper_department
     *
     * @return string
     */
    public function getShipperDepartment()
    {
        return $this->container['shipper_department'];
    }

    /**
     * Sets shipper_department
     *
     * @param string $shipper_department Shipper Department Code<br />For Royal Mail shipments, this code must be a valid 10-digit OBA department code.
     *
     * @return $this
     */
    public function setShipperDepartment($shipper_department)
    {
        if (!is_null($shipper_department) && (mb_strlen($shipper_department) > 30)) {
            throw new \InvalidArgumentException('invalid length for $shipper_department when calling Shipper., must be smaller than or equal to 30.');
        }

        $this->container['shipper_department'] = $shipper_department;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name Company Name
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        if (!is_null($company_name) && (mb_strlen($company_name) > 35)) {
            throw new \InvalidArgumentException('invalid length for $company_name when calling Shipper., must be smaller than or equal to 35.');
        }

        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets contact_name
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->container['contact_name'];
    }

    /**
     * Sets contact_name
     *
     * @param string $contact_name Contact Name
     *
     * @return $this
     */
    public function setContactName($contact_name)
    {
        if (!is_null($contact_name) && (mb_strlen($contact_name) > 40)) {
            throw new \InvalidArgumentException('invalid length for $contact_name when calling Shipper., must be smaller than or equal to 40.');
        }

        $this->container['contact_name'] = $contact_name;

        return $this;
    }

    /**
     * Gets address_line1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string $address_line1 Address Line 1<br />Populate with Shipper's address if provided.
     *
     * @return $this
     */
    public function setAddressLine1($address_line1)
    {
        if (!is_null($address_line1) && (mb_strlen($address_line1) > 35)) {
            throw new \InvalidArgumentException('invalid length for $address_line1 when calling Shipper., must be smaller than or equal to 35.');
        }

        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string $address_line2 Address Line 2
     *
     * @return $this
     */
    public function setAddressLine2($address_line2)
    {
        if (!is_null($address_line2) && (mb_strlen($address_line2) > 35)) {
            throw new \InvalidArgumentException('invalid length for $address_line2 when calling Shipper., must be smaller than or equal to 35.');
        }

        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets address_line3
     *
     * @return string
     */
    public function getAddressLine3()
    {
        return $this->container['address_line3'];
    }

    /**
     * Sets address_line3
     *
     * @param string $address_line3 Address Line 3
     *
     * @return $this
     */
    public function setAddressLine3($address_line3)
    {
        if (!is_null($address_line3) && (mb_strlen($address_line3) > 35)) {
            throw new \InvalidArgumentException('invalid length for $address_line3 when calling Shipper., must be smaller than or equal to 35.');
        }

        $this->container['address_line3'] = $address_line3;

        return $this;
    }

    /**
     * Gets town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->container['town'];
    }

    /**
     * Sets town
     *
     * @param string $town Town<br />Required if address is populated.
     *
     * @return $this
     */
    public function setTown($town)
    {
        if (!is_null($town) && (mb_strlen($town) > 35)) {
            throw new \InvalidArgumentException('invalid length for $town when calling Shipper., must be smaller than or equal to 35.');
        }

        $this->container['town'] = $town;

        return $this;
    }

    /**
     * Gets county
     *
     * @return string
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param string $county County / State / Province<br />Whether this is required or not is dependent on the country settings.
     *
     * @return $this
     */
    public function setCounty($county)
    {
        if (!is_null($county) && (mb_strlen($county) > 50)) {
            throw new \InvalidArgumentException('invalid length for $county when calling Shipper., must be smaller than or equal to 50.');
        }

        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code Country Code<br />[ISO Alpha-2 Country Code](https://www.nationsonline.org/oneworld/country_code_list.htm) per ISO 3166 Standard.<br />Required if address is populated.<br />Must be GB, IM, GG or JE.
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        if (!is_null($country_code) && (mb_strlen($country_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling Shipper., must be smaller than or equal to 2.');
        }
        if (!is_null($country_code) && (mb_strlen($country_code) < 2)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling Shipper., must be bigger than or equal to 2.');
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode Postcode / Zip<br />Mandatory for all domestic addresses and some international shipments if address is populated.
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        if (!is_null($postcode) && (mb_strlen($postcode) > 10)) {
            throw new \InvalidArgumentException('invalid length for $postcode when calling Shipper., must be smaller than or equal to 10.');
        }

        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number Contact Phone Number<br />Must be a valid phone number.
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        if (!is_null($phone_number) && (mb_strlen($phone_number) > 20)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling Shipper., must be smaller than or equal to 20.');
        }

        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string $email_address Contact Email Address<br />Must be a valid email address.
     *
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        if (!is_null($email_address) && (mb_strlen($email_address) > 254)) {
            throw new \InvalidArgumentException('invalid length for $email_address when calling Shipper., must be smaller than or equal to 254.');
        }

        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets vat_number
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->container['vat_number'];
    }

    /**
     * Sets vat_number
     *
     * @param string $vat_number VAT Number
     *
     * @return $this
     */
    public function setVatNumber($vat_number)
    {
        if (!is_null($vat_number) && (mb_strlen($vat_number) > 20)) {
            throw new \InvalidArgumentException('invalid length for $vat_number when calling Shipper., must be smaller than or equal to 20.');
        }

        $this->container['vat_number'] = $vat_number;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


