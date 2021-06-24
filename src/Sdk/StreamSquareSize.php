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

class StreamSquareSize implements JsonSerializable  {

    /** @var string */
    private $value ;

    /**
     * StreamSquareSize constructor
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

    public static function S() {
        return new StreamSquareSize("S");
    }

    public static function M() {
        return new StreamSquareSize("M");
    }

    public static function L() {
        return new StreamSquareSize("L");
    }

    public static function XL() {
        return new StreamSquareSize("XL");
    }

    public static function XXL() {
        return new StreamSquareSize("XXL");
    }

    public static function allPossiblesValues() {
        return array("S",
                     "M",
                     "L",
                     "XL",
                     "XXL");
    }

    public static function fromString($value) {
        switch ($value) {
            case "S" : return self::S(); break;
            case "M" : return self::M(); break;
            case "L" : return self::L(); break;
            case "XL" : return self::XL(); break;
            case "XXL" : return self::XXL(); break;
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

    public function isNotS() {
        return $this->value !== "S";
    }

    public function isNotM() {
        return $this->value !== "M";
    }

    public function isNotL() {
        return $this->value !== "L";
    }

    public function isNotXl() {
        return $this->value !== "XL";
    }

    public function isNotXxl() {
        return $this->value !== "XXL";
    }

    public function isS() {
        return $this->value === "S";
    }

    public function isM() {
        return $this->value === "M";
    }

    public function isL() {
        return $this->value === "L";
    }

    public function isXl() {
        return $this->value === "XL";
    }

    public function isXxl() {
        return $this->value === "XXL";
    }

    /**
     * Create StreamSquareSize from JSON string
     *
     * @param string $json
     * @return StreamSquareSize
     */
    public static function fromJson($json) {
        $value = json_decode($json, true);
        return StreamSquareSize::fromString($value);
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