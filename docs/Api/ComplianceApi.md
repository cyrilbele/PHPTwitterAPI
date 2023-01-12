# Swagger\Client\ComplianceApi

All URIs are relative to *https://api.twitter.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBatchComplianceJob**](ComplianceApi.md#createbatchcompliancejob) | **POST** /2/compliance/jobs | Create compliance job
[**getBatchComplianceJob**](ComplianceApi.md#getbatchcompliancejob) | **GET** /2/compliance/jobs/{id} | Get Compliance Job
[**getTweetsComplianceStream**](ComplianceApi.md#gettweetscompliancestream) | **GET** /2/tweets/compliance/stream | Tweets Compliance stream
[**getTweetsLabelStream**](ComplianceApi.md#gettweetslabelstream) | **GET** /2/tweets/label/stream | Tweets Label stream
[**getUsersComplianceStream**](ComplianceApi.md#getuserscompliancestream) | **GET** /2/users/compliance/stream | Users Compliance stream
[**listBatchComplianceJobs**](ComplianceApi.md#listbatchcompliancejobs) | **GET** /2/compliance/jobs | List Compliance Jobs

# **createBatchComplianceJob**
> \Swagger\Client\Model\CreateComplianceJobResponse createBatchComplianceJob($body)

Create compliance job

Creates a compliance for the given job type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ComplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateComplianceJobRequest(); // \Swagger\Client\Model\CreateComplianceJobRequest | 

try {
    $result = $apiInstance->createBatchComplianceJob($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComplianceApi->createBatchComplianceJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateComplianceJobRequest**](../Model/CreateComplianceJobRequest.md)|  |

### Return type

[**\Swagger\Client\Model\CreateComplianceJobResponse**](../Model/CreateComplianceJobResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBatchComplianceJob**
> \Swagger\Client\Model\Get2ComplianceJobsIdResponse getBatchComplianceJob($id, $compliance_job_fields)

Get Compliance Job

Returns a single Compliance Job by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ComplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\JobId(); // \Swagger\Client\Model\JobId | The ID of the Compliance Job to retrieve.
$compliance_job_fields = array("compliance_job_fields_example"); // string[] | A comma separated list of ComplianceJob fields to display.

try {
    $result = $apiInstance->getBatchComplianceJob($id, $compliance_job_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComplianceApi->getBatchComplianceJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\JobId**](../Model/.md)| The ID of the Compliance Job to retrieve. |
 **compliance_job_fields** | [**string[]**](../Model/string.md)| A comma separated list of ComplianceJob fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2ComplianceJobsIdResponse**](../Model/Get2ComplianceJobsIdResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTweetsComplianceStream**
> \Swagger\Client\Model\TweetComplianceStreamResponse getTweetsComplianceStream($partition, $backfill_minutes, $start_time, $end_time)

Tweets Compliance stream

Streams 100% of compliance data for Tweets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ComplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partition = 56; // int | The partition number.
$backfill_minutes = 56; // int | The number of minutes of backfill requested.
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp from which the Tweet Compliance events will be provided.
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp to which the Tweet Compliance events will be provided.

try {
    $result = $apiInstance->getTweetsComplianceStream($partition, $backfill_minutes, $start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComplianceApi->getTweetsComplianceStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partition** | **int**| The partition number. |
 **backfill_minutes** | **int**| The number of minutes of backfill requested. | [optional]
 **start_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp from which the Tweet Compliance events will be provided. | [optional]
 **end_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp to which the Tweet Compliance events will be provided. | [optional]

### Return type

[**\Swagger\Client\Model\TweetComplianceStreamResponse**](../Model/TweetComplianceStreamResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTweetsLabelStream**
> \Swagger\Client\Model\TweetLabelStreamResponse getTweetsLabelStream($backfill_minutes, $start_time, $end_time)

Tweets Label stream

Streams 100% of labeling events applied to Tweets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ComplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$backfill_minutes = 56; // int | The number of minutes of backfill requested.
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp from which the Tweet labels will be provided.
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp from which the Tweet labels will be provided.

try {
    $result = $apiInstance->getTweetsLabelStream($backfill_minutes, $start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComplianceApi->getTweetsLabelStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **backfill_minutes** | **int**| The number of minutes of backfill requested. | [optional]
 **start_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp from which the Tweet labels will be provided. | [optional]
 **end_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp from which the Tweet labels will be provided. | [optional]

### Return type

[**\Swagger\Client\Model\TweetLabelStreamResponse**](../Model/TweetLabelStreamResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersComplianceStream**
> \Swagger\Client\Model\UserComplianceStreamResponse getUsersComplianceStream($partition, $backfill_minutes, $start_time, $end_time)

Users Compliance stream

Streams 100% of compliance data for Users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ComplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partition = 56; // int | The partition number.
$backfill_minutes = 56; // int | The number of minutes of backfill requested.
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp from which the User Compliance events will be provided.
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp from which the User Compliance events will be provided.

try {
    $result = $apiInstance->getUsersComplianceStream($partition, $backfill_minutes, $start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComplianceApi->getUsersComplianceStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partition** | **int**| The partition number. |
 **backfill_minutes** | **int**| The number of minutes of backfill requested. | [optional]
 **start_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp from which the User Compliance events will be provided. | [optional]
 **end_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp from which the User Compliance events will be provided. | [optional]

### Return type

[**\Swagger\Client\Model\UserComplianceStreamResponse**](../Model/UserComplianceStreamResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBatchComplianceJobs**
> \Swagger\Client\Model\Get2ComplianceJobsResponse listBatchComplianceJobs($type, $status, $compliance_job_fields)

List Compliance Jobs

Returns recent Compliance Jobs for a given job type and optional job status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ComplianceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | Type of Compliance Job to list.
$status = "status_example"; // string | Status of Compliance Job to list.
$compliance_job_fields = array("compliance_job_fields_example"); // string[] | A comma separated list of ComplianceJob fields to display.

try {
    $result = $apiInstance->listBatchComplianceJobs($type, $status, $compliance_job_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComplianceApi->listBatchComplianceJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Type of Compliance Job to list. |
 **status** | **string**| Status of Compliance Job to list. | [optional]
 **compliance_job_fields** | [**string[]**](../Model/string.md)| A comma separated list of ComplianceJob fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2ComplianceJobsResponse**](../Model/Get2ComplianceJobsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

