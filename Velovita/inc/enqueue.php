<?php

function velovita_enqueue_assets() {

  wp_enqueue_style(
    'velovita-styles',
    get_template_directory_uri() . '/assets/css/main.css',
    [],
    filemtime(get_template_directory() . '/assets/css/main.css')
  );

  wp_enqueue_script(
    'velovita-main',
    get_template_directory_uri() . '/assets/js/main.js',
    [],
    filemtime(get_template_directory() . '/assets/js/main.js'),
    true
  );

}

add_action('wp_enqueue_scripts', 'velovita_enqueue_assets');
