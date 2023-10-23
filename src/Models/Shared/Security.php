<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace chase_test_4\speakeasy_aPI\Models\Shared;

use \chase_test_4\speakeasy_aPI\Utils\SpeakeasyMetadata;
class Security
{
	#[SpeakeasyMetadata('security:scheme=true,type=apiKey,subtype=header,name=x-api-key')]
    public string $apiKey;
    
	public function __construct()
	{
		$this->apiKey = "";
	}
}
