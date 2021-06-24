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

class HttpMethod implements JsonSerializable  {

    /** @var string */
    private $value ;

    /**
     * HttpMethod constructor
     * @param string $value
     */
    private function __construct($value) {
        $this->value = $value;
    }

    /**
     * Getter of the field 'value'.
     *
     * @return string
     */
    public function getValue() {
        return $this->value;
    }

    public static function GET() {
        return new HttpMethod("GET");
    }

    public static function POST() {
        return new HttpMethod("POST");
    }

    public static function PUT() {
        return new HttpMethod("PUT");
    }

    public static function DELETE() {
        return new HttpMethod("DELETE");
    }

    public static function PATCH() {
        return new HttpMethod("PATCH");
    }

    public static function allPossiblesValues() {
        return array("GET",
                     "POST",
                     "PUT",
                     "DELETE",
                     "PATCH");
    }

    public static function fromString($value) {
        switch ($value) {
            case "GET" : return self::GET(); break;
            case "POST" : return self::POST(); break;
            case "PUT" : return self::PUT(); break;
            case "DELETE" : return self::DELETE(); break;
            case "PATCH" : return self::PATCH(); break;
            default : return null;
        }
    }

    public static function isValid($value) {
        return in_array(self::allPossiblesValues(), $value);
    }

    public static function asOneOf($value, array $selection) {
        foreach($selection as $s) {
            if($s->value === $value) return $s;
        }
        return null;
    }

    public function isNotGet() {
        return $this->value !== "GET";
    }

    public function isNotPost() {
        return $this->value !== "POST";
    }

    public function isNotPut() {
        return $this->value !== "PUT";
    }

    public function isNotDelete() {
        return $this->value !== "DELETE";
    }

    public function isNotPatch() {
        return $this->value !== "PATCH";
    }

    public function isGet() {
        return $this->value === "GET";
    }

    public function isPost() {
        return $this->value === "POST";
    }

    public function isPut() {
        return $this->value === "PUT";
    }

    public function isDelete() {
        return $this->value === "DELETE";
    }

    public function isPatch() {
        return $this->value === "PATCH";
    }

    /**
     * Create HttpMethod from JSON string
     *
     * @param string $json
     * @return HttpMethod
     */
    public static function fromJson($json) {
        $value = json_decode($json, true);
        return HttpMethod::fromString($value);
    }

    /**
     * JSON representing this object
     *
     * @return string
     */
    public function jsonSerialize() {
        return json_encode($this->value);
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
        return $this->value;
    }
}