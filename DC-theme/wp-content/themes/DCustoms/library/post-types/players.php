<?php
defined('ABSPATH') || exit('Forbidden');

$args = [
    'labels' => [
        'name'          => __('Spelers', '_SBB'),
        'singular_name' => __('speler', '_SBB'),
        'add_new_item'  => __('Voeg speler toe', '_SBB'),
        'edit_item'     => __('Bewerk speler', '_SBB'),

    ],

    'menu_position' => 22,
    'menu_icon'          => 'dashicons-universal-access',
    'public'      => true,
    'has_archive' => false,
    'supports'    => ['title', 'editor', 'thumbnail'],
    'rewrite' => [
        'slug' => (site_url('', 'relative') === '/en') ? 'players' : 'spelers'
    ],
    'show_in_rest' => true,
];

register_post_type('spelers', $args);

