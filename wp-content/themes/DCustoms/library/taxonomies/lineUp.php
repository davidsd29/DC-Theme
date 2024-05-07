<?php
defined('ABSPATH') || exit('Forbidden');

$args = [
    'labels' => [
        'name'          => __('Opstelling', '_SBB'),
        'singular_name' => __('opstelling', '_SBB'),
    ],

    'public'       => false,
    'show_ui'      => true,
    'show_admin_column' => true,
    'rewrite'      => false,
    'hierarchical' => true,
    'show_in_rest' => true,
];

register_taxonomy(
    'lineUp',
    [
        'speler',
        'coaches',
    ],
    $args
);
