<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

use App\Film;
use App\Character;
use App\Planet;
use App\Vehicle;
use App\Starship;
use App\Species;

class FilmsController extends Controller
{
    public function index() {           
        $films = Film::all();
        return view('pages.homepage',compact('films'));
    }


    public function show($id) {   
        $films =  Film::all();
        $filmEpiIdArr = Arr::pluck($films, 'episode_id');  //Arr is Laravel helper functions
        if(in_array($id, $filmEpiIdArr)){
            $film = $films->find($id);
            $characters = $film->characters;
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
                'film',
                'characters'
                // 'planets',
                // 'species',
                // 'starships',
                // 'vehicles'
            ));
        } else {
            echo '<h1>Page not found</h1>';
        }
    }
}
