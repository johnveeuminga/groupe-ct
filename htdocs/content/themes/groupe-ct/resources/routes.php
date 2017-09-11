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
Route::any('template', [
    'page-2-1',
    'uses' => 'PageController@page_2_1'
]);
Route::any('template', [
    'page-2-2',
    'uses' => 'PageController@page_2_2'
]);
Route::any('single', [
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
Route::any('singular', ['job_offer', 'uses' => 'LightboxController@job_offer']);
Route::any('single', 'PageController@publication');

