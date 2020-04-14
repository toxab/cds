<?php

namespace App\Controllers;

use App\CommonDelivery;

/**
 * Class AppController
 * @package App\Controllers
 */
class AppController
{
    /**@var CommonDelivery $commonDelivery*/
    public $commonDelivery;
    
    /**
     * AppController constructor.
     * @param CommonDelivery $commonDelivery
     */
    public function __construct(CommonDelivery $commonDelivery)
    {
        $this->commonDelivery = $commonDelivery;
    }
    
    
    /**
     * @return string
     */
    public function index(): string
    {
        echo 'Hello INDEX action from HomeController!!!'.PHP_EOL;
        
        $res = $this->commonDelivery->commonRequest(
            'get',
            '/api/water',
            [
                'water_id' => 25
            ],
            [
                'body' => [
                    'boats_id' => 1,
                    'anchor_id' => 3,
                    'yacht_id' => 25
                ]
            ]
        );
        return \GuzzleHttp\json_encode($res);
    }
    
    /**
     * @return string
     */
    public function test(): string
    {
        echo 'Hello TEST action from HomeController!!!';
        $res = $this->commonDelivery->commonRequest(
            'get',
            '/api/air',
            [
                'air_id'
            ],
            [
                'body' => [
                    'plane' => 5,
                    'aircraft' => 15,
                    'fan' => 125,
                    'wing' => 250
                ]
            ]
        );
        return \GuzzleHttp\json_encode($res);
    }
}
