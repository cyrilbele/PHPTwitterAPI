# Swagger\Client\BookmarksApi

All URIs are relative to *https://api.twitter.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUsersIdBookmarks**](BookmarksApi.md#getusersidbookmarks) | **GET** /2/users/{id}/bookmarks | Bookmarks by User
[**postUsersIdBookmarks**](BookmarksApi.md#postusersidbookmarks) | **POST** /2/users/{id}/bookmarks | Add Tweet to Bookmarks
[**usersIdBookmarksDelete**](BookmarksApi.md#usersidbookmarksdelete) | **DELETE** /2/users/{id}/bookmarks/{tweet_id} | Remove a bookmarked Tweet

# **getUsersIdBookmarks**
> \Swagger\Client\Model\Get2UsersIdBookmarksResponse getUsersIdBookmarks($id, $max_results, $pagination_token, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields)

Bookmarks by User

Returns Tweet objects that have been bookmarked by the requesting User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BookmarksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserIdMatchesAuthenticatedUser(); // \Swagger\Client\Model\UserIdMatchesAuthenticatedUser | The ID of the authenticated source User for whom to return results.
$max_results = 56; // int | The maximum number of results.
$pagination_token = new \Swagger\Client\Model\PaginationToken36(); // \Swagger\Client\Model\PaginationToken36 | This parameter is used to get the next 'page' of results.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$media_fields = array("media_fields_example"); // string[] | A comma separated list of Media fields to display.
$poll_fields = array("poll_fields_example"); // string[] | A comma separated list of Poll fields to display.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$place_fields = array("place_fields_example"); // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->getUsersIdBookmarks($id, $max_results, $pagination_token, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->getUsersIdBookmarks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserIdMatchesAuthenticatedUser**](../Model/.md)| The ID of the authenticated source User for whom to return results. |
 **max_results** | **int**| The maximum number of results. | [optional]
 **pagination_token** | [**\Swagger\Client\Model\PaginationToken36**](../Model/.md)| This parameter is used to get the next &#x27;page&#x27; of results. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2UsersIdBookmarksResponse**](../Model/Get2UsersIdBookmarksResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUsersIdBookmarks**
> \Swagger\Client\Model\BookmarkMutationResponse postUsersIdBookmarks($body, $id)

Add Tweet to Bookmarks

Adds a Tweet (ID in the body) to the requesting User's (in the path) bookmarks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BookmarksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BookmarkAddRequest(); // \Swagger\Client\Model\BookmarkAddRequest | 
$id = new \Swagger\Client\Model\UserIdMatchesAuthenticatedUser(); // \Swagger\Client\Model\UserIdMatchesAuthenticatedUser | The ID of the authenticated source User for whom to add bookmarks.

try {
    $result = $apiInstance->postUsersIdBookmarks($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->postUsersIdBookmarks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BookmarkAddRequest**](../Model/BookmarkAddRequest.md)|  |
 **id** | [**\Swagger\Client\Model\UserIdMatchesAuthenticatedUser**](../Model/.md)| The ID of the authenticated source User for whom to add bookmarks. |

### Return type

[**\Swagger\Client\Model\BookmarkMutationResponse**](../Model/BookmarkMutationResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdBookmarksDelete**
> \Swagger\Client\Model\BookmarkMutationResponse usersIdBookmarksDelete($id, $tweet_id)

Remove a bookmarked Tweet

Removes a Tweet from the requesting User's bookmarked Tweets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BookmarksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserIdMatchesAuthenticatedUser(); // \Swagger\Client\Model\UserIdMatchesAuthenticatedUser | The ID of the authenticated source User whose bookmark is to be removed.
$tweet_id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | The ID of the Tweet that the source User is removing from bookmarks.

try {
    $result = $apiInstance->usersIdBookmarksDelete($id, $tweet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->usersIdBookmarksDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserIdMatchesAuthenticatedUser**](../Model/.md)| The ID of the authenticated source User whose bookmark is to be removed. |
 **tweet_id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| The ID of the Tweet that the source User is removing from bookmarks. |

### Return type

[**\Swagger\Client\Model\BookmarkMutationResponse**](../Model/BookmarkMutationResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

