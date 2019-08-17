<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Apis\GetSingleTypeData;

use App\Film;
use App\Character;
use App\Planet;
use App\Vehicle;
use App\Starship;
use App\Species;

class FetchData extends Controller {

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
        Film::find((int) $film['episode_id'])->characters()->sync($film['characters']);
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

    public function getStarships() {
      $starships = array_values(array_sort(GetSingleTypeData::get('starships'), function ($value) {
        return $value['name'];
      }));

      foreach($starships as $starship) {
        Starship::create([
          'starship_url' => $starship['url'],
          'name' => $starship['name'],
          'model' => $starship['model'],
          'starship_class' => $starship['starship_class'],
          'cost_in_credits' => $starship['cost_in_credits'],
          'manufacturer' => $starship['manufacturer'],
          'length' => $starship['length'],
          'crew' => $starship['crew'],
          'passengers' => $starship['passengers'],
          'max_atmosphering_speed' => $starship['max_atmosphering_speed'],
          'hyperdrive_rating' => $starship['hyperdrive_rating'],
          'MGLT' => $starship['MGLT'],
          'cargo_capacity' => $starship['cargo_capacity'],
          'consumables' => $starship['consumables'],
        ]);
      }  
    }

    public function getVehicles() {
      $vehicles = array_values(array_sort(GetSingleTypeData::get('vehicles'), function ($value) {
        return $value['name'];
      }));

      foreach($vehicles as $vehicle) {
        Vehicle::create([
          'vehicle_url' => $vehicle['url'],
          'name' => $vehicle['name'],
          'model' => $vehicle['model'],
          'vehicle_class' => $vehicle['vehicle_class'],
          'manufacturer' => $vehicle['manufacturer'],
          'length' => $vehicle['length'],
          'cost_in_credits' => $vehicle['cost_in_credits'],
          'crew' => $vehicle['crew'],
          'passengers' => $vehicle['passengers'],
          'max_atmosphering_speed' => $vehicle['max_atmosphering_speed'],
          'cargo_capacity' => $vehicle['cargo_capacity'],
          'consumables' => $vehicle['consumables'],
        ]);
      }          
    }

    public function getSpecies() {
      $species = array_values(array_sort(GetSingleTypeData::get('species'), function ($value) {
        return $value['name'];
      }));

      foreach($species as $spec) {
        Species::create([
          'species_url' => $spec['url'],
          'name' => $spec['name'],
          'classification' => $spec['classification'],
          'designation' => $spec['designation'],
          'average_height' => $spec['average_height'],
          'average_lifespan' => $spec['average_lifespan'],
          'eye_colors' => $spec['eye_colors'],
          'hair_colors' => $spec['hair_colors'],
          'skin_colors' => $spec['skin_colors'],
          'language' => $spec['language'],
          // 'homeworld' => $spec['homeworld']  //homeworld is an array of url, sometimes the data has null here, I didn't set this column to nullable in the create_species migration file, so I create a migration file to remove this column
        ]);
      }  
    }
}
