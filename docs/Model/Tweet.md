# Tweet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attachments** | [**\Swagger\Client\Model\TweetAttachments**](TweetAttachments.md) |  | [optional] 
**author_id** | [**\Swagger\Client\Model\UserId**](UserId.md) |  | [optional] 
**context_annotations** | [**\Swagger\Client\Model\ContextAnnotation[]**](ContextAnnotation.md) |  | [optional] 
**conversation_id** | [**\Swagger\Client\Model\TweetId**](TweetId.md) |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Creation time of the Tweet. | [optional] 
**edit_controls** | [**\Swagger\Client\Model\TweetEditControls**](TweetEditControls.md) |  | [optional] 
**edit_history_tweet_ids** | [**\Swagger\Client\Model\TweetId[]**](TweetId.md) | A list of Tweet Ids in this Tweet chain. | 
**entities** | [**\Swagger\Client\Model\FullTextEntities**](FullTextEntities.md) |  | [optional] 
**geo** | [**\Swagger\Client\Model\TweetGeo**](TweetGeo.md) |  | [optional] 
**id** | [**\Swagger\Client\Model\TweetId**](TweetId.md) |  | 
**in_reply_to_user_id** | [**\Swagger\Client\Model\UserId**](UserId.md) |  | [optional] 
**lang** | **string** | Language of the Tweet, if detected by Twitter. Returned as a BCP47 language tag. | [optional] 
**non_public_metrics** | [**\Swagger\Client\Model\TweetNonPublicMetrics**](TweetNonPublicMetrics.md) |  | [optional] 
**organic_metrics** | [**\Swagger\Client\Model\TweetOrganicMetrics**](TweetOrganicMetrics.md) |  | [optional] 
**possibly_sensitive** | **bool** | Indicates if this Tweet contains URLs marked as sensitive, for example content suitable for mature audiences. | [optional] 
**promoted_metrics** | [**\Swagger\Client\Model\TweetPromotedMetrics**](TweetPromotedMetrics.md) |  | [optional] 
**public_metrics** | [**\Swagger\Client\Model\TweetPublicMetrics**](TweetPublicMetrics.md) |  | [optional] 
**referenced_tweets** | [**\Swagger\Client\Model\TweetReferencedTweets[]**](TweetReferencedTweets.md) | A list of Tweets this Tweet refers to. For example, if the parent Tweet is a Retweet, a Quoted Tweet or a Reply, it will include the related Tweet referenced to by its parent. | [optional] 
**reply_settings** | [**\Swagger\Client\Model\ReplySettings**](ReplySettings.md) |  | [optional] 
**source** | **string** | This is deprecated. | [optional] 
**text** | [**\Swagger\Client\Model\TweetText**](TweetText.md) |  | 
**withheld** | [**\Swagger\Client\Model\TweetWithheld**](TweetWithheld.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

