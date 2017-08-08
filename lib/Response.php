<?php
/**
 * Created by PhpStorm.
 * User: lindal
 * Date: 08.08.17
 * Time: 17:52
 */

namespace lib;


use lib\interfaces\IResponse;

class Response implements IResponse
{

    private $code = 200;
    private $headers = [];
    private $body;

    /**
     * @param int $code
     * @return IResponse
     */
    public function setCode(int $code): IResponse
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @param string $body
     * @return IResponse
     */
    public function setBody(string $body): IResponse
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @param string $header
     * @return mixed
     */
    public function setHeader(string $header)
    {
        $this->headers[] = $header;
        return $this;
    }

    /**
     * @return void
     */
    public function send()
    {
        http_response_code($this->code);
        foreach ($this->headers as $header) {
            header($header);
        }
        echo $this->body;
    }
}