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

class CreateStreamSquareForm implements JsonSerializable  {

    /** @var boolean */
    private $isElastic ;

    /** @var StreamSquareSize */
    private $size ;

    /** @var Hook */
    private $hook ;

    /** @var string | null */
    private $description ;

    /** @var string | null */
    private $foreignData ;

    /** @var string | null */
    private $playDomainName ;

    /** @var string | null */
    private $publishDomainName ;


    /** @var string */
    const Type = "CreateStreamSquareForm";

    /**
     * CreateStreamSquareForm constructor
     * @param boolean $isElastic
     * @param StreamSquareSize $size
     * @param Hook $hook
     * @param string | null $description
     * @param string | null $foreignData
     * @param string | null $playDomainName
     * @param string | null $publishDomainName
     */
    function __construct($isElastic,
                         StreamSquareSize $size,
                         Hook $hook,
                         $description = null,
                         $foreignData = null,
                         $playDomainName = null,
                         $publishDomainName = null) {
        $this->isElastic = $isElastic;
        $this->size = $size;
        $this->hook = $hook;
        $this->description = $description;
        $this->foreignData = $foreignData;
        $this->playDomainName = $playDomainName;
        $this->publishDomainName = $publishDomainName;
    }

    /**
     * Getter of the field 'isElastic'.
     *
     * @return boolean
     */
    public function isElastic() {
        return $this->isElastic;
    }

    /**
     * Getter of the field 'size'.
     *
     * @return StreamSquareSize
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * Getter of the field 'hook'.
     *
     * @return Hook
     */
    public function getHook() {
        return $this->hook;
    }

    /**
     * Getter of the field 'description'.
     *
     * @return string | null
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Getter of the field 'foreignData'.
     *
     * @return string | null
     */
    public function getForeignData() {
        return $this->foreignData;
    }

    /**
     * Getter of the field 'playDomainName'.
     *
     * @return string | null
     */
    public function getPlayDomainName() {
        return $this->playDomainName;
    }

    /**
     * Getter of the field 'publishDomainName'.
     *
     * @return string | null
     */
    public function getPublishDomainName() {
        return $this->publishDomainName;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new CreateStreamSquareForm where the field 'isElastic' has been updated with the value passed as parameter.
     *
     * @param boolean $isElastic
     * @return CreateStreamSquareForm
     */
    public function withIsElastic($isElastic) {
        return new CreateStreamSquareForm($isElastic, $this->size, $this->hook, $this->description,
                                          $this->foreignData, $this->playDomainName, $this->publishDomainName);
    }

    /**
     * Immutable update. Return a new CreateStreamSquareForm where the field 'size' has been updated with the value passed as parameter.
     *
     * @param StreamSquareSize $size
     * @return CreateStreamSquareForm
     */
    public function withSize(StreamSquareSize $size) {
        assert($this->size != null, "In class CreateStreamSquareForm the param 'size' of type StreamSquareSize can not be null");
        return new CreateStreamSquareForm($this->isElastic, $size, $this->hook, $this->description,
                                          $this->foreignData, $this->playDomainName, $this->publishDomainName);
    }

    /**
     * Immutable update. Return a new CreateStreamSquareForm where the field 'hook' has been updated with the value passed as parameter.
     *
     * @param Hook $hook
     * @return CreateStreamSquareForm
     */
    public function withHook(Hook $hook) {
        assert($this->hook != null, "In class CreateStreamSquareForm the param 'hook' of type Hook can not be null");
        return new CreateStreamSquareForm($this->isElastic, $this->size, $hook, $this->description,
                                          $this->foreignData, $this->playDomainName, $this->publishDomainName);
    }

    /**
     * Immutable update. Return a new CreateStreamSquareForm where the field 'description' has been updated with the value passed as parameter.
     *
     * @param string | null $description
     * @return CreateStreamSquareForm
     */
    public function withDescription($description) {
        return new CreateStreamSquareForm($this->isElastic, $this->size, $this->hook, $description,
                                          $this->foreignData, $this->playDomainName, $this->publishDomainName);
    }

    /**
     * Immutable update. Return a new CreateStreamSquareForm where the field 'foreignData' has been updated with the value passed as parameter.
     *
     * @param string | null $foreignData
     * @return CreateStreamSquareForm
     */
    public function withForeignData($foreignData) {
        return new CreateStreamSquareForm($this->isElastic, $this->size, $this->hook, $this->description,
                                          $foreignData, $this->playDomainName, $this->publishDomainName);
    }

    /**
     * Immutable update. Return a new CreateStreamSquareForm where the field 'playDomainName' has been updated with the value passed as parameter.
     *
     * @param string | null $playDomainName
     * @return CreateStreamSquareForm
     */
    public function withPlayDomainName($playDomainName) {
        return new CreateStreamSquareForm($this->isElastic, $this->size, $this->hook, $this->description,
                                          $this->foreignData, $playDomainName, $this->publishDomainName);
    }

    /**
     * Immutable update. Return a new CreateStreamSquareForm where the field 'publishDomainName' has been updated with the value passed as parameter.
     *
     * @param string | null $publishDomainName
     * @return CreateStreamSquareForm
     */
    public function withPublishDomainName($publishDomainName) {
        return new CreateStreamSquareForm($this->isElastic, $this->size, $this->hook, $this->description,
                                          $this->foreignData, $this->playDomainName, $publishDomainName);
    }

    /**
     * Create CreateStreamSquareForm from JSON string
     *
     * @param string $json
     * @return CreateStreamSquareForm
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create CreateStreamSquareForm from associative array of its fields
     *
     * @param array $array
     * @return CreateStreamSquareForm
     */
    public static function fromArray(array $array) {
        return new CreateStreamSquareForm($array['isElastic'],
                                          StreamSquareSize::fromString($array['size']),
                                          Hook::fromArray($array['hook']),
                                          (isset($array['description']) ? $array['description'] : null),
                                          (isset($array['foreignData']) ? $array['foreignData'] : null),
                                          (isset($array['playDomainName']) ? $array['playDomainName'] : null),
                                          (isset($array['publishDomainName']) ? $array['publishDomainName'] : null));
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
        return "CreateStreamSquareForm{isElastic=" . $this->isElastic .
                                      ", size=" . $this->size .
                                      ", hook=" . $this->hook .
                                      ", description=" . $this->description .
                                      ", foreignData=" . $this->foreignData .
                                      ", playDomainName=" . $this->playDomainName .
                                      ", publishDomainName=" . $this->publishDomainName . "}";
    }
}