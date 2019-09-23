<?php

namespace Laraecart\Ecommerce;

use User;

class Ecommerce
{
    /**
     * $category object.
     */
    protected $category;
    /**
     * $brand object.
     */
    protected $brand;
    /**
     * $product object.
     */
    protected $product;
    /**
     * $review object.
     */
    protected $review;

    /**
     * Constructor.
     */
    public function __construct(\Laraecart\Ecommerce\Interfaces\CategoryRepositoryInterface $category,
        \Laraecart\Ecommerce\Interfaces\BrandRepositoryInterface $brand,
        \Laraecart\Ecommerce\Interfaces\ProductRepositoryInterface $product,
        \Laraecart\Ecommerce\Interfaces\ReviewRepositoryInterface $review)
    {
        $this->category = $category;
        $this->brand = $brand;
        $this->product = $product;
        $this->review = $review;
    }

    /**
     * Returns count of ecommerce.
     *
     * @param array $filter
     *
     * @return int
     */
    public function count()
    {
        return  0;
    }

    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.category.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->category->pushCriteria(new \Litepie\Laraecart\Repositories\Criteria\CategoryUserCriteria());
        }

        $category = $this->category->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('ecommerce::' . $view, compact('category'))->render();
    }
    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.brand.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->brand->pushCriteria(new \Litepie\Laraecart\Repositories\Criteria\BrandUserCriteria());
        }

        $brand = $this->brand->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('ecommerce::' . $view, compact('brand'))->render();
    }
    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.product.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->product->pushCriteria(new \Litepie\Laraecart\Repositories\Criteria\ProductUserCriteria());
        }

        $product = $this->product->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('ecommerce::' . $view, compact('product'))->render();
    }
    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.review.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->review->pushCriteria(new \Litepie\Laraecart\Repositories\Criteria\ReviewUserCriteria());
        }

        $review = $this->review->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('ecommerce::' . $view, compact('review'))->render();
    }
}
