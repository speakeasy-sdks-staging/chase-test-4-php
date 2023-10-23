<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace chase_test_4\speakeasy_aPI\Models\Operations;

use \chase_test_4\speakeasy_aPI\Utils\SpeakeasyMetadata;
class GetApisRequest
{
    /**
     * Metadata to filter Apis on
     * 
     * @var ?array<string, array<string>> $metadata
     */
	#[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=metadata')]
    public ?array $metadata = null;
    
    /**
     * Configuration for filter operations
     * 
     * @var ?\chase_test_4\speakeasy_aPI\Models\Operations\GetApisOp $op
     */
	#[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=op')]
    public ?GetApisOp $op = null;
    
	public function __construct()
	{
		$this->metadata = null;
		$this->op = null;
	}
}