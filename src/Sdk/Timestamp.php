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

class Timestamp implements JsonSerializable  {

    /** @var long */
    private $seconds ;


    /** @var string */
    const Type = "Timestamp";

    /**
     * Timestamp constructor
     * @param long $seconds
     */
    function __construct($seconds) {
        $this->seconds = $seconds;
    }

    /**
     * Getter of the field 'seconds'.
     *
     * @return long
     */
    public function getSeconds() {
        return $this->seconds;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Timestamp where the field 'seconds' has been updated with the value passed as parameter.
     *
     * @param long $seconds
     * @return Timestamp
     */
    public function withSeconds($seconds) {
        return new Timestamp($seconds);
    }

    /**
     * Create Timestamp from JSON string
     *
     * @param string $json
     * @return Timestamp
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Timestamp from associative array of its fields
     *
     * @param array $array
     * @return Timestamp
     */
    public static function fromArray(array $array) {
        return new Timestamp($array['seconds']);
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
        return "Timestamp{seconds=" . $this->seconds . "}";
    }
}