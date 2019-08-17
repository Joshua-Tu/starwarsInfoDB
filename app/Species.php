<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Species extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'species_url';
    protected $table = 'species';

    protected $fillable = [
        'species_url',
        'name',
        'classification',
        'designation',
        'average_height',
        'average_lifespan',
        'eye_colors',
        'hair_colors',
        'skin_colors',
        'language'
        // 'homeworld'
    ];

    protected $dates = ['deleted_at'];

}




