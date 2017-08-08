<?php
/**
 * Created by PhpStorm.
 * User: lindal
 * Date: 08.08.17
 * Time: 15:42
 */

namespace lib\interfaces;


interface IRequestValidator
{

    public function run(IRequest $request);

}