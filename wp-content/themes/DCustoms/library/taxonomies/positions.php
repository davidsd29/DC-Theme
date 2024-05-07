<?php
defined('ABSPATH') || exit('Forbidden');

$args = [
    'labels' => [
        'name'          => __('Posities', '_SBB'),
        'singular_name' => __('Positie', '_SBB'),
    ],

    'public'       => false,
    'show_ui'      => true,
    'show_admin_column' => true,
    'rewrite'      => false,
    'hierarchical' => true,
    'show_in_rest' => true,
];

register_taxonomy(
    'positions',
    [
        'spelers',
    ],
    $args
);
