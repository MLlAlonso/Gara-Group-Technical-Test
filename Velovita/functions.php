<?php

function velovita_assets()
{
    // CSS
    wp_enqueue_style(
        'velovita-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        filemtime(get_template_directory() . '/assets/css/main.css')
    );

    // JS
    wp_enqueue_script(
        'velovita-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'velovita_assets');

function velovita_menus()
{
    register_nav_menus([
        'primary' => 'Primary Menu',
    ]);
}
add_action('after_setup_theme', 'velovita_menus');
