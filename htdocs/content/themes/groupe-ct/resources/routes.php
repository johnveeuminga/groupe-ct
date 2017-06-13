<?php

/**
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */

Route::any('front', 'HomeController@index');
Route::get('/components', 'HomeController@blocs');
Route::any('page', 'PageController@index');

Route::any('page', 'PageController@publication');
Route::any('postTypeArchive', ['publications' , 'uses' => 'PageController@publication_list']);
