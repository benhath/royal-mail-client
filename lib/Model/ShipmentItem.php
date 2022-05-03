<?php
/**
 * ShipmentItem
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
 * ShipmentItem Class Doc Comment
 *
 * @category Class
 * @description Details of an item in a shipment request, including what package it is in if possible.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'item_id' => 'string',
        'quantity' => 'int',
        'description' => 'string',
        'value' => 'double',
        'weight' => 'double',
        'package_occurrence' => 'int',
        'hs_code' => 'string',
        'sku_code' => 'string',
        'country_of_origin' => 'string',
        'image_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'item_id' => null,
        'quantity' => 'int32',
        'description' => null,
        'value' => 'double',
        'weight' => 'double',
        'package_occurrence' => 'int32',
        'hs_code' => null,
        'sku_code' => null,
        'country_of_origin' => null,
        'image_url' => null
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
        'item_id' => 'ItemId',
        'quantity' => 'Quantity',
        'description' => 'Description',
        'value' => 'Value',
        'weight' => 'Weight',
        'package_occurrence' => 'PackageOccurrence',
        'hs_code' => 'HsCode',
        'sku_code' => 'SkuCode',
        'country_of_origin' => 'CountryOfOrigin',
        'image_url' => 'ImageUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_id' => 'setItemId',
        'quantity' => 'setQuantity',
        'description' => 'setDescription',
        'value' => 'setValue',
        'weight' => 'setWeight',
        'package_occurrence' => 'setPackageOccurrence',
        'hs_code' => 'setHsCode',
        'sku_code' => 'setSkuCode',
        'country_of_origin' => 'setCountryOfOrigin',
        'image_url' => 'setImageUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_id' => 'getItemId',
        'quantity' => 'getQuantity',
        'description' => 'getDescription',
        'value' => 'getValue',
        'weight' => 'getWeight',
        'package_occurrence' => 'getPackageOccurrence',
        'hs_code' => 'getHsCode',
        'sku_code' => 'getSkuCode',
        'country_of_origin' => 'getCountryOfOrigin',
        'image_url' => 'getImageUrl'
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
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['package_occurrence'] = isset($data['package_occurrence']) ? $data['package_occurrence'] : null;
        $this->container['hs_code'] = isset($data['hs_code']) ? $data['hs_code'] : null;
        $this->container['sku_code'] = isset($data['sku_code']) ? $data['sku_code'] : null;
        $this->container['country_of_origin'] = isset($data['country_of_origin']) ? $data['country_of_origin'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['item_id']) && (mb_strlen($this->container['item_id']) > 70)) {
            $invalidProperties[] = "invalid value for 'item_id', the character length must be smaller than or equal to 70.";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['value']) && ($this->container['value'] > 100000000)) {
            $invalidProperties[] = "invalid value for 'value', must be smaller than or equal to 100000000.";
        }

        if (!is_null($this->container['value']) && ($this->container['value'] < 0.01)) {
            $invalidProperties[] = "invalid value for 'value', must be bigger than or equal to 0.01.";
        }

        if (!is_null($this->container['weight']) && ($this->container['weight'] > 9999.999)) {
            $invalidProperties[] = "invalid value for 'weight', must be smaller than or equal to 9999.999.";
        }

        if (!is_null($this->container['weight']) && ($this->container['weight'] < 0.001)) {
            $invalidProperties[] = "invalid value for 'weight', must be bigger than or equal to 0.001.";
        }

        if (!is_null($this->container['package_occurrence']) && ($this->container['package_occurrence'] > 9)) {
            $invalidProperties[] = "invalid value for 'package_occurrence', must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['package_occurrence']) && ($this->container['package_occurrence'] < 1)) {
            $invalidProperties[] = "invalid value for 'package_occurrence', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['sku_code']) && (mb_strlen($this->container['sku_code']) > 30)) {
            $invalidProperties[] = "invalid value for 'sku_code', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['image_url']) && (mb_strlen($this->container['image_url']) > 1000)) {
            $invalidProperties[] = "invalid value for 'image_url', the character length must be smaller than or equal to 1000.";
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
     * Gets item_id
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string $item_id Item ID<br />If supplied all item fields except Item Quantity will be populated from the stored item record.
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        if (!is_null($item_id) && (mb_strlen($item_id) > 70)) {
            throw new \InvalidArgumentException('invalid length for $item_id when calling ShipmentItem., must be smaller than or equal to 70.');
        }

        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Item Quantity<br />The quantity of items of this type.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Item Description<br />Required if an Item Id is not supplied.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $description when calling ShipmentItem., must be smaller than or equal to 255.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets value
     *
     * @return double
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param double $value Item Value<br />Individual item value (use same currency as shipment currency).<br />Required if an Item Id is not supplied.
     *
     * @return $this
     */
    public function setValue($value)
    {

        if (!is_null($value) && ($value > 100000000)) {
            throw new \InvalidArgumentException('invalid value for $value when calling ShipmentItem., must be smaller than or equal to 100000000.');
        }
        if (!is_null($value) && ($value < 0.01)) {
            throw new \InvalidArgumentException('invalid value for $value when calling ShipmentItem., must be bigger than or equal to 0.01.');
        }

        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return double
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param double $weight Item Weight<br />Individual item weight.
     *
     * @return $this
     */
    public function setWeight($weight)
    {

        if (!is_null($weight) && ($weight > 9999.999)) {
            throw new \InvalidArgumentException('invalid value for $weight when calling ShipmentItem., must be smaller than or equal to 9999.999.');
        }
        if (!is_null($weight) && ($weight < 0.001)) {
            throw new \InvalidArgumentException('invalid value for $weight when calling ShipmentItem., must be bigger than or equal to 0.001.');
        }

        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets package_occurrence
     *
     * @return int
     */
    public function getPackageOccurrence()
    {
        return $this->container['package_occurrence'];
    }

    /**
     * Sets package_occurrence
     *
     * @param int $package_occurrence Package Occurrence<br />Optional Package Occurrence used to indicate which package the item has been packed into.
     *
     * @return $this
     */
    public function setPackageOccurrence($package_occurrence)
    {

        if (!is_null($package_occurrence) && ($package_occurrence > 9)) {
            throw new \InvalidArgumentException('invalid value for $package_occurrence when calling ShipmentItem., must be smaller than or equal to 9.');
        }
        if (!is_null($package_occurrence) && ($package_occurrence < 1)) {
            throw new \InvalidArgumentException('invalid value for $package_occurrence when calling ShipmentItem., must be bigger than or equal to 1.');
        }

        $this->container['package_occurrence'] = $package_occurrence;

        return $this;
    }

    /**
     * Gets hs_code
     *
     * @return string
     */
    public function getHsCode()
    {
        return $this->container['hs_code'];
    }

    /**
     * Sets hs_code
     *
     * @param string $hs_code HS Code<br />The [standardised commodity code](https://www.gov.uk/trade-tariff). It must be 6-12 digits only.<br />Used by Customs to calculate potential duties / taxes.
     *
     * @return $this
     */
    public function setHsCode($hs_code)
    {
        $this->container['hs_code'] = $hs_code;

        return $this;
    }

    /**
     * Gets sku_code
     *
     * @return string
     */
    public function getSkuCode()
    {
        return $this->container['sku_code'];
    }

    /**
     * Sets sku_code
     *
     * @param string $sku_code SKU Code.<br />Used by Customs to calculate potential duties / taxes.
     *
     * @return $this
     */
    public function setSkuCode($sku_code)
    {
        if (!is_null($sku_code) && (mb_strlen($sku_code) > 30)) {
            throw new \InvalidArgumentException('invalid length for $sku_code when calling ShipmentItem., must be smaller than or equal to 30.');
        }

        $this->container['sku_code'] = $sku_code;

        return $this;
    }

    /**
     * Gets country_of_origin
     *
     * @return string
     */
    public function getCountryOfOrigin()
    {
        return $this->container['country_of_origin'];
    }

    /**
     * Sets country_of_origin
     *
     * @param string $country_of_origin Country of Origin<br />[ISO Alpha-2 Country Code](https://www.nationsonline.org/oneworld/country_code_list.htm) of item country of origin, per ISO 3166 Standard
     *
     * @return $this
     */
    public function setCountryOfOrigin($country_of_origin)
    {
        $this->container['country_of_origin'] = $country_of_origin;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string $image_url Image URL<br />Used to save a link to an image of the item with the shipment details, so that this can be used in the Returns<br />system for consumers to see an image of the item when selecting items for return.<br />URL must be a publicly accessible image.
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        if (!is_null($image_url) && (mb_strlen($image_url) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $image_url when calling ShipmentItem., must be smaller than or equal to 1000.');
        }

        $this->container['image_url'] = $image_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetGet($offset): mixed
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
    public function offsetSet($offset, $value): void
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


