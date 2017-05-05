<?php

namespace App\Tour\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Tour\Repositories\EntityAddonRepository;
use App\Tour\Entities\EntityAddon;
use App\Validators\EntityAddonValidator;

/**
 * Class EntityAddonRepositoryEloquent
 * @package namespace App\Tour\Eloquent;
 */
class EntityAddonRepositoryEloquent extends BaseRepository implements EntityAddonRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return EntityAddon::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return EntityAddonValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
