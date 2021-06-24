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

abstract class Hook implements JsonSerializable  {


    /** @return string */
    public abstract function getType(); 

    public function isHttpCall() {
        return $this->getType() === HookHttpCall::Type;
    }

    public function isWsCall() {
        return $this->getType() === HookWsCall::Type;
    }

    public function isNotHttpCall() {
        return $this->getType() !== HookHttpCall::Type; 
    }

    public function isNotWsCall() {
        return $this->getType() !== HookWsCall::Type; 
    }

    /**
     * Create Hook from JSON string
     *
     * @param string $json
     * @return Hook
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Hook from associative array of its fields
     *
     * @param array $array
     * @return Hook
     */
    public static function fromArray(array $array) {
        $type = $array['_type'];
        if($type === HookHttpCall::Type) return HookHttpCall::fromArray($array);
        else if($type === HookWsCall::Type) return HookWsCall::fromArray($array);
        else throw new \InvalidArgumentException("Invalid associative array submitted for creating 'Hook'" . " Unexpected '_type' = " . $type);
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
}