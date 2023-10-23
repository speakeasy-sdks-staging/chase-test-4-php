<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace chase_test_4\speakeasy_aPI\Models\Shared;


/**
 * Filter - A filter is a key-value pair that can be used to filter a list of requests.
 * 
 * @package chase_test_4\speakeasy_aPI\Models\Shared
 * @access public
 */
class Filter
{
    /**
     * The key of the filter.
     * 
     * @var string $key
     */
	#[\JMS\Serializer\Annotation\SerializedName('key')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $key;
    
    /**
     * The operator of the filter.
     * 
     * @var string $operator
     */
	#[\JMS\Serializer\Annotation\SerializedName('operator')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $operator;
    
    /**
     * The value of the filter.
     * 
     * @var string $value
     */
	#[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $value;
    
	public function __construct()
	{
		$this->key = "";
		$this->operator = "";
		$this->value = "";
	}
}