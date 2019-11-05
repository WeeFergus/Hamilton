<?php
genesis_register_sidebar( array(
    'id'            => 'woo_primary_sidebar',
    'name'          => __( 'Woocommerce Sidebar', 'chronos' ),
    'description' => __( 'WooCommerce sidebar', 'chronos' ),
) );

add_action( 'genesis_before', 'tower_add_woo_sidebar', 20 );

function tower_add_woo_sidebar() {
        if( is_shop() || is_product_category()) {
            remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
            remove_action( 'genesis_sidebar_alt', 'genesis_do_sidebar_alt' );
            add_action( 'genesis_sidebar', 'tower_woo_sidebar' );
        }
    }

function tower_woo_sidebar() {
    if ( ! dynamic_sidebar( 'woo_primary_sidebar' ) && current_user_can( 'edit_theme_options' )  ) {
        genesis_default_widget_area_content( __( 'WooCommerce Primary Sidebar', 'genesis' ) );
    }
}