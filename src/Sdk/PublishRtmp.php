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

class PublishRtmp implements JsonSerializable  {

    /** @var string */
    private $streamKeyPrefix ;

    /** @var SecureAndNonSecure */
    private $ip ;

    /** @var SecureAndNonSecure */
    private $domain ;


    /** @var string */
    const Type = "PublishRtmp";

    /**
     * PublishRtmp constructor
     * @param string $streamKeyPrefix
     * @param SecureAndNonSecure $ip
     * @param SecureAndNonSecure $domain
     */
    function __construct($streamKeyPrefix,
                         SecureAndNonSecure $ip,
                         SecureAndNonSecure $domain) {
        $this->streamKeyPrefix = $streamKeyPrefix;
        $this->ip = $ip;
        $this->domain = $domain;
    }

    /**
     * Getter of the field 'streamKeyPrefix'.
     *
     * @return string
     */
    public function getStreamKeyPrefix() {
        return $this->streamKeyPrefix;
    }

    /**
     * Getter of the field 'ip'.
     *
     * @return SecureAndNonSecure
     */
    public function getIp() {
        return $this->ip;
    }

    /**
     * Getter of the field 'domain'.
     *
     * @return SecureAndNonSecure
     */
    public function getDomain() {
        return $this->domain;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new PublishRtmp where the field 'streamKeyPrefix' has been updated with the value passed as parameter.
     *
     * @param string $streamKeyPrefix
     * @return PublishRtmp
     */
    public function withStreamKeyPrefix($streamKeyPrefix) {
        return new PublishRtmp($streamKeyPrefix, $this->ip, $this->domain);
    }

    /**
     * Immutable update. Return a new PublishRtmp where the field 'ip' has been updated with the value passed as parameter.
     *
     * @param SecureAndNonSecure $ip
     * @return PublishRtmp
     */
    public function withIp(SecureAndNonSecure $ip) {
        assert($this->ip != null, "In class PublishRtmp the param 'ip' of type SecureAndNonSecure can not be null");
        return new PublishRtmp($this->streamKeyPrefix, $ip, $this->domain);
    }

    /**
     * Immutable update. Return a new PublishRtmp where the field 'domain' has been updated with the value passed as parameter.
     *
     * @param SecureAndNonSecure $domain
     * @return PublishRtmp
     */
    public function withDomain(SecureAndNonSecure $domain) {
        assert($this->domain != null, "In class PublishRtmp the param 'domain' of type SecureAndNonSecure can not be null");
        return new PublishRtmp($this->streamKeyPrefix, $this->ip, $domain);
    }

    /**
     * Create PublishRtmp from JSON string
     *
     * @param string $json
     * @return PublishRtmp
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create PublishRtmp from associative array of its fields
     *
     * @param array $array
     * @return PublishRtmp
     */
    public static function fromArray(array $array) {
        return new PublishRtmp($array['streamKeyPrefix'],
                               SecureAndNonSecure::fromArray($array['ip']),
                               SecureAndNonSecure::fromArray($array['domain']));
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
        return "PublishRtmp{streamKeyPrefix=" . $this->streamKeyPrefix .
                           ", ip=" . $this->ip .
                           ", domain=" . $this->domain . "}";
    }
}