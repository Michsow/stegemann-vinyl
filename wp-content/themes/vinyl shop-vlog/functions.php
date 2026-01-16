<?php

function myshop_setup() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'myshop_setup');

function myshop_assets() {
    wp_enqueue_style('myshop-style', get_stylesheet_uri());
    wp_enqueue_script('jsReg-Sign', get_template_directory_uri() . '/js/jsReg-Sign.js', array('jquery'), '1.0', true);
    wp_localize_script('jsReg-Sign', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'myshop_assets');
require_once get_template_directory() . '/assets/auth-ajax.php';
add_theme_support('post-thumbnails');
add_image_size('custom-size', 300, 300, true);
