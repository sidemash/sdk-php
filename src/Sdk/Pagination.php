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

class Pagination implements JsonSerializable  {

    /** @var string */
    private $selfUrl ;

    /** @var string | null */
    private $prevUrl ;

    /** @var string | null */
    private $nextUrl ;

    /** @var UTCDateTime */
    private $startedTime ;

    /** @var integer */
    private $nbItemsOnThisPage ;

    /** @var integer */
    private $page ;

    /** @var integer */
    private $nbItemsPerPage ;


    /** @var string */
    const Type = "Pagination";

    /**
     * Pagination constructor
     * @param string $selfUrl
     * @param string | null $prevUrl
     * @param string | null $nextUrl
     * @param UTCDateTime $startedTime
     * @param integer $nbItemsOnThisPage
     * @param integer $page
     * @param integer $nbItemsPerPage
     */
    function __construct($selfUrl,
                         $prevUrl,
                         $nextUrl,
                         UTCDateTime $startedTime,
                         $nbItemsOnThisPage,
                         $page,
                         $nbItemsPerPage) {
        $this->selfUrl = $selfUrl;
        $this->prevUrl = $prevUrl;
        $this->nextUrl = $nextUrl;
        $this->startedTime = $startedTime;
        $this->nbItemsOnThisPage = $nbItemsOnThisPage;
        $this->page = $page;
        $this->nbItemsPerPage = $nbItemsPerPage;
    }

    /**
     * Getter of the field 'selfUrl'.
     *
     * @return string
     */
    public function getSelfUrl() {
        return $this->selfUrl;
    }

    /**
     * Getter of the field 'prevUrl'.
     *
     * @return string | null
     */
    public function getPrevUrl() {
        return $this->prevUrl;
    }

    /**
     * Getter of the field 'nextUrl'.
     *
     * @return string | null
     */
    public function getNextUrl() {
        return $this->nextUrl;
    }

    /**
     * Getter of the field 'startedTime'.
     *
     * @return UTCDateTime
     */
    public function getStartedTime() {
        return $this->startedTime;
    }

    /**
     * Getter of the field 'nbItemsOnThisPage'.
     *
     * @return integer
     */
    public function getNbItemsOnThisPage() {
        return $this->nbItemsOnThisPage;
    }

    /**
     * Getter of the field 'page'.
     *
     * @return integer
     */
    public function getPage() {
        return $this->page;
    }

    /**
     * Getter of the field 'nbItemsPerPage'.
     *
     * @return integer
     */
    public function getNbItemsPerPage() {
        return $this->nbItemsPerPage;
    }

    /**
     * Return the type of this Object.
     *
     * @return string
     */
    public function getType() { return self::Type; } 

    /**
     * Immutable update. Return a new Pagination where the field 'selfUrl' has been updated with the value passed as parameter.
     *
     * @param string $selfUrl
     * @return Pagination
     */
    public function withSelfUrl($selfUrl) {
        return new Pagination($selfUrl, $this->prevUrl, $this->nextUrl, $this->startedTime,
                              $this->nbItemsOnThisPage, $this->page, $this->nbItemsPerPage);
    }

    /**
     * Immutable update. Return a new Pagination where the field 'prevUrl' has been updated with the value passed as parameter.
     *
     * @param string | null $prevUrl
     * @return Pagination
     */
    public function withPrevUrl($prevUrl) {
        return new Pagination($this->selfUrl, $prevUrl, $this->nextUrl, $this->startedTime,
                              $this->nbItemsOnThisPage, $this->page, $this->nbItemsPerPage);
    }

    /**
     * Immutable update. Return a new Pagination where the field 'nextUrl' has been updated with the value passed as parameter.
     *
     * @param string | null $nextUrl
     * @return Pagination
     */
    public function withNextUrl($nextUrl) {
        return new Pagination($this->selfUrl, $this->prevUrl, $nextUrl, $this->startedTime,
                              $this->nbItemsOnThisPage, $this->page, $this->nbItemsPerPage);
    }

    /**
     * Immutable update. Return a new Pagination where the field 'startedTime' has been updated with the value passed as parameter.
     *
     * @param UTCDateTime $startedTime
     * @return Pagination
     */
    public function withStartedTime(UTCDateTime $startedTime) {
        assert($this->startedTime != null, "In class Pagination the param 'startedTime' of type UTCDateTime can not be null");
        return new Pagination($this->selfUrl, $this->prevUrl, $this->nextUrl, $startedTime,
                              $this->nbItemsOnThisPage, $this->page, $this->nbItemsPerPage);
    }

    /**
     * Immutable update. Return a new Pagination where the field 'nbItemsOnThisPage' has been updated with the value passed as parameter.
     *
     * @param integer $nbItemsOnThisPage
     * @return Pagination
     */
    public function withNbItemsOnThisPage($nbItemsOnThisPage) {
        return new Pagination($this->selfUrl, $this->prevUrl, $this->nextUrl, $this->startedTime,
                              $nbItemsOnThisPage, $this->page, $this->nbItemsPerPage);
    }

    /**
     * Immutable update. Return a new Pagination where the field 'page' has been updated with the value passed as parameter.
     *
     * @param integer $page
     * @return Pagination
     */
    public function withPage($page) {
        return new Pagination($this->selfUrl, $this->prevUrl, $this->nextUrl, $this->startedTime,
                              $this->nbItemsOnThisPage, $page, $this->nbItemsPerPage);
    }

    /**
     * Immutable update. Return a new Pagination where the field 'nbItemsPerPage' has been updated with the value passed as parameter.
     *
     * @param integer $nbItemsPerPage
     * @return Pagination
     */
    public function withNbItemsPerPage($nbItemsPerPage) {
        return new Pagination($this->selfUrl, $this->prevUrl, $this->nextUrl, $this->startedTime,
                              $this->nbItemsOnThisPage, $this->page, $nbItemsPerPage);
    }

    /**
     * Create Pagination from JSON string
     *
     * @param string $json
     * @return Pagination
     */
    public static function fromJson($json) {
        $array = json_decode($json, true);
        return self::fromArray($array);
    }

    /**
     * Create Pagination from associative array of its fields
     *
     * @param array $array
     * @return Pagination
     */
    public static function fromArray(array $array) {
        return new Pagination($array['selfUrl'],
                              (isset($array['prevUrl']) ? $array['prevUrl'] : null),
                              (isset($array['nextUrl']) ? $array['nextUrl'] : null),
                              UTCDateTime::fromArray($array['startedTime']),
                              $array['nbItemsOnThisPage'],
                              $array['page'],
                              $array['nbItemsPerPage']);
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
        return "Pagination{selfUrl=" . $this->selfUrl .
                          ", prevUrl=" . $this->prevUrl .
                          ", nextUrl=" . $this->nextUrl .
                          ", startedTime=" . $this->startedTime .
                          ", nbItemsOnThisPage=" . $this->nbItemsOnThisPage .
                          ", page=" . $this->page .
                          ", nbItemsPerPage=" . $this->nbItemsPerPage . "}";
    }
}