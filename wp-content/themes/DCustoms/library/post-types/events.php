<?php
defined('ABSPATH') || exit('Forbidden');

$args = [
    'labels' => [
        'name'          => __('Evenementen', '_SBB'),
        'singular_name' => __('Evenement', '_SBB'),
        'add_new_item'  => __('Voeg evenement toe', '_SBB'),
    ],

    'menu_position' => 22,
    'menu_icon'          => 'dashicons-tickets-alt',
    'public'      => true,
    'has_archive' => false,
    'supports'    => ['title', 'editor', 'thumbnail', 'excerpt'],
    'rewrite' => [
        'slug' => (site_url('', 'relative') === '/en') ? 'events' : 'evenementen'
    ],

    'show_in_rest' => false,
];

register_post_type('evenementen', $args);
