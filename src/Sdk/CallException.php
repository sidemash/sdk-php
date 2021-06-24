<?php namespace Sidemash\Sdk;

class CallException extends \Exception {
    public $statusCode;
    public $statusMessage;
    public $body;

    public function __construct($statusCode, $statusMessage, $body)
    {
        $this->statusCode = $statusCode;
        $this->statusMessage = $statusMessage;
        $this->body = $body;
        parent::__construct($body, $statusCode);
    }


    public function __toString() {
        return "CallException{statusCode=" . $this->statusCode .
                             ", statusMessage=" . $this->statusMessage .
                             ", body=" . $this->body . "}";
    }
}