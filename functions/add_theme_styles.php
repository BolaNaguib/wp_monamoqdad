<?php
function add_enqueue_styles()
{
    wp_enqueue_style('google_font', 'https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;600;700&display=swap');
    // wp_enqueue_script('vendorJS', get_template_directory_uri() . '/assets/js/vendor/flickity.pkgd.min.js', array(), false, true);
    wp_enqueue_style('theme_style', get_template_directory_uri() . '/style.min.css', 1);
}


add_action('wp_enqueue_scripts', 'add_enqueue_styles', 10);
add_action('admin_enqueue_scripts', 'add_enqueue_styles', 10);
