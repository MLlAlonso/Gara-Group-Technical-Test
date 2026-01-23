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
        time(),
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

// CPT: Testimonials
function velovita_testimonials_cpt() {
    $labels = [
        'name' => 'Testimonials',
        'singular_name' => 'Testimonial',
        'menu_name' => 'Testimonials',
        'add_new_item' => 'Add New Testimonial',
        'edit_item' => 'Edit Testimonial',
    ];

    $args = [
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true, // Gutenberg compatible
    ];

    register_post_type('testimonial', $args);
}
add_action('init', 'velovita_testimonials_cpt');


// CPT: Inquiries
function velovita_inquiries_cpt() {
    register_post_type('inquiry', [
        'labels' => [
            'name' => 'Inquiries',
            'singular_name' => 'Inquiry',
        ],
        'public' => false,
        'show_ui' => true,
        'menu_icon' => 'dashicons-email',
        'supports' => ['title', 'editor'],
    ]);
}
add_action('init', 'velovita_inquiries_cpt');


function velovita_handle_contact_form() {

    if (
        $_SERVER['REQUEST_METHOD'] !== 'POST' ||
        !isset($_POST['cf_email']) ||
        !wp_verify_nonce($_POST['velovita_contact_nonce'], 'velovita_contact')
    ) {
        return;
    }

    $name = sanitize_text_field($_POST['cf_name']);
    $email = sanitize_email($_POST['cf_email']);
    $message = sanitize_textarea_field($_POST['cf_message']);

    // Guardar en WP Admin
    wp_insert_post([
        'post_type' => 'inquiry',
        'post_title' => $name . ' – ' . $email,
        'post_content' => $message,
        'post_status' => 'publish',
    ]);

    // Email al admin
    wp_mail(
        get_option('admin_email'),
        'New Inquiry – Velovita',
        "Name: $name\nEmail: $email\n\n$message"
    );

    // Email al usuario (BONUS)
    wp_mail(
        $email,
        'We received your message',
        "Hi $name,\n\nThanks for contacting Velovita. We’ll get back to you shortly."
    );
}
add_action('init', 'velovita_handle_contact_form');

