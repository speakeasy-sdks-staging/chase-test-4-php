# Schemas
(*schemas*)

## Overview

REST APIs for managing Schema entities

### Available Operations

* [deleteSchema](#deleteschema) - Delete a particular schema revision for an Api.
* [downloadSchema](#downloadschema) - Download the latest schema for a particular apiID.
* [downloadSchemaRevision](#downloadschemarevision) - Download a particular schema revision for an Api.
* [getSchema](#getschema) - Get information about the latest schema.
* [getSchemaDiff](#getschemadiff) - Get a diff of two schema revisions for an Api.
* [getSchemaRevision](#getschemarevision) - Get information about a particular schema revision for an Api.
* [getSchemas](#getschemas) - Get information about all schemas associated with a particular apiID.
* [registerSchema](#registerschema) - Register a schema.

## deleteSchema

Delete a particular schema revision for an Api.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \chase_test_4\speakeasy_aPI\SpeakeasyAPI;
use \chase_test_4\speakeasy_aPI\Models\Shared\Security;
use \chase_test_4\speakeasy_aPI\Models\Operations\DeleteSchemaRequest;

$security = new Security();
$security->apiKey = '';

$sdk = SpeakeasyAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteSchemaRequest();
    $request->apiID = 'string';
    $request->revisionID = 'string';
    $request->versionID = 'string';

    $response = $sdk->schemas->deleteSchema($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\chase_test_4\speakeasy_aPI\Models\Operations\DeleteSchemaRequest](../../models/operations/DeleteSchemaRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\chase_test_4\speakeasy_aPI\Models\Operations\DeleteSchemaResponse](../../models/operations/DeleteSchemaResponse.md)**


## downloadSchema

Download the latest schema for a particular apiID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \chase_test_4\speakeasy_aPI\SpeakeasyAPI;
use \chase_test_4\speakeasy_aPI\Models\Shared\Security;
use \chase_test_4\speakeasy_aPI\Models\Operations\DownloadSchemaRequest;

$security = new Security();
$security->apiKey = '';

$sdk = SpeakeasyAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DownloadSchemaRequest();
    $request->apiID = 'string';
    $request->versionID = 'string';

    $response = $sdk->schemas->downloadSchema($request);

    if ($response->schema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\chase_test_4\speakeasy_aPI\Models\Operations\DownloadSchemaRequest](../../models/operations/DownloadSchemaRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\chase_test_4\speakeasy_aPI\Models\Operations\DownloadSchemaResponse](../../models/operations/DownloadSchemaResponse.md)**


## downloadSchemaRevision

Download a particular schema revision for an Api.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \chase_test_4\speakeasy_aPI\SpeakeasyAPI;
use \chase_test_4\speakeasy_aPI\Models\Shared\Security;
use \chase_test_4\speakeasy_aPI\Models\Operations\DownloadSchemaRevisionRequest;

$security = new Security();
$security->apiKey = '';

$sdk = SpeakeasyAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DownloadSchemaRevisionRequest();
    $request->apiID = 'string';
    $request->revisionID = 'string';
    $request->versionID = 'string';

    $response = $sdk->schemas->downloadSchemaRevision($request);

    if ($response->schema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\chase_test_4\speakeasy_aPI\Models\Operations\DownloadSchemaRevisionRequest](../../models/operations/DownloadSchemaRevisionRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\chase_test_4\speakeasy_aPI\Models\Operations\DownloadSchemaRevisionResponse](../../models/operations/DownloadSchemaRevisionResponse.md)**


## getSchema

Returns information about the last uploaded schema for a particular API version. 
This won't include the schema itself, that can be retrieved via the downloadSchema operation.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \chase_test_4\speakeasy_aPI\SpeakeasyAPI;
use \chase_test_4\speakeasy_aPI\Models\Shared\Security;
use \chase_test_4\speakeasy_aPI\Models\Operations\GetSchemaRequest;

$security = new Security();
$security->apiKey = '';

$sdk = SpeakeasyAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetSchemaRequest();
    $request->apiID = 'string';
    $request->versionID = 'string';

    $response = $sdk->schemas->getSchema($request);

    if ($response->schema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\chase_test_4\speakeasy_aPI\Models\Operations\GetSchemaRequest](../../models/operations/GetSchemaRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\chase_test_4\speakeasy_aPI\Models\Operations\GetSchemaResponse](../../models/operations/GetSchemaResponse.md)**


## getSchemaDiff

Get a diff of two schema revisions for an Api.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \chase_test_4\speakeasy_aPI\SpeakeasyAPI;
use \chase_test_4\speakeasy_aPI\Models\Shared\Security;
use \chase_test_4\speakeasy_aPI\Models\Operations\GetSchemaDiffRequest;

$security = new Security();
$security->apiKey = '';

$sdk = SpeakeasyAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetSchemaDiffRequest();
    $request->apiID = 'string';
    $request->baseRevisionID = 'string';
    $request->targetRevisionID = 'string';
    $request->versionID = 'string';

    $response = $sdk->schemas->getSchemaDiff($request);

    if ($response->schemaDiff !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\chase_test_4\speakeasy_aPI\Models\Operations\GetSchemaDiffRequest](../../models/operations/GetSchemaDiffRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\chase_test_4\speakeasy_aPI\Models\Operations\GetSchemaDiffResponse](../../models/operations/GetSchemaDiffResponse.md)**


## getSchemaRevision

Returns information about the last uploaded schema for a particular schema revision. 
This won't include the schema itself, that can be retrieved via the downloadSchema operation.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \chase_test_4\speakeasy_aPI\SpeakeasyAPI;
use \chase_test_4\speakeasy_aPI\Models\Shared\Security;
use \chase_test_4\speakeasy_aPI\Models\Operations\GetSchemaRevisionRequest;

$security = new Security();
$security->apiKey = '';

$sdk = SpeakeasyAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetSchemaRevisionRequest();
    $request->apiID = 'string';
    $request->revisionID = 'string';
    $request->versionID = 'string';

    $response = $sdk->schemas->getSchemaRevision($request);

    if ($response->schema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\chase_test_4\speakeasy_aPI\Models\Operations\GetSchemaRevisionRequest](../../models/operations/GetSchemaRevisionRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\chase_test_4\speakeasy_aPI\Models\Operations\GetSchemaRevisionResponse](../../models/operations/GetSchemaRevisionResponse.md)**


## getSchemas

Returns information the schemas associated with a particular apiID. 
This won't include the schemas themselves, they can be retrieved via the downloadSchema operation.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \chase_test_4\speakeasy_aPI\SpeakeasyAPI;
use \chase_test_4\speakeasy_aPI\Models\Shared\Security;
use \chase_test_4\speakeasy_aPI\Models\Operations\GetSchemasRequest;

$security = new Security();
$security->apiKey = '';

$sdk = SpeakeasyAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetSchemasRequest();
    $request->apiID = 'string';
    $request->versionID = 'string';

    $response = $sdk->schemas->getSchemas($request);

    if ($response->schemata !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\chase_test_4\speakeasy_aPI\Models\Operations\GetSchemasRequest](../../models/operations/GetSchemasRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\chase_test_4\speakeasy_aPI\Models\Operations\GetSchemasResponse](../../models/operations/GetSchemasResponse.md)**


## registerSchema

Allows uploading a schema for a particular API version.
This will be used to populate ApiEndpoints and used as a base for any schema generation if present.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \chase_test_4\speakeasy_aPI\SpeakeasyAPI;
use \chase_test_4\speakeasy_aPI\Models\Shared\Security;
use \chase_test_4\speakeasy_aPI\Models\Operations\RegisterSchemaRequest;
use \chase_test_4\speakeasy_aPI\Models\Operations\RegisterSchemaRequestBody;
use \chase_test_4\speakeasy_aPI\Models\Operations\RegisterSchemaRequestBodyFile;

$security = new Security();
$security->apiKey = '';

$sdk = SpeakeasyAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RegisterSchemaRequest();
    $request->requestBody = new RegisterSchemaRequestBody();
    $request->requestBody->file = new RegisterSchemaRequestBodyFile();
    $request->requestBody->file->content = 'mg|mf".]!\';
    $request->requestBody->file->file = 'string';
    $request->apiID = 'string';
    $request->versionID = 'string';

    $response = $sdk->schemas->registerSchema($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\chase_test_4\speakeasy_aPI\Models\Operations\RegisterSchemaRequest](../../models/operations/RegisterSchemaRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\chase_test_4\speakeasy_aPI\Models\Operations\RegisterSchemaResponse](../../models/operations/RegisterSchemaResponse.md)**

