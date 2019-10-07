<?php

add_action( 'wp_enqueue_scripts', 'hamilton_enqueue_scripts', 99);

function hamilton_enqueue_scripts()
{
    $version = '0.1.0';
    $assets_dir = get_stylesheet_directory_uri() . '/assets';

    wp_enqueue_style( 'hamilton-theme-css', $assets_dir . '/dist/styles.min.css', array(), $version );

    wp_enqueue_script( 'hamilton-theme-js', $assets_dir . '/dist/javascript.min.js', array('jquery'), $version, true );

    wp_enqueue_style('add-fontawesome', 'https://use.fontawesome.com/releases/v5.0.7/css/all.css');

    wp_enqueue_style( 'poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700,900&display=swap',false );

	wp_enqueue_script( 'slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), time(), true );

	wp_enqueue_style( 'slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' );

}