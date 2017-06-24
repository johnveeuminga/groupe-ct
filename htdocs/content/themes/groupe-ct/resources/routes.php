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
Route::any('page', 'PageController@index');

Route::any('single', ['publications', 'uses' => 'PageController@publication']);
Route::any('postTypeArchive', ['publications' , 'uses' => 'PageController@publication_list']);

Route::any('single', ['job_offer', 'uses' => 'PageController@job_offer']);