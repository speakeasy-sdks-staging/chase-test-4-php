<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace chase_test_4\speakeasy_aPI\Models\Operations;

use \chase_test_4\speakeasy_aPI\Utils\SpeakeasyMetadata;
/**
 * RegisterSchemaRequestBody - The schema file to upload provided as a multipart/form-data file segment.
 * 
 * @package chase_test_4\speakeasy_aPI\Models\Operations
 * @access public
 */
class RegisterSchemaRequestBody
{
	#[SpeakeasyMetadata('multipartForm:file=true')]
    public RegisterSchemaRequestBodyFile $file;
    
	public function __construct()
	{
		$this->file = new \chase_test_4\speakeasy_aPI\Models\Operations\RegisterSchemaRequestBodyFile();
	}
}
