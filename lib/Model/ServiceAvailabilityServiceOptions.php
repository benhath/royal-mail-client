<?php
/**
 * ServiceAvailabilityServiceOptions
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
 * ServiceAvailabilityServiceOptions Class Doc Comment
 *
 * @category Class
 * @description Service Options&lt;br /&gt;Specify any service requirements such as format required or enhancements required.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceAvailabilityServiceOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ServiceAvailability.ServiceOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'service_format' => 'string',
        'tracked' => 'bool',
        'signature_required' => 'bool',
        'safeplace' => 'bool',
        'local_collect' => 'bool',
        'saturday_guaranteed' => 'bool',
        'consequential_loss' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'service_format' => null,
        'tracked' => null,
        'signature_required' => null,
        'safeplace' => null,
        'local_collect' => null,
        'saturday_guaranteed' => null,
        'consequential_loss' => null
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
        'tracked' => 'Tracked',
        'signature_required' => 'SignatureRequired',
        'safeplace' => 'Safeplace',
        'local_collect' => 'LocalCollect',
        'saturday_guaranteed' => 'SaturdayGuaranteed',
        'consequential_loss' => 'ConsequentialLoss'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'service_format' => 'setServiceFormat',
        'tracked' => 'setTracked',
        'signature_required' => 'setSignatureRequired',
        'safeplace' => 'setSafeplace',
        'local_collect' => 'setLocalCollect',
        'saturday_guaranteed' => 'setSaturdayGuaranteed',
        'consequential_loss' => 'setConsequentialLoss'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'service_format' => 'getServiceFormat',
        'tracked' => 'getTracked',
        'signature_required' => 'getSignatureRequired',
        'safeplace' => 'getSafeplace',
        'local_collect' => 'getLocalCollect',
        'saturday_guaranteed' => 'getSaturdayGuaranteed',
        'consequential_loss' => 'getConsequentialLoss'
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
        $this->container['tracked'] = isset($data['tracked']) ? $data['tracked'] : null;
        $this->container['signature_required'] = isset($data['signature_required']) ? $data['signature_required'] : null;
        $this->container['safeplace'] = isset($data['safeplace']) ? $data['safeplace'] : null;
        $this->container['local_collect'] = isset($data['local_collect']) ? $data['local_collect'] : null;
        $this->container['saturday_guaranteed'] = isset($data['saturday_guaranteed']) ? $data['saturday_guaranteed'] : null;
        $this->container['consequential_loss'] = isset($data['consequential_loss']) ? $data['consequential_loss'] : null;
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
     * @param string $service_format Service Format<br />If provided, only return services that support the given service format.<br />            <br />**L** - Letter<br />**F** - Large Letter<br />**P** - Parcel<br />**S** - Printed Papers - International Services Only
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
     * Gets tracked
     *
     * @return bool
     */
    public function getTracked()
    {
        return $this->container['tracked'];
    }

    /**
     * Sets tracked
     *
     * @param bool $tracked Tracked Services<br />If true, only return Tracked Services.
     *
     * @return $this
     */
    public function setTracked($tracked)
    {
        $this->container['tracked'] = $tracked;

        return $this;
    }

    /**
     * Gets signature_required
     *
     * @return bool
     */
    public function getSignatureRequired()
    {
        return $this->container['signature_required'];
    }

    /**
     * Sets signature_required
     *
     * @param bool $signature_required Signature Required<br />If true, only return services that are either with signature or support the Recorded Signed For enhancement.
     *
     * @return $this
     */
    public function setSignatureRequired($signature_required)
    {
        $this->container['signature_required'] = $signature_required;

        return $this;
    }

    /**
     * Gets safeplace
     *
     * @return bool
     */
    public function getSafeplace()
    {
        return $this->container['safeplace'];
    }

    /**
     * Sets safeplace
     *
     * @param bool $safeplace Safe Place Enhancement<br />If true, only return services that support the Safe Place enhancement.
     *
     * @return $this
     */
    public function setSafeplace($safeplace)
    {
        $this->container['safeplace'] = $safeplace;

        return $this;
    }

    /**
     * Gets local_collect
     *
     * @return bool
     */
    public function getLocalCollect()
    {
        return $this->container['local_collect'];
    }

    /**
     * Sets local_collect
     *
     * @param bool $local_collect Local Collect Enhancement<br />If true, only return services that support the Local Collect enhancement.
     *
     * @return $this
     */
    public function setLocalCollect($local_collect)
    {
        $this->container['local_collect'] = $local_collect;

        return $this;
    }

    /**
     * Gets saturday_guaranteed
     *
     * @return bool
     */
    public function getSaturdayGuaranteed()
    {
        return $this->container['saturday_guaranteed'];
    }

    /**
     * Sets saturday_guaranteed
     *
     * @param bool $saturday_guaranteed Saturday Guaranteed Enhancement<br />If true, only return services that support the Saturday Guaranteed enhancement.
     *
     * @return $this
     */
    public function setSaturdayGuaranteed($saturday_guaranteed)
    {
        $this->container['saturday_guaranteed'] = $saturday_guaranteed;

        return $this;
    }

    /**
     * Gets consequential_loss
     *
     * @return bool
     */
    public function getConsequentialLoss()
    {
        return $this->container['consequential_loss'];
    }

    /**
     * Sets consequential_loss
     *
     * @param bool $consequential_loss Consequential Loss Enhancement<br />If true, only return services that support the Consequential Loss enhancement.
     *
     * @return $this
     */
    public function setConsequentialLoss($consequential_loss)
    {
        $this->container['consequential_loss'] = $consequential_loss;

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


