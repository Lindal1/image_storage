<?php
/**
 * Created by PhpStorm.
 * User: lindal
 * Date: 08.08.17
 * Time: 15:40
 */

namespace lib\interfaces;


use lib\errors\NotFound;

interface IImageRepository
{

    /**
     * @param string $code
     * @throws NotFound
     * @return IImage
     */
    public function find(string $code): IImage;

    /**
     * Save image to repository
     * @param IImage $image
     */
    public function save(IImage $image): void;

    /**
     * Delete image from repository
     * @param string $code
     */
    public function delete(string $code): void;

}