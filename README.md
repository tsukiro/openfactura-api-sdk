# OpenFactura-php
Estructura de openfactura

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tsukiro\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Tsukiro\Client\Model\DTERequest(); // \Tsukiro\Client\Model\DTERequest | 
$apikey = "apikey_example"; // string | openfactura apikey

try {
    $result = $apiInstance->DocumentEmit($body, $apikey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->v2DteDocumentPost: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Tsukiro\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Tsukiro\Client\Model\DocumentReceivedFilter(); // \Tsukiro\Client\Model\DocumentReceivedFilter | 
$apikey = "apikey_example"; // string | openfactura apikey

try {
    $result = $apiInstance->getReceivedDTE($body, $apikey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->v2DteDocumentReceivedPost: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Tsukiro\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$rut = "rut_example"; // string | 
$type = "type_example"; // string | 
$document_number = "document_number_example"; // string | 
$value = "value_example"; // string | 
$apikey = "apikey_example"; // string | openfactura apikey

try {
    $result = $apiInstance->getDTEDocument($rut, $type, $document_number, $value, $apikey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->v2DteDocumentRutTypeDocumentNumberValueGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://dev-api.haulmer.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**v2DteDocumentPost**](docs/Api/DefaultApi.md#v2dtedocumentpost) | **POST** /v2/dte/document | Realiza la emisión de documentos DTE
*DefaultApi* | [**v2DteDocumentReceivedPost**](docs/Api/DefaultApi.md#v2dtedocumentreceivedpost) | **POST** /v2/dte/document/received | 
*DefaultApi* | [**v2DteDocumentRutTypeDocumentNumberValueGet**](docs/Api/DefaultApi.md#v2dtedocumentruttypedocumentnumbervalueget) | **GET** /v2/dte/document/{rut}/{type}/{documentNumber}/{value} | Entrega la información de un documento emitido o recibido en Openfactura.

## Documentation For Models

 - [ActecoArray](docs/Model/ActecoArray.md)
 - [ActecoString](docs/Model/ActecoString.md)
 - [DTEDetail](docs/Model/DTEDetail.md)
 - [DTEEmisor](docs/Model/DTEEmisor.md)
 - [DTEFilter](docs/Model/DTEFilter.md)
 - [DTEIdDoc](docs/Model/DTEIdDoc.md)
 - [DTEJson](docs/Model/DTEJson.md)
 - [DTEJsonJson](docs/Model/DTEJsonJson.md)
 - [DTEJsonJsonEncabezado](docs/Model/DTEJsonJsonEncabezado.md)
 - [DTEReceptor](docs/Model/DTEReceptor.md)
 - [DTEReferencia](docs/Model/DTEReferencia.md)
 - [DTEReferenciaItem](docs/Model/DTEReferenciaItem.md)
 - [DTERequest](docs/Model/DTERequest.md)
 - [DTERequestDte](docs/Model/DTERequestDte.md)
 - [DTERequestDteEncabezado](docs/Model/DTERequestDteEncabezado.md)
 - [DTEResponse](docs/Model/DTEResponse.md)
 - [DTEResponseItem](docs/Model/DTEResponseItem.md)
 - [DTEResponseRESOLUCION](docs/Model/DTEResponseRESOLUCION.md)
 - [DTETotales](docs/Model/DTETotales.md)
 - [DocumentReceivedFilter](docs/Model/DocumentReceivedFilter.md)
 - [DocumentReceivedItems](docs/Model/DocumentReceivedItems.md)
 - [DocumentReceivedResponse](docs/Model/DocumentReceivedResponse.md)
 - [EqualFilter](docs/Model/EqualFilter.md)
 - [GreatherThanFilter](docs/Model/GreatherThanFilter.md)
 - [GreatherThanOrEqualFilter](docs/Model/GreatherThanOrEqualFilter.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [LessThanFilter](docs/Model/LessThanFilter.md)
 - [LessThanOrEqualFilter](docs/Model/LessThanOrEqualFilter.md)
 - [NotEqualFilter](docs/Model/NotEqualFilter.md)
 - [OneOfDTEEmisorActeco](docs/Model/OneOfDTEEmisorActeco.md)
 - [OneOfDTEFilter](docs/Model/OneOfDTEFilter.md)
 - [OneOfinlineResponse200](docs/Model/OneOfinlineResponse200.md)

## Documentation For Authorization

 All endpoints do not require authorization.


## Author



