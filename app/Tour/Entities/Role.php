<?php

namespace App\Tour\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole implements Transformable
{
    use TransformableTrait;

    protected $fillable = [];

}
