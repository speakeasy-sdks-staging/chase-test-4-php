<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace chase_test_4\speakeasy_aPI\Models\Operations;

use \chase_test_4\speakeasy_aPI\Utils\SpeakeasyMetadata;
class QueryEventLogRequest
{
    /**
     * The filter to apply to the query.
     * 
     * @var ?\chase_test_4\speakeasy_aPI\Models\Shared\Filters $filters
     */
	#[SpeakeasyMetadata('queryParam:serialization=json,name=filters')]
    public ?\chase_test_4\speakeasy_aPI\Models\Shared\Filters $filters = null;
    
	public function __construct()
	{
		$this->filters = null;
	}
}
