<?php

namespace App\Tour\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Tour\Repositories\HotelRepository;
use App\Tour\Entities\Hotel;
use App\Validators\HotelValidator;

/**
 * Class HotelRepositoryEloquent
 * @package namespace App\Tour\Eloquent;
 */
class HotelRepositoryEloquent extends BaseRepository implements HotelRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Hotel::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
