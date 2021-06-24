/*
   Copyright © 2020 Sidemash Cloud Services

   Licensed under the Apache  License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless  required  by  applicable  law  or  agreed to in writing,
   software  distributed  under  the  License  is distributed on an
   "AS IS"  BASIS, WITHOUT  WARRANTIES  OR CONDITIONS OF  ANY KIND,
   either  express  or  implied.  See the License for the  specific
   language governing permissions and limitations under the License.
*/


<?php namespace Sidemash\Sdk;

use JsonSerializable;

class StreamSquare implements JsonSerializable  {

    /** @var string */
    private $id ;

    /** @var string */
    private $url ;

    /** @var InstanceStatus */
    private $status ;

    /** @var boolean */
    private $isElastic ;

    /** @var StreamSquareSize */
    private $size ;

    /** @var string | null */
    private $playDomainName ;

    /** @var string | null */
    private $publishDomainName ;

    /** @var Publish */
    private $publish ;

    /** @var Hook */
    private $hook ;

    /** @var string | null */
    private $description ;

    /** @var string | null */
    private $foreignData ;


    /** @var string */
    const Type = "StreamSquare";

    /**
     * StreamSquare constructor
     * @param string $id
     * @param string $url
     * @param InstanceStatus $status
     * @param boolean $isElastic
     * @param StreamSquareSize $size
     * @param string | null $playDomainName
     * @param string | null $publishDomainName
     * @param Publish $publish
     * @param Hook $hook
     * @param string | null $description
     * @param string | null $foreignData
     */
    function __construct($id,
                         $url,
                         InstanceStatus $status,
                         $isElastic,
                         StreamSquareSize $size,
                         $playDomainName,
                         $publishDomainName,
                         Publish $publish,
                         Hook $hook,
                         $description,
                         $foreignData) {
        $this->id = $id;
        $this->url = $url;
        $this->status = $status;
        $this->isElastic = $isElastic;
        $this->size = $size;
        $this->playDomainName = $playDomainName;
        $this->publishDomainName = $publishDomainName;
        $this->publish = $publish;
        $this->hook = $hook;
        $this->description = $description;
        $this->foreignData = $foreignData;
    }

    /**
     * Getter of the field 'id'.
     *
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Getter of the field 'url'.
     *
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * Getter of the field 'status'.
     *
     * @return InstanceStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Getter of the field 'isElastic'.
     *
     * @return boolean
     */
    public function isElastic() {
        return $this->isElastic;
    }

    /**
     * Getter of the field 'size'.
     *
     * @return StreamSquareSize
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * Getter of the field 'playDomainName'.
     *
     * @return string | null
     */
    public function getPlayDomainName() {
        return $this->playDomainName;
    }

    /**
     * Getter of the field 'publishDomainName'.
     *
     * @return string | null
     */
    public function getPublishDomainName() {
        return $this->publishDomainName;
    }

    /**
     * Getter of the field 'publish'.
     *
     * @return Publish
     */
    public function getPublish() {
        return $this->publish;
    }

    /**
     * Getter of the field 'hook'.
     *
     * @return Hook
     */
    public function getHook() {
        return $this->hook;
    }

    /**
     * Getter of the field 'description'.
     *
     * @return string | null
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Getter of the field 'foreignData'.
     *
     * @return string | null
     */
    public function getForeignData() {
        return $this->foreignData;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new StreamSquare where the field 'id' has been updated with the value passed as parameter.
     *
     * @param string $id
     * @return StreamSquare
     */
    public function withId($id) {
        return new StreamSquare($id, $this->url, $this->status, $this->isElastic, $this->size,
                                $this->playDomainName, $this->publishDomainName, $this->publish,
                                $this->hook, $this->description, $this->foreignData);
    }

    /**
     * Immutable update. Return a new StreamSquare where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return StreamSquare
     */
    public function withUrl($url) {
        return new StreamSquare($this->id, $url, $this->status, $this->isElastic, $this->size,
                                $this->playDomainName, $this->publishDomainName, $this->publish,
                                $this->hook, $this->description, $this->foreignData);
    }

    /**
     * Immutable update. Return a new StreamSquare where the field 'status' has been updated with the value passed as parameter.
     *
     * @param InstanceStatus $status
     * @return StreamSquare
     */
    public function withStatus(InstanceStatus $status) {
        assert($this->status != null, "In class StreamSquare the param 'status' of type InstanceStatus can not be null");
        return new StreamSquare($this->id, $this->url, $status, $this->isElastic, $this->size,
                                $this->playDomainName, $this->publishDomainName, $this->publish,
                                $this->hook, $this->description, $this->foreignData);
    }

    /**
     * Immutable update. Return a new StreamSquare where the field 'isElastic' has been updated with the value passed as parameter.
     *
     * @param boolean $isElastic
     * @return StreamSquare
     */
    public function withIsElastic($isElastic) {
        return new StreamSquare($this->id, $this->url, $this->status, $isElastic, $this->size,
                                $this->playDomainName, $this->publishDomainName, $this->publish,
                                $this->hook, $this->description, $this->foreignData);
    }

    /**
     * Immutable update. Return a new StreamSquare where the field 'size' has been updated with the value passed as parameter.
     *
     * @param StreamSquareSize $size
     * @return StreamSquare
     */
    public function withSize(StreamSquareSize $size) {
        assert($this->size != null, "In class StreamSquare the param 'size' of type StreamSquareSize can not be null");
        return new StreamSquare($this->id, $this->url, $this->status, $this->isElastic, $size,
                                $this->playDomainName, $this->publishDomainName, $this->publish,
                                $this->hook, $this->description, $this->foreignData);
    }

    /**
     * Immutable update. Return a new StreamSquare where the field 'playDomainName' has been updated with the value passed as parameter.
     *
     * @param string | null $playDomainName
     * @return StreamSquare
     */
    public function withPlayDomainName($playDomainName) {
        return new StreamSquare($this->id, $this->url, $this->status, $this->isElastic, $this->size,
                                $playDomainName, $this->publishDomainName, $this->publish,
                                $this->hook, $this->description, $this->foreignData);
    }

    /**
     * Immutable update. Return a new StreamSquare where the field 'publishDomainName' has been updated with the value passed as parameter.
     *
     * @param string | null $publishDomainName
     * @return StreamSquare
     */
    public function withPublishDomainName($publishDomainName) {
        return new StreamSquare($this->id, $this->url, $this->status, $this->isElastic, $this->size,
                                $this->playDomainName, $publishDomainName, $this->publish,
                                $this->hook, $this->description, $this->foreignData);
    }

    /**
     * Immutable update. Return a new StreamSquare where the field 'publish' has been updated with the value passed as parameter.
     *
     * @param Publish $publish
     * @return StreamSquare
     */
    public function withPublish(Publish $publish) {
        assert($this->publish != null, "In class StreamSquare the param 'publish' of type Publish can not be null");
        return new StreamSquare($this->id, $this->url, $this->status, $this->isElastic, $this->size,
                                $this->playDomainName, $this->publishDomainName, $publish,
                                $this->hook, $this->description, $this->foreignData);
    }

    /**
     * Immutable update. Return a new StreamSquare where the field 'hook' has been updated with the value passed as parameter.
     *
     * @param Hook $hook
     * @return StreamSquare
     */
    public function withHook(Hook $hook) {
        assert($this->hook != null, "In class StreamSquare the param 'hook' of type Hook can not be null");
        return new StreamSquare($this->id, $this->url, $this->status, $this->isElastic, $this->size,
                                $this->playDomainName, $this->publishDomainName, $this->publish,
                                $hook, $this->description, $this->foreignData);
    }

    /**
     * Immutable update. Return a new StreamSquare where the field 'description' has been updated with the value passed as parameter.
     *
     * @param string | null $description
     * @return StreamSquare
     */
    public function withDescription($description) {
        return new StreamSquare($this->id, $this->url, $this->status, $this->isElastic, $this->size,
                                $this->playDomainName, $this->publishDomainName, $this->publish,
                                $this->hook, $description, $this->foreignData);
    }

    /**
     * Immutable update. Return a new StreamSquare where the field 'foreignData' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignData
     * @return StreamSquare
     */
    public function withForeignData($foreignData) {
        return new StreamSquare($this->id, $this->url, $this->status, $this->isElastic, $this->size,
                                $this->playDomainName, $this->publishDomainName, $this->publish,
                                $this->hook, $this->description, $foreignData);
    }

    /**
     * Create StreamSquare from JSON string
     *
     * @param string $json
     * @return StreamSquare
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create StreamSquare from associative array of its fields
     *
     * @param array $array
     * @return StreamSquare
     */
    public static function fromArray(array $array) {
        return new StreamSquare($array['id'],
                                $array['url'],
                                InstanceStatus::fromString($array['status']),
                                $array['isElastic'],
                                StreamSquareSize::fromString($array['size']),
                                (isset($array['playDomainName']) ? $array['playDomainName'] : null),
                                (isset($array['publishDomainName']) ? $array['publishDomainName'] : null),
                                Publish::fromArray($array['publish']),
                                Hook::fromArray($array['hook']),
                                (isset($array['description']) ? $array['description'] : null),
                                (isset($array['foreignData']) ? $array['foreignData'] : null));
    }

    /**
     * JSON representing this object
     *
     * @return string
     */
    public function jsonSerialize() {
        return json_encode($this->toArray());
    }

    /**
     * JSON representing this object
     *
     * @return string
     */
    public function toJson() {
        return $this->jsonSerialize();
    }

    /**
     * Return associative array representing this object
     *
     * @return array
     */
    public function toArray() {
        return array_filter(get_object_vars($this), function ($v) { return $v !== null; });
    }

    public function __toString() {
        return "StreamSquare{id=" . $this->id .
                            ", url=" . $this->url .
                            ", status=" . $this->status .
                            ", isElastic=" . $this->isElastic .
                            ", size=" . $this->size .
                            ", playDomainName=" . $this->playDomainName .
                            ", publishDomainName=" . $this->publishDomainName .
                            ", publish=" . $this->publish .
                            ", hook=" . $this->hook .
                            ", description=" . $this->description .
                            ", foreignData=" . $this->foreignData . "}";
    }
}