<?php
/**
 * Block usage if file is called directly.
 */
defined('ABSPATH') || exit('Forbidden');


/**
 * Here i will register my custom post-type that will be used throughout the wp website
 */

function dc_post_init(): void {
    require_once get_template_directory() . '/library/post-types/auto-finder.php';
}
add_action('init', 'dc_post_init', 10, 0);


/**
 * Here i will register my custom taxonomies that will be used throughout the wp website
 */

function dc_taxonomies_init(): void {
    require_once get_template_directory() . '/library/taxonomies/auto-finder.php';
}
add_action('init', 'dc_taxonomies_init', 10, 0);