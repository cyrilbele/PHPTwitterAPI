# Swagger\Client\SpacesApi

All URIs are relative to *https://api.twitter.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findSpaceById**](SpacesApi.md#findspacebyid) | **GET** /2/spaces/{id} | Space lookup by Space ID
[**findSpacesByCreatorIds**](SpacesApi.md#findspacesbycreatorids) | **GET** /2/spaces/by/creator_ids | Space lookup by their creators
[**findSpacesByIds**](SpacesApi.md#findspacesbyids) | **GET** /2/spaces | Space lookup up Space IDs
[**searchSpaces**](SpacesApi.md#searchspaces) | **GET** /2/spaces/search | Search for Spaces
[**spaceBuyers**](SpacesApi.md#spacebuyers) | **GET** /2/spaces/{id}/buyers | Retrieve the list of Users who purchased a ticket to the given space
[**spaceTweets**](SpacesApi.md#spacetweets) | **GET** /2/spaces/{id}/tweets | Retrieve Tweets from a Space.

# **findSpaceById**
> \Swagger\Client\Model\Get2SpacesIdResponse findSpaceById($id, $space_fields, $expansions, $user_fields, $topic_fields)

Space lookup by Space ID

Returns a variety of information about the Space specified by the requested ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The ID of the Space to be retrieved.
$space_fields = array("space_fields_example"); // string[] | A comma separated list of Space fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$topic_fields = array("topic_fields_example"); // string[] | A comma separated list of Topic fields to display.

try {
    $result = $apiInstance->findSpaceById($id, $space_fields, $expansions, $user_fields, $topic_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->findSpaceById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the Space to be retrieved. |
 **space_fields** | [**string[]**](../Model/string.md)| A comma separated list of Space fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **topic_fields** | [**string[]**](../Model/string.md)| A comma separated list of Topic fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2SpacesIdResponse**](../Model/Get2SpacesIdResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findSpacesByCreatorIds**
> \Swagger\Client\Model\Get2SpacesByCreatorIdsResponse findSpacesByCreatorIds($user_ids, $space_fields, $expansions, $user_fields, $topic_fields)

Space lookup by their creators

Returns a variety of information about the Spaces created by the provided User IDs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_ids = array(new \Swagger\Client\Model\UserId()); // \Swagger\Client\Model\UserId[] | The IDs of Users to search through.
$space_fields = array("space_fields_example"); // string[] | A comma separated list of Space fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$topic_fields = array("topic_fields_example"); // string[] | A comma separated list of Topic fields to display.

try {
    $result = $apiInstance->findSpacesByCreatorIds($user_ids, $space_fields, $expansions, $user_fields, $topic_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->findSpacesByCreatorIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_ids** | [**\Swagger\Client\Model\UserId[]**](../Model/\Swagger\Client\Model\UserId.md)| The IDs of Users to search through. |
 **space_fields** | [**string[]**](../Model/string.md)| A comma separated list of Space fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **topic_fields** | [**string[]**](../Model/string.md)| A comma separated list of Topic fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2SpacesByCreatorIdsResponse**](../Model/Get2SpacesByCreatorIdsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findSpacesByIds**
> \Swagger\Client\Model\Get2SpacesResponse findSpacesByIds($ids, $space_fields, $expansions, $user_fields, $topic_fields)

Space lookup up Space IDs

Returns a variety of information about the Spaces specified by the requested IDs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array("ids_example"); // string[] | The list of Space IDs to return.
$space_fields = array("space_fields_example"); // string[] | A comma separated list of Space fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$topic_fields = array("topic_fields_example"); // string[] | A comma separated list of Topic fields to display.

try {
    $result = $apiInstance->findSpacesByIds($ids, $space_fields, $expansions, $user_fields, $topic_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->findSpacesByIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The list of Space IDs to return. |
 **space_fields** | [**string[]**](../Model/string.md)| A comma separated list of Space fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **topic_fields** | [**string[]**](../Model/string.md)| A comma separated list of Topic fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2SpacesResponse**](../Model/Get2SpacesResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchSpaces**
> \Swagger\Client\Model\Get2SpacesSearchResponse searchSpaces($query, $state, $max_results, $space_fields, $expansions, $user_fields, $topic_fields)

Search for Spaces

Returns Spaces that match the provided query.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | The search query.
$state = "all"; // string | The state of Spaces to search for.
$max_results = 100; // int | The number of results to return.
$space_fields = array("space_fields_example"); // string[] | A comma separated list of Space fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$topic_fields = array("topic_fields_example"); // string[] | A comma separated list of Topic fields to display.

try {
    $result = $apiInstance->searchSpaces($query, $state, $max_results, $space_fields, $expansions, $user_fields, $topic_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->searchSpaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| The search query. |
 **state** | **string**| The state of Spaces to search for. | [optional] [default to all]
 **max_results** | **int**| The number of results to return. | [optional] [default to 100]
 **space_fields** | [**string[]**](../Model/string.md)| A comma separated list of Space fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **topic_fields** | [**string[]**](../Model/string.md)| A comma separated list of Topic fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2SpacesSearchResponse**](../Model/Get2SpacesSearchResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **spaceBuyers**
> \Swagger\Client\Model\Get2SpacesIdBuyersResponse spaceBuyers($id, $pagination_token, $max_results, $user_fields, $expansions, $tweet_fields)

Retrieve the list of Users who purchased a ticket to the given space

Retrieves the list of Users who purchased a ticket to the given space

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The ID of the Space to be retrieved.
$pagination_token = new \Swagger\Client\Model\PaginationToken32(); // \Swagger\Client\Model\PaginationToken32 | This parameter is used to get a specified 'page' of results.
$max_results = 100; // int | The maximum number of results.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->spaceBuyers($id, $pagination_token, $max_results, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->spaceBuyers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the Space to be retrieved. |
 **pagination_token** | [**\Swagger\Client\Model\PaginationToken32**](../Model/.md)| This parameter is used to get a specified &#x27;page&#x27; of results. | [optional]
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2SpacesIdBuyersResponse**](../Model/Get2SpacesIdBuyersResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **spaceTweets**
> \Swagger\Client\Model\Get2SpacesIdTweetsResponse spaceTweets($id, $max_results, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields)

Retrieve Tweets from a Space.

Retrieves Tweets shared in the specified Space.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The ID of the Space to be retrieved.
$max_results = 100; // int | The number of Tweets to fetch from the provided space. If not provided, the value will default to the maximum of 100.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$media_fields = array("media_fields_example"); // string[] | A comma separated list of Media fields to display.
$poll_fields = array("poll_fields_example"); // string[] | A comma separated list of Poll fields to display.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$place_fields = array("place_fields_example"); // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->spaceTweets($id, $max_results, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->spaceTweets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the Space to be retrieved. |
 **max_results** | **int**| The number of Tweets to fetch from the provided space. If not provided, the value will default to the maximum of 100. | [optional] [default to 100]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2SpacesIdTweetsResponse**](../Model/Get2SpacesIdTweetsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

