<?php

namespace Laraecart\Ecommerce\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Form;
use Laraecart\Ecommerce\Http\Requests\ReviewRequest;
use Laraecart\Ecommerce\Interfaces\ReviewRepositoryInterface;
use Laraecart\Ecommerce\Models\Review;

/**
 * Resource controller class for review.
 */
class ReviewResourceController extends BaseController
{

    /**
     * Initialize review resource controller.
     *
     * @param type ReviewRepositoryInterface $review
     *
     * @return null
     */
    public function __construct(ReviewRepositoryInterface $review)
    {
        parent::__construct();
        $this->repository = $review;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\Laraecart\Ecommerce\Repositories\Criteria\ReviewResourceCriteria::class);
    }

    /**
     * Display a list of review.
     *
     * @return Response
     */
    public function index(ReviewRequest $request)
    {
        $view = $this->response->theme->listView();

        if ($this->response->typeIs('json')) {
            $function = camel_case('get-' . $view);
            return $this->repository
                ->setPresenter(\Laraecart\Ecommerce\Repositories\Presenter\ReviewPresenter::class)
                ->$function();
        }

        $reviews = $this->repository->paginate();

        return $this->response->title(trans('ecommerce::review.names'))
            ->view('ecommerce::review.index', true)
            ->data(compact('reviews'))
            ->output();
    }

    /**
     * Display review.
     *
     * @param Request $request
     * @param Model   $review
     *
     * @return Response
     */
    public function show(ReviewRequest $request, Review $review)
    {

        if ($review->exists) {
            $view = 'ecommerce::review.show';
        } else {
            $view = 'ecommerce::review.new';
        }

        return $this->response->title(trans('app.view') . ' ' . trans('ecommerce::review.name'))
            ->data(compact('review'))
            ->view($view, true)
            ->output();
    }

    /**
     * Show the form for creating a new review.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(ReviewRequest $request)
    {

        $review = $this->repository->newInstance([]);
        return $this->response->title(trans('app.new') . ' ' . trans('ecommerce::review.name')) 
            ->view('ecommerce::review.create', true) 
            ->data(compact('review'))
            ->output();
    }

    /**
     * Create new review.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(ReviewRequest $request)
    {
        try {
            $attributes              = $request->all();
            $attributes['user_id']   = user_id();
            $attributes['user_type'] = user_type();
            $review                 = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('ecommerce::review.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('ecommerce/review/' . $review->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/ecommerce/review'))
                ->redirect();
        }

    }

    /**
     * Show review for editing.
     *
     * @param Request $request
     * @param Model   $review
     *
     * @return Response
     */
    public function edit(ReviewRequest $request, Review $review)
    {
        return $this->response->title(trans('app.edit') . ' ' . trans('ecommerce::review.name'))
            ->view('ecommerce::review.edit', true)
            ->data(compact('review'))
            ->output();
    }

    /**
     * Update the review.
     *
     * @param Request $request
     * @param Model   $review
     *
     * @return Response
     */
    public function update(ReviewRequest $request, Review $review)
    {
        try {
            $attributes = $request->all();

            $review->update($attributes);
            return $this->response->message(trans('messages.success.updated', ['Module' => trans('ecommerce::review.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('ecommerce/review/' . $review->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('ecommerce/review/' . $review->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the review.
     *
     * @param Model   $review
     *
     * @return Response
     */
    public function destroy(ReviewRequest $request, Review $review)
    {
        try {

            $review->delete();
            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('ecommerce::review.name')]))
                ->code(202)
                ->status('success')
                ->url(guard_url('ecommerce/review/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('ecommerce/review/' . $review->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove multiple review.
     *
     * @param Model   $review
     *
     * @return Response
     */
    public function delete(ReviewRequest $request, $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('ecommerce::review.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('ecommerce/review'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/ecommerce/review'))
                ->redirect();
        }

    }

    /**
     * Restore deleted reviews.
     *
     * @param Model   $review
     *
     * @return Response
     */
    public function restore(ReviewRequest $request)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('ecommerce::review.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('/ecommerce/review'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/ecommerce/review/'))
                ->redirect();
        }

    }

}
