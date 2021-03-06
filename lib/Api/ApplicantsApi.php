<?php
/**
 * ApplicantsApi
 * PHP version 5
 *
 * @category Class
 * @package  Acqualify\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API Documentation
 *
 * The Acqualify API provides services to mortgage brokers and realtors to help applicants qualify for loans.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Acqualify\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Acqualify\Client\ApiException;
use Acqualify\Client\Configuration;
use Acqualify\Client\HeaderSelector;
use Acqualify\Client\ObjectSerializer;

/**
 * ApplicantsApi Class Doc Comment
 *
 * @category Class
 * @package  Acqualify\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApplicantsApi
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
     * Operation lookupApplicant
     *
     * Returns public information about a loan applicant
     *
     * @param  \Acqualify\Client\Model\FirstName $first_name Applicant first name (required)
     * @param  \Acqualify\Client\Model\LastName $last_name Applicant last name (required)
     * @param  \Acqualify\Client\Model\AddrLine1 $addr_line1 Address line 1 (required)
     * @param  \Acqualify\Client\Model\City $city City (required)
     * @param  \Acqualify\Client\Model\State $state State (2-letter abbreviation) (required)
     * @param  \Acqualify\Client\Model\Zip $zip Zip code (required)
     * @param  \Acqualify\Client\Model\Dob $dob Date of birth (MM/DD/YYYY) (required)
     * @param  \Acqualify\Client\Model\AddrLine2 $addr_line2 Address line 2 (optional)
     * @param  \Acqualify\Client\Model\Email $email Applicant email address (optional)
     * @param  \Acqualify\Client\Model\PhoneNumber $phone_number Phone number (optional)
     * @param  \Acqualify\Client\Model\LoanAmount $loan_amount Loan amount (optional)
     *
     * @throws \Acqualify\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Acqualify\Client\Model\InlineResponse200
     */
    public function lookupApplicant($first_name, $last_name, $addr_line1, $city, $state, $zip, $dob, $addr_line2 = null, $email = null, $phone_number = null, $loan_amount = null)
    {
        list($response) = $this->lookupApplicantWithHttpInfo($first_name, $last_name, $addr_line1, $city, $state, $zip, $dob, $addr_line2, $email, $phone_number, $loan_amount);
        return $response;
    }

    /**
     * Operation lookupApplicantWithHttpInfo
     *
     * Returns public information about a loan applicant
     *
     * @param  \Acqualify\Client\Model\FirstName $first_name Applicant first name (required)
     * @param  \Acqualify\Client\Model\LastName $last_name Applicant last name (required)
     * @param  \Acqualify\Client\Model\AddrLine1 $addr_line1 Address line 1 (required)
     * @param  \Acqualify\Client\Model\City $city City (required)
     * @param  \Acqualify\Client\Model\State $state State (2-letter abbreviation) (required)
     * @param  \Acqualify\Client\Model\Zip $zip Zip code (required)
     * @param  \Acqualify\Client\Model\Dob $dob Date of birth (MM/DD/YYYY) (required)
     * @param  \Acqualify\Client\Model\AddrLine2 $addr_line2 Address line 2 (optional)
     * @param  \Acqualify\Client\Model\Email $email Applicant email address (optional)
     * @param  \Acqualify\Client\Model\PhoneNumber $phone_number Phone number (optional)
     * @param  \Acqualify\Client\Model\LoanAmount $loan_amount Loan amount (optional)
     *
     * @throws \Acqualify\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Acqualify\Client\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function lookupApplicantWithHttpInfo($first_name, $last_name, $addr_line1, $city, $state, $zip, $dob, $addr_line2 = null, $email = null, $phone_number = null, $loan_amount = null)
    {
        $returnType = '\Acqualify\Client\Model\InlineResponse200';
        $request = $this->lookupApplicantRequest($first_name, $last_name, $addr_line1, $city, $state, $zip, $dob, $addr_line2, $email, $phone_number, $loan_amount);

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
                        '\Acqualify\Client\Model\InlineResponse200',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation lookupApplicantAsync
     *
     * Returns public information about a loan applicant
     *
     * @param  \Acqualify\Client\Model\FirstName $first_name Applicant first name (required)
     * @param  \Acqualify\Client\Model\LastName $last_name Applicant last name (required)
     * @param  \Acqualify\Client\Model\AddrLine1 $addr_line1 Address line 1 (required)
     * @param  \Acqualify\Client\Model\City $city City (required)
     * @param  \Acqualify\Client\Model\State $state State (2-letter abbreviation) (required)
     * @param  \Acqualify\Client\Model\Zip $zip Zip code (required)
     * @param  \Acqualify\Client\Model\Dob $dob Date of birth (MM/DD/YYYY) (required)
     * @param  \Acqualify\Client\Model\AddrLine2 $addr_line2 Address line 2 (optional)
     * @param  \Acqualify\Client\Model\Email $email Applicant email address (optional)
     * @param  \Acqualify\Client\Model\PhoneNumber $phone_number Phone number (optional)
     * @param  \Acqualify\Client\Model\LoanAmount $loan_amount Loan amount (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function lookupApplicantAsync($first_name, $last_name, $addr_line1, $city, $state, $zip, $dob, $addr_line2 = null, $email = null, $phone_number = null, $loan_amount = null)
    {
        return $this->lookupApplicantAsyncWithHttpInfo($first_name, $last_name, $addr_line1, $city, $state, $zip, $dob, $addr_line2, $email, $phone_number, $loan_amount)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation lookupApplicantAsyncWithHttpInfo
     *
     * Returns public information about a loan applicant
     *
     * @param  \Acqualify\Client\Model\FirstName $first_name Applicant first name (required)
     * @param  \Acqualify\Client\Model\LastName $last_name Applicant last name (required)
     * @param  \Acqualify\Client\Model\AddrLine1 $addr_line1 Address line 1 (required)
     * @param  \Acqualify\Client\Model\City $city City (required)
     * @param  \Acqualify\Client\Model\State $state State (2-letter abbreviation) (required)
     * @param  \Acqualify\Client\Model\Zip $zip Zip code (required)
     * @param  \Acqualify\Client\Model\Dob $dob Date of birth (MM/DD/YYYY) (required)
     * @param  \Acqualify\Client\Model\AddrLine2 $addr_line2 Address line 2 (optional)
     * @param  \Acqualify\Client\Model\Email $email Applicant email address (optional)
     * @param  \Acqualify\Client\Model\PhoneNumber $phone_number Phone number (optional)
     * @param  \Acqualify\Client\Model\LoanAmount $loan_amount Loan amount (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function lookupApplicantAsyncWithHttpInfo($first_name, $last_name, $addr_line1, $city, $state, $zip, $dob, $addr_line2 = null, $email = null, $phone_number = null, $loan_amount = null)
    {
        $returnType = '\Acqualify\Client\Model\InlineResponse200';
        $request = $this->lookupApplicantRequest($first_name, $last_name, $addr_line1, $city, $state, $zip, $dob, $addr_line2, $email, $phone_number, $loan_amount);

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
     * Create request for operation 'lookupApplicant'
     *
     * @param  \Acqualify\Client\Model\FirstName $first_name Applicant first name (required)
     * @param  \Acqualify\Client\Model\LastName $last_name Applicant last name (required)
     * @param  \Acqualify\Client\Model\AddrLine1 $addr_line1 Address line 1 (required)
     * @param  \Acqualify\Client\Model\City $city City (required)
     * @param  \Acqualify\Client\Model\State $state State (2-letter abbreviation) (required)
     * @param  \Acqualify\Client\Model\Zip $zip Zip code (required)
     * @param  \Acqualify\Client\Model\Dob $dob Date of birth (MM/DD/YYYY) (required)
     * @param  \Acqualify\Client\Model\AddrLine2 $addr_line2 Address line 2 (optional)
     * @param  \Acqualify\Client\Model\Email $email Applicant email address (optional)
     * @param  \Acqualify\Client\Model\PhoneNumber $phone_number Phone number (optional)
     * @param  \Acqualify\Client\Model\LoanAmount $loan_amount Loan amount (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function lookupApplicantRequest($first_name, $last_name, $addr_line1, $city, $state, $zip, $dob, $addr_line2 = null, $email = null, $phone_number = null, $loan_amount = null)
    {
        // verify the required parameter 'first_name' is set
        if ($first_name === null || (is_array($first_name) && count($first_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $first_name when calling lookupApplicant'
            );
        }
        // verify the required parameter 'last_name' is set
        if ($last_name === null || (is_array($last_name) && count($last_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $last_name when calling lookupApplicant'
            );
        }
        // verify the required parameter 'addr_line1' is set
        if ($addr_line1 === null || (is_array($addr_line1) && count($addr_line1) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $addr_line1 when calling lookupApplicant'
            );
        }
        // verify the required parameter 'city' is set
        if ($city === null || (is_array($city) && count($city) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $city when calling lookupApplicant'
            );
        }
        // verify the required parameter 'state' is set
        if ($state === null || (is_array($state) && count($state) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $state when calling lookupApplicant'
            );
        }
        // verify the required parameter 'zip' is set
        if ($zip === null || (is_array($zip) && count($zip) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $zip when calling lookupApplicant'
            );
        }
        // verify the required parameter 'dob' is set
        if ($dob === null || (is_array($dob) && count($dob) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dob when calling lookupApplicant'
            );
        }

        $resourcePath = '/api/v1/lookup-applicant';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($first_name !== null) {
            $queryParams['firstName'] = ObjectSerializer::toQueryValue($first_name, null);
        }
        // query params
        if ($last_name !== null) {
            $queryParams['lastName'] = ObjectSerializer::toQueryValue($last_name, null);
        }
        // query params
        if ($addr_line1 !== null) {
            $queryParams['addrLine1'] = ObjectSerializer::toQueryValue($addr_line1, null);
        }
        // query params
        if ($addr_line2 !== null) {
            $queryParams['addrLine2'] = ObjectSerializer::toQueryValue($addr_line2, null);
        }
        // query params
        if ($city !== null) {
            $queryParams['city'] = ObjectSerializer::toQueryValue($city, null);
        }
        // query params
        if ($state !== null) {
            $queryParams['state'] = ObjectSerializer::toQueryValue($state, null);
        }
        // query params
        if ($zip !== null) {
            $queryParams['zip'] = ObjectSerializer::toQueryValue($zip, null);
        }
        // query params
        if ($dob !== null) {
            $queryParams['dob'] = ObjectSerializer::toQueryValue($dob, null);
        }
        // query params
        if ($email !== null) {
            $queryParams['email'] = ObjectSerializer::toQueryValue($email, null);
        }
        // query params
        if ($phone_number !== null) {
            $queryParams['phoneNumber'] = ObjectSerializer::toQueryValue($phone_number, null);
        }
        // query params
        if ($loan_amount !== null) {
            $queryParams['loanAmount'] = ObjectSerializer::toQueryValue($loan_amount, null);
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
