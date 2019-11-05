<?php
/* Template Name: Hamilton Default Page */

remove_action( 'genesis_entry_header', 'genesis_do_post_section_title' );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_content_sidebar_wrap', 'haminc_page_title');
add_action('genesis_loop', 'haminc_default_loop');

function haminc_page_title() {
	$bkgndImg = get_field('header_background');
	echo '<div class="title-banner" style="background-image: url(' . $bkgndImg . ')">';
		echo '<div class="title-wrap">';
			echo '<h1>' . get_field('page_title') . '</h1>';
		echo '</div>';
	echo '</div>';
}

function haminc_default_loop() {
	echo '<section class="hot-deals">';
	the_field('content');
	echo '</section>';
}
genesis();
