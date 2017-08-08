<?php

namespace lib;

use lib\interfaces\IRequest;
use PHPUnit\Runner\Exception;

class Request implements IRequest
{

    /**
     * @var IRequest singleton instance
     */
    private static $instance;

    private $getParams = [];

    private $postParams = [];

    private $fileData = [];

    /**
     * Request constructor.
     */
    private function __construct()
    {
    }

    /**
     * @inheritdoc
     */
    public static function init(array $getParams = [], array $postParams = [], array $fileData = []): IRequest
    {
        $instance = new Request();
        $instance->getParams = $getParams;
        $instance->postParams = $postParams;
        $instance->fileData = $fileData;

    }

    /**
     * @inheritdoc
     */
    public static function getInstance(): IRequest
    {
        if (!self::$instance) {
            throw New Exception('Request instance was not initialize');
        }
        return self::$instance;
    }

    /**
     * @inheritdoc
     */
    public function get(string $paramName, $defaultValue = null)
    {
        return $this->getParams[$paramName] ?? $defaultValue;
    }

    /**
     * @inheritdoc
     */
    public function post(string $paramName, $defaultValue = null)
    {
        return $this->postParamsParams[$paramName] ?? $defaultValue;
    }

    /**
     * @inheritdoc
     */
    public function getFileData(): array
    {
        return $this->fileData;
    }
}