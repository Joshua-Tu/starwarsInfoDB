<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Planet extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'planet_url';

    protected $fillable = [
        'planet_url',
        'name',
        'diameter',
        'rotation_period',
        'orbital_period',
        'gravity',
        'population',
        'climate',
        'terrain',
        'surface_water'
    ];
    protected $dates = ['deleted_at'];

    public function films() {
        return $this->belongsToMany('App\Film', 'film_planet', 'planet_url', 'film_id');
    }
}
