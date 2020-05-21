<?php

function vocalnexus_files() {
    wp_enqueue_script('marquee', get_theme_file_uri('/js/marquee.js'), NULL, '1.0', true);
    wp_enqueue_style('vocalnexus_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'vocalnexus_files');

function vocalnexus_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
}

add_action('after_setup_theme', 'vocalnexus_features');