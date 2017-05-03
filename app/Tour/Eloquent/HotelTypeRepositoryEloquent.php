<?php

namespace App\Tour\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Tour\Repositories\HotelTypeRepository;
use App\Tour\Entities\Category;
use App\Validators\HotelTypeValidator;

/**
 * Class HotelTypeRepositoryEloquent
 * @package namespace App\Tour\Eloquent;
 */
class HotelTypeRepositoryEloquent extends BaseRepository implements HotelTypeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Category::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return HotelTypeValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
