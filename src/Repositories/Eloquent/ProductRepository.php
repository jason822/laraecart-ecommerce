<?php

namespace Laraecart\Ecommerce\Repositories\Eloquent;

use Laraecart\Ecommerce\Interfaces\ProductRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('laraecart.ecommerce.product.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('laraecart.ecommerce.product.model.model');
    }
}
