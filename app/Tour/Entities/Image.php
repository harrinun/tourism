<?php

namespace App\Tour\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Image extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'full_size_path',
        'card_size_path',
        'icon_size_path',
        'owner_id'
    ];

    public function hotels()
    {
        return $this->morphedByMany(Hotel::class,'imageable');
    }

}
