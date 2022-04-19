<?php
/**
 * CreateShipmentShipmentInformation
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
 * CreateShipmentShipmentInformation Class Doc Comment
 *
 * @category Class
 * @description Shipment Information. Overall package details, item details and requested service information in a shipment request.&lt;br /&gt; It is important to ensure accurate information is supplied to ensure correct handling by different customs around the world.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateShipmentShipmentInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateShipment.ShipmentInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipment_date' => '\DateTime',
        'service_code' => 'string',
        'service_options' => '\Swagger\Client\Model\CreateShipmentServiceOptions',
        'total_packages' => 'int',
        'total_weight' => 'double',
        'weight_unit_of_measure' => 'string',
        'product' => 'string',
        'description_of_goods' => 'string',
        'reason_for_export' => 'string',
        'value' => 'double',
        'currency' => 'string',
        'incoterms' => 'string',
        'label_format' => 'string',
        'silent_print_profile' => 'string',
        'shipment_action' => 'string',
        'packages' => '\Swagger\Client\Model\CreateShipmentShipmentPackage[]',
        'items' => '\Swagger\Client\Model\ShipmentItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipment_date' => 'date',
        'service_code' => null,
        'service_options' => null,
        'total_packages' => 'int32',
        'total_weight' => 'double',
        'weight_unit_of_measure' => null,
        'product' => null,
        'description_of_goods' => null,
        'reason_for_export' => null,
        'value' => 'double',
        'currency' => null,
        'incoterms' => null,
        'label_format' => null,
        'silent_print_profile' => 'uuid',
        'shipment_action' => null,
        'packages' => null,
        'items' => null
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
        'shipment_date' => 'ShipmentDate',
        'service_code' => 'ServiceCode',
        'service_options' => 'ServiceOptions',
        'total_packages' => 'TotalPackages',
        'total_weight' => 'TotalWeight',
        'weight_unit_of_measure' => 'WeightUnitOfMeasure',
        'product' => 'Product',
        'description_of_goods' => 'DescriptionOfGoods',
        'reason_for_export' => 'ReasonForExport',
        'value' => 'Value',
        'currency' => 'Currency',
        'incoterms' => 'Incoterms',
        'label_format' => 'LabelFormat',
        'silent_print_profile' => 'SilentPrintProfile',
        'shipment_action' => 'ShipmentAction',
        'packages' => 'Packages',
        'items' => 'Items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_date' => 'setShipmentDate',
        'service_code' => 'setServiceCode',
        'service_options' => 'setServiceOptions',
        'total_packages' => 'setTotalPackages',
        'total_weight' => 'setTotalWeight',
        'weight_unit_of_measure' => 'setWeightUnitOfMeasure',
        'product' => 'setProduct',
        'description_of_goods' => 'setDescriptionOfGoods',
        'reason_for_export' => 'setReasonForExport',
        'value' => 'setValue',
        'currency' => 'setCurrency',
        'incoterms' => 'setIncoterms',
        'label_format' => 'setLabelFormat',
        'silent_print_profile' => 'setSilentPrintProfile',
        'shipment_action' => 'setShipmentAction',
        'packages' => 'setPackages',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_date' => 'getShipmentDate',
        'service_code' => 'getServiceCode',
        'service_options' => 'getServiceOptions',
        'total_packages' => 'getTotalPackages',
        'total_weight' => 'getTotalWeight',
        'weight_unit_of_measure' => 'getWeightUnitOfMeasure',
        'product' => 'getProduct',
        'description_of_goods' => 'getDescriptionOfGoods',
        'reason_for_export' => 'getReasonForExport',
        'value' => 'getValue',
        'currency' => 'getCurrency',
        'incoterms' => 'getIncoterms',
        'label_format' => 'getLabelFormat',
        'silent_print_profile' => 'getSilentPrintProfile',
        'shipment_action' => 'getShipmentAction',
        'packages' => 'getPackages',
        'items' => 'getItems'
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

    const WEIGHT_UNIT_OF_MEASURE_KG = 'KG';
    const WEIGHT_UNIT_OF_MEASURE_GRAMS = 'Grams';
    const PRODUCT_NDX = 'NDX';
    const PRODUCT_DOX = 'DOX';
    const INCOTERMS_DDP = 'DDP';
    const INCOTERMS_DAT = 'DAT';
    const INCOTERMS_DAP = 'DAP';
    const INCOTERMS_DDU = 'DDU';
    const LABEL_FORMAT_PDF = 'PDF';
    const LABEL_FORMAT_PNG = 'PNG';
    const LABEL_FORMAT_DATASTREAM = 'DATASTREAM';
    const LABEL_FORMAT_ZPL203_DPI = 'ZPL203DPI';
    const LABEL_FORMAT_ZPL300_DPI = 'ZPL300DPI';
    const SHIPMENT_ACTION_PROCESS = 'Process';
    const SHIPMENT_ACTION_ALLOCATE = 'Allocate';
    const SHIPMENT_ACTION_CREATE = 'Create';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWeightUnitOfMeasureAllowableValues()
    {
        return [
            self::WEIGHT_UNIT_OF_MEASURE_KG,
            self::WEIGHT_UNIT_OF_MEASURE_GRAMS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProductAllowableValues()
    {
        return [
            self::PRODUCT_NDX,
            self::PRODUCT_DOX,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIncotermsAllowableValues()
    {
        return [
            self::INCOTERMS_DDP,
            self::INCOTERMS_DAT,
            self::INCOTERMS_DAP,
            self::INCOTERMS_DDU,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLabelFormatAllowableValues()
    {
        return [
            self::LABEL_FORMAT_PDF,
            self::LABEL_FORMAT_PNG,
            self::LABEL_FORMAT_DATASTREAM,
            self::LABEL_FORMAT_ZPL203_DPI,
            self::LABEL_FORMAT_ZPL300_DPI,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShipmentActionAllowableValues()
    {
        return [
            self::SHIPMENT_ACTION_PROCESS,
            self::SHIPMENT_ACTION_ALLOCATE,
            self::SHIPMENT_ACTION_CREATE,
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
        $this->container['shipment_date'] = isset($data['shipment_date']) ? $data['shipment_date'] : null;
        $this->container['service_code'] = isset($data['service_code']) ? $data['service_code'] : null;
        $this->container['service_options'] = isset($data['service_options']) ? $data['service_options'] : null;
        $this->container['total_packages'] = isset($data['total_packages']) ? $data['total_packages'] : null;
        $this->container['total_weight'] = isset($data['total_weight']) ? $data['total_weight'] : null;
        $this->container['weight_unit_of_measure'] = isset($data['weight_unit_of_measure']) ? $data['weight_unit_of_measure'] : 'KG';
        $this->container['product'] = isset($data['product']) ? $data['product'] : 'NDX';
        $this->container['description_of_goods'] = isset($data['description_of_goods']) ? $data['description_of_goods'] : null;
        $this->container['reason_for_export'] = isset($data['reason_for_export']) ? $data['reason_for_export'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['incoterms'] = isset($data['incoterms']) ? $data['incoterms'] : 'DDU';
        $this->container['label_format'] = isset($data['label_format']) ? $data['label_format'] : 'PDF';
        $this->container['silent_print_profile'] = isset($data['silent_print_profile']) ? $data['silent_print_profile'] : null;
        $this->container['shipment_action'] = isset($data['shipment_action']) ? $data['shipment_action'] : 'Process';
        $this->container['packages'] = isset($data['packages']) ? $data['packages'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipment_date'] === null) {
            $invalidProperties[] = "'shipment_date' can't be null";
        }
        if ($this->container['service_code'] === null) {
            $invalidProperties[] = "'service_code' can't be null";
        }
        if ((mb_strlen($this->container['service_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'service_code', the character length must be smaller than or equal to 10.";
        }

        if ($this->container['total_packages'] === null) {
            $invalidProperties[] = "'total_packages' can't be null";
        }
        if (($this->container['total_packages'] > 9)) {
            $invalidProperties[] = "invalid value for 'total_packages', must be smaller than or equal to 9.";
        }

        if (($this->container['total_packages'] < 1)) {
            $invalidProperties[] = "invalid value for 'total_packages', must be bigger than or equal to 1.";
        }

        if ($this->container['total_weight'] === null) {
            $invalidProperties[] = "'total_weight' can't be null";
        }
        $allowedValues = $this->getWeightUnitOfMeasureAllowableValues();
        if (!is_null($this->container['weight_unit_of_measure']) && !in_array($this->container['weight_unit_of_measure'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'weight_unit_of_measure', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getProductAllowableValues();
        if (!is_null($this->container['product']) && !in_array($this->container['product'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'product', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['description_of_goods']) && (mb_strlen($this->container['description_of_goods']) > 70)) {
            $invalidProperties[] = "invalid value for 'description_of_goods', the character length must be smaller than or equal to 70.";
        }

        if (!is_null($this->container['reason_for_export']) && (mb_strlen($this->container['reason_for_export']) > 250)) {
            $invalidProperties[] = "invalid value for 'reason_for_export', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['value']) && ($this->container['value'] > 100000000)) {
            $invalidProperties[] = "invalid value for 'value', must be smaller than or equal to 100000000.";
        }

        if (!is_null($this->container['value']) && ($this->container['value'] < 0.01)) {
            $invalidProperties[] = "invalid value for 'value', must be bigger than or equal to 0.01.";
        }

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) < 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 3.";
        }

        $allowedValues = $this->getIncotermsAllowableValues();
        if (!is_null($this->container['incoterms']) && !in_array($this->container['incoterms'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'incoterms', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLabelFormatAllowableValues();
        if (!is_null($this->container['label_format']) && !in_array($this->container['label_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'label_format', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getShipmentActionAllowableValues();
        if (!is_null($this->container['shipment_action']) && !in_array($this->container['shipment_action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'shipment_action', must be one of '%s'",
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
     * Gets shipment_date
     *
     * @return \DateTime
     */
    public function getShipmentDate()
    {
        return $this->container['shipment_date'];
    }

    /**
     * Sets shipment_date
     *
     * @param \DateTime $shipment_date Shipment Date<br />Date of despatch - YYYY-MM-DD.<br />Cannot be in the past. Max 28 days in the future.
     *
     * @return $this
     */
    public function setShipmentDate($shipment_date)
    {
        $this->container['shipment_date'] = $shipment_date;

        return $this;
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
     * @param string $service_code Service Code<br />Must be a valid system service code OR a customer mapped service code.
     *
     * @return $this
     */
    public function setServiceCode($service_code)
    {
        if ((mb_strlen($service_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $service_code when calling CreateShipmentShipmentInformation., must be smaller than or equal to 10.');
        }

        $this->container['service_code'] = $service_code;

        return $this;
    }

    /**
     * Gets service_options
     *
     * @return \Swagger\Client\Model\CreateShipmentServiceOptions
     */
    public function getServiceOptions()
    {
        return $this->container['service_options'];
    }

    /**
     * Sets service_options
     *
     * @param \Swagger\Client\Model\CreateShipmentServiceOptions $service_options Service Options<br />Only required if you have more than 1 Royal Mail Posting Location.<br />Allows you to add enhancements, specify the posting location, change the service level and specify a service format.
     *
     * @return $this
     */
    public function setServiceOptions($service_options)
    {
        $this->container['service_options'] = $service_options;

        return $this;
    }

    /**
     * Gets total_packages
     *
     * @return int
     */
    public function getTotalPackages()
    {
        return $this->container['total_packages'];
    }

    /**
     * Sets total_packages
     *
     * @param int $total_packages Number of Packages<br />The total number of packages.
     *
     * @return $this
     */
    public function setTotalPackages($total_packages)
    {

        if (($total_packages > 9)) {
            throw new \InvalidArgumentException('invalid value for $total_packages when calling CreateShipmentShipmentInformation., must be smaller than or equal to 9.');
        }
        if (($total_packages < 1)) {
            throw new \InvalidArgumentException('invalid value for $total_packages when calling CreateShipmentShipmentInformation., must be bigger than or equal to 1.');
        }

        $this->container['total_packages'] = $total_packages;

        return $this;
    }

    /**
     * Gets total_weight
     *
     * @return double
     */
    public function getTotalWeight()
    {
        return $this->container['total_weight'];
    }

    /**
     * Sets total_weight
     *
     * @param double $total_weight Total Weight<br />The total weight of the shipment including packaging. Validated againt package weight.<br />Min weight: 1 gram.     <br />*Optional/Overwritten for Average Weight Services - Average Weight Customers only.*
     *
     * @return $this
     */
    public function setTotalWeight($total_weight)
    {
        $this->container['total_weight'] = $total_weight;

        return $this;
    }

    /**
     * Gets weight_unit_of_measure
     *
     * @return string
     */
    public function getWeightUnitOfMeasure()
    {
        return $this->container['weight_unit_of_measure'];
    }

    /**
     * Sets weight_unit_of_measure
     *
     * @param string $weight_unit_of_measure Weight Unit of Measure
     *
     * @return $this
     */
    public function setWeightUnitOfMeasure($weight_unit_of_measure)
    {
        $allowedValues = $this->getWeightUnitOfMeasureAllowableValues();
        if (!is_null($weight_unit_of_measure) && !in_array($weight_unit_of_measure, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'weight_unit_of_measure', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['weight_unit_of_measure'] = $weight_unit_of_measure;

        return $this;
    }

    /**
     * Gets product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string $product Shipment/Product type being shipped<br />            <br />**DOX** - Documents Only<br />**NDX** - All other shipment product types
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $allowedValues = $this->getProductAllowableValues();
        if (!is_null($product) && !in_array($product, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'product', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets description_of_goods
     *
     * @return string
     */
    public function getDescriptionOfGoods()
    {
        return $this->container['description_of_goods'];
    }

    /**
     * Sets description_of_goods
     *
     * @param string $description_of_goods Description of Goods<br />General description of the goods being sent.<br />Required for Non-Document International and BFPO Shipments.<br />Ignored for Documents Only shipments.
     *
     * @return $this
     */
    public function setDescriptionOfGoods($description_of_goods)
    {
        if (!is_null($description_of_goods) && (mb_strlen($description_of_goods) > 70)) {
            throw new \InvalidArgumentException('invalid length for $description_of_goods when calling CreateShipmentShipmentInformation., must be smaller than or equal to 70.');
        }

        $this->container['description_of_goods'] = $description_of_goods;

        return $this;
    }

    /**
     * Gets reason_for_export
     *
     * @return string
     */
    public function getReasonForExport()
    {
        return $this->container['reason_for_export'];
    }

    /**
     * Sets reason_for_export
     *
     * @param string $reason_for_export Reason For Export<br />Required for International Shipments and BFPO (British Forces Post Office).
     *
     * @return $this
     */
    public function setReasonForExport($reason_for_export)
    {
        if (!is_null($reason_for_export) && (mb_strlen($reason_for_export) > 250)) {
            throw new \InvalidArgumentException('invalid length for $reason_for_export when calling CreateShipmentShipmentInformation., must be smaller than or equal to 250.');
        }

        $this->container['reason_for_export'] = $reason_for_export;

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
     * @param double $value Total Shipment Value<br />Required for Non-Document International and BFPO Shipments.<br />Ignored for Documents Only shipments.
     *
     * @return $this
     */
    public function setValue($value)
    {

        if (!is_null($value) && ($value > 100000000)) {
            throw new \InvalidArgumentException('invalid value for $value when calling CreateShipmentShipmentInformation., must be smaller than or equal to 100000000.');
        }
        if (!is_null($value) && ($value < 0.01)) {
            throw new \InvalidArgumentException('invalid value for $value when calling CreateShipmentShipmentInformation., must be bigger than or equal to 0.01.');
        }

        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Currency<br />This currency will be used for all values across the shipment request, including customs charges.<br />3 digit ISO Currency Code.<br />Required for Non-Document International and BFPO Shipments, or when values are provided.<br />Ignored for Documents Only shipments.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        if (!is_null($currency) && (mb_strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling CreateShipmentShipmentInformation., must be smaller than or equal to 3.');
        }
        if (!is_null($currency) && (mb_strlen($currency) < 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling CreateShipmentShipmentInformation., must be bigger than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets incoterms
     *
     * @return string
     */
    public function getIncoterms()
    {
        return $this->container['incoterms'];
    }

    /**
     * Sets incoterms
     *
     * @param string $incoterms International Commercial Terms<br />Developed by International Chamber of Commerce and widely used in international and domestic contracts for the sale of goods.<br /><br />    **DDP** - Delivered Duty Paid.<br />            <br />    **DAT** - Delivered At Terminal.<br />            <br />    **DAP** - Delivered At Place.<br />            <br />    **DDU** - Delivered Duty Unpaid.
     *
     * @return $this
     */
    public function setIncoterms($incoterms)
    {
        $allowedValues = $this->getIncotermsAllowableValues();
        if (!is_null($incoterms) && !in_array($incoterms, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'incoterms', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['incoterms'] = $incoterms;

        return $this;
    }

    /**
     * Gets label_format
     *
     * @return string
     */
    public function getLabelFormat()
    {
        return $this->container['label_format'];
    }

    /**
     * Sets label_format
     *
     * @param string $label_format Requested Label Format<br />*DATASTREAM is only available if it has been activated on your account.*<br />Ignored if ShipmentAction set to Create or Allocate.
     *
     * @return $this
     */
    public function setLabelFormat($label_format)
    {
        $allowedValues = $this->getLabelFormatAllowableValues();
        if (!is_null($label_format) && !in_array($label_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'label_format', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['label_format'] = $label_format;

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
     * @param string $silent_print_profile Silent Print Profile<br />If present, resulting labels will be printed using this profile.
     *
     * @return $this
     */
    public function setSilentPrintProfile($silent_print_profile)
    {
        $this->container['silent_print_profile'] = $silent_print_profile;

        return $this;
    }

    /**
     * Gets shipment_action
     *
     * @return string
     */
    public function getShipmentAction()
    {
        return $this->container['shipment_action'];
    }

    /**
     * Sets shipment_action
     *
     * @param string $shipment_action Shipment Action<br />            <br />**Process** - Shipment created and processed, ready for manifesting. Label and tracking number returned.<br />            <br />**Create** - Shipment created as unprocessed, ready for scanning. Scanning will create label and tracking number and move shipment to processed.<br />            <br />**Allocate** - Shipment created as unprocessed with tracking number allocated and returned and label created but not returned. Scanning will return label and move shipment to processed.
     *
     * @return $this
     */
    public function setShipmentAction($shipment_action)
    {
        $allowedValues = $this->getShipmentActionAllowableValues();
        if (!is_null($shipment_action) && !in_array($shipment_action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'shipment_action', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shipment_action'] = $shipment_action;

        return $this;
    }

    /**
     * Gets packages
     *
     * @return \Swagger\Client\Model\CreateShipmentShipmentPackage[]
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param \Swagger\Client\Model\CreateShipmentShipmentPackage[] $packages Shipment Packages<br />The packages in the shipment.<br />Required if TotalPackages is more than 1.
     *
     * @return $this
     */
    public function setPackages($packages)
    {
        $this->container['packages'] = $packages;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Swagger\Client\Model\ShipmentItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Swagger\Client\Model\ShipmentItem[] $items Shipment Items<br />The items in the shipment.<br />Required for Non-Document International Shipments and BFPO (British Forces Post Office).<br />Ignored for Documents Only shipments.
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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

