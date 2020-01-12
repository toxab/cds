<?php

require "vendor/autoload.php";

use App\CommonDelivery;
use App\WaterDeliveryConcrete;
use App\AirDeliveryConcrete;

function someClientAction(CommonDelivery $commonDelivery)
{
    return $commonDelivery->commonRequest('get', '/api/water-some-url', ['a' => 1, 'b' => 2, 'c' => 3], ['body' => 'body data']);
}

var_dump(someClientAction(new WaterDeliveryConcrete()));

var_dump(someClientAction(new AirDeliveryConcrete()));
