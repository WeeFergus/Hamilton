<?php

add_action( 'init', 'create_partner_post_type' );

function create_partner_post_type() {
register_post_type( 'partners',
  		array(
		    'labels' 			=> array(
		    	'name' 			=> __( 'Partners' ),
		      	'singular_name' => __( 'Partner' )
		    ),
		    'public' 			=> true,
		    'has_archive' 		=> true,
		    'show_ui'			=> true,
		    'exclude_from_search' => true,
		    'show_in_nav_menus' => true,
		    'supports' 			=> array( 'title', 'editor', 'thumbnail' ),
		    'rewrite'       	=> array(
		      	'with_front'  	=> false,
		    ),
		    'menu_icon'     	=> 'dashicons-groups',
            'menu_position' 	=> 25
  		)
	);
}