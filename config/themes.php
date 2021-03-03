<?php

return [
    'default' => 'default',

    'themes' => [
        'default' => [
            'views_path' => 'resources/themes/default/views',
            'assets_path' => 'public/themes/default/assets',
            'name' => 'Default'
        ],

        // 'bliss' => [
        //     'views_path' => 'resources/themes/bliss/views',
        //     'assets_path' => 'public/themes/bliss/assets',
        //     'name' => 'Bliss',
        //     'parent' => 'default'
        // ]

        'tva' => [
            'views_path' => 'resources/themes/tva/views',
            'assets_path' => 'public/themes/tva/assets',
            'name' => 'Tva',
            'parent' => 'default'
        ],
    ]
];