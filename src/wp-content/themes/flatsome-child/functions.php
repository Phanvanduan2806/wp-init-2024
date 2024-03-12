<?php
require_once 'includes/custom-flatsome.php';
require_once 'includes/disable-comment.php';
require_once 'includes/restore-updraftplus.php';

define("WP_FLATSOME_ASSET_VERSION", time());
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'c-home-css', get_stylesheet_directory_uri() . '/assets/css/c-home.css', [], WP_FLATSOME_ASSET_VERSION );
    wp_enqueue_style( 'c-media-queries-css', get_stylesheet_directory_uri() . '/assets/css/c-media-queries.css', [], WP_FLATSOME_ASSET_VERSION );
}, 999);

add_action( 'wp_footer', function () {
     wp_enqueue_script( 'c-home-js', get_stylesheet_directory_uri() . '/assets/js/c-home.js', [], WP_FLATSOME_ASSET_VERSION );
});

