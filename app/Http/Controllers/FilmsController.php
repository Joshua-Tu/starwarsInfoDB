<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Apis\GetSingleTypeData;

use App\Film;
use App\Character;


class FilmsController extends Controller
{

    public function __construct() {

        ////if the there's no content in the films table, then fetch films, characters array data from SW api
          
          $this->films = array_values(array_sort(GetSingleTypeData::get('films'), function ($value) {
            return $value['episode_id']; //sort by episode_id
          }));

          
          // $this->characters = array_values(array_sort(GetSingleTypeData::get('people'), function ($value) {
          //   return $value['name']; //sorted by name
          // }));

          // $this->planets = array_values(array_sort(GetSingleTypeData::get('planets'), function ($value) {
          //   return $value['name'];
          // }));

          // $this->vehicles = array_values(array_sort(GetSingleTypeData::get('vehicles'), function ($value) {
          //   return $value['name'];
          // }));

          // $this->starships = array_values(array_sort(GetSingleTypeData::get('starships'), function ($value) {
          //   return $value['name'];
          // }));

          // $this->species = array_values(array_sort(GetSingleTypeData::get('species'), function ($value) {
          //   return $value['name'];
          // }));
    }


    public function index()
    {           
        $films =  $this->films;
        
        return view('pages.homepage',compact('orderedFilmsArr'));

    }


    public function show($id)
    {   
        $orderedFilmsArr =  $this->films;
        $filmEpiIdArr = array_column($orderedFilmsArr,'episode_id');
        if(in_array($id, $filmEpiIdArr)){
            $filmData = $orderedFilmsArr[$id - 1];
    
            $charactersArr = array_map(function ($characterUrl) {
                return (array) GetRemoteData::getInfo($characterUrl);
              }, $filmData['characters']);

            
            // $planets = array_map(function ($planetUrl) {
            //     return (array) GetRemoteData::getInfo($planetUrl);
            //   }, $filmData['planets']);
           
            // $species = array_map(function ($specyUrl) {
            //     return (array) GetRemoteData::getInfo($specyUrl);
            //   }, $filmData['species']);

            // $starships = array_map(function ($starshipUrl) {
            //         return (array) GetRemoteData::getInfo($starshipUrl);
            //       }, $filmData['starships']);

            // $vehicles = array_map(function ($vehicleUrl) {
            //     return (array) GetRemoteData::getInfo($vehicleUrl);
            //   }, $filmData['vehicles']);
            
            return view('pages.filmInfoPage',compact(
                'filmData',
                'charactersArr'
                // 'planets',
                // 'species',
                // 'starships',
                // 'vehicles'
            ));
        }
        echo '<h1>Page not found</h1>';
    }
}
