<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Character extends Model
{
    protected $primaryKey = 'character_url';
    
    protected $fillable = [
                           'character_url',
                           'name',
                           'gender',
                           'birth_year',
                           'eye_color',
                           'hair_color',
                           'skin_color',
                           'height',
                           'mass'
    ];
    protected $dates = ['deleted_at'];
}
