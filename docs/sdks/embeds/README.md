# Embeds
(*embeds*)

## Overview

REST APIs for managing embeds

### Available Operations

* [getEmbedAccessToken](#getembedaccesstoken) - Get an embed access token for the current workspace.
* [getValidEmbedAccessTokens](#getvalidembedaccesstokens) - Get all valid embed access tokens for the current workspace.
* [revokeEmbedAccessToken](#revokeembedaccesstoken) - Revoke an embed access EmbedToken.

## getEmbedAccessToken

Returns an embed access token for the current workspace. This can be used to authenticate access to externally embedded content.
Filters can be applied allowing views to be filtered to things like particular customerIds.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \chase_test_4\speakeasy_aPI\SpeakeasyAPI;
use \chase_test_4\speakeasy_aPI\Models\Shared\Security;
use \chase_test_4\speakeasy_aPI\Models\Operations\GetEmbedAccessTokenRequest;
use \chase_test_4\speakeasy_aPI\Models\Shared\Filters;
use \chase_test_4\speakeasy_aPI\Models\Shared\Filter;

$security = new Security();
$security->apiKey = '';

$sdk = SpeakeasyAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetEmbedAccessTokenRequest();
    $request->description = 'Versatile asynchronous leverage';
    $request->duration = 554373;
    $request->filters = new Filters();
    $request->filters->filters = [
        new Filter(),
    ];
    $request->filters->limit = 263313;
    $request->filters->offset = 411277;
    $request->filters->operator = 'string';

    $response = $sdk->embeds->getEmbedAccessToken($request);

    if ($response->embedAccessTokenResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\chase_test_4\speakeasy_aPI\Models\Operations\GetEmbedAccessTokenRequest](../../models/operations/GetEmbedAccessTokenRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\chase_test_4\speakeasy_aPI\Models\Operations\GetEmbedAccessTokenResponse](../../models/operations/GetEmbedAccessTokenResponse.md)**


## getValidEmbedAccessTokens

Get all valid embed access tokens for the current workspace.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \chase_test_4\speakeasy_aPI\SpeakeasyAPI;
use \chase_test_4\speakeasy_aPI\Models\Shared\Security;

$security = new Security();
$security->apiKey = '';

$sdk = SpeakeasyAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $response = $sdk->embeds->getValidEmbedAccessTokens();

    if ($response->embedTokens !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\chase_test_4\speakeasy_aPI\Models\Operations\GetValidEmbedAccessTokensResponse](../../models/operations/GetValidEmbedAccessTokensResponse.md)**


## revokeEmbedAccessToken

Revoke an embed access EmbedToken.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \chase_test_4\speakeasy_aPI\SpeakeasyAPI;
use \chase_test_4\speakeasy_aPI\Models\Shared\Security;
use \chase_test_4\speakeasy_aPI\Models\Operations\RevokeEmbedAccessTokenRequest;

$security = new Security();
$security->apiKey = '';

$sdk = SpeakeasyAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RevokeEmbedAccessTokenRequest();
    $request->tokenID = 'string';

    $response = $sdk->embeds->revokeEmbedAccessToken($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\chase_test_4\speakeasy_aPI\Models\Operations\RevokeEmbedAccessTokenRequest](../../models/operations/RevokeEmbedAccessTokenRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\chase_test_4\speakeasy_aPI\Models\Operations\RevokeEmbedAccessTokenResponse](../../models/operations/RevokeEmbedAccessTokenResponse.md)**

