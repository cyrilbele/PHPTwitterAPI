<?php
/**
 * Get2TweetsSearchAllResponseMeta
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
 * Get2TweetsSearchAllResponseMeta Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Get2TweetsSearchAllResponseMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Get2TweetsSearchAllResponse_meta';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'newest_id' => '\Swagger\Client\Model\NewestId',
'next_token' => '\Swagger\Client\Model\NextToken',
'oldest_id' => '\Swagger\Client\Model\OldestId',
'result_count' => '\Swagger\Client\Model\ResultCount'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'newest_id' => null,
'next_token' => null,
'oldest_id' => null,
'result_count' => null    ];

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
        'newest_id' => 'newest_id',
'next_token' => 'next_token',
'oldest_id' => 'oldest_id',
'result_count' => 'result_count'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'newest_id' => 'setNewestId',
'next_token' => 'setNextToken',
'oldest_id' => 'setOldestId',
'result_count' => 'setResultCount'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'newest_id' => 'getNewestId',
'next_token' => 'getNextToken',
'oldest_id' => 'getOldestId',
'result_count' => 'getResultCount'    ];

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
        $this->container['newest_id'] = isset($data['newest_id']) ? $data['newest_id'] : null;
        $this->container['next_token'] = isset($data['next_token']) ? $data['next_token'] : null;
        $this->container['oldest_id'] = isset($data['oldest_id']) ? $data['oldest_id'] : null;
        $this->container['result_count'] = isset($data['result_count']) ? $data['result_count'] : null;
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
     * Gets newest_id
     *
     * @return \Swagger\Client\Model\NewestId
     */
    public function getNewestId()
    {
        return $this->container['newest_id'];
    }

    /**
     * Sets newest_id
     *
     * @param \Swagger\Client\Model\NewestId $newest_id newest_id
     *
     * @return $this
     */
    public function setNewestId($newest_id)
    {
        $this->container['newest_id'] = $newest_id;

        return $this;
    }

    /**
     * Gets next_token
     *
     * @return \Swagger\Client\Model\NextToken
     */
    public function getNextToken()
    {
        return $this->container['next_token'];
    }

    /**
     * Sets next_token
     *
     * @param \Swagger\Client\Model\NextToken $next_token next_token
     *
     * @return $this
     */
    public function setNextToken($next_token)
    {
        $this->container['next_token'] = $next_token;

        return $this;
    }

    /**
     * Gets oldest_id
     *
     * @return \Swagger\Client\Model\OldestId
     */
    public function getOldestId()
    {
        return $this->container['oldest_id'];
    }

    /**
     * Sets oldest_id
     *
     * @param \Swagger\Client\Model\OldestId $oldest_id oldest_id
     *
     * @return $this
     */
    public function setOldestId($oldest_id)
    {
        $this->container['oldest_id'] = $oldest_id;

        return $this;
    }

    /**
     * Gets result_count
     *
     * @return \Swagger\Client\Model\ResultCount
     */
    public function getResultCount()
    {
        return $this->container['result_count'];
    }

    /**
     * Sets result_count
     *
     * @param \Swagger\Client\Model\ResultCount $result_count result_count
     *
     * @return $this
     */
    public function setResultCount($result_count)
    {
        $this->container['result_count'] = $result_count;

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