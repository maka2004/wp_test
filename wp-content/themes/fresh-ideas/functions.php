<?php
    function my_style_load() {
        $theme_uri = get_template_directory_uri();
        wp_register_style('my_theme_style', $theme_uri.'/css/styles.css', false, '0.1');
        wp_enqueue_style('my_theme_style');
    }

    add_action('wp_enqueue_scripts', 'my_style_load');

    function mytheme_scripts_styles() {
        wp_enqueue_style('mytheme-style', get_stylesheet_uri(), array(), '1.0.0');
        wp_enqueue_script('mytheme-script', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
    }

    add_action( 'wp_enqueue_scripts', 'mytheme_scripts_styles' );

    function get_theme_path() {
        echo get_template_directory_uri().'/';
    }