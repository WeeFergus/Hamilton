<?php

/*
 * Disabled Gutenberg Completely for WP 4.1 or Later.
 */
add_filter('use_block_editor_for_post', '__return_false');

/*
 * Disables Gutenberg for Older versions of WP
 */
// add_filter('gutenberg_can_edit_post_type', '__return_false');


/*
 * This can be used to disable Gutenberg for Specific CPT's.
 */
// add_filter('use_block_editor_for_post_type', 'hamilton_disable_gutenberg_by_cpt', 10, 2);
function hamilton_disable_gutenberg_by_cpt( $is_enabled, $post_type ) 
{
	if ($post_type === 'book') return false; // change book to your post type
	return $is_enabled;
}