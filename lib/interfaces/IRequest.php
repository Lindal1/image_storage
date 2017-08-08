<?php

namespace lib\interfaces;

interface IRequest
{

    /**
     * Initialize request singleton instance
     * @param array $getParams
     * @param array $postParams
     * @param array $fileData
     * @return IRequest
     */
    public static function init(array $getParams = [], array $postParams = [], array $fileData = []): IRequest;

    /**
     * Return request instance
     * @throws \Exception if instance was not initialize
     * @return IRequest
     */
    public static function getInstance(): IRequest;

    /**
     * Return get param from request
     * @param   string $paramName
     * @param   mixed $defaultValue
     * @return  mixed
     */
    public function get(string $paramName, $defaultValue = null);

    /**
     * Return post param from request
     * @param   string $paramName
     * @param   mixed $defaultValue
     * @return  mixed
     */
    public function post(string $paramName, $defaultValue = null);


    /**
     * Return file data
     * @return array
     */
    public function getFileData(): array;

}