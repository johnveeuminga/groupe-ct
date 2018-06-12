<?php

/**
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */


Route::any('front', 'PageController@index');
Route::get('singular', ['job_offer', 'uses' => 'LightboxController@job_offer']);
Route::get('singular', ['product', 'uses' => 'ProductController@single']);

/**
 * Custom WooCommerce product brand and product type route.
 * i.e(/product/hp/printers).
 */
Route::get('products/brand/{brand}/{product_type}', 'ProductController@getProductsWithBrandType');
Route::get('product-category/{product_cat}', 'ProductController@productSubCat');


Route::any('template', [
    'page-2-1',
    'uses' => 'PageController@page_2_1'
]);
Route::any('template', [
    'page-2-2',
    'uses' => 'PageController@page_2_2'
]);
Route::get('single', [
    874,
    'uses' => 'PageController@page_2_2'
]);
Route::any('template', [
    'page-2-3',
    'uses' => 'PageController@page_2_3'
]);
Route::any('template', [
    'page-3-0',
    'uses' => 'PageController@page_3_0'
]);
Route::any('template', [
    'post-list',
    'uses' => 'PageController@publication_list'
]);

Route::any('page', 'PageController@index');
Route::get('single', 'PageController@publication');



