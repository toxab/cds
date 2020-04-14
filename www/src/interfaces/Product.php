<?php

namespace App\interfaces;

/**
 * Interface Product
 * @package App\interfaces
 */
interface Product
{
    /**
     * @param string      $method
     * @param string      $uri
     * @param array       $parameters
     * @param array       $body
     * @param string|null $responseClass
     * @param string      $format
     * @return array
     */
    public function request(string $method, string $uri, array $parameters, array $body, string $responseClass = null, $format = 'json'): array;
}