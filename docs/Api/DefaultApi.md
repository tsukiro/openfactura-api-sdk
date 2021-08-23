# Swagger\Client\DefaultApi

All URIs are relative to *https://dev-api.haulmer.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v2DteDocumentPost**](DefaultApi.md#v2dtedocumentpost) | **POST** /v2/dte/document | Realiza la emisión de documentos DTE
[**v2DteDocumentReceivedPost**](DefaultApi.md#v2dtedocumentreceivedpost) | **POST** /v2/dte/document/received | 
[**v2DteDocumentRutTypeDocumentNumberValueGet**](DefaultApi.md#v2dtedocumentruttypedocumentnumbervalueget) | **GET** /v2/dte/document/{rut}/{type}/{documentNumber}/{value} | Entrega la información de un documento emitido o recibido en Openfactura.

# **v2DteDocumentPost**
> \Swagger\Client\Model\DTEResponse v2DteDocumentPost($body, $apikey)

Realiza la emisión de documentos DTE

Emisión de DTE

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DTERequest(); // \Swagger\Client\Model\DTERequest | 
$apikey = "apikey_example"; // string | openfactura apikey

try {
    $result = $apiInstance->v2DteDocumentPost($body, $apikey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->v2DteDocumentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DTERequest**](../Model/DTERequest.md)|  | [optional]
 **apikey** | **string**| openfactura apikey | [optional]

### Return type

[**\Swagger\Client\Model\DTEResponse**](../Model/DTEResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v2DteDocumentReceivedPost**
> \Swagger\Client\Model\DocumentReceivedResponse v2DteDocumentReceivedPost($body, $apikey)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DocumentReceivedFilter(); // \Swagger\Client\Model\DocumentReceivedFilter | 
$apikey = "apikey_example"; // string | openfactura apikey

try {
    $result = $apiInstance->v2DteDocumentReceivedPost($body, $apikey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->v2DteDocumentReceivedPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DocumentReceivedFilter**](../Model/DocumentReceivedFilter.md)|  | [optional]
 **apikey** | **string**| openfactura apikey | [optional]

### Return type

[**\Swagger\Client\Model\DocumentReceivedResponse**](../Model/DocumentReceivedResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v2DteDocumentRutTypeDocumentNumberValueGet**
> \Swagger\Client\Model\InlineResponse200 v2DteDocumentRutTypeDocumentNumberValueGet($rut, $type, $document_number, $value, $apikey)

Entrega la información de un documento emitido o recibido en Openfactura.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    $result = $apiInstance->v2DteDocumentRutTypeDocumentNumberValueGet($rut, $type, $document_number, $value, $apikey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->v2DteDocumentRutTypeDocumentNumberValueGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rut** | **string**|  |
 **type** | **string**|  |
 **document_number** | **string**|  |
 **value** | **string**|  |
 **apikey** | **string**| openfactura apikey | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

