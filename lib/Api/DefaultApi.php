<?php
/**
 * DefaultApi
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

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * DefaultApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DefaultApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation v2DteDocumentPost
     *
     * Realiza la emisión de documentos DTE
     *
     * @param  \Swagger\Client\Model\DTERequest $body body (optional)
     * @param  string $apikey openfactura apikey (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\DTEResponse
     */
    public function v2DteDocumentPost($body = null, $apikey = null)
    {
        list($response) = $this->v2DteDocumentPostWithHttpInfo($body, $apikey);
        return $response;
    }

    /**
     * Operation v2DteDocumentPostWithHttpInfo
     *
     * Realiza la emisión de documentos DTE
     *
     * @param  \Swagger\Client\Model\DTERequest $body (optional)
     * @param  string $apikey openfactura apikey (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\DTEResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function v2DteDocumentPostWithHttpInfo($body = null, $apikey = null)
    {
        $returnType = '\Swagger\Client\Model\DTEResponse';
        $request = $this->v2DteDocumentPostRequest($body, $apikey);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\DTEResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v2DteDocumentPostAsync
     *
     * Realiza la emisión de documentos DTE
     *
     * @param  \Swagger\Client\Model\DTERequest $body (optional)
     * @param  string $apikey openfactura apikey (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v2DteDocumentPostAsync($body = null, $apikey = null)
    {
        return $this->v2DteDocumentPostAsyncWithHttpInfo($body, $apikey)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v2DteDocumentPostAsyncWithHttpInfo
     *
     * Realiza la emisión de documentos DTE
     *
     * @param  \Swagger\Client\Model\DTERequest $body (optional)
     * @param  string $apikey openfactura apikey (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v2DteDocumentPostAsyncWithHttpInfo($body = null, $apikey = null)
    {
        $returnType = '\Swagger\Client\Model\DTEResponse';
        $request = $this->v2DteDocumentPostRequest($body, $apikey);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v2DteDocumentPost'
     *
     * @param  \Swagger\Client\Model\DTERequest $body (optional)
     * @param  string $apikey openfactura apikey (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function v2DteDocumentPostRequest($body = null, $apikey = null)
    {

        $resourcePath = '/v2/dte/document';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($apikey !== null) {
            $headerParams['apikey'] = ObjectSerializer::toHeaderValue($apikey);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation v2DteDocumentReceivedPost
     *
     * @param  \Swagger\Client\Model\DocumentReceivedFilter $body body (optional)
     * @param  string $apikey openfactura apikey (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\DocumentReceivedResponse
     */
    public function v2DteDocumentReceivedPost($body = null, $apikey = null)
    {
        list($response) = $this->v2DteDocumentReceivedPostWithHttpInfo($body, $apikey);
        return $response;
    }

    /**
     * Operation v2DteDocumentReceivedPostWithHttpInfo
     *
     * @param  \Swagger\Client\Model\DocumentReceivedFilter $body (optional)
     * @param  string $apikey openfactura apikey (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\DocumentReceivedResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function v2DteDocumentReceivedPostWithHttpInfo($body = null, $apikey = null)
    {
        $returnType = '\Swagger\Client\Model\DocumentReceivedResponse';
        $request = $this->v2DteDocumentReceivedPostRequest($body, $apikey);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\DocumentReceivedResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v2DteDocumentReceivedPostAsync
     *
     * 
     *
     * @param  \Swagger\Client\Model\DocumentReceivedFilter $body (optional)
     * @param  string $apikey openfactura apikey (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v2DteDocumentReceivedPostAsync($body = null, $apikey = null)
    {
        return $this->v2DteDocumentReceivedPostAsyncWithHttpInfo($body, $apikey)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v2DteDocumentReceivedPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Swagger\Client\Model\DocumentReceivedFilter $body (optional)
     * @param  string $apikey openfactura apikey (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v2DteDocumentReceivedPostAsyncWithHttpInfo($body = null, $apikey = null)
    {
        $returnType = '\Swagger\Client\Model\DocumentReceivedResponse';
        $request = $this->v2DteDocumentReceivedPostRequest($body, $apikey);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v2DteDocumentReceivedPost'
     *
     * @param  \Swagger\Client\Model\DocumentReceivedFilter $body (optional)
     * @param  string $apikey openfactura apikey (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function v2DteDocumentReceivedPostRequest($body = null, $apikey = null)
    {

        $resourcePath = '/v2/dte/document/received';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($apikey !== null) {
            $headerParams['apikey'] = ObjectSerializer::toHeaderValue($apikey);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation v2DteDocumentRutTypeDocumentNumberValueGet
     *
     * Entrega la información de un documento emitido o recibido en Openfactura.
     *
     * @param  string $rut rut (required)
     * @param  string $type type (required)
     * @param  string $document_number document_number (required)
     * @param  string $value value (required)
     * @param  string $apikey openfactura apikey (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse200
     */
    public function v2DteDocumentRutTypeDocumentNumberValueGet($rut, $type, $document_number, $value, $apikey = null)
    {
        list($response) = $this->v2DteDocumentRutTypeDocumentNumberValueGetWithHttpInfo($rut, $type, $document_number, $value, $apikey);
        return $response;
    }

    /**
     * Operation v2DteDocumentRutTypeDocumentNumberValueGetWithHttpInfo
     *
     * Entrega la información de un documento emitido o recibido en Openfactura.
     *
     * @param  string $rut (required)
     * @param  string $type (required)
     * @param  string $document_number (required)
     * @param  string $value (required)
     * @param  string $apikey openfactura apikey (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function v2DteDocumentRutTypeDocumentNumberValueGetWithHttpInfo($rut, $type, $document_number, $value, $apikey = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse200';
        $request = $this->v2DteDocumentRutTypeDocumentNumberValueGetRequest($rut, $type, $document_number, $value, $apikey);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse200',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v2DteDocumentRutTypeDocumentNumberValueGetAsync
     *
     * Entrega la información de un documento emitido o recibido en Openfactura.
     *
     * @param  string $rut (required)
     * @param  string $type (required)
     * @param  string $document_number (required)
     * @param  string $value (required)
     * @param  string $apikey openfactura apikey (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v2DteDocumentRutTypeDocumentNumberValueGetAsync($rut, $type, $document_number, $value, $apikey = null)
    {
        return $this->v2DteDocumentRutTypeDocumentNumberValueGetAsyncWithHttpInfo($rut, $type, $document_number, $value, $apikey)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v2DteDocumentRutTypeDocumentNumberValueGetAsyncWithHttpInfo
     *
     * Entrega la información de un documento emitido o recibido en Openfactura.
     *
     * @param  string $rut (required)
     * @param  string $type (required)
     * @param  string $document_number (required)
     * @param  string $value (required)
     * @param  string $apikey openfactura apikey (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v2DteDocumentRutTypeDocumentNumberValueGetAsyncWithHttpInfo($rut, $type, $document_number, $value, $apikey = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse200';
        $request = $this->v2DteDocumentRutTypeDocumentNumberValueGetRequest($rut, $type, $document_number, $value, $apikey);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v2DteDocumentRutTypeDocumentNumberValueGet'
     *
     * @param  string $rut (required)
     * @param  string $type (required)
     * @param  string $document_number (required)
     * @param  string $value (required)
     * @param  string $apikey openfactura apikey (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function v2DteDocumentRutTypeDocumentNumberValueGetRequest($rut, $type, $document_number, $value, $apikey = null)
    {
        // verify the required parameter 'rut' is set
        if ($rut === null || (is_array($rut) && count($rut) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $rut when calling v2DteDocumentRutTypeDocumentNumberValueGet'
            );
        }
        // verify the required parameter 'type' is set
        if ($type === null || (is_array($type) && count($type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $type when calling v2DteDocumentRutTypeDocumentNumberValueGet'
            );
        }
        // verify the required parameter 'document_number' is set
        if ($document_number === null || (is_array($document_number) && count($document_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $document_number when calling v2DteDocumentRutTypeDocumentNumberValueGet'
            );
        }
        // verify the required parameter 'value' is set
        if ($value === null || (is_array($value) && count($value) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $value when calling v2DteDocumentRutTypeDocumentNumberValueGet'
            );
        }

        $resourcePath = '/v2/dte/document/{rut}/{type}/{documentNumber}/{value}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($apikey !== null) {
            $headerParams['apikey'] = ObjectSerializer::toHeaderValue($apikey);
        }

        // path params
        if ($rut !== null) {
            $resourcePath = str_replace(
                '{' . 'rut' . '}',
                ObjectSerializer::toPathValue($rut),
                $resourcePath
            );
        }
        // path params
        if ($type !== null) {
            $resourcePath = str_replace(
                '{' . 'type' . '}',
                ObjectSerializer::toPathValue($type),
                $resourcePath
            );
        }
        // path params
        if ($document_number !== null) {
            $resourcePath = str_replace(
                '{' . 'documentNumber' . '}',
                ObjectSerializer::toPathValue($document_number),
                $resourcePath
            );
        }
        // path params
        if ($value !== null) {
            $resourcePath = str_replace(
                '{' . 'value' . '}',
                ObjectSerializer::toPathValue($value),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
