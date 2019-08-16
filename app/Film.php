<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['episode_id',
                           'film_url',
                           'title',
                           'director',
                           'producer',
                           'release_date',
                           'opening_crawl',
                           'favourited'                                      
    ];

}
