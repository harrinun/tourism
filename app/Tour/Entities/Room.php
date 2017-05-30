<?php

namespace App\Tour\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Room extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'room_type_id',
        'no_of_rooms',
        'price_per_night',
        'hotel_id'
    ];


    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }

}
