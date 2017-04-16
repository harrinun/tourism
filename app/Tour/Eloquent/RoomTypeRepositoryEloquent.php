<?php

namespace App\Tour\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Tour\Repositories\RoomTypeRepository;
use App\Tour\Entities\RoomType;
use App\Validators\RoomTypeValidator;

/**
 * Class RoomTypeRepositoryEloquent
 * @package namespace App\Tour\Eloquent;
 */
class RoomTypeRepositoryEloquent extends BaseRepository implements RoomTypeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return RoomType::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
