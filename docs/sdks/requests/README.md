# Requests
(*requests*)

## Overview

REST APIs for retrieving request information

### Available Operations

* [generateRequestPostmanCollection](#generaterequestpostmancollection) - Generate a Postman collection for a particular request.
* [getRequestFromEventLog](#getrequestfromeventlog) - Get information about a particular request.
* [queryEventLog](#queryeventlog) - Query the event log to retrieve a list of requests.

## generateRequestPostmanCollection

Generates a Postman collection for a particular request. 
Allowing it to be replayed with the same inputs that were captured by the SDK.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \chase_test_4\speakeasy_aPI\SpeakeasyAPI;
use \chase_test_4\speakeasy_aPI\Models\Shared\Security;
use \chase_test_4\speakeasy_aPI\Models\Operations\GenerateRequestPostmanCollectionRequest;

$security = new Security();
$security->apiKey = '';

$sdk = SpeakeasyAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GenerateRequestPostmanCollectionRequest();
    $request->requestID = 'string';

    $response = $sdk->requests->generateRequestPostmanCollection($request);

    if ($response->postmanCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                   | Type                                                                                                                                                        | Required                                                                                                                                                    | Description                                                                                                                                                 |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                  | [\chase_test_4\speakeasy_aPI\Models\Operations\GenerateRequestPostmanCollectionRequest](../../models/operations/GenerateRequestPostmanCollectionRequest.md) | :heavy_check_mark:                                                                                                                                          | The request object to use for the request.                                                                                                                  |


### Response

**[?\chase_test_4\speakeasy_aPI\Models\Operations\GenerateRequestPostmanCollectionResponse](../../models/operations/GenerateRequestPostmanCollectionResponse.md)**


## getRequestFromEventLog

Get information about a particular request.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \chase_test_4\speakeasy_aPI\SpeakeasyAPI;
use \chase_test_4\speakeasy_aPI\Models\Shared\Security;
use \chase_test_4\speakeasy_aPI\Models\Operations\GetRequestFromEventLogRequest;

$security = new Security();
$security->apiKey = '';

$sdk = SpeakeasyAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetRequestFromEventLogRequest();
    $request->requestID = 'string';

    $response = $sdk->requests->getRequestFromEventLog($request);

    if ($response->unboundedRequest !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\chase_test_4\speakeasy_aPI\Models\Operations\GetRequestFromEventLogRequest](../../models/operations/GetRequestFromEventLogRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\chase_test_4\speakeasy_aPI\Models\Operations\GetRequestFromEventLogResponse](../../models/operations/GetRequestFromEventLogResponse.md)**


## queryEventLog

Supports retrieving a list of request captured by the SDK for this workspace.
Allows the filtering of requests on a number of criteria such as ApiID, VersionID, Path, Method, etc.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \chase_test_4\speakeasy_aPI\SpeakeasyAPI;
use \chase_test_4\speakeasy_aPI\Models\Shared\Security;
use \chase_test_4\speakeasy_aPI\Models\Operations\QueryEventLogRequest;
use \chase_test_4\speakeasy_aPI\Models\Shared\Filters;
use \chase_test_4\speakeasy_aPI\Models\Shared\Filter;

$security = new Security();
$security->apiKey = '';

$sdk = SpeakeasyAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new QueryEventLogRequest();
    $request->filters = new Filters();
    $request->filters->filters = [
        new Filter(),
    ];
    $request->filters->limit = 241978;
    $request->filters->offset = 451388;
    $request->filters->operator = 'string';

    $response = $sdk->requests->queryEventLog($request);

    if ($response->boundedRequests !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\chase_test_4\speakeasy_aPI\Models\Operations\QueryEventLogRequest](../../models/operations/QueryEventLogRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\chase_test_4\speakeasy_aPI\Models\Operations\QueryEventLogResponse](../../models/operations/QueryEventLogResponse.md)**

