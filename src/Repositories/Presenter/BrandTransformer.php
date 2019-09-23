<?php

namespace Laraecart\Ecommerce\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class BrandTransformer extends TransformerAbstract
{
    public function transform(\Laraecart\Ecommerce\Models\Brand $brand)
    {
        return [
            'id'                => $brand->getRouteKey(),
            'key'               => [
                'public'    => $brand->getPublicKey(),
                'route'     => $brand->getRouteKey(),
            ], 
            'id'                => $brand->id,
            'name'              => $brand->name,
            'slug'              => $brand->slug,
            'status'            => $brand->status,
            'created_at'        => $brand->created_at,
            'updated_at'        => $brand->updated_at,
            'deleted_at'        => $brand->deleted_at,
            'url'               => [
                'public'    => trans_url('ecommerce/'.$brand->getPublicKey()),
                'user'      => guard_url('ecommerce/brand/'.$brand->getRouteKey()),
            ], 
            'status'            => trans('app.'.$brand->status),
            'created_at'        => format_date($brand->created_at),
            'updated_at'        => format_date($brand->updated_at),
        ];
    }
}