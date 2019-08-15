<?php

namespace App\Http\Apis;


class GetSingleTypeSinglePageData {
  
  public static function get($url)
  {
    $client = new \GuzzleHttp\Client(['base_uri' => $url]);
    $res = $client->request('GET');
    $statusCode= $res->getStatusCode();
    $header= $res->getHeader('content-type');
    $data = $res->getBody()->getContents();
    $decodedData = json_decode($data, true);
    return $decodedData;
  }  
}

