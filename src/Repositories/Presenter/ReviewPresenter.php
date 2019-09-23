<?php

namespace Laraecart\Ecommerce\Repositories\Presenter;

use Litepie\Repository\Presenter\FractalPresenter;

class ReviewPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ReviewTransformer();
    }
}