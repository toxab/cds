<?php

namespace App;

use App\interfaces\Product;
use App\products\WaterProduct;

class WaterDeliveryConcrete extends CommonDelivery
{
    /**
     * @inheritDoc
     */
    public function factoryDelivery(): Product
    {
        return new WaterProduct();
    }
}