<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace chase_test_4\speakeasy_aPI\Models\Shared;


/**
 * Api - An Api is representation of a API (a collection of API Endpoints) within the Speakeasy Platform.
 * 
 * @package chase_test_4\speakeasy_aPI\Models\Shared
 * @access public
 */
class Api
{
    /**
     * The ID of this Api. This is a human-readable name (subject to change).
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
     * A detailed description of the Api.
     * 
     * @var string $description
     */
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $description;
    
    /**
     * Determines if all the endpoints within the Api are found in the OpenAPI spec associated with the Api.
     * 
     * @var ?bool $matched
     */
	#[\JMS\Serializer\Annotation\SerializedName('matched')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $matched = null;
    
    /**
     * A set of values associated with a meta_data key. This field is only set on get requests.
     * 
     * @var ?array<string, array<string>> $metaData
     */
	#[\JMS\Serializer\Annotation\SerializedName('meta_data')]
    #[\JMS\Serializer\Annotation\Type('array<string, array<string>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $metaData = null;
    
    /**
     * Last update timestamp.
     * 
     * @var \DateTime $updatedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updatedAt;
    
    /**
     * The version ID of this Api. This is semantic version identifier.
     * 
     * @var string $versionId
     */
	#[\JMS\Serializer\Annotation\SerializedName('version_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $versionId;
    
    /**
     * The workspace ID this Api belongs to.
     * 
     * @var string $workspaceId
     */
	#[\JMS\Serializer\Annotation\SerializedName('workspace_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $workspaceId;
    
	public function __construct()
	{
		$this->apiId = "";
		$this->createdAt = new \DateTime();
		$this->description = "";
		$this->matched = null;
		$this->metaData = null;
		$this->updatedAt = new \DateTime();
		$this->versionId = "";
		$this->workspaceId = "";
	}
}
