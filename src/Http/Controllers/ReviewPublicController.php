<?php

namespace Laraecart\Ecommerce\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Laraecart\Ecommerce\Interfaces\ReviewRepositoryInterface;

class ReviewPublicController extends BaseController
{
    // use ReviewWorkflow;

    /**
     * Constructor.
     *
     * @param type \Laraecart\Review\Interfaces\ReviewRepositoryInterface $review
     *
     * @return type
     */
    public function __construct(ReviewRepositoryInterface $review)
    {
        $this->repository = $review;
        parent::__construct();
    }

    /**
     * Show review's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $reviews = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('$ecommerce::$review.names'))
            ->view('$ecommerce::public.review.index')
            ->data(compact('$reviews'))
            ->output();
    }

    /**
     * Show review's list based on a type.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function list($type = null)
    {
        $reviews = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('$ecommerce::$review.names'))
            ->view('$ecommerce::public.review.index')
            ->data(compact('$reviews'))
            ->output();
    }

    /**
     * Show review.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $review = $this->repository->scopeQuery(function($query) use ($slug) {
            return $query->orderBy('id','DESC')
                         ->where('slug', $slug);
        })->first(['*']);

        return $this->response->title($$review->name . trans('$ecommerce::$review.name'))
            ->view('$ecommerce::public.review.show')
            ->data(compact('$review'))
            ->output();
    }

}
