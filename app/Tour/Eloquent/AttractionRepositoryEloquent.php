<?php

namespace App\Tour\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Tour\Repositories\AttractionRepository;
use App\Tour\Entities\Attraction;
use App\Validators\AttractionValidator;

/**
 * Class AttractionRepositoryEloquent
 * @package namespace App\Tour\Eloquent;
 */
class AttractionRepositoryEloquent extends BaseRepository implements AttractionRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Attraction::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
