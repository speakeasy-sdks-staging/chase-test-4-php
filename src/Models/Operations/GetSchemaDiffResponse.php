<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace chase_test_4\speakeasy_aPI\Models\Operations;


class GetSchemaDiffResponse
{
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * Default error response
     * 
     * @var ?\chase_test_4\speakeasy_aPI\Models\Shared\Error $error
     */
	
    public ?\chase_test_4\speakeasy_aPI\Models\Shared\Error $error = null;
    
    /**
     * OK
     * 
     * @var ?\chase_test_4\speakeasy_aPI\Models\Shared\SchemaDiff $schemaDiff
     */
	
    public ?\chase_test_4\speakeasy_aPI\Models\Shared\SchemaDiff $schemaDiff = null;
    
    /**
     * HTTP response status code for this operation
     * 
     * @var int $statusCode
     */
	
    public int $statusCode;
    
    /**
     * Raw HTTP response; suitable for custom response parsing
     * 
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->schemaDiff = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
