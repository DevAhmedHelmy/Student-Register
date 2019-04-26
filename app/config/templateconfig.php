<?php
return[
    'template' => [
        'wrapper_star'  => TEMPLATE_PATH .  DS .'wrapperstart.php',

        'nav'           => TEMPLATE_PATH . DS  .'nav.php',
//        'header'        => TEMPLATE_PATH . DS  .'header.php',
        ':view'         => ':action_view',
        'wrapper_end'   => TEMPLATE_PATH .  DS .'wrapperend.php',
    ],
    'header_resources' => [
        'css' =>
            [
                'bootstrap'      => CSS . 'bootstrap.min.css',
                'font-awesome'   => CSS . 'font-awesome.min.css',
                'sb-admin'       => CSS . 'sb-admin.css',
                'morris'         => CSS . 'plugins/morris.css',
                'main'           => CSS .   'main.css'
            ],
        'js' =>
        [
                'modernizr'       => JS . 'vendor/modernizr-2.8.3.min.js'
        ]
    ],
    'footer_resources' =>
    [
        'jquery'          => JS . 'vendor/jquery.js',
        'bootstrap'       => JS . 'bootstrap.min.js',
        'raphael'         => JS . 'plugins/morris/raphael.min.js',
        'morris'          => JS . 'plugins/morris/morris.min.js',
        'morris-data'     => JS . 'plugins/morris/morris-data.js',
        'datatablesar'    => JS . 'datatablesar.js',
        'helper'          => JS . 'helper.js' ,
        'main'            => JS . 'main.js'
    ]
];