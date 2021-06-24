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

class HookHttpCall extends Hook implements JsonSerializable  {

    /** @var HttpMethod */
    private $method ;

    /** @var string */
    private $url ;


    /** @var string */
    const Type = "Hook.HttpCall";

    /**
     * HookHttpCall constructor
     * @param HttpMethod $method
     * @param string $url
     */
    function __construct(HttpMethod $method, $url) {
        $this->method = $method;
        $this->url = $url;
    }

    /**
     * Getter of the field 'method'.
     *
     * @return HttpMethod
     */
    public function getMethod() {
        return $this->method;
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
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new HookHttpCall where the field 'method' has been updated with the value passed as parameter.
     *
     * @param HttpMethod $method
     * @return HookHttpCall
     */
    public function withMethod(HttpMethod $method) {
        assert($this->method != null, "In class HookHttpCall the param 'method' of type HttpMethod can not be null");
        return new HookHttpCall($method, $this->url);
    }

    /**
     * Immutable update. Return a new HookHttpCall where the field 'url' has been updated with the value passed as parameter.
     *
     * @param string $url
     * @return HookHttpCall
     */
    public function withUrl($url) {
        return new HookHttpCall($this->method, $url);
    }

    /**
     * Create HookHttpCall from JSON string
     *
     * @param string $json
     * @return HookHttpCall
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create HookHttpCall from associative array of its fields
     *
     * @param array $array
     * @return HookHttpCall
     */
    public static function fromArray(array $array) {
        return new HookHttpCall(HttpMethod::fromString($array['method']),
                                $array['url']);
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
        return "HookHttpCall{method=" . $this->method .
                            ", url=" . $this->url . "}";
    }
}