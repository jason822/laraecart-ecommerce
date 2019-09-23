<?php

namespace Laraecart\Ecommerce\Repositories\Presenter;

use Litepie\Repository\Presenter\FractalPresenter;

class BrandPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new BrandTransformer();
    }
}