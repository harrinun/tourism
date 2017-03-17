<?php

namespace App\Tour\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Restaurant extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'name',
        'region',
        'location',
        'type_of_food',
        'delivery',
        
        
    ];

}
