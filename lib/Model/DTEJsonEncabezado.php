<?php
/**
 * DTEJsonEncabezado
 *
 * PHP version 5
 *
 * @category Class
 * @package  Tsukiro\Client
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
 * DTEJsonEncabezado Class Doc Comment
 *
 * @category Class
 * @package  Tsukiro\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DTEJsonEncabezado implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DTE_json_Encabezado';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_doc' => '\Tsukiro\Client\Model\DTEIdDoc',
'emisor' => '\Tsukiro\Client\Model\DTEEmisor',
'receptor' => '\Tsukiro\Client\Model\DTEReceptor',
'totales' => '\Tsukiro\Client\Model\DTETotales'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_doc' => null,
'emisor' => null,
'receptor' => null,
'totales' => null    ];

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
        'id_doc' => 'IDDoc',
'emisor' => 'Emisor',
'receptor' => 'Receptor',
'totales' => 'Totales'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_doc' => 'setIdDoc',
'emisor' => 'setEmisor',
'receptor' => 'setReceptor',
'totales' => 'setTotales'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_doc' => 'getIdDoc',
'emisor' => 'getEmisor',
'receptor' => 'getReceptor',
'totales' => 'getTotales'    ];

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
        $this->container['id_doc'] = isset($data['id_doc']) ? $data['id_doc'] : null;
        $this->container['emisor'] = isset($data['emisor']) ? $data['emisor'] : null;
        $this->container['receptor'] = isset($data['receptor']) ? $data['receptor'] : null;
        $this->container['totales'] = isset($data['totales']) ? $data['totales'] : null;
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
     * Gets id_doc
     *
     * @return \Tsukiro\Client\Model\DTEIdDoc
     */
    public function getIdDoc()
    {
        return $this->container['id_doc'];
    }

    /**
     * Sets id_doc
     *
     * @param \Tsukiro\Client\Model\DTEIdDoc $id_doc id_doc
     *
     * @return $this
     */
    public function setIdDoc($id_doc)
    {
        $this->container['id_doc'] = $id_doc;

        return $this;
    }

    /**
     * Gets emisor
     *
     * @return \Tsukiro\Client\Model\DTEEmisor
     */
    public function getEmisor()
    {
        return $this->container['emisor'];
    }

    /**
     * Sets emisor
     *
     * @param \Tsukiro\Client\Model\DTEEmisor $emisor emisor
     *
     * @return $this
     */
    public function setEmisor($emisor)
    {
        $this->container['emisor'] = $emisor;

        return $this;
    }

    /**
     * Gets receptor
     *
     * @return \Tsukiro\Client\Model\DTEReceptor
     */
    public function getReceptor()
    {
        return $this->container['receptor'];
    }

    /**
     * Sets receptor
     *
     * @param \Tsukiro\Client\Model\DTEReceptor $receptor receptor
     *
     * @return $this
     */
    public function setReceptor($receptor)
    {
        $this->container['receptor'] = $receptor;

        return $this;
    }

    /**
     * Gets totales
     *
     * @return \Tsukiro\Client\Model\DTETotales
     */
    public function getTotales()
    {
        return $this->container['totales'];
    }

    /**
     * Sets totales
     *
     * @param \Tsukiro\Client\Model\DTETotales $totales totales
     *
     * @return $this
     */
    public function setTotales($totales)
    {
        $this->container['totales'] = $totales;

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