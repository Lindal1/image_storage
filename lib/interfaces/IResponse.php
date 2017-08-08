<?php
/**
 * Created by PhpStorm.
 * User: lindal
 * Date: 08.08.17
 * Time: 15:42
 */

namespace lib\interfaces;


interface IResponse
{

    /**
     * @param int $code
     * @return IResponse
     */
    public function setCode(int $code): IResponse;

    /**
     * @param string $body
     * @return IResponse
     */
    public function setBody(string $body): IResponse;

    /**
     * @param string $header
     * @return mixed
     */
    public function setHeader(string $header);

    /**
     * @return void
     */
    public function send();

}