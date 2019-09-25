<?php

add_action( 'wp_enqueue_scripts', 'hamilton_enqueue_scripts', 99);

function hamilton_enqueue_scripts()
{
    $version = '0.1.0';
    $assets_dir = get_stylesheet_directory_uri() . '/assets';

    wp_enqueue_style( 'hamilton-theme-css', $assets_dir . '/dist/styles.min.css', array(), $version );

    wp_enqueue_script( 'hamilton-theme-js', $assets_dir . '/dist/javascript.min.js', array('jquery'), $version, true );
}