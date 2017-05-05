<?php

namespace App\Tour\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Extra extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'name',
        'description',
    ];

}
