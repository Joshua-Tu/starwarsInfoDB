<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Apis\GetSingleTypeData;

use App\Film;
use App\Character;
use App\Planet;
use App\Vehicle;

class FetchData extends Controller {

    public function getFilms() {
      $films = array_values(array_sort(GetSingleTypeData::get('films'), function ($value) {
        return $value['episode_id']; //sort by episode_id
      }));

      dd(array_column($films, 'characters'));

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

    public function getPlanets() {
          $planets = array_values(array_sort(GetSingleTypeData::get('planets'), function ($value) {
            return $value['name'];
          }));

          foreach($planets as $planet) {
            Planet::create([
              'planet_url' => $planet['url'],
              'name' => $planet['name'],
              'diameter' => $planet['diameter'],
              'rotation_period' => $planet['rotation_period'],
              'orbital_period' => $planet['orbital_period'],
              'gravity' => $planet['gravity'],
              'population' => $planet['population'],
              'climate' => $planet['climate'],
              'terrain' => $planet['terrain'],
              'surface_water' => $planet['surface_water']
            ]);
          }          
    }

    public function getVehicles() {
      $vehicles = array_values(array_sort(GetSingleTypeData::get('vehicles'), function ($value) {
        return $value['name'];
      }));

      foreach($vehicles as $vehicle) {
        Vehicle::create([
          'planet_url' => $planet['url'],
          'name' => $planet['name'],
          'diameter' => $planet['diameter'],
          'rotation_period' => $planet['rotation_period'],
          'orbital_period' => $planet['orbital_period'],
          'gravity' => $planet['gravity'],
          'population' => $planet['population'],
          'climate' => $planet['climate'],
          'terrain' => $planet['terrain'],
          'surface_water' => $planet['surface_water']
        ]);
      }          
    }
}
