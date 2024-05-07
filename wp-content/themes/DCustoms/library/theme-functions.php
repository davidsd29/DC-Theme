<?php
/**
 * Block usage if file is called directly.
 */
defined('ABSPATH') || exit('Forbidden');

function dc_get_fucntions() {
    $functions_path = get_template_directory() . '/functions/';

    $php_files = glob( $functions_path . '*.php' );

    foreach ( $php_files as $php_file ) {
        require_once $php_file;
    }
}

add_action( 'after_setup_theme', 'dc_get_fucntions' );