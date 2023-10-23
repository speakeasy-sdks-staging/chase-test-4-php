<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace chase_test_4\speakeasy_aPI;

class Metadata 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Delete metadata for a particular apiID and versionID.
     * 
     * @param \chase_test_4\speakeasy_aPI\Models\Operations\DeleteVersionMetadataRequest $request
     * @return \chase_test_4\speakeasy_aPI\Models\Operations\DeleteVersionMetadataResponse
     */
	public function deleteVersionMetadata(
        ?\chase_test_4\speakeasy_aPI\Models\Operations\DeleteVersionMetadataRequest $request,
    ): \chase_test_4\speakeasy_aPI\Models\Operations\DeleteVersionMetadataResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/metadata/{metaKey}/{metaValue}', \chase_test_4\speakeasy_aPI\Models\Operations\DeleteVersionMetadataRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \chase_test_4\speakeasy_aPI\Models\Operations\DeleteVersionMetadataResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'chase_test_4\speakeasy_aPI\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Get all metadata for a particular apiID and versionID.
     * 
     * @param \chase_test_4\speakeasy_aPI\Models\Operations\GetVersionMetadataRequest $request
     * @return \chase_test_4\speakeasy_aPI\Models\Operations\GetVersionMetadataResponse
     */
	public function getVersionMetadata(
        ?\chase_test_4\speakeasy_aPI\Models\Operations\GetVersionMetadataRequest $request,
    ): \chase_test_4\speakeasy_aPI\Models\Operations\GetVersionMetadataResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/metadata', \chase_test_4\speakeasy_aPI\Models\Operations\GetVersionMetadataRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \chase_test_4\speakeasy_aPI\Models\Operations\GetVersionMetadataResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->versionMetadata = $serializer->deserialize((string)$httpResponse->getBody(), 'array<chase_test_4\speakeasy_aPI\Models\Shared\VersionMetadata>', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'chase_test_4\speakeasy_aPI\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Insert metadata for a particular apiID and versionID.
     * 
     * @param \chase_test_4\speakeasy_aPI\Models\Operations\InsertVersionMetadataRequest $request
     * @return \chase_test_4\speakeasy_aPI\Models\Operations\InsertVersionMetadataResponse
     */
	public function insertVersionMetadata(
        \chase_test_4\speakeasy_aPI\Models\Operations\InsertVersionMetadataRequest $request,
    ): \chase_test_4\speakeasy_aPI\Models\Operations\InsertVersionMetadataResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/apis/{apiID}/version/{versionID}/metadata', \chase_test_4\speakeasy_aPI\Models\Operations\InsertVersionMetadataRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "versionMetadataInput", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \chase_test_4\speakeasy_aPI\Models\Operations\InsertVersionMetadataResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->versionMetadata = $serializer->deserialize((string)$httpResponse->getBody(), 'chase_test_4\speakeasy_aPI\Models\Shared\VersionMetadata', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'chase_test_4\speakeasy_aPI\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
}