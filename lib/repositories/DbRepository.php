<?php

namespace lib\repositories;

use lib\errors\NotFound;
use lib\interfaces\IImage;
use lib\interfaces\IImageRepository;

class DbRepository implements IImageRepository
{

    /**
     * @param string $code
     * @throws NotFound
     * @return IImage
     */
    public function find(string $code): IImage
    {

    }

    /**
     * Save image to repository
     * @param IImage $image
     */
    public function save(IImage $image): void
    {

    }

    /**
     * Delete image from repository
     * @param string $code
     */
    public function delete(string $code): void
    {

    }
}