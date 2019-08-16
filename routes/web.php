<?php

Route::get('/','FilmsController@index');

Route::get('/film/{id}', 'FilmsController@show');

Route::get('/getFilms', 'FilmsController@getFilms');

Route::get('/getCharacters', 'FilmsController@getCharacters');
