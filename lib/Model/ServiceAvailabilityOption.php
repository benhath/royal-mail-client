<?php
/**
 * ServiceAvailabilityOption
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
 * ServiceAvailabilityOption Class Doc Comment
 *
 * @category Class
 * @description An available service option based on your request.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceAvailabilityOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ServiceAvailability.Option';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'service_code' => 'string',
        'service_name' => 'string',
        'transit_days' => 'int',
        'is_tracked' => 'bool',
        'signature_included' => 'bool',
        'recorded_signed_for_available' => 'bool',
        'safeplace_available' => 'bool',
        'local_collect_available' => 'bool',
        'saturday_guaranteed_available' => 'bool',
        'consequential_loss_available' => 'bool',
        'formats_available' => '\Swagger\Client\Model\ServiceAvailabilityFormat[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'service_code' => null,
        'service_name' => null,
        'transit_days' => 'int32',
        'is_tracked' => null,
        'signature_included' => null,
        'recorded_signed_for_available' => null,
        'safeplace_available' => null,
        'local_collect_available' => null,
        'saturday_guaranteed_available' => null,
        'consequential_loss_available' => null,
        'formats_available' => null
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
        'service_code' => 'ServiceCode',
        'service_name' => 'ServiceName',
        'transit_days' => 'TransitDays',
        'is_tracked' => 'IsTracked',
        'signature_included' => 'SignatureIncluded',
        'recorded_signed_for_available' => 'RecordedSignedForAvailable',
        'safeplace_available' => 'SafeplaceAvailable',
        'local_collect_available' => 'LocalCollectAvailable',
        'saturday_guaranteed_available' => 'SaturdayGuaranteedAvailable',
        'consequential_loss_available' => 'ConsequentialLossAvailable',
        'formats_available' => 'FormatsAvailable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'service_code' => 'setServiceCode',
        'service_name' => 'setServiceName',
        'transit_days' => 'setTransitDays',
        'is_tracked' => 'setIsTracked',
        'signature_included' => 'setSignatureIncluded',
        'recorded_signed_for_available' => 'setRecordedSignedForAvailable',
        'safeplace_available' => 'setSafeplaceAvailable',
        'local_collect_available' => 'setLocalCollectAvailable',
        'saturday_guaranteed_available' => 'setSaturdayGuaranteedAvailable',
        'consequential_loss_available' => 'setConsequentialLossAvailable',
        'formats_available' => 'setFormatsAvailable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'service_code' => 'getServiceCode',
        'service_name' => 'getServiceName',
        'transit_days' => 'getTransitDays',
        'is_tracked' => 'getIsTracked',
        'signature_included' => 'getSignatureIncluded',
        'recorded_signed_for_available' => 'getRecordedSignedForAvailable',
        'safeplace_available' => 'getSafeplaceAvailable',
        'local_collect_available' => 'getLocalCollectAvailable',
        'saturday_guaranteed_available' => 'getSaturdayGuaranteedAvailable',
        'consequential_loss_available' => 'getConsequentialLossAvailable',
        'formats_available' => 'getFormatsAvailable'
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
        $this->container['service_code'] = isset($data['service_code']) ? $data['service_code'] : null;
        $this->container['service_name'] = isset($data['service_name']) ? $data['service_name'] : null;
        $this->container['transit_days'] = isset($data['transit_days']) ? $data['transit_days'] : null;
        $this->container['is_tracked'] = isset($data['is_tracked']) ? $data['is_tracked'] : null;
        $this->container['signature_included'] = isset($data['signature_included']) ? $data['signature_included'] : null;
        $this->container['recorded_signed_for_available'] = isset($data['recorded_signed_for_available']) ? $data['recorded_signed_for_available'] : null;
        $this->container['safeplace_available'] = isset($data['safeplace_available']) ? $data['safeplace_available'] : null;
        $this->container['local_collect_available'] = isset($data['local_collect_available']) ? $data['local_collect_available'] : null;
        $this->container['saturday_guaranteed_available'] = isset($data['saturday_guaranteed_available']) ? $data['saturday_guaranteed_available'] : null;
        $this->container['consequential_loss_available'] = isset($data['consequential_loss_available']) ? $data['consequential_loss_available'] : null;
        $this->container['formats_available'] = isset($data['formats_available']) ? $data['formats_available'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['service_code'] === null) {
            $invalidProperties[] = "'service_code' can't be null";
        }
        if ((mb_strlen($this->container['service_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'service_code', the character length must be smaller than or equal to 10.";
        }

        if ($this->container['service_name'] === null) {
            $invalidProperties[] = "'service_name' can't be null";
        }
        if ($this->container['transit_days'] === null) {
            $invalidProperties[] = "'transit_days' can't be null";
        }
        if ($this->container['is_tracked'] === null) {
            $invalidProperties[] = "'is_tracked' can't be null";
        }
        if ($this->container['signature_included'] === null) {
            $invalidProperties[] = "'signature_included' can't be null";
        }
        if ($this->container['recorded_signed_for_available'] === null) {
            $invalidProperties[] = "'recorded_signed_for_available' can't be null";
        }
        if ($this->container['safeplace_available'] === null) {
            $invalidProperties[] = "'safeplace_available' can't be null";
        }
        if ($this->container['local_collect_available'] === null) {
            $invalidProperties[] = "'local_collect_available' can't be null";
        }
        if ($this->container['saturday_guaranteed_available'] === null) {
            $invalidProperties[] = "'saturday_guaranteed_available' can't be null";
        }
        if ($this->container['consequential_loss_available'] === null) {
            $invalidProperties[] = "'consequential_loss_available' can't be null";
        }
        if ($this->container['formats_available'] === null) {
            $invalidProperties[] = "'formats_available' can't be null";
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
     * Gets service_code
     *
     * @return string
     */
    public function getServiceCode()
    {
        return $this->container['service_code'];
    }

    /**
     * Sets service_code
     *
     * @param string $service_code Service Code<br />Customer Mapped Service Code or System Service Code for this service.
     *
     * @return $this
     */
    public function setServiceCode($service_code)
    {
        if ((mb_strlen($service_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $service_code when calling ServiceAvailabilityOption., must be smaller than or equal to 10.');
        }

        $this->container['service_code'] = $service_code;

        return $this;
    }

    /**
     * Gets service_name
     *
     * @return string
     */
    public function getServiceName()
    {
        return $this->container['service_name'];
    }

    /**
     * Sets service_name
     *
     * @param string $service_name Service Name
     *
     * @return $this
     */
    public function setServiceName($service_name)
    {
        $this->container['service_name'] = $service_name;

        return $this;
    }

    /**
     * Gets transit_days
     *
     * @return int
     */
    public function getTransitDays()
    {
        return $this->container['transit_days'];
    }

    /**
     * Sets transit_days
     *
     * @param int $transit_days Estimated Transit Days
     *
     * @return $this
     */
    public function setTransitDays($transit_days)
    {
        $this->container['transit_days'] = $transit_days;

        return $this;
    }

    /**
     * Gets is_tracked
     *
     * @return bool
     */
    public function getIsTracked()
    {
        return $this->container['is_tracked'];
    }

    /**
     * Sets is_tracked
     *
     * @param bool $is_tracked Is Tracked<br />If true, the service is a tracked service.
     *
     * @return $this
     */
    public function setIsTracked($is_tracked)
    {
        $this->container['is_tracked'] = $is_tracked;

        return $this;
    }

    /**
     * Gets signature_included
     *
     * @return bool
     */
    public function getSignatureIncluded()
    {
        return $this->container['signature_included'];
    }

    /**
     * Sets signature_included
     *
     * @param bool $signature_included Signature Included<br />If true, a signature required on delivery is included with the service.
     *
     * @return $this
     */
    public function setSignatureIncluded($signature_included)
    {
        $this->container['signature_included'] = $signature_included;

        return $this;
    }

    /**
     * Gets recorded_signed_for_available
     *
     * @return bool
     */
    public function getRecordedSignedForAvailable()
    {
        return $this->container['recorded_signed_for_available'];
    }

    /**
     * Sets recorded_signed_for_available
     *
     * @param bool $recorded_signed_for_available Recorded Signed For Enhancement Available<br />If true, the recorded signed for enhancement can be used with this service.
     *
     * @return $this
     */
    public function setRecordedSignedForAvailable($recorded_signed_for_available)
    {
        $this->container['recorded_signed_for_available'] = $recorded_signed_for_available;

        return $this;
    }

    /**
     * Gets safeplace_available
     *
     * @return bool
     */
    public function getSafeplaceAvailable()
    {
        return $this->container['safeplace_available'];
    }

    /**
     * Sets safeplace_available
     *
     * @param bool $safeplace_available Safe Place Enhancement Available<br />If true, the safe place enhancement can be used with this service.
     *
     * @return $this
     */
    public function setSafeplaceAvailable($safeplace_available)
    {
        $this->container['safeplace_available'] = $safeplace_available;

        return $this;
    }

    /**
     * Gets local_collect_available
     *
     * @return bool
     */
    public function getLocalCollectAvailable()
    {
        return $this->container['local_collect_available'];
    }

    /**
     * Sets local_collect_available
     *
     * @param bool $local_collect_available Local Collect Enhancement Available<br />If true, the local collect enhancement can be used with this service.
     *
     * @return $this
     */
    public function setLocalCollectAvailable($local_collect_available)
    {
        $this->container['local_collect_available'] = $local_collect_available;

        return $this;
    }

    /**
     * Gets saturday_guaranteed_available
     *
     * @return bool
     */
    public function getSaturdayGuaranteedAvailable()
    {
        return $this->container['saturday_guaranteed_available'];
    }

    /**
     * Sets saturday_guaranteed_available
     *
     * @param bool $saturday_guaranteed_available Saturday Guaranteed Enhancement Available<br />If true, the saturday guaranteed enhancement can be used with this service.
     *
     * @return $this
     */
    public function setSaturdayGuaranteedAvailable($saturday_guaranteed_available)
    {
        $this->container['saturday_guaranteed_available'] = $saturday_guaranteed_available;

        return $this;
    }

    /**
     * Gets consequential_loss_available
     *
     * @return bool
     */
    public function getConsequentialLossAvailable()
    {
        return $this->container['consequential_loss_available'];
    }

    /**
     * Sets consequential_loss_available
     *
     * @param bool $consequential_loss_available Consequential Loss Enhancement Available<br />If true, the consequential loss enhancement can be used with this service.
     *
     * @return $this
     */
    public function setConsequentialLossAvailable($consequential_loss_available)
    {
        $this->container['consequential_loss_available'] = $consequential_loss_available;

        return $this;
    }

    /**
     * Gets formats_available
     *
     * @return \Swagger\Client\Model\ServiceAvailabilityFormat[]
     */
    public function getFormatsAvailable()
    {
        return $this->container['formats_available'];
    }

    /**
     * Sets formats_available
     *
     * @param \Swagger\Client\Model\ServiceAvailabilityFormat[] $formats_available Formats Available<br />All formats that are available for this service for the given weight, including the maximum weight possible for each format.
     *
     * @return $this
     */
    public function setFormatsAvailable($formats_available)
    {
        $this->container['formats_available'] = $formats_available;

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


