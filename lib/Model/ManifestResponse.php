<?php
/**
 * ManifestResponse
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
 * ManifestResponse Class Doc Comment
 *
 * @category Class
 * @description Response from a create manifest request
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ManifestResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ManifestResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'posting_location' => 'string',
        'manifests' => '\Swagger\Client\Model\Manifest[]',
        'http_status_code' => 'int',
        'http_status_description' => 'string',
        'message' => 'string',
        'errors' => '\Swagger\Client\Model\ErrorDetail[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'posting_location' => null,
        'manifests' => null,
        'http_status_code' => 'int32',
        'http_status_description' => null,
        'message' => null,
        'errors' => null
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
        'posting_location' => 'PostingLocation',
        'manifests' => 'Manifests',
        'http_status_code' => 'HttpStatusCode',
        'http_status_description' => 'HttpStatusDescription',
        'message' => 'Message',
        'errors' => 'Errors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'posting_location' => 'setPostingLocation',
        'manifests' => 'setManifests',
        'http_status_code' => 'setHttpStatusCode',
        'http_status_description' => 'setHttpStatusDescription',
        'message' => 'setMessage',
        'errors' => 'setErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'posting_location' => 'getPostingLocation',
        'manifests' => 'getManifests',
        'http_status_code' => 'getHttpStatusCode',
        'http_status_description' => 'getHttpStatusDescription',
        'message' => 'getMessage',
        'errors' => 'getErrors'
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
        $this->container['posting_location'] = isset($data['posting_location']) ? $data['posting_location'] : null;
        $this->container['manifests'] = isset($data['manifests']) ? $data['manifests'] : null;
        $this->container['http_status_code'] = isset($data['http_status_code']) ? $data['http_status_code'] : null;
        $this->container['http_status_description'] = isset($data['http_status_description']) ? $data['http_status_description'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['posting_location'] === null) {
            $invalidProperties[] = "'posting_location' can't be null";
        }
        if ((mb_strlen($this->container['posting_location']) > 10)) {
            $invalidProperties[] = "invalid value for 'posting_location', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['posting_location']) < 10)) {
            $invalidProperties[] = "invalid value for 'posting_location', the character length must be bigger than or equal to 10.";
        }

        if ($this->container['http_status_code'] === null) {
            $invalidProperties[] = "'http_status_code' can't be null";
        }
        if ($this->container['http_status_description'] === null) {
            $invalidProperties[] = "'http_status_description' can't be null";
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
     * Gets posting_location
     *
     * @return string
     */
    public function getPostingLocation()
    {
        return $this->container['posting_location'];
    }

    /**
     * Sets posting_location
     *
     * @param string $posting_location Posting Location.<br />The Posting Location manifested
     *
     * @return $this
     */
    public function setPostingLocation($posting_location)
    {
        if ((mb_strlen($posting_location) > 10)) {
            throw new \InvalidArgumentException('invalid length for $posting_location when calling ManifestResponse., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($posting_location) < 10)) {
            throw new \InvalidArgumentException('invalid length for $posting_location when calling ManifestResponse., must be bigger than or equal to 10.');
        }

        $this->container['posting_location'] = $posting_location;

        return $this;
    }

    /**
     * Gets manifests
     *
     * @return \Swagger\Client\Model\Manifest[]
     */
    public function getManifests()
    {
        return $this->container['manifests'];
    }

    /**
     * Sets manifests
     *
     * @param \Swagger\Client\Model\Manifest[] $manifests The Created Manifests<br />Only populated if the request was successful.
     *
     * @return $this
     */
    public function setManifests($manifests)
    {
        $this->container['manifests'] = $manifests;

        return $this;
    }

    /**
     * Gets http_status_code
     *
     * @return int
     */
    public function getHttpStatusCode()
    {
        return $this->container['http_status_code'];
    }

    /**
     * Sets http_status_code
     *
     * @param int $http_status_code HTTP Status Code
     *
     * @return $this
     */
    public function setHttpStatusCode($http_status_code)
    {
        $this->container['http_status_code'] = $http_status_code;

        return $this;
    }

    /**
     * Gets http_status_description
     *
     * @return string
     */
    public function getHttpStatusDescription()
    {
        return $this->container['http_status_description'];
    }

    /**
     * Sets http_status_description
     *
     * @param string $http_status_description HTTP Status Description
     *
     * @return $this
     */
    public function setHttpStatusDescription($http_status_description)
    {
        $this->container['http_status_description'] = $http_status_description;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message Message<br />Successful response may include a success message.<br />Failure responses will have general reason as to why. Further details may be contained in the list of errors.
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \Swagger\Client\Model\ErrorDetail[]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Swagger\Client\Model\ErrorDetail[] $errors Errors<br />Details about why a request failed.
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

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


