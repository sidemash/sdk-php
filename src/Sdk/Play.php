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

class Play implements JsonSerializable  {

    /** @var integer */
    private $todo ;


    /** @var string */
    const Type = "Play";

    /**
     * Play constructor
     * @param integer $todo
     */
    function __construct($todo) {
        $this->todo = $todo;
    }

    /**
     * Getter of the field 'todo'.
     *
     * @return integer
     */
    public function getTodo() {
        return $this->todo;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Play where the field 'todo' has been updated with the value passed as parameter.
     *
     * @param integer $todo
     * @return Play
     */
    public function withTodo($todo) {
        return new Play($todo);
    }

    /**
     * Create Play from JSON string
     *
     * @param string $json
     * @return Play
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Play from associative array of its fields
     *
     * @param array $array
     * @return Play
     */
    public static function fromArray(array $array) {
        return new Play($array['todo']);
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
        return "Play{todo=" . $this->todo . "}";
    }
}