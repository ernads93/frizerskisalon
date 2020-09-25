<?php
    function frizerskisalon_resources() {
        wp_enqueue_style('style', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'frizerskisalon_resources');

    // This theme uses post thumbnails
    add_theme_support( 'post-thumbnails' );