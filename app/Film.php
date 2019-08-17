<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Film extends Model
{
    use SoftDeletes;

    protected $fillable = ['episode_id',
                           'film_url',
                           'title',
                           'director',
                           'producer',
                           'release_date',
                           'opening_crawl',
                           'favourited'                                      
    ];

    protected $dates = ['deleted_at'];

    public function characters() {
        return $this->belongsToMany('App\Character', 'character_film', 'film_id','character_url');
    }
}
