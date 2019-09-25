<?php

add_action( 'login_enqueue_scripts', 'hamilton_enqueue_login_styles' );

function hamilton_enqueue_login_styles()
{	
	$version = '1.0';
	$assets_dir = get_stylesheet_directory_uri() . '/assets';

    wp_enqueue_style( 'hamilton-login', $assets_dir . '/dist/admin.min.css', array() );
}
