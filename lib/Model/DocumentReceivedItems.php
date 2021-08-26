<?php
/**
 * DocumentReceivedItems
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
 * DocumentReceivedItems Class Doc Comment
 *
 * @category Class
 * @package  Tsukiro\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentReceivedItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocumentReceivedItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rut_emisor' => 'int',
'dv' => 'int',
'rzn_soc' => 'int',
'tipo_dte' => 'int',
'folio' => 'int',
'fch_emis' => 'int',
'mnt_exe' => 'int',
'mnt_neto' => 'int',
'iva' => 'int',
'mnt_total' => 'int',
'acuses' => 'int',
'fma_pago' => 'int',
'tpo_tran_compra' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rut_emisor' => null,
'dv' => null,
'rzn_soc' => null,
'tipo_dte' => null,
'folio' => null,
'fch_emis' => null,
'mnt_exe' => null,
'mnt_neto' => null,
'iva' => null,
'mnt_total' => null,
'acuses' => null,
'fma_pago' => null,
'tpo_tran_compra' => null    ];

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
        'rut_emisor' => 'RUTEmisor',
'dv' => 'DV',
'rzn_soc' => 'RznSoc',
'tipo_dte' => 'TipoDTE',
'folio' => 'Folio',
'fch_emis' => 'FchEmis',
'mnt_exe' => 'MntExe',
'mnt_neto' => 'MntNeto',
'iva' => 'IVA',
'mnt_total' => 'MntTotal',
'acuses' => 'Acuses',
'fma_pago' => 'FmaPago',
'tpo_tran_compra' => 'TpoTranCompra'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rut_emisor' => 'setRutEmisor',
'dv' => 'setDv',
'rzn_soc' => 'setRznSoc',
'tipo_dte' => 'setTipoDte',
'folio' => 'setFolio',
'fch_emis' => 'setFchEmis',
'mnt_exe' => 'setMntExe',
'mnt_neto' => 'setMntNeto',
'iva' => 'setIva',
'mnt_total' => 'setMntTotal',
'acuses' => 'setAcuses',
'fma_pago' => 'setFmaPago',
'tpo_tran_compra' => 'setTpoTranCompra'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rut_emisor' => 'getRutEmisor',
'dv' => 'getDv',
'rzn_soc' => 'getRznSoc',
'tipo_dte' => 'getTipoDte',
'folio' => 'getFolio',
'fch_emis' => 'getFchEmis',
'mnt_exe' => 'getMntExe',
'mnt_neto' => 'getMntNeto',
'iva' => 'getIva',
'mnt_total' => 'getMntTotal',
'acuses' => 'getAcuses',
'fma_pago' => 'getFmaPago',
'tpo_tran_compra' => 'getTpoTranCompra'    ];

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
        $this->container['rut_emisor'] = isset($data['rut_emisor']) ? $data['rut_emisor'] : null;
        $this->container['dv'] = isset($data['dv']) ? $data['dv'] : null;
        $this->container['rzn_soc'] = isset($data['rzn_soc']) ? $data['rzn_soc'] : null;
        $this->container['tipo_dte'] = isset($data['tipo_dte']) ? $data['tipo_dte'] : null;
        $this->container['folio'] = isset($data['folio']) ? $data['folio'] : null;
        $this->container['fch_emis'] = isset($data['fch_emis']) ? $data['fch_emis'] : null;
        $this->container['mnt_exe'] = isset($data['mnt_exe']) ? $data['mnt_exe'] : null;
        $this->container['mnt_neto'] = isset($data['mnt_neto']) ? $data['mnt_neto'] : null;
        $this->container['iva'] = isset($data['iva']) ? $data['iva'] : null;
        $this->container['mnt_total'] = isset($data['mnt_total']) ? $data['mnt_total'] : null;
        $this->container['acuses'] = isset($data['acuses']) ? $data['acuses'] : null;
        $this->container['fma_pago'] = isset($data['fma_pago']) ? $data['fma_pago'] : null;
        $this->container['tpo_tran_compra'] = isset($data['tpo_tran_compra']) ? $data['tpo_tran_compra'] : null;
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
     * Gets rut_emisor
     *
     * @return int
     */
    public function getRutEmisor()
    {
        return $this->container['rut_emisor'];
    }

    /**
     * Sets rut_emisor
     *
     * @param int $rut_emisor rut_emisor
     *
     * @return $this
     */
    public function setRutEmisor($rut_emisor)
    {
        $this->container['rut_emisor'] = $rut_emisor;

        return $this;
    }

    /**
     * Gets dv
     *
     * @return int
     */
    public function getDv()
    {
        return $this->container['dv'];
    }

    /**
     * Sets dv
     *
     * @param int $dv dv
     *
     * @return $this
     */
    public function setDv($dv)
    {
        $this->container['dv'] = $dv;

        return $this;
    }

    /**
     * Gets rzn_soc
     *
     * @return int
     */
    public function getRznSoc()
    {
        return $this->container['rzn_soc'];
    }

    /**
     * Sets rzn_soc
     *
     * @param int $rzn_soc rzn_soc
     *
     * @return $this
     */
    public function setRznSoc($rzn_soc)
    {
        $this->container['rzn_soc'] = $rzn_soc;

        return $this;
    }

    /**
     * Gets tipo_dte
     *
     * @return int
     */
    public function getTipoDte()
    {
        return $this->container['tipo_dte'];
    }

    /**
     * Sets tipo_dte
     *
     * @param int $tipo_dte tipo_dte
     *
     * @return $this
     */
    public function setTipoDte($tipo_dte)
    {
        $this->container['tipo_dte'] = $tipo_dte;

        return $this;
    }

    /**
     * Gets folio
     *
     * @return int
     */
    public function getFolio()
    {
        return $this->container['folio'];
    }

    /**
     * Sets folio
     *
     * @param int $folio folio
     *
     * @return $this
     */
    public function setFolio($folio)
    {
        $this->container['folio'] = $folio;

        return $this;
    }

    /**
     * Gets fch_emis
     *
     * @return int
     */
    public function getFchEmis()
    {
        return $this->container['fch_emis'];
    }

    /**
     * Sets fch_emis
     *
     * @param int $fch_emis fch_emis
     *
     * @return $this
     */
    public function setFchEmis($fch_emis)
    {
        $this->container['fch_emis'] = $fch_emis;

        return $this;
    }

    /**
     * Gets mnt_exe
     *
     * @return int
     */
    public function getMntExe()
    {
        return $this->container['mnt_exe'];
    }

    /**
     * Sets mnt_exe
     *
     * @param int $mnt_exe mnt_exe
     *
     * @return $this
     */
    public function setMntExe($mnt_exe)
    {
        $this->container['mnt_exe'] = $mnt_exe;

        return $this;
    }

    /**
     * Gets mnt_neto
     *
     * @return int
     */
    public function getMntNeto()
    {
        return $this->container['mnt_neto'];
    }

    /**
     * Sets mnt_neto
     *
     * @param int $mnt_neto mnt_neto
     *
     * @return $this
     */
    public function setMntNeto($mnt_neto)
    {
        $this->container['mnt_neto'] = $mnt_neto;

        return $this;
    }

    /**
     * Gets iva
     *
     * @return int
     */
    public function getIva()
    {
        return $this->container['iva'];
    }

    /**
     * Sets iva
     *
     * @param int $iva iva
     *
     * @return $this
     */
    public function setIva($iva)
    {
        $this->container['iva'] = $iva;

        return $this;
    }

    /**
     * Gets mnt_total
     *
     * @return int
     */
    public function getMntTotal()
    {
        return $this->container['mnt_total'];
    }

    /**
     * Sets mnt_total
     *
     * @param int $mnt_total mnt_total
     *
     * @return $this
     */
    public function setMntTotal($mnt_total)
    {
        $this->container['mnt_total'] = $mnt_total;

        return $this;
    }

    /**
     * Gets acuses
     *
     * @return int
     */
    public function getAcuses()
    {
        return $this->container['acuses'];
    }

    /**
     * Sets acuses
     *
     * @param int $acuses acuses
     *
     * @return $this
     */
    public function setAcuses($acuses)
    {
        $this->container['acuses'] = $acuses;

        return $this;
    }

    /**
     * Gets fma_pago
     *
     * @return int
     */
    public function getFmaPago()
    {
        return $this->container['fma_pago'];
    }

    /**
     * Sets fma_pago
     *
     * @param int $fma_pago fma_pago
     *
     * @return $this
     */
    public function setFmaPago($fma_pago)
    {
        $this->container['fma_pago'] = $fma_pago;

        return $this;
    }

    /**
     * Gets tpo_tran_compra
     *
     * @return int
     */
    public function getTpoTranCompra()
    {
        return $this->container['tpo_tran_compra'];
    }

    /**
     * Sets tpo_tran_compra
     *
     * @param int $tpo_tran_compra tpo_tran_compra
     *
     * @return $this
     */
    public function setTpoTranCompra($tpo_tran_compra)
    {
        $this->container['tpo_tran_compra'] = $tpo_tran_compra;

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
