<?php

namespace App\Tour\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Tour\Repositories\RoomRepository;
use App\Tour\Entities\Room;
use App\Validators\RoomValidator;

/**
 * Class RoomRepositoryEloquent
 * @package namespace App\Tour\Eloquent;
 */
class RoomRepositoryEloquent extends BaseRepository implements RoomRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Room::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
