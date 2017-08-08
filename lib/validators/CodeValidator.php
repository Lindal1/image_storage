<?php

namespace lib\validators;

use lib\errors\BadRequest;
use lib\interfaces\IRequest;
use lib\interfaces\IRequestValidator;

class CodeValidator implements IRequestValidator
{

    /**
     * Check required get param code
     * @param IRequest $request
     * @throws BadRequest
     */
    public function run(IRequest $request)
    {
        if (!$request->get('code')) {
            throw new BadRequest();
        }
    }
}