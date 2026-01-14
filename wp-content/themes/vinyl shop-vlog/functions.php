<?php

function myshop_setup() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'myshop_setup');

function myshop_assets() {
    wp_enqueue_style('myshop-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'myshop_assets');
