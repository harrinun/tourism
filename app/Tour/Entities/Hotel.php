<?php

namespace App\Tour\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Hotel extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'name',
        'location',
        'type',
        'region',
    ];

}
