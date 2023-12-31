<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace chase_test_4\speakeasy_aPI\Models\Operations;

use \chase_test_4\speakeasy_aPI\Utils\SpeakeasyMetadata;
/**
 * GetApisOp - Configuration for filter operations
 * 
 * @package chase_test_4\speakeasy_aPI\Models\Operations
 * @access public
 */
class GetApisOp
{
    /**
     * Whether to AND or OR the filters
     * 
     * @var bool $and
     */
	#[SpeakeasyMetadata('queryParam:name=and')]
    public bool $and;
    
	public function __construct()
	{
		$this->and = false;
	}
}
