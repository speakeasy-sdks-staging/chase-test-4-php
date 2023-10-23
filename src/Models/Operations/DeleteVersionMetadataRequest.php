<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace chase_test_4\speakeasy_aPI\Models\Operations;

use \chase_test_4\speakeasy_aPI\Utils\SpeakeasyMetadata;
class DeleteVersionMetadataRequest
{
    /**
     * The ID of the Api to delete metadata for.
     * 
     * @var string $apiID
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiID')]
    public string $apiID;
    
    /**
     * The key of the metadata to delete.
     * 
     * @var string $metaKey
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=metaKey')]
    public string $metaKey;
    
    /**
     * The value of the metadata to delete.
     * 
     * @var string $metaValue
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=metaValue')]
    public string $metaValue;
    
    /**
     * The version ID of the Api to delete metadata for.
     * 
     * @var string $versionID
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=versionID')]
    public string $versionID;
    
	public function __construct()
	{
		$this->apiID = "";
		$this->metaKey = "";
		$this->metaValue = "";
		$this->versionID = "";
	}
}
