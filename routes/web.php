<?php

Route::get('/','FilmsController@index');

Route::get('/film/{id}', 'FilmsController@show');

Route::get('/getFilms', 'FetchData@getFilms');

Route::get('/getCharacters', 'FetchData@getCharacters');

Route::get('/getPlanets', 'FetchData@getPlanets');

Route::get('/getStarships', 'FetchData@getStarships');

Route::get('/getVehicles', 'FetchData@getVehicles');

Route::get('/getSpecies', 'FetchData@getSpecies');


