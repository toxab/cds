<?php

namespace App;

use App\interfaces\Product;
use App\products\AirProduct;

class AirDeliveryConcrete extends CommonDelivery
{
    /**
     * @inheritDoc
     */
    public function factoryDelivery(): Product
    {
        return new AirProduct();
    }
}