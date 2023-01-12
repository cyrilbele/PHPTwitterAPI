# Swagger\Client\TweetsApi

All URIs are relative to *https://api.twitter.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrDeleteRules**](TweetsApi.md#addordeleterules) | **POST** /2/tweets/search/stream/rules | Add/Delete rules
[**createTweet**](TweetsApi.md#createtweet) | **POST** /2/tweets | Creation of a Tweet
[**deleteTweetById**](TweetsApi.md#deletetweetbyid) | **DELETE** /2/tweets/{id} | Tweet delete by Tweet ID
[**findTweetById**](TweetsApi.md#findtweetbyid) | **GET** /2/tweets/{id} | Tweet lookup by Tweet ID
[**findTweetsById**](TweetsApi.md#findtweetsbyid) | **GET** /2/tweets | Tweet lookup by Tweet IDs
[**findTweetsThatQuoteATweet**](TweetsApi.md#findtweetsthatquoteatweet) | **GET** /2/tweets/{id}/quote_tweets | Retrieve Tweets that quote a Tweet.
[**getRules**](TweetsApi.md#getrules) | **GET** /2/tweets/search/stream/rules | Rules lookup
[**getTweetsFirehoseStream**](TweetsApi.md#gettweetsfirehosestream) | **GET** /2/tweets/firehose/stream | Firehose stream
[**getTweetsSample10Stream**](TweetsApi.md#gettweetssample10stream) | **GET** /2/tweets/sample10/stream | Sample 10% stream
[**hideReplyById**](TweetsApi.md#hidereplybyid) | **PUT** /2/tweets/{tweet_id}/hidden | Hide replies
[**listsIdTweets**](TweetsApi.md#listsidtweets) | **GET** /2/lists/{id}/tweets | List Tweets timeline by List ID.
[**sampleStream**](TweetsApi.md#samplestream) | **GET** /2/tweets/sample/stream | Sample stream
[**searchStream**](TweetsApi.md#searchstream) | **GET** /2/tweets/search/stream | Filtered stream
[**spaceBuyers**](TweetsApi.md#spacebuyers) | **GET** /2/spaces/{id}/buyers | Retrieve the list of Users who purchased a ticket to the given space
[**spaceTweets**](TweetsApi.md#spacetweets) | **GET** /2/spaces/{id}/tweets | Retrieve Tweets from a Space.
[**tweetCountsFullArchiveSearch**](TweetsApi.md#tweetcountsfullarchivesearch) | **GET** /2/tweets/counts/all | Full archive search counts
[**tweetCountsRecentSearch**](TweetsApi.md#tweetcountsrecentsearch) | **GET** /2/tweets/counts/recent | Recent search counts
[**tweetsFullarchiveSearch**](TweetsApi.md#tweetsfullarchivesearch) | **GET** /2/tweets/search/all | Full-archive search
[**tweetsRecentSearch**](TweetsApi.md#tweetsrecentsearch) | **GET** /2/tweets/search/recent | Recent search
[**usersIdLike**](TweetsApi.md#usersidlike) | **POST** /2/users/{id}/likes | Causes the User (in the path) to like the specified Tweet
[**usersIdLikedTweets**](TweetsApi.md#usersidlikedtweets) | **GET** /2/users/{id}/liked_tweets | Returns Tweet objects liked by the provided User ID
[**usersIdMentions**](TweetsApi.md#usersidmentions) | **GET** /2/users/{id}/mentions | User mention timeline by User ID
[**usersIdRetweets**](TweetsApi.md#usersidretweets) | **POST** /2/users/{id}/retweets | Causes the User (in the path) to retweet the specified Tweet.
[**usersIdTimeline**](TweetsApi.md#usersidtimeline) | **GET** /2/users/{id}/timelines/reverse_chronological | User home timeline by User ID
[**usersIdTweets**](TweetsApi.md#usersidtweets) | **GET** /2/users/{id}/tweets | User Tweets timeline by User ID
[**usersIdUnlike**](TweetsApi.md#usersidunlike) | **DELETE** /2/users/{id}/likes/{tweet_id} | Causes the User (in the path) to unlike the specified Tweet
[**usersIdUnretweets**](TweetsApi.md#usersidunretweets) | **DELETE** /2/users/{id}/retweets/{source_tweet_id} | Causes the User (in the path) to unretweet the specified Tweet

# **addOrDeleteRules**
> \Swagger\Client\Model\AddOrDeleteRulesResponse addOrDeleteRules($body, $dry_run)

Add/Delete rules

Add or delete rules from a User's active rule set. Users can provide unique, optionally tagged rules to add. Users can delete their entire rule set or a subset specified by rule ids or values.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AddOrDeleteRulesRequest(); // \Swagger\Client\Model\AddOrDeleteRulesRequest | 
$dry_run = true; // bool | Dry Run can be used with both the add and delete action, with the expected result given, but without actually taking any action in the system (meaning the end state will always be as it was when the request was submitted). This is particularly useful to validate rule changes.

try {
    $result = $apiInstance->addOrDeleteRules($body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->addOrDeleteRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AddOrDeleteRulesRequest**](../Model/AddOrDeleteRulesRequest.md)|  |
 **dry_run** | **bool**| Dry Run can be used with both the add and delete action, with the expected result given, but without actually taking any action in the system (meaning the end state will always be as it was when the request was submitted). This is particularly useful to validate rule changes. | [optional]

### Return type

[**\Swagger\Client\Model\AddOrDeleteRulesResponse**](../Model/AddOrDeleteRulesResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTweet**
> \Swagger\Client\Model\TweetCreateResponse createTweet($body)

Creation of a Tweet

Causes the User to create a Tweet under the authorized account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TweetCreateRequest(); // \Swagger\Client\Model\TweetCreateRequest | 

try {
    $result = $apiInstance->createTweet($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->createTweet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TweetCreateRequest**](../Model/TweetCreateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\TweetCreateResponse**](../Model/TweetCreateResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTweetById**
> \Swagger\Client\Model\TweetDeleteResponse deleteTweetById($id)

Tweet delete by Tweet ID

Delete specified Tweet (in the path) by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | The ID of the Tweet to be deleted.

try {
    $result = $apiInstance->deleteTweetById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->deleteTweetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| The ID of the Tweet to be deleted. |

### Return type

[**\Swagger\Client\Model\TweetDeleteResponse**](../Model/TweetDeleteResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findTweetById**
> \Swagger\Client\Model\Get2TweetsIdResponse findTweetById($id, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields)

Tweet lookup by Tweet ID

Returns a variety of information about the Tweet specified by the requested ID.

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


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | A single Tweet ID.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$media_fields = array("media_fields_example"); // string[] | A comma separated list of Media fields to display.
$poll_fields = array("poll_fields_example"); // string[] | A comma separated list of Poll fields to display.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$place_fields = array("place_fields_example"); // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->findTweetById($id, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->findTweetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| A single Tweet ID. |
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2TweetsIdResponse**](../Model/Get2TweetsIdResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findTweetsById**
> \Swagger\Client\Model\Get2TweetsResponse findTweetsById($ids, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields)

Tweet lookup by Tweet IDs

Returns a variety of information about the Tweet specified by the requested ID.

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


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array(new \Swagger\Client\Model\TweetId()); // \Swagger\Client\Model\TweetId[] | A comma separated list of Tweet IDs. Up to 100 are allowed in a single request.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$media_fields = array("media_fields_example"); // string[] | A comma separated list of Media fields to display.
$poll_fields = array("poll_fields_example"); // string[] | A comma separated list of Poll fields to display.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$place_fields = array("place_fields_example"); // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->findTweetsById($ids, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->findTweetsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**\Swagger\Client\Model\TweetId[]**](../Model/\Swagger\Client\Model\TweetId.md)| A comma separated list of Tweet IDs. Up to 100 are allowed in a single request. |
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2TweetsResponse**](../Model/Get2TweetsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findTweetsThatQuoteATweet**
> \Swagger\Client\Model\Get2TweetsIdQuoteTweetsResponse findTweetsThatQuoteATweet($id, $max_results, $pagination_token, $exclude, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields)

Retrieve Tweets that quote a Tweet.

Returns a variety of information about each Tweet that quotes the Tweet specified by the requested ID.

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


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | A single Tweet ID.
$max_results = 10; // int | The maximum number of results to be returned.
$pagination_token = new \Swagger\Client\Model\PaginationToken36(); // \Swagger\Client\Model\PaginationToken36 | This parameter is used to get a specified 'page' of results.
$exclude = array("exclude_example"); // string[] | The set of entities to exclude (e.g. 'replies' or 'retweets').
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$media_fields = array("media_fields_example"); // string[] | A comma separated list of Media fields to display.
$poll_fields = array("poll_fields_example"); // string[] | A comma separated list of Poll fields to display.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$place_fields = array("place_fields_example"); // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->findTweetsThatQuoteATweet($id, $max_results, $pagination_token, $exclude, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->findTweetsThatQuoteATweet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| A single Tweet ID. |
 **max_results** | **int**| The maximum number of results to be returned. | [optional] [default to 10]
 **pagination_token** | [**\Swagger\Client\Model\PaginationToken36**](../Model/.md)| This parameter is used to get a specified &#x27;page&#x27; of results. | [optional]
 **exclude** | [**string[]**](../Model/string.md)| The set of entities to exclude (e.g. &#x27;replies&#x27; or &#x27;retweets&#x27;). | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2TweetsIdQuoteTweetsResponse**](../Model/Get2TweetsIdQuoteTweetsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRules**
> \Swagger\Client\Model\RulesLookupResponse getRules($ids, $max_results, $pagination_token)

Rules lookup

Returns rules from a User's active rule set. Users can fetch all of their rules or a subset, specified by the provided rule ids.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array(new \Swagger\Client\Model\RuleId()); // \Swagger\Client\Model\RuleId[] | A comma-separated list of Rule IDs.
$max_results = 1000; // int | The maximum number of results.
$pagination_token = "pagination_token_example"; // string | This value is populated by passing the 'next_token' returned in a request to paginate through results.

try {
    $result = $apiInstance->getRules($ids, $max_results, $pagination_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->getRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**\Swagger\Client\Model\RuleId[]**](../Model/\Swagger\Client\Model\RuleId.md)| A comma-separated list of Rule IDs. | [optional]
 **max_results** | **int**| The maximum number of results. | [optional] [default to 1000]
 **pagination_token** | **string**| This value is populated by passing the &#x27;next_token&#x27; returned in a request to paginate through results. | [optional]

### Return type

[**\Swagger\Client\Model\RulesLookupResponse**](../Model/RulesLookupResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTweetsFirehoseStream**
> \Swagger\Client\Model\StreamingTweetResponse getTweetsFirehoseStream($partition, $backfill_minutes, $start_time, $end_time, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields)

Firehose stream

Streams 100% of public Tweets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partition = 56; // int | The partition number.
$backfill_minutes = 56; // int | The number of minutes of backfill requested.
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp to which the Tweets will be provided.
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp to which the Tweets will be provided.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$media_fields = array("media_fields_example"); // string[] | A comma separated list of Media fields to display.
$poll_fields = array("poll_fields_example"); // string[] | A comma separated list of Poll fields to display.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$place_fields = array("place_fields_example"); // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->getTweetsFirehoseStream($partition, $backfill_minutes, $start_time, $end_time, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->getTweetsFirehoseStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partition** | **int**| The partition number. |
 **backfill_minutes** | **int**| The number of minutes of backfill requested. | [optional]
 **start_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp to which the Tweets will be provided. | [optional]
 **end_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp to which the Tweets will be provided. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\StreamingTweetResponse**](../Model/StreamingTweetResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTweetsSample10Stream**
> \Swagger\Client\Model\Get2TweetsSample10StreamResponse getTweetsSample10Stream($partition, $backfill_minutes, $start_time, $end_time, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields)

Sample 10% stream

Streams a deterministic 10% of public Tweets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partition = 56; // int | The partition number.
$backfill_minutes = 56; // int | The number of minutes of backfill requested.
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp to which the Tweets will be provided.
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp to which the Tweets will be provided.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$media_fields = array("media_fields_example"); // string[] | A comma separated list of Media fields to display.
$poll_fields = array("poll_fields_example"); // string[] | A comma separated list of Poll fields to display.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$place_fields = array("place_fields_example"); // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->getTweetsSample10Stream($partition, $backfill_minutes, $start_time, $end_time, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->getTweetsSample10Stream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partition** | **int**| The partition number. |
 **backfill_minutes** | **int**| The number of minutes of backfill requested. | [optional]
 **start_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp to which the Tweets will be provided. | [optional]
 **end_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp to which the Tweets will be provided. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2TweetsSample10StreamResponse**](../Model/Get2TweetsSample10StreamResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hideReplyById**
> \Swagger\Client\Model\TweetHideResponse hideReplyById($tweet_id, $body)

Hide replies

Hides or unhides a reply to an owned conversation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tweet_id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | The ID of the reply that you want to hide or unhide.
$body = new \Swagger\Client\Model\TweetHideRequest(); // \Swagger\Client\Model\TweetHideRequest | 

try {
    $result = $apiInstance->hideReplyById($tweet_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->hideReplyById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tweet_id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| The ID of the reply that you want to hide or unhide. |
 **body** | [**\Swagger\Client\Model\TweetHideRequest**](../Model/TweetHideRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TweetHideResponse**](../Model/TweetHideResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsIdTweets**
> \Swagger\Client\Model\Get2ListsIdTweetsResponse listsIdTweets($id, $max_results, $pagination_token, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields)

List Tweets timeline by List ID.

Returns a list of Tweets associated with the provided List ID.

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


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\ListId(); // \Swagger\Client\Model\ListId | The ID of the List.
$max_results = 100; // int | The maximum number of results.
$pagination_token = new \Swagger\Client\Model\PaginationToken36(); // \Swagger\Client\Model\PaginationToken36 | This parameter is used to get the next 'page' of results.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$media_fields = array("media_fields_example"); // string[] | A comma separated list of Media fields to display.
$poll_fields = array("poll_fields_example"); // string[] | A comma separated list of Poll fields to display.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$place_fields = array("place_fields_example"); // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->listsIdTweets($id, $max_results, $pagination_token, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->listsIdTweets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\ListId**](../Model/.md)| The ID of the List. |
 **max_results** | **int**| The maximum number of results. | [optional] [default to 100]
 **pagination_token** | [**\Swagger\Client\Model\PaginationToken36**](../Model/.md)| This parameter is used to get the next &#x27;page&#x27; of results. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2ListsIdTweetsResponse**](../Model/Get2ListsIdTweetsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sampleStream**
> \Swagger\Client\Model\StreamingTweetResponse sampleStream($backfill_minutes, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields)

Sample stream

Streams a deterministic 1% of public Tweets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$backfill_minutes = 56; // int | The number of minutes of backfill requested.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$media_fields = array("media_fields_example"); // string[] | A comma separated list of Media fields to display.
$poll_fields = array("poll_fields_example"); // string[] | A comma separated list of Poll fields to display.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$place_fields = array("place_fields_example"); // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->sampleStream($backfill_minutes, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->sampleStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **backfill_minutes** | **int**| The number of minutes of backfill requested. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\StreamingTweetResponse**](../Model/StreamingTweetResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchStream**
> \Swagger\Client\Model\FilteredStreamingTweetResponse searchStream($backfill_minutes, $start_time, $end_time, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields)

Filtered stream

Streams Tweets matching the stream's active rule set.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$backfill_minutes = 56; // int | The number of minutes of backfill requested.
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp from which the Tweets will be provided.
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp to which the Tweets will be provided.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$media_fields = array("media_fields_example"); // string[] | A comma separated list of Media fields to display.
$poll_fields = array("poll_fields_example"); // string[] | A comma separated list of Poll fields to display.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$place_fields = array("place_fields_example"); // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->searchStream($backfill_minutes, $start_time, $end_time, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->searchStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **backfill_minutes** | **int**| The number of minutes of backfill requested. | [optional]
 **start_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp from which the Tweets will be provided. | [optional]
 **end_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp to which the Tweets will be provided. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\FilteredStreamingTweetResponse**](../Model/FilteredStreamingTweetResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

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

$apiInstance = new Swagger\Client\Api\TweetsApi(
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
    echo 'Exception when calling TweetsApi->spaceBuyers: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\TweetsApi(
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
    echo 'Exception when calling TweetsApi->spaceTweets: ', $e->getMessage(), PHP_EOL;
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

# **tweetCountsFullArchiveSearch**
> \Swagger\Client\Model\Get2TweetsCountsAllResponse tweetCountsFullArchiveSearch($query, $start_time, $end_time, $since_id, $until_id, $next_token, $pagination_token, $granularity, $search_count_fields)

Full archive search counts

Returns Tweet Counts that match a search query.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | One query/rule/filter for matching Tweets. Refer to https://t.co/rulelength to identify the max query length.
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The oldest UTC timestamp (from most recent 7 days) from which the Tweets will be provided. Timestamp is in second granularity and is inclusive (i.e. 12:00:01 includes the first second of the minute).
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The newest, most recent UTC timestamp to which the Tweets will be provided. Timestamp is in second granularity and is exclusive (i.e. 12:00:01 excludes the first second of the minute).
$since_id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | Returns results with a Tweet ID greater than (that is, more recent than) the specified ID.
$until_id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | Returns results with a Tweet ID less than (that is, older than) the specified ID.
$next_token = new \Swagger\Client\Model\PaginationToken36(); // \Swagger\Client\Model\PaginationToken36 | This parameter is used to get the next 'page' of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified.
$pagination_token = new \Swagger\Client\Model\PaginationToken36(); // \Swagger\Client\Model\PaginationToken36 | This parameter is used to get the next 'page' of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified.
$granularity = "hour"; // string | The granularity for the search counts results.
$search_count_fields = array("search_count_fields_example"); // string[] | A comma separated list of SearchCount fields to display.

try {
    $result = $apiInstance->tweetCountsFullArchiveSearch($query, $start_time, $end_time, $since_id, $until_id, $next_token, $pagination_token, $granularity, $search_count_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->tweetCountsFullArchiveSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| One query/rule/filter for matching Tweets. Refer to https://t.co/rulelength to identify the max query length. |
 **start_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The oldest UTC timestamp (from most recent 7 days) from which the Tweets will be provided. Timestamp is in second granularity and is inclusive (i.e. 12:00:01 includes the first second of the minute). | [optional]
 **end_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The newest, most recent UTC timestamp to which the Tweets will be provided. Timestamp is in second granularity and is exclusive (i.e. 12:00:01 excludes the first second of the minute). | [optional]
 **since_id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| Returns results with a Tweet ID greater than (that is, more recent than) the specified ID. | [optional]
 **until_id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| Returns results with a Tweet ID less than (that is, older than) the specified ID. | [optional]
 **next_token** | [**\Swagger\Client\Model\PaginationToken36**](../Model/.md)| This parameter is used to get the next &#x27;page&#x27; of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified. | [optional]
 **pagination_token** | [**\Swagger\Client\Model\PaginationToken36**](../Model/.md)| This parameter is used to get the next &#x27;page&#x27; of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified. | [optional]
 **granularity** | **string**| The granularity for the search counts results. | [optional] [default to hour]
 **search_count_fields** | [**string[]**](../Model/string.md)| A comma separated list of SearchCount fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2TweetsCountsAllResponse**](../Model/Get2TweetsCountsAllResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tweetCountsRecentSearch**
> \Swagger\Client\Model\Get2TweetsCountsRecentResponse tweetCountsRecentSearch($query, $start_time, $end_time, $since_id, $until_id, $next_token, $pagination_token, $granularity, $search_count_fields)

Recent search counts

Returns Tweet Counts from the last 7 days that match a search query.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | One query/rule/filter for matching Tweets. Refer to https://t.co/rulelength to identify the max query length.
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The oldest UTC timestamp (from most recent 7 days) from which the Tweets will be provided. Timestamp is in second granularity and is inclusive (i.e. 12:00:01 includes the first second of the minute).
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The newest, most recent UTC timestamp to which the Tweets will be provided. Timestamp is in second granularity and is exclusive (i.e. 12:00:01 excludes the first second of the minute).
$since_id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | Returns results with a Tweet ID greater than (that is, more recent than) the specified ID.
$until_id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | Returns results with a Tweet ID less than (that is, older than) the specified ID.
$next_token = new \Swagger\Client\Model\PaginationToken36(); // \Swagger\Client\Model\PaginationToken36 | This parameter is used to get the next 'page' of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified.
$pagination_token = new \Swagger\Client\Model\PaginationToken36(); // \Swagger\Client\Model\PaginationToken36 | This parameter is used to get the next 'page' of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified.
$granularity = "hour"; // string | The granularity for the search counts results.
$search_count_fields = array("search_count_fields_example"); // string[] | A comma separated list of SearchCount fields to display.

try {
    $result = $apiInstance->tweetCountsRecentSearch($query, $start_time, $end_time, $since_id, $until_id, $next_token, $pagination_token, $granularity, $search_count_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->tweetCountsRecentSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| One query/rule/filter for matching Tweets. Refer to https://t.co/rulelength to identify the max query length. |
 **start_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The oldest UTC timestamp (from most recent 7 days) from which the Tweets will be provided. Timestamp is in second granularity and is inclusive (i.e. 12:00:01 includes the first second of the minute). | [optional]
 **end_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The newest, most recent UTC timestamp to which the Tweets will be provided. Timestamp is in second granularity and is exclusive (i.e. 12:00:01 excludes the first second of the minute). | [optional]
 **since_id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| Returns results with a Tweet ID greater than (that is, more recent than) the specified ID. | [optional]
 **until_id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| Returns results with a Tweet ID less than (that is, older than) the specified ID. | [optional]
 **next_token** | [**\Swagger\Client\Model\PaginationToken36**](../Model/.md)| This parameter is used to get the next &#x27;page&#x27; of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified. | [optional]
 **pagination_token** | [**\Swagger\Client\Model\PaginationToken36**](../Model/.md)| This parameter is used to get the next &#x27;page&#x27; of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified. | [optional]
 **granularity** | **string**| The granularity for the search counts results. | [optional] [default to hour]
 **search_count_fields** | [**string[]**](../Model/string.md)| A comma separated list of SearchCount fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2TweetsCountsRecentResponse**](../Model/Get2TweetsCountsRecentResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tweetsFullarchiveSearch**
> \Swagger\Client\Model\Get2TweetsSearchAllResponse tweetsFullarchiveSearch($query, $start_time, $end_time, $since_id, $until_id, $max_results, $next_token, $pagination_token, $sort_order, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields)

Full-archive search

Returns Tweets that match a search query.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | One query/rule/filter for matching Tweets. Refer to https://t.co/rulelength to identify the max query length.
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The oldest UTC timestamp from which the Tweets will be provided. Timestamp is in second granularity and is inclusive (i.e. 12:00:01 includes the first second of the minute).
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The newest, most recent UTC timestamp to which the Tweets will be provided. Timestamp is in second granularity and is exclusive (i.e. 12:00:01 excludes the first second of the minute).
$since_id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | Returns results with a Tweet ID greater than (that is, more recent than) the specified ID.
$until_id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | Returns results with a Tweet ID less than (that is, older than) the specified ID.
$max_results = 10; // int | The maximum number of search results to be returned by a request.
$next_token = new \Swagger\Client\Model\PaginationToken36(); // \Swagger\Client\Model\PaginationToken36 | This parameter is used to get the next 'page' of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified.
$pagination_token = new \Swagger\Client\Model\PaginationToken36(); // \Swagger\Client\Model\PaginationToken36 | This parameter is used to get the next 'page' of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified.
$sort_order = "sort_order_example"; // string | This order in which to return results.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$media_fields = array("media_fields_example"); // string[] | A comma separated list of Media fields to display.
$poll_fields = array("poll_fields_example"); // string[] | A comma separated list of Poll fields to display.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$place_fields = array("place_fields_example"); // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->tweetsFullarchiveSearch($query, $start_time, $end_time, $since_id, $until_id, $max_results, $next_token, $pagination_token, $sort_order, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->tweetsFullarchiveSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| One query/rule/filter for matching Tweets. Refer to https://t.co/rulelength to identify the max query length. |
 **start_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The oldest UTC timestamp from which the Tweets will be provided. Timestamp is in second granularity and is inclusive (i.e. 12:00:01 includes the first second of the minute). | [optional]
 **end_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The newest, most recent UTC timestamp to which the Tweets will be provided. Timestamp is in second granularity and is exclusive (i.e. 12:00:01 excludes the first second of the minute). | [optional]
 **since_id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| Returns results with a Tweet ID greater than (that is, more recent than) the specified ID. | [optional]
 **until_id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| Returns results with a Tweet ID less than (that is, older than) the specified ID. | [optional]
 **max_results** | **int**| The maximum number of search results to be returned by a request. | [optional] [default to 10]
 **next_token** | [**\Swagger\Client\Model\PaginationToken36**](../Model/.md)| This parameter is used to get the next &#x27;page&#x27; of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified. | [optional]
 **pagination_token** | [**\Swagger\Client\Model\PaginationToken36**](../Model/.md)| This parameter is used to get the next &#x27;page&#x27; of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified. | [optional]
 **sort_order** | **string**| This order in which to return results. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2TweetsSearchAllResponse**](../Model/Get2TweetsSearchAllResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tweetsRecentSearch**
> \Swagger\Client\Model\Get2TweetsSearchRecentResponse tweetsRecentSearch($query, $start_time, $end_time, $since_id, $until_id, $max_results, $next_token, $pagination_token, $sort_order, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields)

Recent search

Returns Tweets from the last 7 days that match a search query.

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


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | One query/rule/filter for matching Tweets. Refer to https://t.co/rulelength to identify the max query length.
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The oldest UTC timestamp from which the Tweets will be provided. Timestamp is in second granularity and is inclusive (i.e. 12:00:01 includes the first second of the minute).
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The newest, most recent UTC timestamp to which the Tweets will be provided. Timestamp is in second granularity and is exclusive (i.e. 12:00:01 excludes the first second of the minute).
$since_id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | Returns results with a Tweet ID greater than (that is, more recent than) the specified ID.
$until_id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | Returns results with a Tweet ID less than (that is, older than) the specified ID.
$max_results = 10; // int | The maximum number of search results to be returned by a request.
$next_token = new \Swagger\Client\Model\PaginationToken36(); // \Swagger\Client\Model\PaginationToken36 | This parameter is used to get the next 'page' of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified.
$pagination_token = new \Swagger\Client\Model\PaginationToken36(); // \Swagger\Client\Model\PaginationToken36 | This parameter is used to get the next 'page' of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified.
$sort_order = "sort_order_example"; // string | This order in which to return results.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$media_fields = array("media_fields_example"); // string[] | A comma separated list of Media fields to display.
$poll_fields = array("poll_fields_example"); // string[] | A comma separated list of Poll fields to display.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$place_fields = array("place_fields_example"); // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->tweetsRecentSearch($query, $start_time, $end_time, $since_id, $until_id, $max_results, $next_token, $pagination_token, $sort_order, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->tweetsRecentSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| One query/rule/filter for matching Tweets. Refer to https://t.co/rulelength to identify the max query length. |
 **start_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The oldest UTC timestamp from which the Tweets will be provided. Timestamp is in second granularity and is inclusive (i.e. 12:00:01 includes the first second of the minute). | [optional]
 **end_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The newest, most recent UTC timestamp to which the Tweets will be provided. Timestamp is in second granularity and is exclusive (i.e. 12:00:01 excludes the first second of the minute). | [optional]
 **since_id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| Returns results with a Tweet ID greater than (that is, more recent than) the specified ID. | [optional]
 **until_id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| Returns results with a Tweet ID less than (that is, older than) the specified ID. | [optional]
 **max_results** | **int**| The maximum number of search results to be returned by a request. | [optional] [default to 10]
 **next_token** | [**\Swagger\Client\Model\PaginationToken36**](../Model/.md)| This parameter is used to get the next &#x27;page&#x27; of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified. | [optional]
 **pagination_token** | [**\Swagger\Client\Model\PaginationToken36**](../Model/.md)| This parameter is used to get the next &#x27;page&#x27; of results. The value used with the parameter is pulled directly from the response provided by the API, and should not be modified. | [optional]
 **sort_order** | **string**| This order in which to return results. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2TweetsSearchRecentResponse**](../Model/Get2TweetsSearchRecentResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdLike**
> \Swagger\Client\Model\UsersLikesCreateResponse usersIdLike($id, $body)

Causes the User (in the path) to like the specified Tweet

Causes the User (in the path) to like the specified Tweet. The User in the path must match the User context authorizing the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserIdMatchesAuthenticatedUser(); // \Swagger\Client\Model\UserIdMatchesAuthenticatedUser | The ID of the authenticated source User that is requesting to like the Tweet.
$body = new \Swagger\Client\Model\UsersLikesCreateRequest(); // \Swagger\Client\Model\UsersLikesCreateRequest | 

try {
    $result = $apiInstance->usersIdLike($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->usersIdLike: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserIdMatchesAuthenticatedUser**](../Model/.md)| The ID of the authenticated source User that is requesting to like the Tweet. |
 **body** | [**\Swagger\Client\Model\UsersLikesCreateRequest**](../Model/UsersLikesCreateRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\UsersLikesCreateResponse**](../Model/UsersLikesCreateResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdLikedTweets**
> \Swagger\Client\Model\Get2UsersIdLikedTweetsResponse usersIdLikedTweets($id, $max_results, $pagination_token, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields)

Returns Tweet objects liked by the provided User ID

Returns a list of Tweets liked by the provided User ID

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


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserId(); // \Swagger\Client\Model\UserId | The ID of the User to lookup.
$max_results = 56; // int | The maximum number of results.
$pagination_token = new \Swagger\Client\Model\PaginationToken36(); // \Swagger\Client\Model\PaginationToken36 | This parameter is used to get the next 'page' of results.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$media_fields = array("media_fields_example"); // string[] | A comma separated list of Media fields to display.
$poll_fields = array("poll_fields_example"); // string[] | A comma separated list of Poll fields to display.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$place_fields = array("place_fields_example"); // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->usersIdLikedTweets($id, $max_results, $pagination_token, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->usersIdLikedTweets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserId**](../Model/.md)| The ID of the User to lookup. |
 **max_results** | **int**| The maximum number of results. | [optional]
 **pagination_token** | [**\Swagger\Client\Model\PaginationToken36**](../Model/.md)| This parameter is used to get the next &#x27;page&#x27; of results. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2UsersIdLikedTweetsResponse**](../Model/Get2UsersIdLikedTweetsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdMentions**
> \Swagger\Client\Model\Get2UsersIdMentionsResponse usersIdMentions($id, $since_id, $until_id, $max_results, $pagination_token, $start_time, $end_time, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields)

User mention timeline by User ID

Returns Tweet objects that mention username associated to the provided User ID

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


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserId(); // \Swagger\Client\Model\UserId | The ID of the User to lookup.
$since_id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | The minimum Tweet ID to be included in the result set. This parameter takes precedence over start_time if both are specified.
$until_id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | The maximum Tweet ID to be included in the result set. This parameter takes precedence over end_time if both are specified.
$max_results = 56; // int | The maximum number of results.
$pagination_token = new \Swagger\Client\Model\PaginationToken36(); // \Swagger\Client\Model\PaginationToken36 | This parameter is used to get the next 'page' of results.
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp from which the Tweets will be provided. The since_id parameter takes precedence if it is also specified.
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp to which the Tweets will be provided. The until_id parameter takes precedence if it is also specified.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$media_fields = array("media_fields_example"); // string[] | A comma separated list of Media fields to display.
$poll_fields = array("poll_fields_example"); // string[] | A comma separated list of Poll fields to display.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$place_fields = array("place_fields_example"); // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->usersIdMentions($id, $since_id, $until_id, $max_results, $pagination_token, $start_time, $end_time, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->usersIdMentions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserId**](../Model/.md)| The ID of the User to lookup. |
 **since_id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| The minimum Tweet ID to be included in the result set. This parameter takes precedence over start_time if both are specified. | [optional]
 **until_id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| The maximum Tweet ID to be included in the result set. This parameter takes precedence over end_time if both are specified. | [optional]
 **max_results** | **int**| The maximum number of results. | [optional]
 **pagination_token** | [**\Swagger\Client\Model\PaginationToken36**](../Model/.md)| This parameter is used to get the next &#x27;page&#x27; of results. | [optional]
 **start_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp from which the Tweets will be provided. The since_id parameter takes precedence if it is also specified. | [optional]
 **end_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp to which the Tweets will be provided. The until_id parameter takes precedence if it is also specified. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2UsersIdMentionsResponse**](../Model/Get2UsersIdMentionsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdRetweets**
> \Swagger\Client\Model\UsersRetweetsCreateResponse usersIdRetweets($id, $body)

Causes the User (in the path) to retweet the specified Tweet.

Causes the User (in the path) to retweet the specified Tweet. The User in the path must match the User context authorizing the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserIdMatchesAuthenticatedUser(); // \Swagger\Client\Model\UserIdMatchesAuthenticatedUser | The ID of the authenticated source User that is requesting to retweet the Tweet.
$body = new \Swagger\Client\Model\UsersRetweetsCreateRequest(); // \Swagger\Client\Model\UsersRetweetsCreateRequest | 

try {
    $result = $apiInstance->usersIdRetweets($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->usersIdRetweets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserIdMatchesAuthenticatedUser**](../Model/.md)| The ID of the authenticated source User that is requesting to retweet the Tweet. |
 **body** | [**\Swagger\Client\Model\UsersRetweetsCreateRequest**](../Model/UsersRetweetsCreateRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\UsersRetweetsCreateResponse**](../Model/UsersRetweetsCreateResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdTimeline**
> \Swagger\Client\Model\Get2UsersIdTimelinesReverseChronologicalResponse usersIdTimeline($id, $since_id, $until_id, $max_results, $pagination_token, $exclude, $start_time, $end_time, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields)

User home timeline by User ID

Returns Tweet objects that appears in the provided User ID's home timeline

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserIdMatchesAuthenticatedUser(); // \Swagger\Client\Model\UserIdMatchesAuthenticatedUser | The ID of the authenticated source User to list Reverse Chronological Timeline Tweets of.
$since_id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | The minimum Tweet ID to be included in the result set. This parameter takes precedence over start_time if both are specified.
$until_id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | The maximum Tweet ID to be included in the result set. This parameter takes precedence over end_time if both are specified.
$max_results = 56; // int | The maximum number of results.
$pagination_token = new \Swagger\Client\Model\PaginationToken36(); // \Swagger\Client\Model\PaginationToken36 | This parameter is used to get the next 'page' of results.
$exclude = array("exclude_example"); // string[] | The set of entities to exclude (e.g. 'replies' or 'retweets').
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp from which the Tweets will be provided. The since_id parameter takes precedence if it is also specified.
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp to which the Tweets will be provided. The until_id parameter takes precedence if it is also specified.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$media_fields = array("media_fields_example"); // string[] | A comma separated list of Media fields to display.
$poll_fields = array("poll_fields_example"); // string[] | A comma separated list of Poll fields to display.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$place_fields = array("place_fields_example"); // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->usersIdTimeline($id, $since_id, $until_id, $max_results, $pagination_token, $exclude, $start_time, $end_time, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->usersIdTimeline: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserIdMatchesAuthenticatedUser**](../Model/.md)| The ID of the authenticated source User to list Reverse Chronological Timeline Tweets of. |
 **since_id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| The minimum Tweet ID to be included in the result set. This parameter takes precedence over start_time if both are specified. | [optional]
 **until_id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| The maximum Tweet ID to be included in the result set. This parameter takes precedence over end_time if both are specified. | [optional]
 **max_results** | **int**| The maximum number of results. | [optional]
 **pagination_token** | [**\Swagger\Client\Model\PaginationToken36**](../Model/.md)| This parameter is used to get the next &#x27;page&#x27; of results. | [optional]
 **exclude** | [**string[]**](../Model/string.md)| The set of entities to exclude (e.g. &#x27;replies&#x27; or &#x27;retweets&#x27;). | [optional]
 **start_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp from which the Tweets will be provided. The since_id parameter takes precedence if it is also specified. | [optional]
 **end_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp to which the Tweets will be provided. The until_id parameter takes precedence if it is also specified. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2UsersIdTimelinesReverseChronologicalResponse**](../Model/Get2UsersIdTimelinesReverseChronologicalResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdTweets**
> \Swagger\Client\Model\Get2UsersIdTweetsResponse usersIdTweets($id, $since_id, $until_id, $max_results, $pagination_token, $exclude, $start_time, $end_time, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields)

User Tweets timeline by User ID

Returns a list of Tweets authored by the provided User ID

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


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserId(); // \Swagger\Client\Model\UserId | The ID of the User to lookup.
$since_id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | The minimum Tweet ID to be included in the result set. This parameter takes precedence over start_time if both are specified.
$until_id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | The maximum Tweet ID to be included in the result set. This parameter takes precedence over end_time if both are specified.
$max_results = 56; // int | The maximum number of results.
$pagination_token = new \Swagger\Client\Model\PaginationToken36(); // \Swagger\Client\Model\PaginationToken36 | This parameter is used to get the next 'page' of results.
$exclude = array("exclude_example"); // string[] | The set of entities to exclude (e.g. 'replies' or 'retweets').
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp from which the Tweets will be provided. The since_id parameter takes precedence if it is also specified.
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp to which the Tweets will be provided. The until_id parameter takes precedence if it is also specified.
$tweet_fields = array("tweet_fields_example"); // string[] | A comma separated list of Tweet fields to display.
$expansions = array("expansions_example"); // string[] | A comma separated list of fields to expand.
$media_fields = array("media_fields_example"); // string[] | A comma separated list of Media fields to display.
$poll_fields = array("poll_fields_example"); // string[] | A comma separated list of Poll fields to display.
$user_fields = array("user_fields_example"); // string[] | A comma separated list of User fields to display.
$place_fields = array("place_fields_example"); // string[] | A comma separated list of Place fields to display.

try {
    $result = $apiInstance->usersIdTweets($id, $since_id, $until_id, $max_results, $pagination_token, $exclude, $start_time, $end_time, $tweet_fields, $expansions, $media_fields, $poll_fields, $user_fields, $place_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->usersIdTweets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserId**](../Model/.md)| The ID of the User to lookup. |
 **since_id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| The minimum Tweet ID to be included in the result set. This parameter takes precedence over start_time if both are specified. | [optional]
 **until_id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| The maximum Tweet ID to be included in the result set. This parameter takes precedence over end_time if both are specified. | [optional]
 **max_results** | **int**| The maximum number of results. | [optional]
 **pagination_token** | [**\Swagger\Client\Model\PaginationToken36**](../Model/.md)| This parameter is used to get the next &#x27;page&#x27; of results. | [optional]
 **exclude** | [**string[]**](../Model/string.md)| The set of entities to exclude (e.g. &#x27;replies&#x27; or &#x27;retweets&#x27;). | [optional]
 **start_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The earliest UTC timestamp from which the Tweets will be provided. The since_id parameter takes precedence if it is also specified. | [optional]
 **end_time** | **\DateTime**| YYYY-MM-DDTHH:mm:ssZ. The latest UTC timestamp to which the Tweets will be provided. The until_id parameter takes precedence if it is also specified. | [optional]
 **tweet_fields** | [**string[]**](../Model/string.md)| A comma separated list of Tweet fields to display. | [optional]
 **expansions** | [**string[]**](../Model/string.md)| A comma separated list of fields to expand. | [optional]
 **media_fields** | [**string[]**](../Model/string.md)| A comma separated list of Media fields to display. | [optional]
 **poll_fields** | [**string[]**](../Model/string.md)| A comma separated list of Poll fields to display. | [optional]
 **user_fields** | [**string[]**](../Model/string.md)| A comma separated list of User fields to display. | [optional]
 **place_fields** | [**string[]**](../Model/string.md)| A comma separated list of Place fields to display. | [optional]

### Return type

[**\Swagger\Client\Model\Get2UsersIdTweetsResponse**](../Model/Get2UsersIdTweetsResponse.md)

### Authorization

[BearerToken](../../README.md#BearerToken), [OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdUnlike**
> \Swagger\Client\Model\UsersLikesDeleteResponse usersIdUnlike($id, $tweet_id)

Causes the User (in the path) to unlike the specified Tweet

Causes the User (in the path) to unlike the specified Tweet. The User must match the User context authorizing the request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserIdMatchesAuthenticatedUser(); // \Swagger\Client\Model\UserIdMatchesAuthenticatedUser | The ID of the authenticated source User that is requesting to unlike the Tweet.
$tweet_id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | The ID of the Tweet that the User is requesting to unlike.

try {
    $result = $apiInstance->usersIdUnlike($id, $tweet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->usersIdUnlike: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserIdMatchesAuthenticatedUser**](../Model/.md)| The ID of the authenticated source User that is requesting to unlike the Tweet. |
 **tweet_id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| The ID of the Tweet that the User is requesting to unlike. |

### Return type

[**\Swagger\Client\Model\UsersLikesDeleteResponse**](../Model/UsersLikesDeleteResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdUnretweets**
> \Swagger\Client\Model\UsersRetweetsDeleteResponse usersIdUnretweets($id, $source_tweet_id)

Causes the User (in the path) to unretweet the specified Tweet

Causes the User (in the path) to unretweet the specified Tweet. The User must match the User context authorizing the request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');// Configure HTTP basic authorization: UserToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TweetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Swagger\Client\Model\UserIdMatchesAuthenticatedUser(); // \Swagger\Client\Model\UserIdMatchesAuthenticatedUser | The ID of the authenticated source User that is requesting to retweet the Tweet.
$source_tweet_id = new \Swagger\Client\Model\TweetId(); // \Swagger\Client\Model\TweetId | The ID of the Tweet that the User is requesting to unretweet.

try {
    $result = $apiInstance->usersIdUnretweets($id, $source_tweet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TweetsApi->usersIdUnretweets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\UserIdMatchesAuthenticatedUser**](../Model/.md)| The ID of the authenticated source User that is requesting to retweet the Tweet. |
 **source_tweet_id** | [**\Swagger\Client\Model\TweetId**](../Model/.md)| The ID of the Tweet that the User is requesting to unretweet. |

### Return type

[**\Swagger\Client\Model\UsersRetweetsDeleteResponse**](../Model/UsersRetweetsDeleteResponse.md)

### Authorization

[OAuth2UserToken](../../README.md#OAuth2UserToken), [UserToken](../../README.md#UserToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/problem+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

