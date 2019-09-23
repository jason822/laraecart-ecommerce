<?php

namespace Laraecart\Ecommerce\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Laraecart\Ecommerce\Interfaces\BrandRepositoryInterface;

class BrandPublicController extends BaseController
{
    // use BrandWorkflow;

    /**
     * Constructor.
     *
     * @param type \Laraecart\Brand\Interfaces\BrandRepositoryInterface $brand
     *
     * @return type
     */
    public function __construct(BrandRepositoryInterface $brand)
    {
        $this->repository = $brand;
        parent::__construct();
    }

    /**
     * Show brand's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $brands = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('$ecommerce::$brand.names'))
            ->view('$ecommerce::public.brand.index')
            ->data(compact('$brands'))
            ->output();
    }

    /**
     * Show brand's list based on a type.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function list($type = null)
    {
        $brands = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('$ecommerce::$brand.names'))
            ->view('$ecommerce::public.brand.index')
            ->data(compact('$brands'))
            ->output();
    }

    /**
     * Show brand.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $brand = $this->repository->scopeQuery(function($query) use ($slug) {
            return $query->orderBy('id','DESC')
                         ->where('slug', $slug);
        })->first(['*']);

        return $this->response->title($$brand->name . trans('$ecommerce::$brand.name'))
            ->view('$ecommerce::public.brand.show')
            ->data(compact('$brand'))
            ->output();
    }

}
