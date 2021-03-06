<?php
/**
 * ServiceAvailabilityFormat
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
 * ServiceAvailabilityFormat Class Doc Comment
 *
 * @category Class
 * @description Available Format for a service, with the maximum possible weight allowed.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceAvailabilityFormat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ServiceAvailability.Format';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'service_format' => 'string',
        'format_description' => 'string',
        'max_weight' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'service_format' => null,
        'format_description' => null,
        'max_weight' => 'double'
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
        'service_format' => 'ServiceFormat',
        'format_description' => 'FormatDescription',
        'max_weight' => 'MaxWeight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'service_format' => 'setServiceFormat',
        'format_description' => 'setFormatDescription',
        'max_weight' => 'setMaxWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'service_format' => 'getServiceFormat',
        'format_description' => 'getFormatDescription',
        'max_weight' => 'getMaxWeight'
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

    const SERVICE_FORMAT_L = 'L';
    const SERVICE_FORMAT_F = 'F';
    const SERVICE_FORMAT_P = 'P';
    const SERVICE_FORMAT_S = 'S';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getServiceFormatAllowableValues()
    {
        return [
            self::SERVICE_FORMAT_L,
            self::SERVICE_FORMAT_F,
            self::SERVICE_FORMAT_P,
            self::SERVICE_FORMAT_S,
        ];
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
        $this->container['service_format'] = isset($data['service_format']) ? $data['service_format'] : null;
        $this->container['format_description'] = isset($data['format_description']) ? $data['format_description'] : null;
        $this->container['max_weight'] = isset($data['max_weight']) ? $data['max_weight'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getServiceFormatAllowableValues();
        if (!is_null($this->container['service_format']) && !in_array($this->container['service_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'service_format', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['format_description'] === null) {
            $invalidProperties[] = "'format_description' can't be null";
        }
        if ($this->container['max_weight'] === null) {
            $invalidProperties[] = "'max_weight' can't be null";
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
     * Gets service_format
     *
     * @return string
     */
    public function getServiceFormat()
    {
        return $this->container['service_format'];
    }

    /**
     * Sets service_format
     *
     * @param string $service_format Service Format<br />An available service format for this service.<br />If blank, then formats are not applicable for this service.<br />            <br />**L** - Letter<br />**F** - Large Letter<br />**P** - Parcel<br />**S** - Printed Papers<br />**Blank** - Not Applicable
     *
     * @return $this
     */
    public function setServiceFormat($service_format)
    {
        $allowedValues = $this->getServiceFormatAllowableValues();
        if (!is_null($service_format) && !in_array($service_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'service_format', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['service_format'] = $service_format;

        return $this;
    }

    /**
     * Gets format_description
     *
     * @return string
     */
    public function getFormatDescription()
    {
        return $this->container['format_description'];
    }

    /**
     * Sets format_description
     *
     * @param string $format_description Format Description<br />A description of the Service Format<br />            <br />Letter<br />Large Letter<br />Parcel<br />International Printed Papaers<br />Not Applicable
     *
     * @return $this
     */
    public function setFormatDescription($format_description)
    {
        $this->container['format_description'] = $format_description;

        return $this;
    }

    /**
     * Gets max_weight
     *
     * @return double
     */
    public function getMaxWeight()
    {
        return $this->container['max_weight'];
    }

    /**
     * Sets max_weight
     *
     * @param double $max_weight Maximum Weight<br />The maximum weight allowed for this format (or service if formats not applicable) in specified Unit of Measure.
     *
     * @return $this
     */
    public function setMaxWeight($max_weight)
    {
        $this->container['max_weight'] = $max_weight;

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
    public function offsetUnset($offset): void 
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


