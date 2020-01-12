<?php

namespace App\products;

use App\interfaces\Product;
use App\storage\WaterApi;
use GuzzleHttp\Client;

class WaterProduct implements Product
{
    
    public function request($method, $uri, $parameters, $body, $responseClass = null, $format = 'json'): array
    {
        /**
         * in case $responseClass have instance of some class then
         * will invoke class
         *
         *
        if (!empty($body)) {
        $options[$format] = $body;
        }
        $query = http_build_query($parameters);
        $requestUri = $uri;
        if (strlen(trim($query)) !==  '') {
        $requestUri .='?' . $query;
        }

        $client = new Client();

        $result = $client->request($method, $requestUri, $options);
        $responseData = $result->getBody()->getContents();

        $response = $this->container->get($responseClass);

        $response->handle($responseData);

         .....................................................etc
         
        return $response;
 
         */
        
        return WaterApi::response();
    }
}