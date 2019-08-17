@extends('layouts.app')


@section('header')
  <h1 class="ui dividing blue huge header">{{$film->title}}</h1>
  <h2 class="ui blue medium header">Episode: {{$film->episode_id}} </h2>
  <h2 class="ui blue medium header">Director: {{$film->director}}</h2>
  <h2 class="ui blue medium header">Producer:  {{$film->producer}}</h2>
  <h2 class="ui blue medium header">Release date: {{$film->release_date}}</h2>
@stop


@section('navbar')
  <div class="ui container">
    <div class="ui secondary button">
      <a href="/">Homepage</a>
    </div>
  </div>
@stop


@section('content')
  <div class="ui red dividing huge header">Opening Crawl: 
    <h3 class="ui violet small header">{{$film->opening_crawl}}<h3>
  </div>

    <div>
      <br/>
      <h2 class="ui red dividing huge header">Characters:</h2>
      <br/>
          @foreach($characters as $character)
          <div class="ui container tooltip">
            <h2 class="ui violet medium header">{{$character->name}}</h2>
            <span class="tooltiptext"> 
                <div class="ui yellow tiny header">Height: {{$character->height}}</div>
                <div class="ui yellow tiny header">Mass: {{$character->mass}}</div>
                <div class="ui yellow tiny header">Hair Color: {{$character->hair_color}}</div>
                <div class="ui yellow tiny header">Skin Color: {{$character->skin_color}}</div>
                <div class="ui yellow tiny header">Eye Color: {{$character->eye_color}}</div>
                <div class="ui yellow tiny header">Birth Year: {{$character->birth_year}}</div>
                <div class="ui yellow tiny header">Gender: {{$character->gender}}</div>
            </span>
          </div>
          @endforeach
    </div>


    <div>
      <br />
      <h2 class="ui red dividing huge header">Planets:</h2>
      <br/>
      @foreach($planets as $planet)
          <div class="ui container tooltip">
            <h2 class="ui violet medium header">{{$planet->name}}</h2>
            <span class="tooltiptext"> 
              <div class="ui yellow tiny header">Rotation Period: {{$planet->rotation_period}}</div>
              <div class="ui yellow tiny header">Orbital Period: {{$planet->orbital_period}}</div>
              <div class="ui yellow tiny header">Diameter: {{$planet->diameter}}</div>
              <div class="ui yellow tiny header">Climate: {{$planet->climate}}</div>
              <div class="ui yellow tiny header">Gravity: {{$planet->gravity}}</div>
              <div class="ui yellow tiny header">Terrain: {{$planet->terrain}}</div>
              <div class="ui yellow tiny header">Gravity: {{$planet->gravity}}</div>
              <div class="ui yellow tiny header">Surface Water: {{$planet->surface_water}}</div>
              <div class="ui yellow tiny header">Gravity: {{$planet->gravity}}</div> 
              <div class="ui yellow tiny header">Population: {{$planet->population}}</div>
            </span>
          </div>
      @endforeach  
    </div>


    <div>
      <br/>
      <h2 class="ui red dividing huge header">Species:</h2>
      <br/>
          @foreach($species as $spec)
            <div class="ui container tooltip">
              <h2 class="ui violet medium header">{{$spec->name}}</h2>
              <span class="tooltiptext">
                  <div class="ui yellow tiny header">Classification: {{$spec->classification}}</div>
                  <div class="ui yellow tiny header">Designation: {{$spec->designation}}</div>
                  <div class="ui yellow tiny header">Average Height: {{$spec->average_height}}</div>
                  <div class="ui yellow tiny header">Skin Colors: {{$spec->skin_colors}}</div>
                  <div class="ui yellow tiny header">Hair Colors: {{$spec->hair_colors}}</div>
                  <div class="ui yellow tiny header">Eye Colors: {{$spec->eye_colors}}</div>
                  <div class="ui yellow tiny header">Average Lifespan: {{$spec->average_lifespan}}</div>
                  <div class="ui yellow tiny header">Language: {{$spec->language}}</div>
              </span>
            </div>
          @endforeach  
    </div>


    <div>
        <br/>
        <h2 class="ui red dividing huge header">Starships:</h2>
        <br/>
            @foreach($starships as $starship)
              <div class="ui container tooltip">
                <h2 class="ui violet medium header">{{$starship->name}}</h2>
                <span class="tooltiptext">
                    <div class="ui yellow tiny header">Model: {{$starship->model}}</div>
                    <div class="ui yellow tiny header">Manufacturer: {{$starship->manufacturer}}</div>
                    <div class="ui yellow tiny header">Cost In Credits: {{$starship->cost_in_credits}}</div>
                    <div class="ui yellow tiny header">Length: {{$starship->length}}</div>
                    <div class="ui yellow tiny header">Max Speed: {{$starship->max_atmosphering_speed}}</div>
                    <div class="ui yellow tiny header">Crew: {{$starship->crew}}</div>
                    <div class="ui yellow tiny header">Passengers: {{$starship->passengers}}</div>
                    <div class="ui yellow tiny header">Cargo Capacity: {{$starship->cargo_capacity}}</div>
                    <div class="ui yellow tiny header">Consumables: {{$starship->consumables}}</div>
                    <div class="ui yellow tiny header">Hyperdrive Rating: {{$starship->hyperdrive_rating}}</div>
                    <div class="ui yellow tiny header">MGLT: {{$starship->MGLT}}</div>
                    <div class="ui yellow tiny header">Starship Class: {{$starship->starship_class}}</div>
                </span>
              </div>
            @endforeach  
      </div>

      <div>
          <br/>
          <h2 class="ui red dividing huge header">Vehicles:</h2>
          <br/>
              @foreach($vehicles as $vehicle)
                <div class="ui container tooltip">
                  <h2 class="ui violet medium header">{{$vehicle->name}}</h2>
                  <span class="tooltiptext">
                      <div class="ui yellow tiny header">Model: {{$vehicle->model}}</div>
                      <div class="ui yellow tiny header">Manufacturer: {{$vehicle->manufacturer}}</div>
                      <div class="ui yellow tiny header">Cost In Credits: {{$vehicle->cost_in_credits}}</div>
                      <div class="ui yellow tiny header">Length: {{$vehicle->length}}</div>
                      <div class="ui yellow tiny header">Max Speed: {{$vehicle->max_atmosphering_speed}}</div>
                      <div class="ui yellow tiny header">Crew: {{$vehicle->crew}}</div>
                      <div class="ui yellow tiny header">Passengers: {{$vehicle->passengers}}</div>
                      <div class="ui yellow tiny header">Cargo Capacity: {{$vehicle->cargo_capacity}}</div>
                      <div class="ui yellow tiny header">Consumables: {{$vehicle->consumables}}</div>
                      <div class="ui yellow tiny header">Vehicle Class: {{$vehicle->vehicle_class}}</div>
                  </span>
                </div>
              @endforeach  
        </div>
@endsection


