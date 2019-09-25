<?php

remove_theme_support( 'genesis-structural-wraps' );
remove_theme_support( 'genesis-inpost-layouts' );
remove_action( 'admin_menu', 'genesis_add_inpost_seo_box' );

add_theme_support( 'html5' );
add_theme_support( 'genesis-responsive-viewport');
add_theme_support( 'genesis-menus', array( 'primary' => __( 'Primary Navigation Menu', 'genesis' ) ) );
// add_theme_support( 'woocommerce' );
