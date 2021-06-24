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

class UTCDateTime implements JsonSerializable  {

    /** @var string */
    private $iso8601 ;

    /** @var Timestamp */
    private $timestamp ;


    /** @var string */
    const Type = "UTCDateTime";

    /**
     * UTCDateTime constructor
     * @param string $iso8601
     * @param Timestamp $timestamp
     */
    function __construct($iso8601, Timestamp $timestamp) {
        $this->iso8601 = $iso8601;
        $this->timestamp = $timestamp;
    }

    /**
     * Getter of the field 'iso8601'.
     *
     * @return string
     */
    public function getIso8601() {
        return $this->iso8601;
    }

    /**
     * Getter of the field 'timestamp'.
     *
     * @return Timestamp
     */
    public function getTimestamp() {
        return $this->timestamp;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new UTCDateTime where the field 'iso8601' has been updated with the value passed as parameter.
     *
     * @param string $iso8601
     * @return UTCDateTime
     */
    public function withIso8601($iso8601) {
        return new UTCDateTime($iso8601, $this->timestamp);
    }

    /**
     * Immutable update. Return a new UTCDateTime where the field 'timestamp' has been updated with the value passed as parameter.
     *
     * @param Timestamp $timestamp
     * @return UTCDateTime
     */
    public function withTimestamp(Timestamp $timestamp) {
        assert($this->timestamp != null, "In class UTCDateTime the param 'timestamp' of type Timestamp can not be null");
        return new UTCDateTime($this->iso8601, $timestamp);
    }

    /**
     * Create UTCDateTime from JSON string
     *
     * @param string $json
     * @return UTCDateTime
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create UTCDateTime from associative array of its fields
     *
     * @param array $array
     * @return UTCDateTime
     */
    public static function fromArray(array $array) {
        return new UTCDateTime($array['iso8601'],
                               Timestamp::fromArray($array['timestamp']));
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
        return "UTCDateTime{iso8601=" . $this->iso8601 .
                           ", timestamp=" . $this->timestamp . "}";
    }
}