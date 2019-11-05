<?php
/* Template Name: Calendar of Events */

remove_action( 'genesis_entry_header', 'genesis_do_post_section_title' );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_content_sidebar_wrap', 'haminc_page_title');
add_action('genesis_loop', 'haminc_do_career_loop');

function haminc_page_title() {
	$bkgndImg = get_field('header_background');
	echo '<div class="title-banner" style="background-image: url(' . $bkgndImg . ')">';
		echo '<div class="title-wrap">';
			echo '<h1>' . get_field('page_title') . '</h1>';
		echo '</div>';
	echo '</div>';
}

function haminc_do_career_loop() {
echo '<section class="events">';
if (get_field('intro_text')) {
	echo '<p>' . get_field('intro_text') . '</p>';
}
	$args = array(
		 'post_type' => 'events',
		 'posts_per_page' => '-1'
	);
	$query = new WP_Query($args);
	if ( $query->have_posts() ) :
	    while ( $query->have_posts() ) : $query->the_post(); ?>
	        <div class="event">
		       <div class="date">
			       <div class="num">
				       <?php the_field('start_date'); ?>
			       </div>
			       <div class="month">
				       <?php the_field('month'); ?>
			       </div>
		       </div>
		       <div class="details">
			       <h2><?php the_title($post->ID);?></h2>
			       <?php

						echo '<span>' . get_field('month') . '</span>';
						echo ' ';
						echo the_field('start_date');

				   		if(get_field('end_date')) {
					   		echo ' - ' . get_field('end_date') . ', ' . get_field('year');
				   		} else {
					   		echo the_field('year');
					   	}
					   	if(get_field('address')) {
						   	echo '<br />';
						   	echo the_field('address');
						   	echo '<br/>';
						}
						if(get_field('city_state')) {
						   	echo ' ';
						   	echo the_field('city_state');
						}?>
				</div>
				<div class="map">
					<?php echo the_field('map_embed'); ?>
				</div>
	        </div>
	        <?php endwhile; wp_reset_postdata();
			else :
			echo 'There are no upcoming events. Please check again soon.';
	endif;
echo '</section>';


}
genesis();