<?php

defined('ABSPATH') || exit('Forbidden');

acf_add_options_page([
    'page_title' => __('Thema instellingen', '_SBB'),
    'menu_title' => __('Thema instellingen', '_SBB'),
    'menu_slug'  => 'theme_settings',
    'position'   => 3,
]);

acf_add_local_field_group([
    'key'    => 'theme_settings',
    'title'  => __('Thema instellingen', '_SBB'),
    'fields' => [
        [
            'key'   => 'theme_settings_logo_tab',
            'label' => __('Algemene instellingen', '_SBB'),
            'type'  => 'tab',
            'placement' => 'left',
        ],

        [
            'key'           => 'theme_settings_logo',
            'name'          => 'logo',
            'label'         => __('Logo', '_SBB'),
            'type'          => 'image',
            'instructions'  => __('Voeg hier het logo toe', '_SBB'),
            'mime_types'    => 'svg, png, jpg',
            'return_format' => 'id',
        ],

        [
            'key' => 'theme_settings_info',
            'label' => __('Informatie', '_SBB'),
            'name' => 'company_info',
            'type' => 'repeater',
            'layout' => 'block',
            'sub_fields' => [
                [
                    'key' => 'theme_settings_info_icon',
                    'label' => __('Icoon', '_SBB'),
                    'name' => 'icon',
                    'type'      => 'font-awesome',
                    'icon_sets' => [
                        'fab',
                        'fas',
                        'far',
                        'fal',
                    ],
                ],

                [
                    'key' => 'theme_settings_info_content',
                    'label' => __('Inhoud', '_SBB'),
                    'name' => 'content',
                    'type' => 'wysiwyg',
                ]
            ],
        ],

        [
            'key'   => 'theme_settings_socials_tab',
            'label' => __('Social media', '_SBB'),
            'type'  => 'tab',
        ],

        [
            'key'        => 'theme_settings_socials_repeater',
            'label'      => __('Social media instellingen', '_SBB'),
            'name'       => 'socials',
            'type'       => 'repeater',
            'sub_fields' => [
                [
                    'key'       => 'theme_settings_socials_icon',
                    'name'      => 'icon',
                    'label'     => __('Icoon', '_SBB'),
                    'type'      => 'font-awesome',
                    'icon_sets' => [
                        'fab',
                        'fas',
                        'far',
                        'fal',
                    ],
                    'instructions' => __('Voeg hier het social media icoon toe', '_SBB'),
                ],
                [
                    'key'          => 'theme_settings_socials_link',
                    'name'         => 'link',
                    'label'        => __('Link', '_SBB'),
                    'type'         => 'link',
                    'instructions' => __('Voeg hier de link naar het social media kanaal toe', '_SBB'),
                ],
            ],
        ],

        [
            'key'   => 'theme_settings_footer',
            'label' => __('Footer', '_SBB'),
            'type'  => 'tab',
        ],

        [
            'key' => 'theme_settings_footer_bot_links',
            'label' => __('Algemene voorwaarden links', '_SBB'),
            'type' => 'repeater',
            'layout' => 'block',
            'name' => 'footer_bot_links',
            'sub_fields' => [
                [
                    'key' => 'theme_settings_footer_bot_links_link',
                    'label' => __('Link', '_SBB'),
                    'name' => 'link',
                    'type' => 'link',
                ]
            ],
        ],

        [
            'key' => 'theme_settings_footer_sitemap',
            'label' => __('Sitemap', '_SBB'),
            'name' => 'sitemap_group',
            'type' => 'group',
            'sub_fields' => [
                [
                    'key' => 'theme_settings_footer_sitemap_title',
                    'label' => __('Titel', '_SBB'),
                    'name' => 'title',
                    'type' => 'text',
                ],

                [
                    'key' => 'theme_settings_footer_sitemap_list_one',
                    'label' => __('Lijst 1', '_SBB'),
                    'name' => 'list_one',
                    'type' => 'repeater',
                    'layout' => 'block',
                    'sub_fields' => [
                        [
                            'key' => 'theme_settings_footer_sitemap_list_one_link',
                            'label' => __('Link', '_SBB'),
                            'name' => 'link',
                            'type' => 'link',
                        ]
                    ],
                ],

                [
                    'key' => 'theme_settings_footer_sitemap_list_two',
                    'label' => __('Lijst 2', '_SBB'),
                    'name' => 'list_two',
                    'type' => 'repeater',
                    'layout' => 'block',
                    'sub_fields' => [
                        [
                            'key' => 'theme_settings_footer_sitemap_list_two_link',
                            'label' => __('Link', '_SBB'),
                            'name' => 'link',
                            'type' => 'link',
                        ]
                    ],
                ]
            ],
        ],

        // [
        //     'key' => 'theme_settings_footer_newsletter',
        //     'label' => __('Nieuwsbrief', '_SBB'),
        //     'name' => 'newsletter_group',
        //     'type' => 'group',
        //     'sub_fields' => [
        //         [
        //             'key' => 'theme_settings_footer_newsletter_title',
        //             'label' => __('Titel', '_SBB'),
        //             'name' => 'title',
        //             'type' => 'text',
        //         ],

        //         [
        //             'key' => 'theme_settings_footer_newsletter_content',
        //             'label' => __('Inhoud', '_SBB'),
        //             'name' => 'content',
        //             'type' => 'wysiwyg',
        //         ],

        //         [
        //             'key' => 'theme_settings_footer_newsletter_link',
        //             'label' => __('Link', '_SBB'),
        //             'name' => 'link',
        //             'type' => 'link',
        //         ],
        //     ],
        // ],

        [
            'key'   => 'theme_settings_events',
            'label' => __('Evenementen instellingen', '_SBB'),
            'type'  => 'tab',
            'placement' => 'left',
        ],

        [
            'key' => 'theme_settings_events_no_posts_title',
            'label' => __('Geen evenementen gevonden titel', '_SBB'),
            'type' => 'text',
            'name' => 'events_title',
        ],

        [
            'key' => 'theme_settings_events_no_posts_content',
            'label' => __('Geen evenementen gevonden inhoud', '_SBB'),
            'type' => 'wysiwyg',
            'name' => 'events_content',
        ],

        [
            'key'   => 'theme_settings_addresses_information_tab',
            'label' => __('Adressen', '_SBB'),
            'type'  => 'tab',
            'placement' => 'left',
        ],

        [
            'key' => 'theme_settings_addresses_information_title',
            'label' => __('Titel', '_SBB'),
            'type' => 'text',
            'name' => 'information_title',
        ],

        [
            'key' => 'theme_settings_addresses_information',
            'label' => __('Globaal', '_SBB'),
            'type' => 'repeater',
            'name' => 'information',
            'sub_fields' => [
                [
                    'key' => 'theme_settings_addresses_information_icon',
                    'label' => __('Icoon', '_SBB'),
                    'name' => 'icon',
                    'type' => 'font-awesome',
                    'icon_sets' => ['fab', 'fas', 'far', 'fal',],
                ],

                [
                    'key' => 'theme_settings_addresses_information_text',
                    'label' => __('Tekst', '_SBB'),
                    'name' => 'text',
                    'type' => 'text',
                ]

            ],
        ],

        [
            'key' => 'theme_settings_addresses_information_addresses',
            'label' => __('Adressen', '_SBB'),
            'type' => 'repeater',
            'name' => 'addresses',
            'sub_fields' => [
                [
                    'key' => 'theme_settings_addresses_information_addresses_title',
                    'label' => __('Title', '_SBB'),
                    'name' => 'title',
                    'type' => 'text',
                ],

                [
                    'key' => 'theme_settings_addresses_information_addresses_text',
                    'label' => __('Content', '_SBB'),
                    'name' => 'content',
                    'type' => 'wysiwyg',
                ]

            ],
        ],

        [
            'key'   => 'theme_settings_search_tab',
            'label' => __('Zoek instellingen', '_SBB'),
            'type'  => 'tab',
            'placement' => 'left',
        ],

        [
            'key' => 'theme_settings_search_settings_image',
            'label' => __('Header afbeelding voor de zoekpagina', '_SBF'),
            'name' => 'search_image',
            'type' => 'image',
        ],

        [
            'key' => 'theme_settings_search_settings_title',
            'label' => __('Header titel voor de zoekpagina', '_SBF'),
            'name' => 'search_title',
            'type' => 'wysiwyg',
            'toolbar' => 'italic',
        ],

    ],
    'location' => [
        [
            [
                'param'    => 'options_page',
                'operator' => '==',
                'value'    => 'theme_settings',
            ],
        ],
    ],
]);
