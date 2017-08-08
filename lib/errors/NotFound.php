<?php

namespace lib\errors;

use Throwable;

class NotFound extends \Exception
{

    public function __construct($message = "Image not found", $code = 404, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}