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

class UpdateStreamSquareForm implements JsonSerializable  {

    /** @var string */
    private $id ;

    /** @var array */
    private $set ;

    /** @var array */
    private $remove ;

    /**
     * UpdateStreamSquareForm constructor
     * @param string $id
     * @param array $remove
     * @param array $set
     */
    function __construct($id, array $remove, array $set) {
        $this->id     = $id;
        $this->set    = $set;
        $this->remove = $remove;
    }

    public static function byId($id) {
        return new UpdateStreamSquareForm($id, array(), array());
    }

    /**
     * Remove the field 'description'
     *
     * @return UpdateStreamSquareForm
     */
    public function removeDescription() {
        $remove = array_merge($this->remove, array('description'));
        return new UpdateStreamSquareForm($this->id, $remove, $this->set);
    }

    /**
     * Remove the field 'foreignData'
     *
     * @return UpdateStreamSquareForm
     */
    public function removeForeignData() {
        $remove = array_merge($this->remove, array('foreignData'));
        return new UpdateStreamSquareForm($this->id, $remove, $this->set);
    }

    /**
     * Set a new value to update the field 'isElastic' 
     *
     * @param boolean $isElastic
     * @return UpdateStreamSquareForm
     */
    public function setIsElastic($isElastic) {
        $set = array_merge($this->set, array('isElastic' => $isElastic));
        return new UpdateStreamSquareForm($this->id, $this->remove, $set);
    }

    /**
     * Set a new value to update the field 'size' 
     *
     * @param StreamSquareSize $size
     * @return UpdateStreamSquareForm
     */
    public function setSize($size) {
        $set = array_merge($this->set, array('size' => $size->toArray()));
        return new UpdateStreamSquareForm($this->id, $this->remove, $set);
    }

    /**
     * Set a new value to update the field 'hook' 
     *
     * @param Hook $hook
     * @return UpdateStreamSquareForm
     */
    public function setHook($hook) {
        $set = array_merge($this->set, array('hook' => $hook->toArray()));
        return new UpdateStreamSquareForm($this->id, $this->remove, $set);
    }

    /**
     * Set a new value to update the field 'description' 
     *
     * @param string | null $description
     * @return UpdateStreamSquareForm
     */
    public function setDescription($description) {
        if($description == null) return $this;
        $set = array_merge($this->set, array('description' => $description));
        return new UpdateStreamSquareForm($this->id, $this->remove, $set);
    }

    /**
     * Set a new value to update the field 'foreignData' 
     *
     * @param string | null $foreignData
     * @return UpdateStreamSquareForm
     */
    public function setForeignData($foreignData) {
        if($foreignData == null) return $this;
        $set = array_merge($this->set, array('foreignData' => $foreignData));
        return new UpdateStreamSquareForm($this->id, $this->remove, $set);
    }

    /**
     * Getter of the field 'id'.
     *
     * @return string
     */
    public function getId() {
        return $this->id;
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
        return array_merge($this->set, $this->remove);
    }

    public function __toString() {
        return "UpdateStreamSquareForm{id=" . $this->id .
                                      ", remove=" . $this->remove .
                                      ", set=" . $this->set . "}";
    }
}