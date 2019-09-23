<?php

namespace Laraecart\Ecommerce\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class ReviewTransformer extends TransformerAbstract
{
    public function transform(\Laraecart\Ecommerce\Models\Review $review)
    {
        return [
            'id'                => $review->getRouteKey(),
            'key'               => [
                'public'    => $review->getPublicKey(),
                'route'     => $review->getRouteKey(),
            ], 
            'id'                => $review->id,
            'product_id'        => $review->product_id,
            'author_name'       => $review->author_name,
            'author_email'      => $review->author_email,
            'author_phone'      => $review->author_phone,
            'review'            => $review->review,
            'rating'            => $review->rating,
            'status'            => $review->status,
            'created_at'        => $review->created_at,
            'updated_at'        => $review->updated_at,
            'deleted_at'        => $review->deleted_at,
            'url'               => [
                'public'    => trans_url('ecommerce/'.$review->getPublicKey()),
                'user'      => guard_url('ecommerce/review/'.$review->getRouteKey()),
            ], 
            'status'            => trans('app.'.$review->status),
            'created_at'        => format_date($review->created_at),
            'updated_at'        => format_date($review->updated_at),
        ];
    }
}