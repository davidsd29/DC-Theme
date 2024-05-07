<?php
defined('ABSPATH') || exit('Forbidden');

$args = [
    'labels' => [
        'name'          => __('Coaches', '_SBB'),
        'singular_name' => __('Coach', '_SBB'),
        'add_new_item'  => __('Nieuwe coach', '_SBB'),
        'edit_item'     => __('Bewerk coach', '_SBB'),
    ],

    'menu_position' => 22,
    'menu_icon'          => 'dashicons-admin-users',
    'public'      => true,
    'has_archive' => false,
    'supports'    => ['title', 'editor', 'thumbnail'],
    'rewrite' => [
        'slug' => (site_url('', 'relative') === '/en') ? 'coach' : 'coach'
    ],
    'show_in_rest' => true,
];

register_post_type('coaches', $args);

