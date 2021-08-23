<?php
/**
 * DTEDetail
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * OpenFactura API
 *
 * Estructura de openfactura
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.27
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Tsukiro\Client\Model;

use \ArrayAccess;
use \Tsukiro\Client\ObjectSerializer;

/**
 * DTEDetail Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DTEDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DTEDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'nro_lin_det' => 'int',
'nmb_item' => 'string',
'qty_item' => 'int',
'prc_item' => 'int',
'monto_item' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'nro_lin_det' => null,
'nmb_item' => null,
'qty_item' => null,
'prc_item' => null,
'monto_item' => null    ];

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
        'nro_lin_det' => 'NroLinDet',
'nmb_item' => 'NmbItem',
'qty_item' => 'QtyItem',
'prc_item' => 'PrcItem',
'monto_item' => 'MontoItem'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nro_lin_det' => 'setNroLinDet',
'nmb_item' => 'setNmbItem',
'qty_item' => 'setQtyItem',
'prc_item' => 'setPrcItem',
'monto_item' => 'setMontoItem'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nro_lin_det' => 'getNroLinDet',
'nmb_item' => 'getNmbItem',
'qty_item' => 'getQtyItem',
'prc_item' => 'getPrcItem',
'monto_item' => 'getMontoItem'    ];

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
        $this->container['nro_lin_det'] = isset($data['nro_lin_det']) ? $data['nro_lin_det'] : null;
        $this->container['nmb_item'] = isset($data['nmb_item']) ? $data['nmb_item'] : null;
        $this->container['qty_item'] = isset($data['qty_item']) ? $data['qty_item'] : null;
        $this->container['prc_item'] = isset($data['prc_item']) ? $data['prc_item'] : null;
        $this->container['monto_item'] = isset($data['monto_item']) ? $data['monto_item'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets nro_lin_det
     *
     * @return int
     */
    public function getNroLinDet()
    {
        return $this->container['nro_lin_det'];
    }

    /**
     * Sets nro_lin_det
     *
     * @param int $nro_lin_det nro_lin_det
     *
     * @return $this
     */
    public function setNroLinDet($nro_lin_det)
    {
        $this->container['nro_lin_det'] = $nro_lin_det;

        return $this;
    }

    /**
     * Gets nmb_item
     *
     * @return string
     */
    public function getNmbItem()
    {
        return $this->container['nmb_item'];
    }

    /**
     * Sets nmb_item
     *
     * @param string $nmb_item nmb_item
     *
     * @return $this
     */
    public function setNmbItem($nmb_item)
    {
        $this->container['nmb_item'] = $nmb_item;

        return $this;
    }

    /**
     * Gets qty_item
     *
     * @return int
     */
    public function getQtyItem()
    {
        return $this->container['qty_item'];
    }

    /**
     * Sets qty_item
     *
     * @param int $qty_item qty_item
     *
     * @return $this
     */
    public function setQtyItem($qty_item)
    {
        $this->container['qty_item'] = $qty_item;

        return $this;
    }

    /**
     * Gets prc_item
     *
     * @return int
     */
    public function getPrcItem()
    {
        return $this->container['prc_item'];
    }

    /**
     * Sets prc_item
     *
     * @param int $prc_item prc_item
     *
     * @return $this
     */
    public function setPrcItem($prc_item)
    {
        $this->container['prc_item'] = $prc_item;

        return $this;
    }

    /**
     * Gets monto_item
     *
     * @return int
     */
    public function getMontoItem()
    {
        return $this->container['monto_item'];
    }

    /**
     * Sets monto_item
     *
     * @param int $monto_item monto_item
     *
     * @return $this
     */
    public function setMontoItem($monto_item)
    {
        $this->container['monto_item'] = $monto_item;

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
