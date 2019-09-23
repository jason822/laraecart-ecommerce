<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for review in ecommerce package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  review module in ecommerce package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Review',
    'names'         => 'Reviews',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Reviews',
        'sub'   => 'Reviews',
        'list'  => 'List of reviews',
        'edit'  => 'Edit review',
        'create'    => 'Create new review'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'status'              => ['Show','Hide'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'product_id'                 => 'Please enter product id',
        'author_name'                => 'Please enter author name',
        'author_email'               => 'Please enter author email',
        'author_phone'               => 'Please enter author phone',
        'review'                     => 'Please enter review',
        'rating'                     => 'Please enter rating',
        'status'                     => 'Please select status',
        'created_at'                 => 'Please select created at',
        'updated_at'                 => 'Please select updated at',
        'deleted_at'                 => 'Please select deleted at',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'product_id'                 => 'Product id',
        'author_name'                => 'Author name',
        'author_email'               => 'Author email',
        'author_phone'               => 'Author phone',
        'review'                     => 'Review',
        'rating'                     => 'Rating',
        'status'                     => 'Status',
        'created_at'                 => 'Created at',
        'updated_at'                 => 'Updated at',
        'deleted_at'                 => 'Deleted at',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'product_id'                 => ['name' => 'Product id', 'data-column' => 1, 'checked'],
        'author_name'                => ['name' => 'Author name', 'data-column' => 2, 'checked'],
        'author_email'               => ['name' => 'Author email', 'data-column' => 3, 'checked'],
        'author_phone'               => ['name' => 'Author phone', 'data-column' => 4, 'checked'],
        'review'                     => ['name' => 'Review', 'data-column' => 5, 'checked'],
        'rating'                     => ['name' => 'Rating', 'data-column' => 6, 'checked'],
        'status'                     => ['name' => 'Status', 'data-column' => 7, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Reviews',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
