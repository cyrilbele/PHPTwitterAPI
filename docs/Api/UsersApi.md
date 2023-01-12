# Swagger\Client\UsersApi

All URIs are relative to *https://api.twitter.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findMyUser**](UsersApi.md#findmyuser) | **GET** /2/users/me | User lookup me
[**findUserById**](UsersApi.md#finduserbyid) | **GET** /2/users/{id} | User lookup by ID
[**findUserByUsername**](UsersApi.md#finduserbyusername) | **GET** /2/users/by/username/{username} | User lookup by username
[**findUsersById**](UsersApi.md#findusersbyid) | **GET** /2/users | User lookup by IDs
[**findUsersByUsername**](UsersApi.md#findusersbyusername) | **GET** /2/users/by | User lookup by usernames
[**listGetFollowers**](UsersApi.md#listgetfollowers) | **GET** /2/lists/{id}/followers | Returns User objects that follow a List by the provided List ID
[**listGetMembers**](UsersApi.md#listgetmembers) | **GET** /2/lists/{id}/members | Returns User objects that are members of a List by the provided List ID.
[**tweetsIdLikingUsers**](UsersApi.md#tweetsidlikingusers) | **GET** /2/tweets/{id}/liking_users | Returns User objects that have liked the provided Tweet ID
[**tweetsIdRetweetingUsers**](UsersApi.md#tweetsidretweetingusers) | **GET** /2/tweets/{id}/retweeted_by | Returns User objects that have retweeted the provided Tweet ID
[**usersIdBlock**](UsersApi.md#usersidblock) | **POST** /2/users/{id}/blocking | Block User by User ID
[**usersIdBlocking**](UsersApi.md#usersidblocking) | **GET** /2/users/{id}/blocking | Returns User objects that are blocked by provided User ID
[**usersIdFollow**](UsersApi.md#usersidfollow) | **POST** /2/users/{id}/following | Follow User
[**usersIdFollowers**](UsersApi.md#usersidfollowers) | **GET** /2/users/{id}/followers | Followers by User ID
[**usersIdFollowing**](UsersApi.md#usersidfollowing) | **GET** /2/users/{id}/following | Following by User ID
[**usersIdMute**](UsersApi.md#usersidmute) | **POST** /2/users/{id}/muting | Mute User by User ID.
[**usersIdMuting**](UsersApi.md#usersidmuting) | **GET** /2/users/{id}/muting | Returns User objects that are muted by the provided User ID
[**usersIdUnblock**](UsersApi.md#usersidunblock) | **DELETE** /2/users/{source_user_id}/blocking/{target_user_id} | Unblock User by User ID
[**usersIdUnfollow**](UsersApi.md#usersidunfollow) | **DELETE** /2/users/{source_user_id}/following/{target_user_id} | Unfollow User
[**usersIdUnmute**](UsersApi.md#usersidunmute) | **DELETE** /2/users/{source_user_id}/muting/{target_user_id} | Unmute User by User ID

# **findMyUser**
> \Swagger\Client\Model\Get2UsersMeResponse findMyUser($user_fields, $expansions, $tweet_fields)

User lookup me

This endpoint returns information about the requesting User.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->findMyUser($user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->findMyUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2UsersMeResponse**](../Model/Get2UsersMeResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findUserById**
> \Swagger\Client\Model\Get2UsersIdResponse findUserById($id, $user_fields, $expansions, $tweet_fields)

User lookup by ID

This endpoint returns information about a User. Specify User by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserId(); // \Swagger\Client\Model\UserId | The ID of the User to lookup.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->findUserById($id, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->findUserById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserId**](../Model/.md)| The ID of the User to lookup. |
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2UsersIdResponse**](../Model/Get2UsersIdResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findUserByUsername**
> \Swagger\Client\Model\Get2UsersByUsernameUsernameResponse findUserByUsername($username, $user_fields, $expansions, $tweet_fields)

User lookup by username

This endpoint returns information about a User. Specify User by username.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = "username_example"; // string | A username.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->findUserByUsername($username, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->findUserByUsername: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| A username. |
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2UsersByUsernameUsernameResponse**](../Model/Get2UsersByUsernameUsernameResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findUsersById**
> \Swagger\Client\Model\Get2UsersResponse findUsersById($ids, $user_fields, $expansions, $tweet_fields)

User lookup by IDs

This endpoint returns information about Users. Specify Users by their ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array(new \Swagger\Client\Model\UserId()); // \Swagger\Client\Model\UserId[] | A list of User IDs, comma-separated. You can specify up to 100 IDs.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->findUsersById($ids, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->findUsersById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**\Swagger\Client\Model\UserId[]**](../Model/\Swagger\Client\Model\UserId.md)| A list of User IDs, comma-separated. You can specify up to 100 IDs. |
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2UsersResponse**](../Model/Get2UsersResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findUsersByUsername**
> \Swagger\Client\Model\Get2UsersByResponse findUsersByUsername($usernames, $user_fields, $expansions, $tweet_fields)

User lookup by usernames

This endpoint returns information about Users. Specify Users by their username.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$usernames = array("usernames_example"); // string[] | A list of usernames, comma-separated.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->findUsersByUsername($usernames, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->findUsersByUsername: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **usernames** | [**string[]**](../Model/string.md)| A list of usernames, comma-separated. |
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2UsersByResponse**](../Model/Get2UsersByResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listGetFollowers**
> \Swagger\Client\Model\Get2ListsIdFollowersResponse listGetFollowers($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields)

Returns User objects that follow a List by the provided List ID

Returns a list of Users that follow a List by the provided List ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\ListId(); // \Swagger\Client\Model\ListId | The ID of the List.
$max_results = 100; // int | The maximum number of results.
$pagination_token = new \Swagger\Client\Model\PaginationTokenLong(); // \Swagger\Client\Model\PaginationTokenLong | This parameter is used to get a specified 'page' of results.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->listGetFollowers($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listGetFollowers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\ListId**](../Model/.md)| The ID of the List. |
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **pagination_token** | [**\Swagger\Client\Model\PaginationTokenLong**](../Model/.md)| This parameter is used to get a specified &#x27;page&#x27; of results. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2ListsIdFollowersResponse**](../Model/Get2ListsIdFollowersResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listGetMembers**
> \Swagger\Client\Model\Get2ListsIdMembersResponse listGetMembers($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields)

Returns User objects that are members of a List by the provided List ID.

Returns a list of Users that are members of a List by the provided List ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\ListId(); // \Swagger\Client\Model\ListId | The ID of the List.
$max_results = 100; // int | The maximum number of results.
$pagination_token = new \Swagger\Client\Model\PaginationTokenLong(); // \Swagger\Client\Model\PaginationTokenLong | This parameter is used to get a specified 'page' of results.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->listGetMembers($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listGetMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\ListId**](../Model/.md)| The ID of the List. |
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **pagination_token** | [**\Swagger\Client\Model\PaginationTokenLong**](../Model/.md)| This parameter is used to get a specified &#x27;page&#x27; of results. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2ListsIdMembersResponse**](../Model/Get2ListsIdMembersResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tweetsIdLikingUsers**
> \Swagger\Client\Model\Get2TweetsIdLikingUsersResponse tweetsIdLikingUsers($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields)

Returns User objects that have liked the provided Tweet ID

Returns a list of Users that have liked the provided Tweet ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | A single Tweet ID.
$max_results = 100; // int | The maximum number of results.
$pagination_token = new \Swagger\Client\Model\PaginationToken36(); // \Swagger\Client\Model\PaginationToken36 | This parameter is used to get the next 'page' of results.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->tweetsIdLikingUsers($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->tweetsIdLikingUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| A single Tweet ID. |
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **pagination_token** | [**\Swagger\Client\Model\PaginationToken36**](../Model/.md)| This parameter is used to get the next &#x27;page&#x27; of results. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2TweetsIdLikingUsersResponse**](../Model/Get2TweetsIdLikingUsersResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tweetsIdRetweetingUsers**
> \Swagger\Client\Model\Get2TweetsIdRetweetedByResponse tweetsIdRetweetingUsers($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields)

Returns User objects that have retweeted the provided Tweet ID

Returns a list of Users that have retweeted the provided Tweet ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | A single Tweet ID.
$max_results = 100; // int | The maximum number of results.
$pagination_token = new \Swagger\Client\Model\PaginationToken36(); // \Swagger\Client\Model\PaginationToken36 | This parameter is used to get the next 'page' of results.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->tweetsIdRetweetingUsers($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->tweetsIdRetweetingUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| A single Tweet ID. |
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **pagination_token** | [**\Swagger\Client\Model\PaginationToken36**](../Model/.md)| This parameter is used to get the next &#x27;page&#x27; of results. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2TweetsIdRetweetedByResponse**](../Model/Get2TweetsIdRetweetedByResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdBlock**
> \Swagger\Client\Model\BlockUserMutationResponse usersIdBlock($body, $id)

Block User by User ID

Causes the User (in the path) to block the target User. The User (in the path) must match the User context authorizing the request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BlockUserRequest(); // \Swagger\Client\Model\BlockUserRequest | 
$id = new \Swagger\Client\Model\UserIdMatchesAuthenticatedUser(); // \Swagger\Client\Model\UserIdMatchesAuthenticatedUser | The ID of the authenticated source User that is requesting to block the target User.

try {
    $result = $apiInstance->usersIdBlock($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdBlock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BlockUserRequest**](../Model/BlockUserRequest.md)|  |
 **id** | [**\Swagger\Client\Model\UserIdMatchesAuthenticatedUser**](../Model/.md)| The ID of the authenticated source User that is requesting to block the target User. |

### Return type

[**\Swagger\Client\Model\BlockUserMutationResponse**](../Model/BlockUserMutationResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdBlocking**
> \Swagger\Client\Model\Get2UsersIdBlockingResponse usersIdBlocking($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields)

Returns User objects that are blocked by provided User ID

Returns a list of Users that are blocked by the provided User ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserIdMatchesAuthenticatedUser(); // \Swagger\Client\Model\UserIdMatchesAuthenticatedUser | The ID of the authenticated source User for whom to return results.
$max_results = 56; // int | The maximum number of results.
$pagination_token = new \Swagger\Client\Model\PaginationToken32(); // \Swagger\Client\Model\PaginationToken32 | This parameter is used to get a specified 'page' of results.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->usersIdBlocking($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdBlocking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserIdMatchesAuthenticatedUser**](../Model/.md)| The ID of the authenticated source User for whom to return results. |
 **max_results** | **int**| The maximum number of results. | [optional]
 **pagination_token** | [**\Swagger\Client\Model\PaginationToken32**](../Model/.md)| This parameter is used to get a specified &#x27;page&#x27; of results. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2UsersIdBlockingResponse**](../Model/Get2UsersIdBlockingResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdFollow**
> \Swagger\Client\Model\UsersFollowingCreateResponse usersIdFollow($id, $body)

Follow User

Causes the User(in the path) to follow, or “request to follow” for protected Users, the target User. The User(in the path) must match the User context authorizing the request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserIdMatchesAuthenticatedUser(); // \Swagger\Client\Model\UserIdMatchesAuthenticatedUser | The ID of the authenticated source User that is requesting to follow the target User.
$body = new \Swagger\Client\Model\UsersFollowingCreateRequest(); // \Swagger\Client\Model\UsersFollowingCreateRequest | 

try {
    $result = $apiInstance->usersIdFollow($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserIdMatchesAuthenticatedUser**](../Model/.md)| The ID of the authenticated source User that is requesting to follow the target User. |
 **body** | [**\Swagger\Client\Model\UsersFollowingCreateRequest**](../Model/UsersFollowingCreateRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\UsersFollowingCreateResponse**](../Model/UsersFollowingCreateResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdFollowers**
> \Swagger\Client\Model\Get2UsersIdFollowersResponse usersIdFollowers($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields)

Followers by User ID

Returns a list of Users who are followers of the specified User ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserId(); // \Swagger\Client\Model\UserId | The ID of the User to lookup.
$max_results = 56; // int | The maximum number of results.
$pagination_token = new \Swagger\Client\Model\PaginationToken32(); // \Swagger\Client\Model\PaginationToken32 | This parameter is used to get a specified 'page' of results.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->usersIdFollowers($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdFollowers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserId**](../Model/.md)| The ID of the User to lookup. |
 **max_results** | **int**| The maximum number of results. | [optional]
 **pagination_token** | [**\Swagger\Client\Model\PaginationToken32**](../Model/.md)| This parameter is used to get a specified &#x27;page&#x27; of results. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2UsersIdFollowersResponse**](../Model/Get2UsersIdFollowersResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdFollowing**
> \Swagger\Client\Model\Get2UsersIdFollowingResponse usersIdFollowing($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields)

Following by User ID

Returns a list of Users that are being followed by the provided User ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserId(); // \Swagger\Client\Model\UserId | The ID of the User to lookup.
$max_results = 56; // int | The maximum number of results.
$pagination_token = new \Swagger\Client\Model\PaginationToken32(); // \Swagger\Client\Model\PaginationToken32 | This parameter is used to get a specified 'page' of results.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->usersIdFollowing($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdFollowing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserId**](../Model/.md)| The ID of the User to lookup. |
 **max_results** | **int**| The maximum number of results. | [optional]
 **pagination_token** | [**\Swagger\Client\Model\PaginationToken32**](../Model/.md)| This parameter is used to get a specified &#x27;page&#x27; of results. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2UsersIdFollowingResponse**](../Model/Get2UsersIdFollowingResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdMute**
> \Swagger\Client\Model\MuteUserMutationResponse usersIdMute($id, $body)

Mute User by User ID.

Causes the User (in the path) to mute the target User. The User (in the path) must match the User context authorizing the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserIdMatchesAuthenticatedUser(); // \Swagger\Client\Model\UserIdMatchesAuthenticatedUser | The ID of the authenticated source User that is requesting to mute the target User.
$body = new \Swagger\Client\Model\MuteUserRequest(); // \Swagger\Client\Model\MuteUserRequest | 

try {
    $result = $apiInstance->usersIdMute($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdMute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserIdMatchesAuthenticatedUser**](../Model/.md)| The ID of the authenticated source User that is requesting to mute the target User. |
 **body** | [**\Swagger\Client\Model\MuteUserRequest**](../Model/MuteUserRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\MuteUserMutationResponse**](../Model/MuteUserMutationResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdMuting**
> \Swagger\Client\Model\Get2UsersIdMutingResponse usersIdMuting($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields)

Returns User objects that are muted by the provided User ID

Returns a list of Users that are muted by the provided User ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserIdMatchesAuthenticatedUser(); // \Swagger\Client\Model\UserIdMatchesAuthenticatedUser | The ID of the authenticated source User for whom to return results.
$max_results = 100; // int | The maximum number of results.
$pagination_token = new \Swagger\Client\Model\PaginationTokenLong(); // \Swagger\Client\Model\PaginationTokenLong | This parameter is used to get the next 'page' of results.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->usersIdMuting($id, $max_results, $pagination_token, $user_fields, $expansions, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdMuting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserIdMatchesAuthenticatedUser**](../Model/.md)| The ID of the authenticated source User for whom to return results. |
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **pagination_token** | [**\Swagger\Client\Model\PaginationTokenLong**](../Model/.md)| This parameter is used to get the next &#x27;page&#x27; of results. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2UsersIdMutingResponse**](../Model/Get2UsersIdMutingResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdUnblock**
> \Swagger\Client\Model\BlockUserMutationResponse usersIdUnblock($source_user_id, $target_user_id)

Unblock User by User ID

Causes the source User to unblock the target User. The source User must match the User context authorizing the request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_user_id = new \Swagger\Client\Model\UserIdMatchesAuthenticatedUser(); // \Swagger\Client\Model\UserIdMatchesAuthenticatedUser | The ID of the authenticated source User that is requesting to unblock the target User.
$target_user_id = new \Swagger\Client\Model\UserId(); // \Swagger\Client\Model\UserId | The ID of the User that the source User is requesting to unblock.

try {
    $result = $apiInstance->usersIdUnblock($source_user_id, $target_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdUnblock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_user_id** | [**\Swagger\Client\Model\UserIdMatchesAuthenticatedUser**](../Model/.md)| The ID of the authenticated source User that is requesting to unblock the target User. |
 **target_user_id** | [**\Swagger\Client\Model\UserId**](../Model/.md)| The ID of the User that the source User is requesting to unblock. |

### Return type

[**\Swagger\Client\Model\BlockUserMutationResponse**](../Model/BlockUserMutationResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdUnfollow**
> \Swagger\Client\Model\UsersFollowingDeleteResponse usersIdUnfollow($source_user_id, $target_user_id)

Unfollow User

Causes the source User to unfollow the target User. The source User must match the User context authorizing the request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_user_id = new \Swagger\Client\Model\UserIdMatchesAuthenticatedUser(); // \Swagger\Client\Model\UserIdMatchesAuthenticatedUser | The ID of the authenticated source User that is requesting to unfollow the target User.
$target_user_id = new \Swagger\Client\Model\UserId(); // \Swagger\Client\Model\UserId | The ID of the User that the source User is requesting to unfollow.

try {
    $result = $apiInstance->usersIdUnfollow($source_user_id, $target_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdUnfollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_user_id** | [**\Swagger\Client\Model\UserIdMatchesAuthenticatedUser**](../Model/.md)| The ID of the authenticated source User that is requesting to unfollow the target User. |
 **target_user_id** | [**\Swagger\Client\Model\UserId**](../Model/.md)| The ID of the User that the source User is requesting to unfollow. |

### Return type

[**\Swagger\Client\Model\UsersFollowingDeleteResponse**](../Model/UsersFollowingDeleteResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdUnmute**
> \Swagger\Client\Model\MuteUserMutationResponse usersIdUnmute($source_user_id, $target_user_id)

Unmute User by User ID

Causes the source User to unmute the target User. The source User must match the User context authorizing the request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source_user_id = new \Swagger\Client\Model\UserIdMatchesAuthenticatedUser(); // \Swagger\Client\Model\UserIdMatchesAuthenticatedUser | The ID of the authenticated source User that is requesting to unmute the target User.
$target_user_id = new \Swagger\Client\Model\UserId(); // \Swagger\Client\Model\UserId | The ID of the User that the source User is requesting to unmute.

try {
    $result = $apiInstance->usersIdUnmute($source_user_id, $target_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdUnmute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_user_id** | [**\Swagger\Client\Model\UserIdMatchesAuthenticatedUser**](../Model/.md)| The ID of the authenticated source User that is requesting to unmute the target User. |
 **target_user_id** | [**\Swagger\Client\Model\UserId**](../Model/.md)| The ID of the User that the source User is requesting to unmute. |

### Return type

[**\Swagger\Client\Model\MuteUserMutationResponse**](../Model/MuteUserMutationResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

