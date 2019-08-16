<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Apis\GetSingleTypeData;

use App\Film;
use App\Character;


class FilmsController extends Controller
{
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

    public function getFilms() {
      $films = array_values(array_sort(GetSingleTypeData::get('films'), function ($value) {
        return $value['episode_id']; //sort by episode_id
      }));

      foreach($films as $film) {
        Film::create([
          'episode_id' => $film['episode_id'],
          'film_url' => $film['url'],
          'title' => $film['title'],
          'director' => $film['director'],
          'producer' => $film['producer'],
          'release_date' => $film['release_date'],
          'opening_crawl' => $film['opening_crawl']
        ]);
      }
    }

    public function getCharacters() {
      $characters = array_values(array_sort(GetSingleTypeData::get('people'), function ($value) {
        return $value['name']; //sorted by name
      }));

      foreach($characters as $character) {
        Character::create([
          'character_url' => $character['url'],
          'name' => $character['name'],
          'gender' => $character['gender'],
          'birth_year' => $character['birth_year'],
          'eye_color' => $character['eye_color'],
          'hair_color' => $character['hair_color'],
          'skin_color' => $character['skin_color'],
          'height' => $character['height'],
          'mass' => $character['mass']
        ]);
      }
      
    }

    public function index() {           
        $films = Film::all();
        return view('pages.homepage',compact('films'));
    }


    public function show($id) {   
        $films =  Film::all();
        $filmEpiIdArr = array_column($films,'episode_id');
        if(in_array($id, $filmEpiIdArr)){
            $filmData = $films[$id - 1];
    
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
