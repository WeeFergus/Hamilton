<?php
// Composer
require_once( get_stylesheet_directory() . '/vendor/autoload.php' );
if (!defined( 'HAMILTON_THEME_HEX')) {
	define( 'HAMILTON_THEME_HEX', "#82bd41" );
}

add_action( 'genesis_setup', 'tower_load_include_files', 15 );

function hamilton_load_include_files()
{
    foreach ( glob( dirname( __FILE__ ) . '/includes/*.php' ) as $file ) { include $file; }
}
