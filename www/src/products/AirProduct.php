<?php

namespace App\products;

use App\interfaces\Product;
use App\storage\AirApi;

class AirProduct implements Product
{
    
    public function request($method, $uri, $parameters, $body, $responseClass = null, $format = 'json'): array
    {
        /**
         * some logic example
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
    
        return AirApi::response();
    }
}