<?php
/* Template Name: Careers */

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
echo '<section class="careers">';
	$args = array(
		 'post_type' => 'job_postings',
		 'posts_per_page' => '-1'
	);
	$query = new WP_Query($args);
	if ( $query->have_posts() ) :
	    while ( $query->have_posts() ) : $query->the_post(); ?>
	        <div class="job-post">
	            <h2><?php the_title(); ?></h2>
	            <p><strong>Job Description: </strong><br/><?php the_field('position_description');

		        $location = get_field('location');?></p>

	            <p><strong>Location: </strong><br/>

	            <?php if(get_field('location') == 'pa') {
	            	echo the_field('pa_address','options');
	            }
	           if(get_field('location') == 'va') {
	            	echo the_field('va_address','options');
	            }?></p>

	            <p><strong>Hours: </strong><br/><?php the_field('hours'); ?></p>
	        </div>
	    <?php endwhile; wp_reset_postdata();
			else :
			echo 'There are currently no positions available. Please check again soon.';
	endif;
echo '</section>';


}
genesis();
