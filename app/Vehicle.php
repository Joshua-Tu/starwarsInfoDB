<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'vehicle_url';

    protected $fillable = [
        'vehicle_url',
        'name',
        'model',
        'vehicle_class',
        'manufacturer',
        'length',
        'cost_in_credits',
        'crew',
        'passengers',
        'max_atmosphering_speed',
        'cargo_capacity',
        'consumables'
    ];
    protected $dates = ['deleted_at'];

    public function films() {
        return $this->belongsToMany('App\Film', 'film_vehicle', 'vehicle_url', 'film_id');
    }
}
