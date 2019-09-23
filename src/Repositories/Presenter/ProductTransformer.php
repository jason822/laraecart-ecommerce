<?php

namespace Laraecart\Ecommerce\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class ProductTransformer extends TransformerAbstract
{
    public function transform(\Laraecart\Ecommerce\Models\Product $product)
    {
        return [
            'id'                => $product->getRouteKey(),
            'key'               => [
                'public'    => $product->getPublicKey(),
                'route'     => $product->getRouteKey(),
            ], 
            'id'                => $product->id,
            'manufacturer_id'   => $product->manufacturer_id,
            'title'             => $product->title,
            'description'       => $product->description,
            'summary'           => $product->summary,
            'features'          => $product->features,
            'size'              => $product->size,
            'color'             => $product->color,
            'meta_title'        => $product->meta_title,
            'meta_discription'  => $product->meta_discription,
            'meta_keywords'     => $product->meta_keywords,
            'sku'               => $product->sku,
            'upc'               => $product->upc,
            'ean'               => $product->ean,
            'jan'               => $product->jan,
            'isbn'              => $product->isbn,
            'mpn'               => $product->mpn,
            'price'             => $product->price,
            'tax'               => $product->tax,
            'slider'            => $product->slider,
            'quantity'          => $product->quantity,
            'minimum_quantity'  => $product->minimum_quantity,
            'subtract_stock'    => $product->subtract_stock,
            'stock_status'      => $product->stock_status,
            'shipping'          => $product->shipping,
            'date_available'    => $product->date_available,
            'discount'          => $product->discount,
            'images'            => $product->images,
            'slug'              => $product->slug,
            'status'            => $product->status,
            'user_id'           => $product->user_id,
            'user_type'         => $product->user_type,
            'upload_folder'     => $product->upload_folder,
            'created_at'        => $product->created_at,
            'updated_at'        => $product->updated_at,
            'deleted_at'        => $product->deleted_at,
            'url'               => [
                'public'    => trans_url('ecommerce/'.$product->getPublicKey()),
                'user'      => guard_url('ecommerce/product/'.$product->getRouteKey()),
            ], 
            'status'            => trans('app.'.$product->status),
            'created_at'        => format_date($product->created_at),
            'updated_at'        => format_date($product->updated_at),
        ];
    }
}