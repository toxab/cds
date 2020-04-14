<?php

namespace App\storage;

/**
 * Class Api
 * @package App\storage
 */
abstract class Api
{
    /**
     * @return array
     */
    abstract public static function response(): array;
}