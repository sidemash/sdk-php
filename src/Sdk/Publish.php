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

class Publish implements JsonSerializable  {

    /** @var PublishRtmp */
    private $rtmp ;


    /** @var string */
    const Type = "Publish";

    /**
     * Publish constructor
     * @param PublishRtmp $rtmp
     */
    function __construct(PublishRtmp $rtmp) {
        $this->rtmp = $rtmp;
    }

    /**
     * Getter of the field 'rtmp'.
     *
     * @return PublishRtmp
     */
    public function getRtmp() {
        return $this->rtmp;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Publish where the field 'rtmp' has been updated with the value passed as parameter.
     *
     * @param PublishRtmp $rtmp
     * @return Publish
     */
    public function withRtmp(PublishRtmp $rtmp) {
        assert($this->rtmp != null, "In class Publish the param 'rtmp' of type PublishRtmp can not be null");
        return new Publish($rtmp);
    }

    /**
     * Create Publish from JSON string
     *
     * @param string $json
     * @return Publish
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Publish from associative array of its fields
     *
     * @param array $array
     * @return Publish
     */
    public static function fromArray(array $array) {
        return new Publish(PublishRtmp::fromArray($array['rtmp']));
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
        return "Publish{rtmp=" . $this->rtmp . "}";
    }
}