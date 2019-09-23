<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'laraecart',

    /*
     * Package.
     */
    'package'   => 'ecommerce',

    /*
     * Modules.
     */
    'modules'   => ['category', 
'brand', 
'product', 
'review'],

    'category'       => [
        'model' => [
            'model'                 => \Laraecart\Ecommerce\Models\Category::class,
            'table'                 => 'categories',
            'presenter'             => \Laraecart\Ecommerce\Repositories\Presenter\CategoryPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'name',  'parent_id',  'nest_left',  'nest_right',  'nest_depth',  'discription',  'type',  'slug',  'meta_tag',  'meta_keyword',  'status',  'sort_order',  'image',  'user_id',  'user_type',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'ecommerce/category',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Laraecart',
            'package'   => 'Ecommerce',
            'module'    => 'Category',
        ],

    ],

    'brand'       => [
        'model' => [
            'model'                 => \Laraecart\Ecommerce\Models\Brand::class,
            'table'                 => 'brands',
            'presenter'             => \Laraecart\Ecommerce\Repositories\Presenter\BrandPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'name',  'slug',  'status',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'ecommerce/brand',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Laraecart',
            'package'   => 'Ecommerce',
            'module'    => 'Brand',
        ],

    ],

    'product'       => [
        'model' => [
            'model'                 => \Laraecart\Ecommerce\Models\Product::class,
            'table'                 => 'products',
            'presenter'             => \Laraecart\Ecommerce\Repositories\Presenter\ProductPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'manufacturer_id',  'title',  'description',  'summary',  'features',  'size',  'color',  'meta_title',  'meta_discription',  'meta_keywords',  'sku',  'upc',  'ean',  'jan',  'isbn',  'mpn',  'price',  'tax',  'slider',  'quantity',  'minimum_quantity',  'subtract_stock',  'stock_status',  'shipping',  'date_available',  'discount',  'images',  'slug',  'status',  'user_id',  'user_type',  'upload_folder',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'ecommerce/product',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Laraecart',
            'package'   => 'Ecommerce',
            'module'    => 'Product',
        ],

    ],

    'review'       => [
        'model' => [
            'model'                 => \Laraecart\Ecommerce\Models\Review::class,
            'table'                 => 'reviews',
            'presenter'             => \Laraecart\Ecommerce\Repositories\Presenter\ReviewPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'product_id',  'author_name',  'author_email',  'author_phone',  'review',  'rating',  'status',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'ecommerce/review',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Laraecart',
            'package'   => 'Ecommerce',
            'module'    => 'Review',
        ],

    ],
];
