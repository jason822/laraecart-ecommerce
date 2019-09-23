<?php

namespace Laraecart\Ecommerce\Repositories\Eloquent;

use Laraecart\Ecommerce\Interfaces\BrandRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class BrandRepository extends BaseRepository implements BrandRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('laraecart.ecommerce.brand.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('laraecart.ecommerce.brand.model.model');
    }
}
