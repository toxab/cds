<?php

namespace App\storage;

class AirApi extends Api
{
    /**
     * @return array
     */
    public static function response(): array
    {
        return [
            'message' => 'AirDelivery response api success',
            'status' => 'delivered',
            'price' => [
                1, 2, 3, 4, 5
            ]
        ];
    }
}