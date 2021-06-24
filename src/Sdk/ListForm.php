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

class ListForm implements JsonSerializable  {

    /** @var string | null */
    private $where ;

    /** @var integer | null */
    private $limit ;

    /** @var string | null */
    private $orderBy ;


    /** @var string */
    const Type = "ListForm";

    /**
     * ListForm constructor
     * @param string | null $where
     * @param integer | null $limit
     * @param string | null $orderBy
     */
    function __construct($where = null, $limit = null, $orderBy = null) {
        $this->where = $where;
        $this->limit = $limit;
        $this->orderBy = $orderBy;
    }

    /**
     * Getter of the field 'where'.
     *
     * @return string | null
     */
    public function getWhere() {
        return $this->where;
    }

    /**
     * Getter of the field 'limit'.
     *
     * @return integer | null
     */
    public function getLimit() {
        return $this->limit;
    }

    /**
     * Getter of the field 'orderBy'.
     *
     * @return string | null
     */
    public function getOrderBy() {
        return $this->orderBy;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new ListForm where the field 'where' has been updated with the value passed as parameter.
     *
     * @param string | null $where
     * @return ListForm
     */
    public function withWhere($where) {
        return new ListForm($where, $this->limit, $this->orderBy);
    }

    /**
     * Immutable update. Return a new ListForm where the field 'limit' has been updated with the value passed as parameter.
     *
     * @param integer | null $limit
     * @return ListForm
     */
    public function withLimit($limit) {
        return new ListForm($this->where, $limit, $this->orderBy);
    }

    /**
     * Immutable update. Return a new ListForm where the field 'orderBy' has been updated with the value passed as parameter.
     *
     * @param string | null $orderBy
     * @return ListForm
     */
    public function withOrderBy($orderBy) {
        return new ListForm($this->where, $this->limit, $orderBy);
    }

    /**
     * Create ListForm from JSON string
     *
     * @param string $json
     * @return ListForm
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create ListForm from associative array of its fields
     *
     * @param array $array
     * @return ListForm
     */
    public static function fromArray(array $array) {
        return new ListForm((isset($array['where']) ? $array['where'] : null),
                            (isset($array['limit']) ? $array['limit'] : null),
                            (isset($array['orderBy']) ? $array['orderBy'] : null));
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

    /** @return ListForm */
    public static function None() {
        return new ListForm(null, null, null);
    }

    public function toQueryString() {
        return ($this->where == null && $this->limit == null && $this->orderBy == null 
                    ? "" 
                    : "?" . http_build_query(get_object_vars($this)));
    }

    public function __toString() {
        return "ListForm{where=" . $this->where .
                        ", limit=" . $this->limit .
                        ", orderBy=" . $this->orderBy . "}";
    }
}