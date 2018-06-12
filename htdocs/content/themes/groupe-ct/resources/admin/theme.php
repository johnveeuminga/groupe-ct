<?php

use Theme\WooCommerce\ProductBrands;
use Theme\WooCommerce\ProductFilters;

header("Access-Control-Allow-Origin: *");

/**
 * Define your theme custom code.
 */

/**
 * Register Product Brands Custom post type
 */
$product_brands = new ProductBrands();
$product_brands->init();

$product_filters = new ProductFilters();
$product_filters->init();
