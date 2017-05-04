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
        'slug',
        'city',
        'suburb',
        'phone_number',
        'address',
        'slug',
        'parent_id',
        'manager'
    ];
    //todo add rooms relationship

    protected $with = ['user'];

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

    public function images()
    {
        return $this->hasMany(Image::class,'owner_id');
    }

    /**
     * A hotel belongs to can Many categories
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_hotel');
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class,'manager');
    }
}
