<?php

/**
 * Define WordPress actions for your theme.
 *
 * Based on the WordPress action hooks.
 * https://developer.wordpress.org/reference/hooks/
 *
 */

/**
 * Handle Browser Sync.
 *
 * The framework loads by default the local environment
 * where the constant BS (Browser Sync) is defined to true for development purpose.
 *
 * Note: make sure to update the script statement below based on the terminal/console message
 * when launching the "gulp watch" task.
 */


add_filter('show_admin_bar', '__return_false');