<?php
defined('ABSPATH') || exit('Forbidden');

$args = [
    'labels' => [
        'name'          => __('Bestuur', '_SBB'),
        'singular_name' => __('bestuurs lid', '_SBB'),
        'add_new_item'  => __('Nieuw bestuurslid', '_SBB'),
        'edit_item'     => __('Bestuurslid aanpassen', '_SBB'),
    ],

    'menu_position' => 22,
    'menu_icon'          => 'dashicons-businessperson',
    'public'      => true,
    'has_archive' => false,
    'supports'    => ['title', 'editor', 'thumbnail'],
    'rewrite' => [
        'slug' => (site_url('', 'relative') === '/en') ? 'board' : 'bestuur'
    ],
    'show_in_rest' => true,
];

register_post_type('bestuur', $args);

