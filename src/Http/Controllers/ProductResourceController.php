<?php

namespace Laraecart\Ecommerce\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Form;
use Laraecart\Ecommerce\Http\Requests\ProductRequest;
use Laraecart\Ecommerce\Interfaces\ProductRepositoryInterface;
use Laraecart\Ecommerce\Models\Product;

/**
 * Resource controller class for product.
 */
class ProductResourceController extends BaseController
{

    /**
     * Initialize product resource controller.
     *
     * @param type ProductRepositoryInterface $product
     *
     * @return null
     */
    public function __construct(ProductRepositoryInterface $product)
    {
        parent::__construct();
        $this->repository = $product;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\Laraecart\Ecommerce\Repositories\Criteria\ProductResourceCriteria::class);
    }

    /**
     * Display a list of product.
     *
     * @return Response
     */
    public function index(ProductRequest $request)
    {
        $view = $this->response->theme->listView();

        if ($this->response->typeIs('json')) {
            $function = camel_case('get-' . $view);
            return $this->repository
                ->setPresenter(\Laraecart\Ecommerce\Repositories\Presenter\ProductPresenter::class)
                ->$function();
        }

        $products = $this->repository->paginate();

        return $this->response->title(trans('ecommerce::product.names'))
            ->view('ecommerce::product.index', true)
            ->data(compact('products'))
            ->output();
    }

    /**
     * Display product.
     *
     * @param Request $request
     * @param Model   $product
     *
     * @return Response
     */
    public function show(ProductRequest $request, Product $product)
    {

        if ($product->exists) {
            $view = 'ecommerce::product.show';
        } else {
            $view = 'ecommerce::product.new';
        }

        return $this->response->title(trans('app.view') . ' ' . trans('ecommerce::product.name'))
            ->data(compact('product'))
            ->view($view, true)
            ->output();
    }

    /**
     * Show the form for creating a new product.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(ProductRequest $request)
    {

        $product = $this->repository->newInstance([]);
        return $this->response->title(trans('app.new') . ' ' . trans('ecommerce::product.name')) 
            ->view('ecommerce::product.create', true) 
            ->data(compact('product'))
            ->output();
    }

    /**
     * Create new product.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(ProductRequest $request)
    {
        try {
            $attributes              = $request->all();
            $attributes['user_id']   = user_id();
            $attributes['user_type'] = user_type();
            $product                 = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('ecommerce::product.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('ecommerce/product/' . $product->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/ecommerce/product'))
                ->redirect();
        }

    }

    /**
     * Show product for editing.
     *
     * @param Request $request
     * @param Model   $product
     *
     * @return Response
     */
    public function edit(ProductRequest $request, Product $product)
    {
        return $this->response->title(trans('app.edit') . ' ' . trans('ecommerce::product.name'))
            ->view('ecommerce::product.edit', true)
            ->data(compact('product'))
            ->output();
    }

    /**
     * Update the product.
     *
     * @param Request $request
     * @param Model   $product
     *
     * @return Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        try {
            $attributes = $request->all();

            $product->update($attributes);
            return $this->response->message(trans('messages.success.updated', ['Module' => trans('ecommerce::product.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('ecommerce/product/' . $product->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('ecommerce/product/' . $product->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the product.
     *
     * @param Model   $product
     *
     * @return Response
     */
    public function destroy(ProductRequest $request, Product $product)
    {
        try {

            $product->delete();
            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('ecommerce::product.name')]))
                ->code(202)
                ->status('success')
                ->url(guard_url('ecommerce/product/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('ecommerce/product/' . $product->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove multiple product.
     *
     * @param Model   $product
     *
     * @return Response
     */
    public function delete(ProductRequest $request, $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('ecommerce::product.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('ecommerce/product'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/ecommerce/product'))
                ->redirect();
        }

    }

    /**
     * Restore deleted products.
     *
     * @param Model   $product
     *
     * @return Response
     */
    public function restore(ProductRequest $request)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('ecommerce::product.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('/ecommerce/product'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/ecommerce/product/'))
                ->redirect();
        }

    }

}
