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


class Client {

    /** @var Auth */
    private $auth ;

    /** @var StreamSquareService */
    private $_streamSquare ;

    /**
     * Client constructor
     * @param Auth $auth
     */
    function __construct(Auth $auth) {
        $this->auth = $auth;
        $this->_streamSquare = new StreamSquareService($auth);
    }

    /** @return StreamSquareService */
    public function streamSquare() {
        return $this->_streamSquare;
    }

    /**
     * Getter of the field 'auth'.
     *
     * @return Auth
     */
    public function getAuth() {
        return $this->auth;
    }

    public function __toString() {
        return "Client{auth=" . $this->auth . "}";
    }
}