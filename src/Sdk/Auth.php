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

class Auth implements JsonSerializable  {

    /** @var string */
    private $token ;

    /** @var string */
    private $secretKey ;


    /** @var string */
    const Type = "Auth";

    /**
     * Auth constructor
     * @param string $token
     * @param string $secretKey
     */
    function __construct($token, $secretKey) {
        $this->token = $token;
        $this->secretKey = $secretKey;
    }

    /**
     * Getter of the field 'token'.
     *
     * @return string
     */
    public function getToken() {
        return $this->token;
    }

    /**
     * Getter of the field 'secretKey'.
     *
     * @return string
     */
    public function getSecretKey() {
        return $this->secretKey;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Auth where the field 'token' has been updated with the value passed as parameter.
     *
     * @param string $token
     * @return Auth
     */
    public function withToken($token) {
        return new Auth($token, $this->secretKey);
    }

    /**
     * Immutable update. Return a new Auth where the field 'secretKey' has been updated with the value passed as parameter.
     *
     * @param string $secretKey
     * @return Auth
     */
    public function withSecretKey($secretKey) {
        return new Auth($this->token, $secretKey);
    }

    /**
     * Create Auth from JSON string
     *
     * @param string $json
     * @return Auth
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Auth from associative array of its fields
     *
     * @param array $array
     * @return Auth
     */
    public static function fromArray(array $array) {
        return new Auth($array['token'],
                        $array['secretKey']);
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
        return "Auth{token=" . $this->token .
                    ", secretKey=******" . "}";
    }
}