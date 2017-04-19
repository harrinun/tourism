<?php

namespace App\Tour\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface ImageRepository
 * @package namespace App\Tour\Repositories;
 */
interface ImageRepository extends RepositoryInterface
{
    public function upload($file);

}
