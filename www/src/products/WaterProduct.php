<?php

namespace App\products;

use App\interfaces\Product;
use App\storage\WaterApi;

/**
 * Class WaterProduct
 * @package App\products
 */
class WaterProduct implements Product
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
    public function request(string $method, string $uri, array $parameters, array $body, string $responseClass = null, $format = 'json'): array
    {
        return WaterApi::response();
    }
}
