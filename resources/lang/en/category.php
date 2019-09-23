<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for category in ecommerce package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  category module in ecommerce package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Category',
    'names'         => 'Categories',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Categories',
        'sub'   => 'Categories',
        'list'  => 'List of categories',
        'edit'  => 'Edit category',
        'create'    => 'Create new category'
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
        'parent_id'                  => 'Please enter parent id',
        'nest_left'                  => 'Please enter nest left',
        'nest_right'                 => 'Please enter nest right',
        'nest_depth'                 => 'Please enter nest depth',
        'discription'                => 'Please enter discription',
        'type'                       => 'Please enter type',
        'slug'                       => 'Please enter slug',
        'meta_tag'                   => 'Please enter meta tag',
        'meta_keyword'               => 'Please enter meta keyword',
        'status'                     => 'Please select status',
        'sort_order'                 => 'Please enter sort order',
        'image'                      => 'Please enter image',
        'user_id'                    => 'Please enter user id',
        'user_type'                  => 'Please enter user type',
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
        'parent_id'                  => 'Parent id',
        'nest_left'                  => 'Nest left',
        'nest_right'                 => 'Nest right',
        'nest_depth'                 => 'Nest depth',
        'discription'                => 'Discription',
        'type'                       => 'Type',
        'slug'                       => 'Slug',
        'meta_tag'                   => 'Meta tag',
        'meta_keyword'               => 'Meta keyword',
        'status'                     => 'Status',
        'sort_order'                 => 'Sort order',
        'image'                      => 'Image',
        'user_id'                    => 'User id',
        'user_type'                  => 'User type',
        'created_at'                 => 'Created at',
        'updated_at'                 => 'Updated at',
        'deleted_at'                 => 'Deleted at',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'name'                       => ['name' => 'Name', 'data-column' => 1, 'checked'],
        'parent_id'                  => ['name' => 'Parent id', 'data-column' => 2, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Categories',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
