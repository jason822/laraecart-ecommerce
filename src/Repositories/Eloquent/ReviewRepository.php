<?php

namespace Laraecart\Ecommerce\Repositories\Eloquent;

use Laraecart\Ecommerce\Interfaces\ReviewRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class ReviewRepository extends BaseRepository implements ReviewRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('laraecart.ecommerce.review.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('laraecart.ecommerce.review.model.model');
    }
}
