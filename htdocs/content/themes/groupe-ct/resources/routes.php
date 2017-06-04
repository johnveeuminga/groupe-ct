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
Route::any('page', 'HomeController@blocs');
//Route::any('singular', ['recette' , 'uses' => 'HomeController@recipe_single']);
//Route::any('postTypeArchive', ['recette' , 'uses' => 'HomeController@recipe_list']);
//Route::any('template', ['legal-notice' , 'uses' => 'HomeController@legal_notice']);



