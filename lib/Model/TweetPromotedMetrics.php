<?php
/**
 * TweetPromotedMetrics
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Twitter API v2
 *
 * Twitter API v2 available endpoints
 *
 * OpenAPI spec version: 2.60
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * TweetPromotedMetrics Class Doc Comment
 *
 * @category Class
 * @description Promoted nonpublic engagement metrics for the Tweet at the time of the request.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TweetPromotedMetrics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Tweet_promoted_metrics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'impression_count' => 'int',
'like_count' => 'int',
'reply_count' => 'int',
'retweet_count' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'impression_count' => 'int32',
'like_count' => 'int32',
'reply_count' => 'int32',
'retweet_count' => 'int32'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'impression_count' => 'impression_count',
'like_count' => 'like_count',
'reply_count' => 'reply_count',
'retweet_count' => 'retweet_count'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'impression_count' => 'setImpressionCount',
'like_count' => 'setLikeCount',
'reply_count' => 'setReplyCount',
'retweet_count' => 'setRetweetCount'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'impression_count' => 'getImpressionCount',
'like_count' => 'getLikeCount',
'reply_count' => 'getReplyCount',
'retweet_count' => 'getRetweetCount'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['impression_count'] = isset($data['impression_count']) ? $data['impression_count'] : null;
        $this->container['like_count'] = isset($data['like_count']) ? $data['like_count'] : null;
        $this->container['reply_count'] = isset($data['reply_count']) ? $data['reply_count'] : null;
        $this->container['retweet_count'] = isset($data['retweet_count']) ? $data['retweet_count'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets impression_count
     *
     * @return int
     */
    public function getImpressionCount()
    {
        return $this->container['impression_count'];
    }

    /**
     * Sets impression_count
     *
     * @param int $impression_count Number of times this Tweet has been viewed.
     *
     * @return $this
     */
    public function setImpressionCount($impression_count)
    {
        $this->container['impression_count'] = $impression_count;

        return $this;
    }

    /**
     * Gets like_count
     *
     * @return int
     */
    public function getLikeCount()
    {
        return $this->container['like_count'];
    }

    /**
     * Sets like_count
     *
     * @param int $like_count Number of times this Tweet has been liked.
     *
     * @return $this
     */
    public function setLikeCount($like_count)
    {
        $this->container['like_count'] = $like_count;

        return $this;
    }

    /**
     * Gets reply_count
     *
     * @return int
     */
    public function getReplyCount()
    {
        return $this->container['reply_count'];
    }

    /**
     * Sets reply_count
     *
     * @param int $reply_count Number of times this Tweet has been replied to.
     *
     * @return $this
     */
    public function setReplyCount($reply_count)
    {
        $this->container['reply_count'] = $reply_count;

        return $this;
    }

    /**
     * Gets retweet_count
     *
     * @return int
     */
    public function getRetweetCount()
    {
        return $this->container['retweet_count'];
    }

    /**
     * Sets retweet_count
     *
     * @param int $retweet_count Number of times this Tweet has been Retweeted.
     *
     * @return $this
     */
    public function setRetweetCount($retweet_count)
    {
        $this->container['retweet_count'] = $retweet_count;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange] 
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange] 
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange] 
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
