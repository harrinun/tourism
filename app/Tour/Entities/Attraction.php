<?php

namespace App\Tour\Entities;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Attraction extends Model implements Transformable
{
    use TransformableTrait,Sluggable;

    protected $fillable = [
        'name',
        'attraction_type_id',
        'description',
        'region',
        'location',
        'manager'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug'=>[
                'source'=>'name'
            ]
        ];
    }

    public function owner()
    {
        return $this->belongsTo(\App\User::class,'manager');

    }
}
