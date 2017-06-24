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

Route::any('singular', ['job_offer', 'uses' => 'LightboxController@job_offer']);

Route::any('single', 'PageController@publication');
Route::any('postTypeArchive', ['publications' , 'uses' => 'PageController@publication_list']);
