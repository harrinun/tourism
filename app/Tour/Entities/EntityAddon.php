<?php

namespace App\Tour\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class EntityAddon extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'available',
        'amount',
        'payment_frequency',
        'addon_id'
    ];

    public function addonable()
    {
        return $this->morphTo(Hotel::class);
    }

}
