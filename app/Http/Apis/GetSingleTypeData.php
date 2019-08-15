<?php
  namespace App\Http\Apis;

  use App\Http\Apis\GetSingleTypeSinglePageData;
  
  
  ////SW api a single page contains only 10 items of the same type data, therefore, I have to create this class to fetch the multiple-page info$information;
  class GetSingleTypeData {

    public static function get($type) {

      $singlePageData = GetSingleTypeSinglePageData::get("https://swapi.co/api/$type");
      $info = $singlePageData['results'];
      $infoNextPageUrl = $singlePageData['next'];
      while($infoNextPageUrl) {
        $singlePageData = GetSingleTypeSinglePageData::get($infoNextPageUrl);
        $info = array_merge($info, $singlePageData['results']);
        $infoNextPageUrl = $singlePageData['next'];
      }

      return $info;
    }

  }



