<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for product in ecommerce package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  product module in ecommerce package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Product',
    'names'         => 'Products',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Products',
        'sub'   => 'Products',
        'list'  => 'List of products',
        'edit'  => 'Edit product',
        'create'    => 'Create new product'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'subtract_stock'      => ['yes','no'],
            'stock_status'        => ['2-3 days','In Stock','Out of Stock','Pre-Order'],
            'shipping'            => ['yes','no'],
            'status'              => ['show','hide'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'manufacturer_id'            => 'Please enter manufacturer id',
        'title'                      => 'Please enter title',
        'description'                => 'Please enter description',
        'summary'                    => 'Please enter summary',
        'features'                   => 'Please enter features',
        'size'                       => 'Please enter size',
        'color'                      => 'Please enter color',
        'meta_title'                 => 'Please enter meta title',
        'meta_discription'           => 'Please enter meta discription',
        'meta_keywords'              => 'Please enter meta keywords',
        'sku'                        => 'Please enter sku',
        'upc'                        => 'Please enter upc',
        'ean'                        => 'Please enter ean',
        'jan'                        => 'Please enter jan',
        'isbn'                       => 'Please enter isbn',
        'mpn'                        => 'Please enter mpn',
        'price'                      => 'Please enter price',
        'tax'                        => 'Please enter tax',
        'slider'                     => 'Please enter slider',
        'quantity'                   => 'Please enter quantity',
        'minimum_quantity'           => 'Please enter minimum quantity',
        'subtract_stock'             => 'Please select subtract stock',
        'stock_status'               => 'Please select stock status',
        'shipping'                   => 'Please select shipping',
        'date_available'             => 'Please select date available',
        'discount'                   => 'Please enter discount',
        'images'                     => 'Please enter images',
        'slug'                       => 'Please enter slug',
        'status'                     => 'Please select status',
        'user_id'                    => 'Please enter user id',
        'user_type'                  => 'Please enter user type',
        'upload_folder'              => 'Please enter upload folder',
        'created_at'                 => 'Please select created at',
        'updated_at'                 => 'Please select updated at',
        'deleted_at'                 => 'Please select deleted at',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'manufacturer_id'            => 'Manufacturer id',
        'title'                      => 'Title',
        'description'                => 'Description',
        'summary'                    => 'Summary',
        'features'                   => 'Features',
        'size'                       => 'Size',
        'color'                      => 'Color',
        'meta_title'                 => 'Meta title',
        'meta_discription'           => 'Meta discription',
        'meta_keywords'              => 'Meta keywords',
        'sku'                        => 'Sku',
        'upc'                        => 'Upc',
        'ean'                        => 'Ean',
        'jan'                        => 'Jan',
        'isbn'                       => 'Isbn',
        'mpn'                        => 'Mpn',
        'price'                      => 'Price',
        'tax'                        => 'Tax',
        'slider'                     => 'Slider',
        'quantity'                   => 'Quantity',
        'minimum_quantity'           => 'Minimum quantity',
        'subtract_stock'             => 'Subtract stock',
        'stock_status'               => 'Stock status',
        'shipping'                   => 'Shipping',
        'date_available'             => 'Date available',
        'discount'                   => 'Discount',
        'images'                     => 'Images',
        'slug'                       => 'Slug',
        'status'                     => 'Status',
        'user_id'                    => 'User id',
        'user_type'                  => 'User type',
        'upload_folder'              => 'Upload folder',
        'created_at'                 => 'Created at',
        'updated_at'                 => 'Updated at',
        'deleted_at'                 => 'Deleted at',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'manufacturer_id'            => ['name' => 'Manufacturer id', 'data-column' => 1, 'checked'],
        'title'                      => ['name' => 'Title', 'data-column' => 2, 'checked'],
        'color'                      => ['name' => 'Color', 'data-column' => 3, 'checked'],
        'ean'                        => ['name' => 'Ean', 'data-column' => 4, 'checked'],
        'price'                      => ['name' => 'Price', 'data-column' => 5, 'checked'],
        'quantity'                   => ['name' => 'Quantity', 'data-column' => 6, 'checked'],
        'date_available'             => ['name' => 'Date available', 'data-column' => 7, 'checked'],
        'status'                     => ['name' => 'Status', 'data-column' => 8, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Products',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
