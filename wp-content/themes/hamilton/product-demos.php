<?php
/* Template Name: Product Demos */

remove_action( 'genesis_entry_header', 'genesis_do_post_section_title' );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_content_sidebar_wrap', 'haminc_page_title');
add_action('genesis_loop', 'haminc_demos');

function haminc_page_title() {
	$bkgndImg = get_field('header_background');
	echo '<div class="title-banner" style="background-image: url(' . $bkgndImg . ')">';
		echo '<div class="title-wrap">';
			echo '<h1>' . get_field('page_title') . '</h1>';
		echo '</div>';
	echo '</div>';
}

function haminc_demos() {
	echo '<section class="demos">';
		if( have_rows('demo_videos') ):
		    while ( have_rows('demo_videos') ) : the_row();
		    echo '<div class="video-title-wrap">';
				echo '<div class="embed-container">';
					the_sub_field('video_url');
				echo '</div>';
				echo the_sub_field('video_name');
			echo '</div>';
		    endwhile;
		else :
		endif;
	echo '</section>';
}
genesis();
