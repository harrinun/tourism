<?php

namespace App\Tour\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Tour\Repositories\ExtraRepository;
use App\Tour\Entities\Extra;
use App\Validators\ExtraValidator;

/**
 * Class ExtraRepositoryEloquent
 * @package namespace App\Tour\Eloquent;
 */
class ExtraRepositoryEloquent extends BaseRepository implements ExtraRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Extra::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ExtraValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
