<?php

namespace App\storage;

use App\interfaces\Product;
use App\products\WaterProduct;
use App\storage\Api;

class WaterApi extends Api
{
    
    /**
     * @return array
     */
    public static function response(): array
    {
        $numbers = [
            'a' => 1234,
            'b' => 3456,
            'c' => 2222,
            'd' => 1232
        ];
        sort($numbers);
        return [
            'message' => 'WaterDelivery response api success',
            'status' => 'delivered',
            'price' => $numbers
        ];
    }
}