<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace chase_test_4\speakeasy_aPI\Models\Operations;

use \chase_test_4\speakeasy_aPI\Utils\SpeakeasyMetadata;
class RegisterSchemaRequestBodyFile
{
	#[SpeakeasyMetadata('multipartForm:content=true')]
    public string $content;
    
	#[SpeakeasyMetadata('multipartForm:name=file')]
    public string $file;
    
	public function __construct()
	{
		$this->content = "";
		$this->file = "";
	}
}