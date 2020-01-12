<?php

namespace App\storage;

use App\interfaces\Product;

class AirApi extends Api
{
    /**
     * @return array
     */
    public static function response(): array
    {
        $numbers = [
            'a' => 8888,
            'b' => 1245,
            'c' => 1112,
            'd' => 4567
        ];
        sort($numbers);
        return [
            'message' => 'AirDelivery response api pending',
            'status' => 'Pending',
            'price' => $numbers
        ];
    }
}