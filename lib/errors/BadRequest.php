<?php

namespace lib\errors;

use Throwable;

class BadRequest extends \Exception
{

    public function __construct($message = "Bad request", $code = 400, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}