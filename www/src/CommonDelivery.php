<?php

namespace App;

use App\interfaces\Product;

abstract class CommonDelivery
{
    /**
     * @return Product
     */
    abstract public function factoryDelivery(): Product;
    
    /**
     * @param $method
     * @param $uri
     * @param $parameters
     * @param $body
     * @return array
     */
     public function commonRequest($method, $uri, $parameters, $body): array
     {
         return $this->factoryDelivery()->request($method, $uri, $parameters, $body);
     }
    
}