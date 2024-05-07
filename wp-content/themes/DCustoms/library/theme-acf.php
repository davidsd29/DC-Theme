<?php
/**
 * Block usage if file is called directly.
 */
defined('ABSPATH') || exit('Forbidden');

if (class_exists('ACF')) {
    require get_template_directory() . '/library/acf/auto-finder.php';
}
