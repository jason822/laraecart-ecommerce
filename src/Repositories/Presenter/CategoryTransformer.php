<?php

namespace Laraecart\Ecommerce\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class CategoryTransformer extends TransformerAbstract
{
    public function transform(\Laraecart\Ecommerce\Models\Category $category)
    {
        return [
            'id'                => $category->getRouteKey(),
            'key'               => [
                'public'    => $category->getPublicKey(),
                'route'     => $category->getRouteKey(),
            ], 
            'id'                => $category->id,
            'name'              => $category->name,
            'parent_id'         => $category->parent_id,
            'nest_left'         => $category->nest_left,
            'nest_right'        => $category->nest_right,
            'nest_depth'        => $category->nest_depth,
            'discription'       => $category->discription,
            'type'              => $category->type,
            'slug'              => $category->slug,
            'meta_tag'          => $category->meta_tag,
            'meta_keyword'      => $category->meta_keyword,
            'status'            => $category->status,
            'sort_order'        => $category->sort_order,
            'image'             => $category->image,
            'user_id'           => $category->user_id,
            'user_type'         => $category->user_type,
            'created_at'        => $category->created_at,
            'updated_at'        => $category->updated_at,
            'deleted_at'        => $category->deleted_at,
            'url'               => [
                'public'    => trans_url('ecommerce/'.$category->getPublicKey()),
                'user'      => guard_url('ecommerce/category/'.$category->getRouteKey()),
            ], 
            'status'            => trans('app.'.$category->status),
            'created_at'        => format_date($category->created_at),
            'updated_at'        => format_date($category->updated_at),
        ];
    }
}