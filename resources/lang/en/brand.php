<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for brand in ecommerce package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  brand module in ecommerce package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Brand',
    'names'         => 'Brands',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Brands',
        'sub'   => 'Brands',
        'list'  => 'List of brands',
        'edit'  => 'Edit brand',
        'create'    => 'Create new brand'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'status'              => ['show','hide'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'name'                       => 'Please enter name',
        'slug'                       => 'Please enter slug',
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
        'name'                       => 'Name',
        'slug'                       => 'Slug',
        'status'                     => 'Status',
        'created_at'                 => 'Created at',
        'updated_at'                 => 'Updated at',
        'deleted_at'                 => 'Deleted at',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'name'                       => ['name' => 'Name', 'data-column' => 1, 'checked'],
        'status'                     => ['name' => 'Status', 'data-column' => 2, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Brands',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
