<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace chase_test_4\speakeasy_aPI\Models\Shared;


/**
 * VersionMetadataInput - A set of keys and associated values, attached to a particular version of an Api.
 * 
 * @package chase_test_4\speakeasy_aPI\Models\Shared
 * @access public
 */
class VersionMetadataInput
{
    /**
     * The key for this metadata.
     * 
     * @var string $metaKey
     */
	#[\JMS\Serializer\Annotation\SerializedName('meta_key')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $metaKey;
    
    /**
     * One of the values for this metadata.
     * 
     * @var string $metaValue
     */
	#[\JMS\Serializer\Annotation\SerializedName('meta_value')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $metaValue;
    
	public function __construct()
	{
		$this->metaKey = "";
		$this->metaValue = "";
	}
}
