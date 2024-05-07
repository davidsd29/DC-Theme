<?php
defined('ABSPATH') || exit('Forbidden');

$args = [
    'labels' => [
        'name'          => __('Teams', '_SBB'),
        'singular_name' => __('Team', '_SBB'),
    ],

    'public'       => false,
    'show_ui'      => true,
    'show_admin_column' => true,
    'rewrite'      => false,
    'hierarchical' => true,
    'show_in_rest' => true,
];

register_taxonomy(
    'teams',
    [
        'spelers',
        'coaches',
        'teams',
    ],
    $args
);
