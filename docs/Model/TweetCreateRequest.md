# TweetCreateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_uri** | **string** | Card Uri Parameter. This is mutually exclusive from Quote Tweet Id, Poll, Media, and Direct Message Deep Link. | [optional] 
**direct_message_deep_link** | **string** | Link to take the conversation from the public timeline to a private Direct Message. | [optional] 
**for_super_followers_only** | **bool** | Exclusive Tweet for super followers. | [optional] [default to false]
**geo** | [**\Swagger\Client\Model\TweetCreateRequestGeo**](TweetCreateRequestGeo.md) |  | [optional] 
**media** | [**\Swagger\Client\Model\TweetCreateRequestMedia**](TweetCreateRequestMedia.md) |  | [optional] 
**nullcast** | **bool** | Nullcasted (promoted-only) Tweets do not appear in the public timeline and are not served to followers. | [optional] [default to false]
**poll** | [**\Swagger\Client\Model\TweetCreateRequestPoll**](TweetCreateRequestPoll.md) |  | [optional] 
**quote_tweet_id** | [**\Swagger\Client\Model\TweetId**](TweetId.md) |  | [optional] 
**reply** | [**\Swagger\Client\Model\TweetCreateRequestReply**](TweetCreateRequestReply.md) |  | [optional] 
**reply_settings** | **string** | Settings to indicate who can reply to the Tweet. | [optional] 
**text** | [**\Swagger\Client\Model\TweetText**](TweetText.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

