# User

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | [**\DateTime**](\DateTime.md) | Creation time of this User. | [optional] 
**description** | **string** | The text of this User&#x27;s profile description (also known as bio), if the User provided one. | [optional] 
**entities** | [**\Swagger\Client\Model\UserEntities**](UserEntities.md) |  | [optional] 
**id** | [**\Swagger\Client\Model\UserId**](UserId.md) |  | 
**location** | **string** | The location specified in the User&#x27;s profile, if the User provided one. As this is a freeform value, it may not indicate a valid location, but it may be fuzzily evaluated when performing searches with location queries. | [optional] 
**name** | **string** | The friendly name of this User, as shown on their profile. | 
**pinned_tweet_id** | [**\Swagger\Client\Model\TweetId**](TweetId.md) |  | [optional] 
**profile_image_url** | **string** | The URL to the profile image for this User. | [optional] 
**protected** | **bool** | Indicates if this User has chosen to protect their Tweets (in other words, if this User&#x27;s Tweets are private). | [optional] 
**public_metrics** | [**\Swagger\Client\Model\UserPublicMetrics**](UserPublicMetrics.md) |  | [optional] 
**url** | **string** | The URL specified in the User&#x27;s profile. | [optional] 
**username** | [**\Swagger\Client\Model\UserName**](UserName.md) |  | 
**verified** | **bool** | Indicate if this User is a verified Twitter User. | [optional] 
**verified_type** | **string** | The Twitter Blue verified type of the user, eg: blue, government, business or none. | [optional] 
**withheld** | [**\Swagger\Client\Model\UserWithheld**](UserWithheld.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

