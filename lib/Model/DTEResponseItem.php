<?php
/**
 * DTEResponseItem
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
use \Tsukiro\Client\ObjectSerializer;

/**
 * DTEResponseItem Class Doc Comment
 *
 * @category Class
 * @package  Tsukiro\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DTEResponseItem
{
    /**
     * Possible values of this enum
     */
    const PDF = 'PDF';
const FOLIO = 'FOLIO';
const XML = 'XML';
const TIMBRE = 'TIMBRE';
const LOGO = 'LOGO';
const RESOLUCION = 'RESOLUCION';
const LETTER = 'LETTER';
const _80_MM = '80MM';
const _80_MMNOLOGO = '80MMNOLOGO';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PDF,
self::FOLIO,
self::XML,
self::TIMBRE,
self::LOGO,
self::RESOLUCION,
self::LETTER,
self::_80_MM,
self::_80_MMNOLOGO,        ];
    }
}
