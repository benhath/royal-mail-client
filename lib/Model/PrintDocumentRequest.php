<?php
/**
 * PrintDocumentRequest
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
 * PrintDocumentRequest Class Doc Comment
 *
 * @category Class
 * @description A request to print a document for a shipment
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PrintDocumentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PrintDocumentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'document_type' => 'string',
        'silent_print_profile' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'document_type' => null,
        'silent_print_profile' => 'uuid'
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
        'document_type' => 'DocumentType',
        'silent_print_profile' => 'SilentPrintProfile'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_type' => 'setDocumentType',
        'silent_print_profile' => 'setSilentPrintProfile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_type' => 'getDocumentType',
        'silent_print_profile' => 'getSilentPrintProfile'
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

    const DOCUMENT_TYPE_CN23 = 'CN23';
    const DOCUMENT_TYPE_CI = 'CI';
    const DOCUMENT_TYPE_P = 'P';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDocumentTypeAllowableValues()
    {
        return [
            self::DOCUMENT_TYPE_CN23,
            self::DOCUMENT_TYPE_CI,
            self::DOCUMENT_TYPE_P,
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
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['silent_print_profile'] = isset($data['silent_print_profile']) ? $data['silent_print_profile'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['document_type'] === null) {
            $invalidProperties[] = "'document_type' can't be null";
        }
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!is_null($this->container['document_type']) && !in_array($this->container['document_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'document_type', must be one of '%s'",
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
     * Gets document_type
     *
     * @return string
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param string $document_type Document Type<br />What document you would like printed<br />            <br />**CN23** - Customs Documents PDF 100mm x 150mm<br />**CI** - Commercial Invoice PDF A4 Portrait<br />**P** - Proforma PDF A4 Portrait
     *
     * @return $this
     */
    public function setDocumentType($document_type)
    {
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!in_array($document_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'document_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets silent_print_profile
     *
     * @return string
     */
    public function getSilentPrintProfile()
    {
        return $this->container['silent_print_profile'];
    }

    /**
     * Sets silent_print_profile
     *
     * @param string $silent_print_profile Silent Print Profile<br />If present, resulting documents will be printed using this profile.
     *
     * @return $this
     */
    public function setSilentPrintProfile($silent_print_profile)
    {
        $this->container['silent_print_profile'] = $silent_print_profile;

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


