<?php

namespace App\interfaces;

interface Product
{
    public function request($method, $uri, $parameters, $body, $responseClass, $format): array;
}