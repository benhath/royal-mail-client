<?php
/**
 * ShipmentCreateResponse
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
 * ShipmentCreateResponse Class Doc Comment
 *
 * @category Class
 * @description Response from a create shipment request
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentCreateResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentCreateResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'consignment_number' => 'string',
        'consignment_tracking_url' => 'string',
        'packages' => '\Swagger\Client\Model\PackageResponse[]',
        'routing' => '\Swagger\Client\Model\Routing',
        'label_image_format' => 'string',
        'label_images' => 'string',
        'customs_documents' => 'string',
        'return_label_image_format' => 'string',
        'return_label_images' => 'string',
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
        'consignment_number' => null,
        'consignment_tracking_url' => null,
        'packages' => null,
        'routing' => null,
        'label_image_format' => null,
        'label_images' => null,
        'customs_documents' => null,
        'return_label_image_format' => null,
        'return_label_images' => null,
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
        'consignment_number' => 'ConsignmentNumber',
        'consignment_tracking_url' => 'ConsignmentTrackingUrl',
        'packages' => 'Packages',
        'routing' => 'Routing',
        'label_image_format' => 'LabelImageFormat',
        'label_images' => 'LabelImages',
        'customs_documents' => 'CustomsDocuments',
        'return_label_image_format' => 'ReturnLabelImageFormat',
        'return_label_images' => 'ReturnLabelImages',
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
        'consignment_number' => 'setConsignmentNumber',
        'consignment_tracking_url' => 'setConsignmentTrackingUrl',
        'packages' => 'setPackages',
        'routing' => 'setRouting',
        'label_image_format' => 'setLabelImageFormat',
        'label_images' => 'setLabelImages',
        'customs_documents' => 'setCustomsDocuments',
        'return_label_image_format' => 'setReturnLabelImageFormat',
        'return_label_images' => 'setReturnLabelImages',
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
        'consignment_number' => 'getConsignmentNumber',
        'consignment_tracking_url' => 'getConsignmentTrackingUrl',
        'packages' => 'getPackages',
        'routing' => 'getRouting',
        'label_image_format' => 'getLabelImageFormat',
        'label_images' => 'getLabelImages',
        'customs_documents' => 'getCustomsDocuments',
        'return_label_image_format' => 'getReturnLabelImageFormat',
        'return_label_images' => 'getReturnLabelImages',
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

    const LABEL_IMAGE_FORMAT_PDF = 'PDF';
    const LABEL_IMAGE_FORMAT_PNG = 'PNG';
    const LABEL_IMAGE_FORMAT_DATASTREAM = 'DATASTREAM';
    const LABEL_IMAGE_FORMAT_ZPL203_DPI = 'ZPL203DPI';
    const LABEL_IMAGE_FORMAT_ZPL300_DPI = 'ZPL300DPI';
    const RETURN_LABEL_IMAGE_FORMAT_PDF = 'PDF';
    const RETURN_LABEL_IMAGE_FORMAT_PNG = 'PNG';
    const RETURN_LABEL_IMAGE_FORMAT_ZPL300_DPI = 'ZPL300DPI';
    const RETURN_LABEL_IMAGE_FORMAT_ZPL203_DPI = 'ZPL203DPI';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLabelImageFormatAllowableValues()
    {
        return [
            self::LABEL_IMAGE_FORMAT_PDF,
            self::LABEL_IMAGE_FORMAT_PNG,
            self::LABEL_IMAGE_FORMAT_DATASTREAM,
            self::LABEL_IMAGE_FORMAT_ZPL203_DPI,
            self::LABEL_IMAGE_FORMAT_ZPL300_DPI,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReturnLabelImageFormatAllowableValues()
    {
        return [
            self::RETURN_LABEL_IMAGE_FORMAT_PDF,
            self::RETURN_LABEL_IMAGE_FORMAT_PNG,
            self::RETURN_LABEL_IMAGE_FORMAT_ZPL300_DPI,
            self::RETURN_LABEL_IMAGE_FORMAT_ZPL203_DPI,
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
        $this->container['consignment_number'] = isset($data['consignment_number']) ? $data['consignment_number'] : null;
        $this->container['consignment_tracking_url'] = isset($data['consignment_tracking_url']) ? $data['consignment_tracking_url'] : null;
        $this->container['packages'] = isset($data['packages']) ? $data['packages'] : null;
        $this->container['routing'] = isset($data['routing']) ? $data['routing'] : null;
        $this->container['label_image_format'] = isset($data['label_image_format']) ? $data['label_image_format'] : null;
        $this->container['label_images'] = isset($data['label_images']) ? $data['label_images'] : null;
        $this->container['customs_documents'] = isset($data['customs_documents']) ? $data['customs_documents'] : null;
        $this->container['return_label_image_format'] = isset($data['return_label_image_format']) ? $data['return_label_image_format'] : null;
        $this->container['return_label_images'] = isset($data['return_label_images']) ? $data['return_label_images'] : null;
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

        if (!is_null($this->container['consignment_number']) && (mb_strlen($this->container['consignment_number']) > 21)) {
            $invalidProperties[] = "invalid value for 'consignment_number', the character length must be smaller than or equal to 21.";
        }

        if (!is_null($this->container['consignment_tracking_url']) && (mb_strlen($this->container['consignment_tracking_url']) > 250)) {
            $invalidProperties[] = "invalid value for 'consignment_tracking_url', the character length must be smaller than or equal to 250.";
        }

        $allowedValues = $this->getLabelImageFormatAllowableValues();
        if (!is_null($this->container['label_image_format']) && !in_array($this->container['label_image_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'label_image_format', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getReturnLabelImageFormatAllowableValues();
        if (!is_null($this->container['return_label_image_format']) && !in_array($this->container['return_label_image_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'return_label_image_format', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets consignment_number
     *
     * @return string
     */
    public function getConsignmentNumber()
    {
        return $this->container['consignment_number'];
    }

    /**
     * Sets consignment_number
     *
     * @param string $consignment_number Consignment Number<br />Only populated for services that support Multi-Packages
     *
     * @return $this
     */
    public function setConsignmentNumber($consignment_number)
    {
        if (!is_null($consignment_number) && (mb_strlen($consignment_number) > 21)) {
            throw new \InvalidArgumentException('invalid length for $consignment_number when calling ShipmentCreateResponse., must be smaller than or equal to 21.');
        }

        $this->container['consignment_number'] = $consignment_number;

        return $this;
    }

    /**
     * Gets consignment_tracking_url
     *
     * @return string
     */
    public function getConsignmentTrackingUrl()
    {
        return $this->container['consignment_tracking_url'];
    }

    /**
     * Sets consignment_tracking_url
     *
     * @param string $consignment_tracking_url Consignment Tracking URL<br />Only populated for services that support Multi-Packages
     *
     * @return $this
     */
    public function setConsignmentTrackingUrl($consignment_tracking_url)
    {
        if (!is_null($consignment_tracking_url) && (mb_strlen($consignment_tracking_url) > 250)) {
            throw new \InvalidArgumentException('invalid length for $consignment_tracking_url when calling ShipmentCreateResponse., must be smaller than or equal to 250.');
        }

        $this->container['consignment_tracking_url'] = $consignment_tracking_url;

        return $this;
    }

    /**
     * Gets packages
     *
     * @return \Swagger\Client\Model\PackageResponse[]
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param \Swagger\Client\Model\PackageResponse[] $packages Packages<br />Details each package tracking information and Unique Id.
     *
     * @return $this
     */
    public function setPackages($packages)
    {
        $this->container['packages'] = $packages;

        return $this;
    }

    /**
     * Gets routing
     *
     * @return \Swagger\Client\Model\Routing
     */
    public function getRouting()
    {
        return $this->container['routing'];
    }

    /**
     * Sets routing
     *
     * @param \Swagger\Client\Model\Routing $routing Routing information
     *
     * @return $this
     */
    public function setRouting($routing)
    {
        $this->container['routing'] = $routing;

        return $this;
    }

    /**
     * Gets label_image_format
     *
     * @return string
     */
    public function getLabelImageFormat()
    {
        return $this->container['label_image_format'];
    }

    /**
     * Sets label_image_format
     *
     * @param string $label_image_format Label Image Format
     *
     * @return $this
     */
    public function setLabelImageFormat($label_image_format)
    {
        $allowedValues = $this->getLabelImageFormatAllowableValues();
        if (!is_null($label_image_format) && !in_array($label_image_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'label_image_format', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['label_image_format'] = $label_image_format;

        return $this;
    }

    /**
     * Gets label_images
     *
     * @return string
     */
    public function getLabelImages()
    {
        return $this->container['label_images'];
    }

    /**
     * Sets label_images
     *
     * @param string $label_images Label Images<br />Any labels that have been created as a result of the request.<br />Depends on Label Image Format.<br />            <br />**PDF**<br />Base 64 encoded PDF<br />            <br />**PNG**<br />Base 64 encoded PNG<br />            <br />**ZPL 300 / 203 dpi**<br />Base 64 encoded PRN (text file)<br />            <br />**Data stream**<br />Not Included - see Packages for Data Stream responses
     *
     * @return $this
     */
    public function setLabelImages($label_images)
    {
        $this->container['label_images'] = $label_images;

        return $this;
    }

    /**
     * Gets customs_documents
     *
     * @return string
     */
    public function getCustomsDocuments()
    {
        return $this->container['customs_documents'];
    }

    /**
     * Sets customs_documents
     *
     * @param string $customs_documents Customs Documents<br />Any customs documents that have been created as a result of the request.<br />Depends on Label Image Format.<br />            <br />**PDF**<br />Base 64 encoded PDF<br />            <br />**PNG**<br />Base 64 encoded PNG<br />            <br />**ZPL 300 / 203 dpi**<br />Base 64 encoded PRN (text file)<br />            <br />**Data stream**<br />Not Included - see Packages for Data Stream responses
     *
     * @return $this
     */
    public function setCustomsDocuments($customs_documents)
    {
        $this->container['customs_documents'] = $customs_documents;

        return $this;
    }

    /**
     * Gets return_label_image_format
     *
     * @return string
     */
    public function getReturnLabelImageFormat()
    {
        return $this->container['return_label_image_format'];
    }

    /**
     * Sets return_label_image_format
     *
     * @param string $return_label_image_format Return Label Image Format
     *
     * @return $this
     */
    public function setReturnLabelImageFormat($return_label_image_format)
    {
        $allowedValues = $this->getReturnLabelImageFormatAllowableValues();
        if (!is_null($return_label_image_format) && !in_array($return_label_image_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'return_label_image_format', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['return_label_image_format'] = $return_label_image_format;

        return $this;
    }

    /**
     * Gets return_label_images
     *
     * @return string
     */
    public function getReturnLabelImages()
    {
        return $this->container['return_label_images'];
    }

    /**
     * Sets return_label_images
     *
     * @param string $return_label_images Return Label Images<br />Any return labels that have been created as a result of the request and label option settings.<br />Depends on ReturnLabelImageFormat.<br />            <br />**PDF**<br />Base 64 encoded PDF<br />            <br />**PNG**<br />Base 64 encoded PNG<br />            <br />**ZPL 300 / 203 dpi**<br />Base 64 encoded PRN (text file)
     *
     * @return $this
     */
    public function setReturnLabelImages($return_label_images)
    {
        $this->container['return_label_images'] = $return_label_images;

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


