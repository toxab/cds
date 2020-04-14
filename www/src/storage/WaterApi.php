<?php

namespace App\storage;

class WaterApi extends Api
{
    
    /**
     * @return array
     */
    public static function response(): array
    {
        return [
            'message' => 'WaterDelivery response api success',
            'status' => 'delivered',
            'ids' => [
                1, 2, 3, 4, 5
            ]
        ];
    }
}