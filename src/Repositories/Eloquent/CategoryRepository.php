<?php

namespace Laraecart\Ecommerce\Repositories\Eloquent;

use Laraecart\Ecommerce\Interfaces\CategoryRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('laraecart.ecommerce.category.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('laraecart.ecommerce.category.model.model');
    }
}
