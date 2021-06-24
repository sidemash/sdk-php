<?php namespace Sidemash\Sdk;


class Request {
    public $nonce;
    public $signedHeaders;
    public $method;
    public $path;
    public $queryString;
    public $bodyHash;


    protected static function concatHeader($headerName, $headerValue){
        return $headerName . ":" . $headerValue;
    }


    function __construct($nonce,
                         $signedHeaders,
                         $method,
                         $path,
                         $queryString,
                         $bodyHash){
        $this->nonce = $nonce;
        $this->signedHeaders = $signedHeaders;
        $this->method = $method;
        $this->path = $path;
        $this->queryString = $queryString;
        $this->bodyHash = $bodyHash;
    }

    function toMessage() {
        return (
            $this->nonce .
            implode("", array_map('Request::concatHeader', array_keys($this->signedHeaders), $this->signedHeaders )) .
            $this->method .
            $this->path .
            ($this->queryString ?: "") .
            ($this->bodyHash ?: "")
        );
    }
}