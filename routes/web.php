<?php

// Resource routes  for category
Route::group(['prefix' => set_route_guard('web').'/ecommerce'], function () {
    Route::resource('category', 'CategoryResourceController');
});

// Public  routes for category
Route::get('category/popular/{period?}', 'CategoryPublicController@popular');
Route::get('ecommerces/', 'CategoryPublicController@index');
Route::get('ecommerces/{slug?}', 'CategoryPublicController@show');


// Resource routes  for brand
Route::group(['prefix' => set_route_guard('web').'/ecommerce'], function () {
    Route::resource('brand', 'BrandResourceController');
});

// Public  routes for brand
Route::get('brand/popular/{period?}', 'BrandPublicController@popular');
Route::get('ecommerces/', 'BrandPublicController@index');
Route::get('ecommerces/{slug?}', 'BrandPublicController@show');


// Resource routes  for product
Route::group(['prefix' => set_route_guard('web').'/ecommerce'], function () {
    Route::resource('product', 'ProductResourceController');
});

// Public  routes for product
Route::get('product/popular/{period?}', 'ProductPublicController@popular');
Route::get('ecommerces/', 'ProductPublicController@index');
Route::get('ecommerces/{slug?}', 'ProductPublicController@show');


// Resource routes  for review
Route::group(['prefix' => set_route_guard('web').'/ecommerce'], function () {
    Route::resource('review', 'ReviewResourceController');
});

// Public  routes for review
Route::get('review/popular/{period?}', 'ReviewPublicController@popular');
Route::get('ecommerces/', 'ReviewPublicController@index');
Route::get('ecommerces/{slug?}', 'ReviewPublicController@show');

