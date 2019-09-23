<?php

namespace Laraecart\Ecommerce\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Form;
use Laraecart\Ecommerce\Http\Requests\BrandRequest;
use Laraecart\Ecommerce\Interfaces\BrandRepositoryInterface;
use Laraecart\Ecommerce\Models\Brand;

/**
 * Resource controller class for brand.
 */
class BrandResourceController extends BaseController
{

    /**
     * Initialize brand resource controller.
     *
     * @param type BrandRepositoryInterface $brand
     *
     * @return null
     */
    public function __construct(BrandRepositoryInterface $brand)
    {
        parent::__construct();
        $this->repository = $brand;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\Laraecart\Ecommerce\Repositories\Criteria\BrandResourceCriteria::class);
    }

    /**
     * Display a list of brand.
     *
     * @return Response
     */
    public function index(BrandRequest $request)
    {
        $view = $this->response->theme->listView();

        if ($this->response->typeIs('json')) {
            $function = camel_case('get-' . $view);
            return $this->repository
                ->setPresenter(\Laraecart\Ecommerce\Repositories\Presenter\BrandPresenter::class)
                ->$function();
        }

        $brands = $this->repository->paginate();

        return $this->response->title(trans('ecommerce::brand.names'))
            ->view('ecommerce::brand.index', true)
            ->data(compact('brands'))
            ->output();
    }

    /**
     * Display brand.
     *
     * @param Request $request
     * @param Model   $brand
     *
     * @return Response
     */
    public function show(BrandRequest $request, Brand $brand)
    {

        if ($brand->exists) {
            $view = 'ecommerce::brand.show';
        } else {
            $view = 'ecommerce::brand.new';
        }

        return $this->response->title(trans('app.view') . ' ' . trans('ecommerce::brand.name'))
            ->data(compact('brand'))
            ->view($view, true)
            ->output();
    }

    /**
     * Show the form for creating a new brand.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(BrandRequest $request)
    {

        $brand = $this->repository->newInstance([]);
        return $this->response->title(trans('app.new') . ' ' . trans('ecommerce::brand.name')) 
            ->view('ecommerce::brand.create', true) 
            ->data(compact('brand'))
            ->output();
    }

    /**
     * Create new brand.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(BrandRequest $request)
    {
        try {
            $attributes              = $request->all();
            $attributes['user_id']   = user_id();
            $attributes['user_type'] = user_type();
            $brand                 = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('ecommerce::brand.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('ecommerce/brand/' . $brand->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/ecommerce/brand'))
                ->redirect();
        }

    }

    /**
     * Show brand for editing.
     *
     * @param Request $request
     * @param Model   $brand
     *
     * @return Response
     */
    public function edit(BrandRequest $request, Brand $brand)
    {
        return $this->response->title(trans('app.edit') . ' ' . trans('ecommerce::brand.name'))
            ->view('ecommerce::brand.edit', true)
            ->data(compact('brand'))
            ->output();
    }

    /**
     * Update the brand.
     *
     * @param Request $request
     * @param Model   $brand
     *
     * @return Response
     */
    public function update(BrandRequest $request, Brand $brand)
    {
        try {
            $attributes = $request->all();

            $brand->update($attributes);
            return $this->response->message(trans('messages.success.updated', ['Module' => trans('ecommerce::brand.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('ecommerce/brand/' . $brand->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('ecommerce/brand/' . $brand->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the brand.
     *
     * @param Model   $brand
     *
     * @return Response
     */
    public function destroy(BrandRequest $request, Brand $brand)
    {
        try {

            $brand->delete();
            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('ecommerce::brand.name')]))
                ->code(202)
                ->status('success')
                ->url(guard_url('ecommerce/brand/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('ecommerce/brand/' . $brand->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove multiple brand.
     *
     * @param Model   $brand
     *
     * @return Response
     */
    public function delete(BrandRequest $request, $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('ecommerce::brand.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('ecommerce/brand'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/ecommerce/brand'))
                ->redirect();
        }

    }

    /**
     * Restore deleted brands.
     *
     * @param Model   $brand
     *
     * @return Response
     */
    public function restore(BrandRequest $request)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('ecommerce::brand.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('/ecommerce/brand'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/ecommerce/brand/'))
                ->redirect();
        }

    }

}
