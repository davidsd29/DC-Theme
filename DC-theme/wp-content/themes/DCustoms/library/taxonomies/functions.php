<?php
defined('ABSPATH') || exit('Forbidden');

$args = [
    'labels' => [
        'name'          => __('Functies', '_SBB'),
        'singular_name' => __('Functie', '_SBB'),
    ],

    'public'       => false,
    'show_ui'      => true,
    'show_admin_column' => true,
    'rewrite'      => false,
    'hierarchical' => true,
    'show_in_rest' => true,
];

register_taxonomy(
    'functions',
    [
        'bestuur',
    ],
    $args
);
