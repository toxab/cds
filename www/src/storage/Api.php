<?php

namespace App\storage;

use App\interfaces\Product;

abstract class Api
{
    abstract public static function response(): array;
}