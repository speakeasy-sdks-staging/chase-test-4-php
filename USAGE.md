<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use chase_test_4\speakeasy_aPI\SpeakeasyAPI;
use chase_test_4\speakeasy_aPI\Models\Shared\Security;
use chase_test_4\speakeasy_aPI\Models\Operations\GetApisRequest;
use chase_test_4\speakeasy_aPI\Models\Operations\GetApisOp;

$security = new Security();
$security->apiKey = '';

$sdk = SpeakeasyAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetApisRequest();
    $request->metadata = [
        'South' => ['string'],
    ];
    $request->op = new GetApisOp();
    $request->op->and = false;

    $response = $sdk->apis->getApis($request);

    if ($response->apis !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage -->