<?php
/**
 * CustomerGroupInfoListApi
 * PHP version 5
 *
 * @category Class
 * @package  Seacommerce\Unit4\Multivers\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * UNIT4 Multivers WebApi
 *
 * Unofficial SDK for the UNIT4 Multivers WebApi version 1.10.0 (by Seacommerce).
 *
 * The version of the OpenAPI document: 1.10.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Seacommerce\Unit4\Multivers\Sdk\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Seacommerce\Unit4\Multivers\Sdk\ApiException;
use Seacommerce\Unit4\Multivers\Sdk\ApiTrait;
use Seacommerce\Unit4\Multivers\Sdk\Configuration;
use Seacommerce\Unit4\Multivers\Sdk\HeaderSelector;
use Seacommerce\Unit4\Multivers\Sdk\ObjectSerializer;

/**
 * CustomerGroupInfoListApi Class Doc Comment
 *
 * @category Class
 * @package  Seacommerce\Unit4\Multivers\Sdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomerGroupInfoListApi
{
    use ApiTrait{
        ApiTrait::__construct as private __apiTraitConstructor;
    }

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param array           $clientConfig
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        Configuration $config,
        array $clientConfig = [],
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->__apiTraitConstructor($config, $clientConfig);
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getCustomerGroupInfoList
     *
     * Gets a list of CustomerGroupInfo that matches the specified criteria
     *
     * @param  string $database database (required)
     * @param  string $fiscalYear fiscalYear (optional)
     * @param  string $select select (optional)
     * @param  string $filter filter (optional)
     * @param  string $orderby orderby (optional)
     * @param  string $top top (optional)
     * @param  string $skip skip (optional)
     * @param  string $expand expand (optional)
     *
     * @throws \Seacommerce\Unit4\Multivers\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Seacommerce\Unit4\Multivers\Sdk\Model\CustomerGroupInfo[]
     */
    public function getCustomerGroupInfoList($database, $fiscalYear = null, $select = null, $filter = null, $orderby = null, $top = null, $skip = null, $expand = null)
    {
        list($response) = $this->getCustomerGroupInfoListWithHttpInfo($database, $fiscalYear, $select, $filter, $orderby, $top, $skip, $expand);
        return $response;
    }

    /**
     * Operation getCustomerGroupInfoListWithHttpInfo
     *
     * Gets a list of CustomerGroupInfo that matches the specified criteria
     *
     * @param  string $database (required)
     * @param  string $fiscalYear (optional)
     * @param  string $select (optional)
     * @param  string $filter (optional)
     * @param  string $orderby (optional)
     * @param  string $top (optional)
     * @param  string $skip (optional)
     * @param  string $expand (optional)
     *
     * @throws \Seacommerce\Unit4\Multivers\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Seacommerce\Unit4\Multivers\Sdk\Model\CustomerGroupInfo[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerGroupInfoListWithHttpInfo($database, $fiscalYear = null, $select = null, $filter = null, $orderby = null, $top = null, $skip = null, $expand = null)
    {
        $request = $this->getCustomerGroupInfoListRequest($database, $fiscalYear, $select, $filter, $orderby, $top, $skip, $expand);

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
            switch($statusCode) {
                case 200:
                    if ('\Seacommerce\Unit4\Multivers\Sdk\Model\CustomerGroupInfo[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Seacommerce\Unit4\Multivers\Sdk\Model\CustomerGroupInfo[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Seacommerce\Unit4\Multivers\Sdk\Model\CustomerGroupInfo[]';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\Seacommerce\Unit4\Multivers\Sdk\Model\CustomerGroupInfo[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCustomerGroupInfoListAsync
     *
     * Gets a list of CustomerGroupInfo that matches the specified criteria
     *
     * @param  string $database (required)
     * @param  string $fiscalYear (optional)
     * @param  string $select (optional)
     * @param  string $filter (optional)
     * @param  string $orderby (optional)
     * @param  string $top (optional)
     * @param  string $skip (optional)
     * @param  string $expand (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomerGroupInfoListAsync($database, $fiscalYear = null, $select = null, $filter = null, $orderby = null, $top = null, $skip = null, $expand = null)
    {
        return $this->getCustomerGroupInfoListAsyncWithHttpInfo($database, $fiscalYear, $select, $filter, $orderby, $top, $skip, $expand)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCustomerGroupInfoListAsyncWithHttpInfo
     *
     * Gets a list of CustomerGroupInfo that matches the specified criteria
     *
     * @param  string $database (required)
     * @param  string $fiscalYear (optional)
     * @param  string $select (optional)
     * @param  string $filter (optional)
     * @param  string $orderby (optional)
     * @param  string $top (optional)
     * @param  string $skip (optional)
     * @param  string $expand (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomerGroupInfoListAsyncWithHttpInfo($database, $fiscalYear = null, $select = null, $filter = null, $orderby = null, $top = null, $skip = null, $expand = null)
    {
        $returnType = '\Seacommerce\Unit4\Multivers\Sdk\Model\CustomerGroupInfo[]';
        $request = $this->getCustomerGroupInfoListRequest($database, $fiscalYear, $select, $filter, $orderby, $top, $skip, $expand);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
     * Create request for operation 'getCustomerGroupInfoList'
     *
     * @param  string $database (required)
     * @param  string $fiscalYear (optional)
     * @param  string $select (optional)
     * @param  string $filter (optional)
     * @param  string $orderby (optional)
     * @param  string $top (optional)
     * @param  string $skip (optional)
     * @param  string $expand (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCustomerGroupInfoListRequest($database, $fiscalYear = null, $select = null, $filter = null, $orderby = null, $top = null, $skip = null, $expand = null)
    {
        // verify the required parameter 'database' is set
        if ($database === null || (is_array($database) && count($database) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $database when calling getCustomerGroupInfoList'
            );
        }

        $resourcePath = '/api/{database}/CustomerGroupInfoList';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($fiscalYear !== null) {
            $queryParams['fiscalYear'] = ObjectSerializer::toQueryValue($fiscalYear);
        }
        // query params
        if ($select !== null) {
            $queryParams['$select'] = ObjectSerializer::toQueryValue($select);
        }
        // query params
        if ($filter !== null) {
            $queryParams['$filter'] = ObjectSerializer::toQueryValue($filter);
        }
        // query params
        if ($orderby !== null) {
            $queryParams['$orderby'] = ObjectSerializer::toQueryValue($orderby);
        }
        // query params
        if ($top !== null) {
            $queryParams['$top'] = ObjectSerializer::toQueryValue($top);
        }
        // query params
        if ($skip !== null) {
            $queryParams['$skip'] = ObjectSerializer::toQueryValue($skip);
        }
        // query params
        if ($expand !== null) {
            $queryParams['$expand'] = ObjectSerializer::toQueryValue($expand);
        }

        // path params
        if ($database !== null) {
            $resourcePath = str_replace(
                '{' . 'database' . '}',
                ObjectSerializer::toPathValue($database),
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
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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
