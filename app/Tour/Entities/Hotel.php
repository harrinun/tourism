<?php

namespace App\Tour\Entities;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Hotel extends Model implements Transformable
{
    use TransformableTrait,Sluggable;

    protected $fillable = [
        'name',
        'location',
        'type',
        'region',
    ];
    //todo add rooms relationship
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

    public function images()
    {
        return $this->morphToMany(Image::class,'imageable');
    }
}
