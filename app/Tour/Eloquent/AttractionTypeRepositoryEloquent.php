<?php

namespace App\Tour\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Tour\Repositories\AttractionTypeRepository;
use App\Tour\Entities\AttractionType;
use App\Validators\AttractionTypeValidator;

/**
 * Class AttractionTypeRepositoryEloquent
 * @package namespace App\Tour\Eloquent;
 */
class AttractionTypeRepositoryEloquent extends BaseRepository implements AttractionTypeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return AttractionType::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return AttractionTypeValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
