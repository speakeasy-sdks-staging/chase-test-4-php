<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace chase_test_4\speakeasy_aPI\Models\Shared;


/**
 * BoundedRequest - A BoundedRequest is a request that has been logged by the Speakeasy without the contents of the request.
 * 
 * @package chase_test_4\speakeasy_aPI\Models\Shared
 * @access public
 */
class BoundedRequest
{
    /**
     * The ID of the ApiEndpoint this request was made to.
     * 
     * @var string $apiEndpointId
     */
	#[\JMS\Serializer\Annotation\SerializedName('api_endpoint_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $apiEndpointId;
    
    /**
     * The ID of the Api this request was made to.
     * 
     * @var string $apiId
     */
	#[\JMS\Serializer\Annotation\SerializedName('api_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $apiId;
    
    /**
     * Creation timestamp.
     * 
     * @var \DateTime $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    /**
     * The ID of the customer that made this request.
     * 
     * @var string $customerId
     */
	#[\JMS\Serializer\Annotation\SerializedName('customer_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $customerId;
    
    /**
     * The latency of the request.
     * 
     * @var int $latency
     */
	#[\JMS\Serializer\Annotation\SerializedName('latency')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $latency;
    
    /**
     * A set of values associated with a metadata key.
     * 
     * @var ?array<string, array<string>> $metadata
     */
	#[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<string, array<string>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $metadata = null;
    
    /**
     * HTTP verb.
     * 
     * @var string $method
     */
	#[\JMS\Serializer\Annotation\SerializedName('method')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $method;
    
    /**
     * The path of the request.
     * 
     * @var string $path
     */
	#[\JMS\Serializer\Annotation\SerializedName('path')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $path;
    
    /**
     * The time the request finished.
     * 
     * @var \DateTime $requestFinishTime
     */
	#[\JMS\Serializer\Annotation\SerializedName('request_finish_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $requestFinishTime;
    
    /**
     * The ID of this request.
     * 
     * @var string $requestId
     */
	#[\JMS\Serializer\Annotation\SerializedName('request_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $requestId;
    
    /**
     * The time the request was made.
     * 
     * @var \DateTime $requestStartTime
     */
	#[\JMS\Serializer\Annotation\SerializedName('request_start_time')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $requestStartTime;
    
    /**
     * The status code of the request.
     * 
     * @var int $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $status;
    
    /**
     * The version ID of the Api this request was made to.
     * 
     * @var string $versionId
     */
	#[\JMS\Serializer\Annotation\SerializedName('version_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $versionId;
    
    /**
     * The workspace ID this request was made to.
     * 
     * @var string $workspaceId
     */
	#[\JMS\Serializer\Annotation\SerializedName('workspace_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $workspaceId;
    
	public function __construct()
	{
		$this->apiEndpointId = "";
		$this->apiId = "";
		$this->createdAt = new \DateTime();
		$this->customerId = "";
		$this->latency = 0;
		$this->metadata = null;
		$this->method = "";
		$this->path = "";
		$this->requestFinishTime = new \DateTime();
		$this->requestId = "";
		$this->requestStartTime = new \DateTime();
		$this->status = 0;
		$this->versionId = "";
		$this->workspaceId = "";
	}
}
