<?php
defined('ABSPATH') || exit('Forbidden');

$args = [
    'labels' => [
        'name'          => __('Teams', '_SBB'),
        'singular_name' => __('team', '_SBB'),
        'add_new_item'  => __('Voeg team toe', '_SBB'),
        'edit_item'     => __('Bewerk team', '_SBB'),
    ],

    'menu_position' => 22,
    'menu_icon'          => 'dashicons-groups',
    'public'      => true,
    'has_archive' => false,
    'supports'    => ['title', 'editor', 'thumbnail'],
    'rewrite' => [
        'slug' => (site_url('', 'relative') === '/en') ? 'teams' : 'teams'
    ],
    'show_in_rest' => true,
];

register_post_type('teams', $args);
