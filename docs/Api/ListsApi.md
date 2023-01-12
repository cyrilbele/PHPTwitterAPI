# Swagger\Client\ListsApi

All URIs are relative to *https://api.twitter.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserListMemberships**](ListsApi.md#getuserlistmemberships) | **GET** /2/users/{id}/list_memberships | Get a User&#x27;s List Memberships
[**listAddMember**](ListsApi.md#listaddmember) | **POST** /2/lists/{id}/members | Add a List member
[**listIdCreate**](ListsApi.md#listidcreate) | **POST** /2/lists | Create List
[**listIdDelete**](ListsApi.md#listiddelete) | **DELETE** /2/lists/{id} | Delete List
[**listIdGet**](ListsApi.md#listidget) | **GET** /2/lists/{id} | List lookup by List ID.
[**listIdUpdate**](ListsApi.md#listidupdate) | **PUT** /2/lists/{id} | Update List.
[**listRemoveMember**](ListsApi.md#listremovemember) | **DELETE** /2/lists/{id}/members/{user_id} | Remove a List member
[**listUserFollow**](ListsApi.md#listuserfollow) | **POST** /2/users/{id}/followed_lists | Follow a List
[**listUserOwnedLists**](ListsApi.md#listuserownedlists) | **GET** /2/users/{id}/owned_lists | Get a User&#x27;s Owned Lists.
[**listUserPin**](ListsApi.md#listuserpin) | **POST** /2/users/{id}/pinned_lists | Pin a List
[**listUserPinnedLists**](ListsApi.md#listuserpinnedlists) | **GET** /2/users/{id}/pinned_lists | Get a User&#x27;s Pinned Lists
[**listUserUnfollow**](ListsApi.md#listuserunfollow) | **DELETE** /2/users/{id}/followed_lists/{list_id} | Unfollow a List
[**listUserUnpin**](ListsApi.md#listuserunpin) | **DELETE** /2/users/{id}/pinned_lists/{list_id} | Unpin a List
[**userFollowedLists**](ListsApi.md#userfollowedlists) | **GET** /2/users/{id}/followed_lists | Get User&#x27;s Followed Lists

# **getUserListMemberships**
> \Swagger\Client\Model\Get2UsersIdListMembershipsResponse getUserListMemberships($id, $max_results, $pagination_token, $list_fields, $expansions, $user_fields)

Get a User's List Memberships

Get a User's List Memberships.

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


$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserId(); // \Swagger\Client\Model\UserId | The ID of the User to lookup.
$max_results = 100; // int | The maximum number of results.
$pagination_token = new \Swagger\Client\Model\PaginationTokenLong(); // \Swagger\Client\Model\PaginationTokenLong | This parameter is used to get a specified 'page' of results.
$list_fields = array("list_fields_example"); // string[] | A comma separated list of List fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.

try {
    $result = $apiInstance->getUserListMemberships($id, $max_results, $pagination_token, $list_fields, $expansions, $user_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->getUserListMemberships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserId**](../Model/.md)| The ID of the User to lookup. |
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **pagination_token** | [**\Swagger\Client\Model\PaginationTokenLong**](../Model/.md)| This parameter is used to get a specified &#x27;page&#x27; of results. | [optional]
 **list_fields** | [**string[]**](../Model/string.md)| A comma separated list of List fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2UsersIdListMembershipsResponse**](../Model/Get2UsersIdListMembershipsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAddMember**
> \Swagger\Client\Model\ListMutateResponse listAddMember($id, $body)

Add a List member

Causes a User to become a member of a List.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\ListId(); // \Swagger\Client\Model\ListId | The ID of the List for which to add a member.
$body = new \Swagger\Client\Model\ListAddUserRequest(); // \Swagger\Client\Model\ListAddUserRequest | 

try {
    $result = $apiInstance->listAddMember($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listAddMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\ListId**](../Model/.md)| The ID of the List for which to add a member. |
 **body** | [**\Swagger\Client\Model\ListAddUserRequest**](../Model/ListAddUserRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ListMutateResponse**](../Model/ListMutateResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdCreate**
> \Swagger\Client\Model\ListCreateResponse listIdCreate($body)

Create List

Creates a new List.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ListCreateRequest(); // \Swagger\Client\Model\ListCreateRequest | 

try {
    $result = $apiInstance->listIdCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listIdCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ListCreateRequest**](../Model/ListCreateRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ListCreateResponse**](../Model/ListCreateResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdDelete**
> \Swagger\Client\Model\ListDeleteResponse listIdDelete($id)

Delete List

Delete a List that you own.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\ListId(); // \Swagger\Client\Model\ListId | The ID of the List to delete.

try {
    $result = $apiInstance->listIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\ListId**](../Model/.md)| The ID of the List to delete. |

### Return type

[**\Swagger\Client\Model\ListDeleteResponse**](../Model/ListDeleteResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdGet**
> \Swagger\Client\Model\Get2ListsIdResponse listIdGet($id, $list_fields, $expansions, $user_fields)

List lookup by List ID.

Returns a List.

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


$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\ListId(); // \Swagger\Client\Model\ListId | The ID of the List.
$list_fields = array("list_fields_example"); // string[] | A comma separated list of List fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.

try {
    $result = $apiInstance->listIdGet($id, $list_fields, $expansions, $user_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\ListId**](../Model/.md)| The ID of the List. |
 **list_fields** | [**string[]**](../Model/string.md)| A comma separated list of List fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2ListsIdResponse**](../Model/Get2ListsIdResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdUpdate**
> \Swagger\Client\Model\ListUpdateResponse listIdUpdate($id, $body)

Update List.

Update a List that you own.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\ListId(); // \Swagger\Client\Model\ListId | The ID of the List to modify.
$body = new \Swagger\Client\Model\ListUpdateRequest(); // \Swagger\Client\Model\ListUpdateRequest | 

try {
    $result = $apiInstance->listIdUpdate($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listIdUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\ListId**](../Model/.md)| The ID of the List to modify. |
 **body** | [**\Swagger\Client\Model\ListUpdateRequest**](../Model/ListUpdateRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ListUpdateResponse**](../Model/ListUpdateResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRemoveMember**
> \Swagger\Client\Model\ListMutateResponse listRemoveMember($id, $user_id)

Remove a List member

Causes a User to be removed from the members of a List.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\ListId(); // \Swagger\Client\Model\ListId | The ID of the List to remove a member.
$user_id = new \Swagger\Client\Model\UserId(); // \Swagger\Client\Model\UserId | The ID of User that will be removed from the List.

try {
    $result = $apiInstance->listRemoveMember($id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listRemoveMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\ListId**](../Model/.md)| The ID of the List to remove a member. |
 **user_id** | [**\Swagger\Client\Model\UserId**](../Model/.md)| The ID of User that will be removed from the List. |

### Return type

[**\Swagger\Client\Model\ListMutateResponse**](../Model/ListMutateResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listUserFollow**
> \Swagger\Client\Model\ListFollowedResponse listUserFollow($id, $body)

Follow a List

Causes a User to follow a List.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserIdMatchesAuthenticatedUser(); // \Swagger\Client\Model\UserIdMatchesAuthenticatedUser | The ID of the authenticated source User that will follow the List.
$body = new \Swagger\Client\Model\ListFollowedRequest(); // \Swagger\Client\Model\ListFollowedRequest | 

try {
    $result = $apiInstance->listUserFollow($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listUserFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserIdMatchesAuthenticatedUser**](../Model/.md)| The ID of the authenticated source User that will follow the List. |
 **body** | [**\Swagger\Client\Model\ListFollowedRequest**](../Model/ListFollowedRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ListFollowedResponse**](../Model/ListFollowedResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listUserOwnedLists**
> \Swagger\Client\Model\Get2UsersIdOwnedListsResponse listUserOwnedLists($id, $max_results, $pagination_token, $list_fields, $expansions, $user_fields)

Get a User's Owned Lists.

Get a User's Owned Lists.

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


$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserId(); // \Swagger\Client\Model\UserId | The ID of the User to lookup.
$max_results = 100; // int | The maximum number of results.
$pagination_token = new \Swagger\Client\Model\PaginationTokenLong(); // \Swagger\Client\Model\PaginationTokenLong | This parameter is used to get a specified 'page' of results.
$list_fields = array("list_fields_example"); // string[] | A comma separated list of List fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.

try {
    $result = $apiInstance->listUserOwnedLists($id, $max_results, $pagination_token, $list_fields, $expansions, $user_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listUserOwnedLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserId**](../Model/.md)| The ID of the User to lookup. |
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **pagination_token** | [**\Swagger\Client\Model\PaginationTokenLong**](../Model/.md)| This parameter is used to get a specified &#x27;page&#x27; of results. | [optional]
 **list_fields** | [**string[]**](../Model/string.md)| A comma separated list of List fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2UsersIdOwnedListsResponse**](../Model/Get2UsersIdOwnedListsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listUserPin**
> \Swagger\Client\Model\ListPinnedResponse listUserPin($body, $id)

Pin a List

Causes a User to pin a List.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ListPinnedRequest(); // \Swagger\Client\Model\ListPinnedRequest | 
$id = new \Swagger\Client\Model\UserIdMatchesAuthenticatedUser(); // \Swagger\Client\Model\UserIdMatchesAuthenticatedUser | The ID of the authenticated source User that will pin the List.

try {
    $result = $apiInstance->listUserPin($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listUserPin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ListPinnedRequest**](../Model/ListPinnedRequest.md)|  |
 **id** | [**\Swagger\Client\Model\UserIdMatchesAuthenticatedUser**](../Model/.md)| The ID of the authenticated source User that will pin the List. |

### Return type

[**\Swagger\Client\Model\ListPinnedResponse**](../Model/ListPinnedResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listUserPinnedLists**
> \Swagger\Client\Model\Get2UsersIdPinnedListsResponse listUserPinnedLists($id, $list_fields, $expansions, $user_fields)

Get a User's Pinned Lists

Get a User's Pinned Lists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserIdMatchesAuthenticatedUser(); // \Swagger\Client\Model\UserIdMatchesAuthenticatedUser | The ID of the authenticated source User for whom to return results.
$list_fields = array("list_fields_example"); // string[] | A comma separated list of List fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.

try {
    $result = $apiInstance->listUserPinnedLists($id, $list_fields, $expansions, $user_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listUserPinnedLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserIdMatchesAuthenticatedUser**](../Model/.md)| The ID of the authenticated source User for whom to return results. |
 **list_fields** | [**string[]**](../Model/string.md)| A comma separated list of List fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2UsersIdPinnedListsResponse**](../Model/Get2UsersIdPinnedListsResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listUserUnfollow**
> \Swagger\Client\Model\ListFollowedResponse listUserUnfollow($id, $list_id)

Unfollow a List

Causes a User to unfollow a List.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserIdMatchesAuthenticatedUser(); // \Swagger\Client\Model\UserIdMatchesAuthenticatedUser | The ID of the authenticated source User that will unfollow the List.
$list_id = new \Swagger\Client\Model\ListId(); // \Swagger\Client\Model\ListId | The ID of the List to unfollow.

try {
    $result = $apiInstance->listUserUnfollow($id, $list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listUserUnfollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserIdMatchesAuthenticatedUser**](../Model/.md)| The ID of the authenticated source User that will unfollow the List. |
 **list_id** | [**\Swagger\Client\Model\ListId**](../Model/.md)| The ID of the List to unfollow. |

### Return type

[**\Swagger\Client\Model\ListFollowedResponse**](../Model/ListFollowedResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listUserUnpin**
> \Swagger\Client\Model\ListUnpinResponse listUserUnpin($id, $list_id)

Unpin a List

Causes a User to remove a pinned List.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserIdMatchesAuthenticatedUser(); // \Swagger\Client\Model\UserIdMatchesAuthenticatedUser | The ID of the authenticated source User for whom to return results.
$list_id = new \Swagger\Client\Model\ListId(); // \Swagger\Client\Model\ListId | The ID of the List to unpin.

try {
    $result = $apiInstance->listUserUnpin($id, $list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listUserUnpin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserIdMatchesAuthenticatedUser**](../Model/.md)| The ID of the authenticated source User for whom to return results. |
 **list_id** | [**\Swagger\Client\Model\ListId**](../Model/.md)| The ID of the List to unpin. |

### Return type

[**\Swagger\Client\Model\ListUnpinResponse**](../Model/ListUnpinResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userFollowedLists**
> \Swagger\Client\Model\Get2UsersIdFollowedListsResponse userFollowedLists($id, $max_results, $pagination_token, $list_fields, $expansions, $user_fields)

Get User's Followed Lists

Returns a User's followed Lists.

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


$apiInstance = new Swagger\Client\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserId(); // \Swagger\Client\Model\UserId | The ID of the User to lookup.
$max_results = 100; // int | The maximum number of results.
$pagination_token = new \Swagger\Client\Model\PaginationTokenLong(); // \Swagger\Client\Model\PaginationTokenLong | This parameter is used to get a specified 'page' of results.
$list_fields = array("list_fields_example"); // string[] | A comma separated list of List fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.

try {
    $result = $apiInstance->userFollowedLists($id, $max_results, $pagination_token, $list_fields, $expansions, $user_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->userFollowedLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserId**](../Model/.md)| The ID of the User to lookup. |
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **pagination_token** | [**\Swagger\Client\Model\PaginationTokenLong**](../Model/.md)| This parameter is used to get a specified &#x27;page&#x27; of results. | [optional]
 **list_fields** | [**string[]**](../Model/string.md)| A comma separated list of List fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2UsersIdFollowedListsResponse**](../Model/Get2UsersIdFollowedListsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

