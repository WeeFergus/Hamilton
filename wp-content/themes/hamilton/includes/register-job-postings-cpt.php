<?php

add_action( 'init', 'create_careers_post_type' );

function create_careers_post_type() {
register_post_type( 'job_postings',
  		array(
		    'labels' 			=> array(
		    	'name' 			=> __( 'Job Postings' ),
		      	'singular_name' => __( 'Job Posting' )
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