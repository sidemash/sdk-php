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

class SecureAndNonSecure implements JsonSerializable  {

    /** @var string */
    private $secure ;

    /** @var string */
    private $nonSecureOn80 ;

    /** @var string */
    private $nonSecure ;


    /** @var string */
    const Type = "SecureAndNonSecure";

    /**
     * SecureAndNonSecure constructor
     * @param string $secure
     * @param string $nonSecureOn80
     * @param string $nonSecure
     */
    function __construct($secure, $nonSecureOn80, $nonSecure) {
        $this->secure = $secure;
        $this->nonSecureOn80 = $nonSecureOn80;
        $this->nonSecure = $nonSecure;
    }

    /**
     * Getter of the field 'secure'.
     *
     * @return string
     */
    public function getSecure() {
        return $this->secure;
    }

    /**
     * Getter of the field 'nonSecureOn80'.
     *
     * @return string
     */
    public function getNonSecureOn80() {
        return $this->nonSecureOn80;
    }

    /**
     * Getter of the field 'nonSecure'.
     *
     * @return string
     */
    public function getNonSecure() {
        return $this->nonSecure;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new SecureAndNonSecure where the field 'secure' has been updated with the value passed as parameter.
     *
     * @param string $secure
     * @return SecureAndNonSecure
     */
    public function withSecure($secure) {
        return new SecureAndNonSecure($secure, $this->nonSecureOn80, $this->nonSecure);
    }

    /**
     * Immutable update. Return a new SecureAndNonSecure where the field 'nonSecureOn80' has been updated with the value passed as parameter.
     *
     * @param string $nonSecureOn80
     * @return SecureAndNonSecure
     */
    public function withNonSecureOn80($nonSecureOn80) {
        return new SecureAndNonSecure($this->secure, $nonSecureOn80, $this->nonSecure);
    }

    /**
     * Immutable update. Return a new SecureAndNonSecure where the field 'nonSecure' has been updated with the value passed as parameter.
     *
     * @param string $nonSecure
     * @return SecureAndNonSecure
     */
    public function withNonSecure($nonSecure) {
        return new SecureAndNonSecure($this->secure, $this->nonSecureOn80, $nonSecure);
    }

    /**
     * Create SecureAndNonSecure from JSON string
     *
     * @param string $json
     * @return SecureAndNonSecure
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create SecureAndNonSecure from associative array of its fields
     *
     * @param array $array
     * @return SecureAndNonSecure
     */
    public static function fromArray(array $array) {
        return new SecureAndNonSecure($array['secure'],
                                      $array['nonSecureOn80'],
                                      $array['nonSecure']);
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
        return "SecureAndNonSecure{secure=" . $this->secure .
                                  ", nonSecureOn80=" . $this->nonSecureOn80 .
                                  ", nonSecure=" . $this->nonSecure . "}";
    }
}