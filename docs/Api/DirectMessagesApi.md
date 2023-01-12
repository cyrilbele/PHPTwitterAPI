# Swagger\Client\DirectMessagesApi

All URIs are relative to *https://api.twitter.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dmConversationByIdEventIdCreate**](DirectMessagesApi.md#dmconversationbyideventidcreate) | **POST** /2/dm_conversations/{dm_conversation_id}/messages | Send a new message to a DM Conversation
[**dmConversationIdCreate**](DirectMessagesApi.md#dmconversationidcreate) | **POST** /2/dm_conversations | Create a new DM Conversation
[**dmConversationWithUserEventIdCreate**](DirectMessagesApi.md#dmconversationwithusereventidcreate) | **POST** /2/dm_conversations/with/{participant_id}/messages | Send a new message to a user
[**getDmConversationsIdDmEvents**](DirectMessagesApi.md#getdmconversationsiddmevents) | **GET** /2/dm_conversations/{id}/dm_events | Get DM Events for a DM Conversation
[**getDmConversationsWithParticipantIdDmEvents**](DirectMessagesApi.md#getdmconversationswithparticipantiddmevents) | **GET** /2/dm_conversations/with/{participant_id}/dm_events | Get DM Events for a DM Conversation
[**getDmEvents**](DirectMessagesApi.md#getdmevents) | **GET** /2/dm_events | Get recent DM Events

# **dmConversationByIdEventIdCreate**
> \Swagger\Client\Model\CreateDmEventResponse dmConversationByIdEventIdCreate($dm_conversation_id, $body)

Send a new message to a DM Conversation

Creates a new message for a DM Conversation specified by DM Conversation ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DirectMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dm_conversation_id = "dm_conversation_id_example"; // string | The DM Conversation ID.
$body = new \Swagger\Client\Model\CreateMessageRequest(); // \Swagger\Client\Model\CreateMessageRequest | 

try {
    $result = $apiInstance->dmConversationByIdEventIdCreate($dm_conversation_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectMessagesApi->dmConversationByIdEventIdCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dm_conversation_id** | **string**| The DM Conversation ID. |
 **body** | [**\Swagger\Client\Model\CreateMessageRequest**](../Model/CreateMessageRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CreateDmEventResponse**](../Model/CreateDmEventResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dmConversationIdCreate**
> \Swagger\Client\Model\CreateDmEventResponse dmConversationIdCreate($body)

Create a new DM Conversation

Creates a new DM Conversation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DirectMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateDmConversationRequest(); // \Swagger\Client\Model\CreateDmConversationRequest | 

try {
    $result = $apiInstance->dmConversationIdCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectMessagesApi->dmConversationIdCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateDmConversationRequest**](../Model/CreateDmConversationRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CreateDmEventResponse**](../Model/CreateDmEventResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dmConversationWithUserEventIdCreate**
> \Swagger\Client\Model\CreateDmEventResponse dmConversationWithUserEventIdCreate($participant_id, $body)

Send a new message to a user

Creates a new message for a DM Conversation with a participant user by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DirectMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$participant_id = new \Swagger\Client\Model\UserId(); // \Swagger\Client\Model\UserId | The ID of the recipient user that will receive the DM.
$body = new \Swagger\Client\Model\CreateMessageRequest(); // \Swagger\Client\Model\CreateMessageRequest | 

try {
    $result = $apiInstance->dmConversationWithUserEventIdCreate($participant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectMessagesApi->dmConversationWithUserEventIdCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **participant_id** | [**\Swagger\Client\Model\UserId**](../Model/.md)| The ID of the recipient user that will receive the DM. |
 **body** | [**\Swagger\Client\Model\CreateMessageRequest**](../Model/CreateMessageRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CreateDmEventResponse**](../Model/CreateDmEventResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDmConversationsIdDmEvents**
> \Swagger\Client\Model\Get2DmConversationsIdDmEventsResponse getDmConversationsIdDmEvents($id, $max_results, $pagination_token, $event_types, $dm_event_fields, $expansions, $media_fields, $user_fields, $tweet_fields)

Get DM Events for a DM Conversation

Returns DM Events for a DM Conversation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DirectMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\DmConversationId(); // \Swagger\Client\Model\DmConversationId | The DM Conversation ID.
$max_results = 100; // int | The maximum number of results.
$pagination_token = new \Swagger\Client\Model\PaginationToken32(); // \Swagger\Client\Model\PaginationToken32 | This parameter is used to get a specified 'page' of results.
$event_types = array("[\"MessageCreate\",\"ParticipantsLeave\",\"ParticipantsJoin\"]"); // string[] | The set of event_types to include in the results.
$dm_event_fields = array("dm_event_fields_example"); // string[] | A comma separated list of DmEvent fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$media_fields = array("media_fields_example"); // string[] | A comma separated list of Media fields to display.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->getDmConversationsIdDmEvents($id, $max_results, $pagination_token, $event_types, $dm_event_fields, $expansions, $media_fields, $user_fields, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectMessagesApi->getDmConversationsIdDmEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\DmConversationId**](../Model/.md)| The DM Conversation ID. |
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **pagination_token** | [**\Swagger\Client\Model\PaginationToken32**](../Model/.md)| This parameter is used to get a specified &#x27;page&#x27; of results. | [optional]
 **event_types** | [**string[]**](../Model/string.md)| The set of event_types to include in the results. | [optional] [default to [&quot;MessageCreate&quot;,&quot;ParticipantsLeave&quot;,&quot;ParticipantsJoin&quot;]]
 **dm_event_fields** | [**string[]**](../Model/string.md)| A comma separated list of DmEvent fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2DmConversationsIdDmEventsResponse**](../Model/Get2DmConversationsIdDmEventsResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDmConversationsWithParticipantIdDmEvents**
> \Swagger\Client\Model\Get2DmConversationsWithParticipantIdDmEventsResponse getDmConversationsWithParticipantIdDmEvents($participant_id, $max_results, $pagination_token, $event_types, $dm_event_fields, $expansions, $media_fields, $user_fields, $tweet_fields)

Get DM Events for a DM Conversation

Returns DM Events for a DM Conversation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DirectMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$participant_id = new \Swagger\Client\Model\UserId(); // \Swagger\Client\Model\UserId | The ID of the participant user for the One to One DM conversation.
$max_results = 100; // int | The maximum number of results.
$pagination_token = new \Swagger\Client\Model\PaginationToken32(); // \Swagger\Client\Model\PaginationToken32 | This parameter is used to get a specified 'page' of results.
$event_types = array("[\"MessageCreate\",\"ParticipantsLeave\",\"ParticipantsJoin\"]"); // string[] | The set of event_types to include in the results.
$dm_event_fields = array("dm_event_fields_example"); // string[] | A comma separated list of DmEvent fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$media_fields = array("media_fields_example"); // string[] | A comma separated list of Media fields to display.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->getDmConversationsWithParticipantIdDmEvents($participant_id, $max_results, $pagination_token, $event_types, $dm_event_fields, $expansions, $media_fields, $user_fields, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectMessagesApi->getDmConversationsWithParticipantIdDmEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **participant_id** | [**\Swagger\Client\Model\UserId**](../Model/.md)| The ID of the participant user for the One to One DM conversation. |
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **pagination_token** | [**\Swagger\Client\Model\PaginationToken32**](../Model/.md)| This parameter is used to get a specified &#x27;page&#x27; of results. | [optional]
 **event_types** | [**string[]**](../Model/string.md)| The set of event_types to include in the results. | [optional] [default to [&quot;MessageCreate&quot;,&quot;ParticipantsLeave&quot;,&quot;ParticipantsJoin&quot;]]
 **dm_event_fields** | [**string[]**](../Model/string.md)| A comma separated list of DmEvent fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2DmConversationsWithParticipantIdDmEventsResponse**](../Model/Get2DmConversationsWithParticipantIdDmEventsResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDmEvents**
> \Swagger\Client\Model\Get2DmEventsResponse getDmEvents($max_results, $pagination_token, $event_types, $dm_event_fields, $expansions, $media_fields, $user_fields, $tweet_fields)

Get recent DM Events

Returns recent DM Events across DM conversations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DirectMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$max_results = 100; // int | The maximum number of results.
$pagination_token = new \Swagger\Client\Model\PaginationToken32(); // \Swagger\Client\Model\PaginationToken32 | This parameter is used to get a specified 'page' of results.
$event_types = array("[\"MessageCreate\",\"ParticipantsLeave\",\"ParticipantsJoin\"]"); // string[] | The set of event_types to include in the results.
$dm_event_fields = array("dm_event_fields_example"); // string[] | A comma separated list of DmEvent fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$media_fields = array("media_fields_example"); // string[] | A comma separated list of Media fields to display.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.

try {
    $result = $apiInstance->getDmEvents($max_results, $pagination_token, $event_types, $dm_event_fields, $expansions, $media_fields, $user_fields, $tweet_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectMessagesApi->getDmEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **pagination_token** | [**\Swagger\Client\Model\PaginationToken32**](../Model/.md)| This parameter is used to get a specified &#x27;page&#x27; of results. | [optional]
 **event_types** | [**string[]**](../Model/string.md)| The set of event_types to include in the results. | [optional] [default to [&quot;MessageCreate&quot;,&quot;ParticipantsLeave&quot;,&quot;ParticipantsJoin&quot;]]
 **dm_event_fields** | [**string[]**](../Model/string.md)| A comma separated list of DmEvent fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2DmEventsResponse**](../Model/Get2DmEventsResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

