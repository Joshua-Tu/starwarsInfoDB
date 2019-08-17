<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Starship extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'starship_url';
    
    protected $fillable = [
        'starship_url',
        'name',
        'model',
        'starship_class',
        'cost_in_credits',
        'manufacturer',
        'length',
        'crew',
        'passengers',
        'max_atmosphering_speed',
        'hyperdrive_rating',
        'MGLT',
        'cargo_capacity',
        'consumables'
    ];

    protected $dates = ['deleted_at'];

    public function films() {
        return $this->belongsToMany('App\Film', 'film_starship', 'starship_url', 'film_id');
    }
}
