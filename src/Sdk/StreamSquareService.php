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


class StreamSquareService {

    /** @var Auth */
    private $auth ;

    /**
     * StreamSquareService constructor
     * @param Auth $auth
     */
    function __construct(Auth $auth) {
        $this->auth = $auth;
    }

    /**
     * Create StreamSquare
     *
     * @param CreateStreamSquareForm $form
     * @return StreamSquare
     */
    public function create(CreateStreamSquareForm $form) {
        return Http::Post("/" . Sdk::VERSION . "/stream-squares", $form->toJson(), "", array(), 'StreamSquare::fromArray', $this->auth);
    }

    /**
     * Get StreamSquare
     *
     * @param string $id
     * @return StreamSquare
     */
    public function get($id) {
        return Http::Get("/" . Sdk::VERSION . "/stream-squares/" . $id, "", array(), 'StreamSquare::fromArray', $this->auth);
    }

    /**
     * List StreamSquare
     *
     * @param ListForm $form
     * @return RestCollection
     */
    public function listAll(ListForm $form = null) {
        $qs = $form == null ? ListForm::None()->toQueryString() : $form->toQueryString();
        return Http::ListAll("/" . Sdk::VERSION . "/stream-squares", $qs, array(), 'StreamSquare::fromArray', $this->auth);
    }

    /**
     * Update StreamSquare
     *
     * @param UpdateStreamSquareForm $form
     * @return StreamSquare
     */
    public function update(UpdateStreamSquareForm $form) {
        return Http::Patch("/" . Sdk::VERSION . "/stream-squares/" . $form->getId(), $form->toJson(), "", array(), 'StreamSquare::fromArray', $this->auth);
    }

    /**
     * Delete StreamSquare
     *
     * @param string $id
     * @return void
     */
    public function delete($id) {
        Http::Delete("/" . Sdk::VERSION . "/stream-squares/" . $id, null, "", array(), null, $this->auth);
    }

    public function __toString() {
        return "StreamSquareService{auth=" . $this->auth . "}";
    }
}