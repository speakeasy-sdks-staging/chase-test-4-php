<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace chase_test_4\speakeasy_aPI;

class Embeds 
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
     * Get an embed access token for the current workspace.
     * 
     * Returns an embed access token for the current workspace. This can be used to authenticate access to externally embedded content.
     * Filters can be applied allowing views to be filtered to things like particular customerIds.
     * 
     * @param \chase_test_4\speakeasy_aPI\Models\Operations\GetEmbedAccessTokenRequest $request
     * @return \chase_test_4\speakeasy_aPI\Models\Operations\GetEmbedAccessTokenResponse
     */
	public function getEmbedAccessToken(
        ?\chase_test_4\speakeasy_aPI\Models\Operations\GetEmbedAccessTokenRequest $request,
    ): \chase_test_4\speakeasy_aPI\Models\Operations\GetEmbedAccessTokenResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/workspace/embed-access-token');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\chase_test_4\speakeasy_aPI\Models\Operations\GetEmbedAccessTokenRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \chase_test_4\speakeasy_aPI\Models\Operations\GetEmbedAccessTokenResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->embedAccessTokenResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'chase_test_4\speakeasy_aPI\Models\Shared\EmbedAccessTokenResponse', 'json');
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
     * Get all valid embed access tokens for the current workspace.
     * 
     * @return \chase_test_4\speakeasy_aPI\Models\Operations\GetValidEmbedAccessTokensResponse
     */
	public function getValidEmbedAccessTokens(
    ): \chase_test_4\speakeasy_aPI\Models\Operations\GetValidEmbedAccessTokensResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/workspace/embed-access-tokens/valid');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \chase_test_4\speakeasy_aPI\Models\Operations\GetValidEmbedAccessTokensResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->embedTokens = $serializer->deserialize((string)$httpResponse->getBody(), 'array<chase_test_4\speakeasy_aPI\Models\Shared\EmbedToken>', 'json');
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
     * Revoke an embed access EmbedToken.
     * 
     * @param \chase_test_4\speakeasy_aPI\Models\Operations\RevokeEmbedAccessTokenRequest $request
     * @return \chase_test_4\speakeasy_aPI\Models\Operations\RevokeEmbedAccessTokenResponse
     */
	public function revokeEmbedAccessToken(
        ?\chase_test_4\speakeasy_aPI\Models\Operations\RevokeEmbedAccessTokenRequest $request,
    ): \chase_test_4\speakeasy_aPI\Models\Operations\RevokeEmbedAccessTokenResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/workspace/embed-access-tokens/{tokenID}', \chase_test_4\speakeasy_aPI\Models\Operations\RevokeEmbedAccessTokenRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \chase_test_4\speakeasy_aPI\Models\Operations\RevokeEmbedAccessTokenResponse();
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
}