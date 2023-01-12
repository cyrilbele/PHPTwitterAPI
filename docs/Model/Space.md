# Space

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | [**\DateTime**](\DateTime.md) | Creation time of the Space. | [optional] 
**creator_id** | [**\Swagger\Client\Model\UserId**](UserId.md) |  | [optional] 
**ended_at** | [**\DateTime**](\DateTime.md) | End time of the Space. | [optional] 
**host_ids** | [**\Swagger\Client\Model\UserId[]**](UserId.md) | The user ids for the hosts of the Space. | [optional] 
**id** | [**\Swagger\Client\Model\SpaceId**](SpaceId.md) |  | 
**invited_user_ids** | [**\Swagger\Client\Model\UserId[]**](UserId.md) | An array of user ids for people who were invited to a Space. | [optional] 
**is_ticketed** | **bool** | Denotes if the Space is a ticketed Space. | [optional] 
**lang** | **string** | The language of the Space. | [optional] 
**participant_count** | **int** | The number of participants in a Space. | [optional] 
**scheduled_start** | [**\DateTime**](\DateTime.md) | A date time stamp for when a Space is scheduled to begin. | [optional] 
**speaker_ids** | [**\Swagger\Client\Model\UserId[]**](UserId.md) | An array of user ids for people who were speakers in a Space. | [optional] 
**started_at** | [**\DateTime**](\DateTime.md) | When the Space was started as a date string. | [optional] 
**state** | **string** | The current state of the Space. | 
**subscriber_count** | **int** | The number of people who have either purchased a ticket or set a reminder for this Space. | [optional] 
**title** | **string** | The title of the Space. | [optional] 
**topics** | [**\Swagger\Client\Model\SpaceTopics[]**](SpaceTopics.md) | The topics of a Space, as selected by its creator. | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | When the Space was last updated. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

