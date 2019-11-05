<?php

add_action( 'init', 'create_events_post_type' );

function create_events_post_type() {
register_post_type( 'jevents',
  		array(
		    'labels' 			=> array(
		    	'name' 			=> __( 'Events' ),
		      	'singular_name' => __( 'Event' )
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
		    'menu_icon'     	=> 'dashicons-calendar',
            'menu_position' 	=> 25
  		)
	);
}