# DmEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attachments** | [**\Swagger\Client\Model\DmEventAttachments**](DmEventAttachments.md) |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**dm_conversation_id** | [**\Swagger\Client\Model\DmConversationId**](DmConversationId.md) |  | [optional] 
**event_type** | **string** |  | 
**id** | [**\Swagger\Client\Model\DmEventId**](DmEventId.md) |  | 
**participant_ids** | [**\Swagger\Client\Model\UserId[]**](UserId.md) | A list of participants for a ParticipantsJoin or ParticipantsLeave event_type. | [optional] 
**referenced_tweets** | [**\Swagger\Client\Model\DmEventReferencedTweets[]**](DmEventReferencedTweets.md) | A list of Tweets this DM refers to. | [optional] 
**sender_id** | [**\Swagger\Client\Model\UserId**](UserId.md) |  | [optional] 
**text** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

