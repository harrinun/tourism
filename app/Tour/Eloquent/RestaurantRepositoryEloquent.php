<?php

namespace App\Tour\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Tour\Repositories\RestaurantRepository;
use App\Tour\Entities\Restaurant;
use App\Validators\RestaurantValidator;

/**
 * Class RestaurantRepositoryEloquent
 * @package namespace App\Tour\Eloquent;
 */
class RestaurantRepositoryEloquent extends BaseRepository implements RestaurantRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Restaurant::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
