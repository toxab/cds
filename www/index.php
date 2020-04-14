<?php
ini_set('display_errors', E_ALL);

require 'vendor/autoload.php';
require_once __DIR__ . '/src/Controllers/AppController.php';
require_once __DIR__ . '/src/CommonDelivery.php';

use App\CommonDelivery;
use App\WaterDeliveryConcrete;
use App\AirDeliveryConcrete;
use Klein\Klein;
use App\Controllers\AppController;

$klein = new Klein();

$waterDeliveryConcrete = new WaterDeliveryConcrete();
$airDeliveryConcrete = new AirDeliveryConcrete();


$klein->respond('GET', '/?', function($request, $response) use (&$waterDeliveryConcrete){

    $controller = new AppController($waterDeliveryConcrete);
    $response = $controller->index();
    return $response;
});

$klein->respond('GET', '/test', function ($request, $response) use (&$airDeliveryConcrete){
    $controller = new AppController($airDeliveryConcrete);
    $response = $controller->test();
    return $response;
});

$klein->dispatch();