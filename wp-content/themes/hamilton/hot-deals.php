<?php
/* Template Name: Hot Deals */

remove_action( 'genesis_entry_header', 'genesis_do_post_section_title' );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_content_sidebar_wrap', 'haminc_page_title');
add_action('genesis_loop', 'haminc_do_deals_loop');

function haminc_page_title() {
	$bkgndImg = get_field('header_background');
	echo '<div class="title-banner" style="background-image: url(' . $bkgndImg . ')">';
		echo '<div class="title-wrap">';
			echo '<h1>' . get_field('page_title') . '</h1>';
		echo '</div>';
	echo '</div>';
}

function haminc_do_deals_loop() {

	$user = wp_get_current_user();
	$allowed_roles = array('dealer', 'administrator');
	if( array_intersect($allowed_roles, $user->roles ) ) {

	echo '<section class="hot-deals">';
	if(get_field('intro_text')) :
		echo '<p>' . get_field('intro_text') . '</p>';
		endif;

		if( have_rows('deals') ):
		    while ( have_rows('deals') ) : the_row();
		    	echo '<div class="hot-deal">';
		    	$file = get_sub_field('deal_pdf');
					if( $file ): ?>
					<a target="_blank" href="<?php echo $file['url']; ?>"><img src="/hamilton/wp-content/themes/hamilton/assets/images/pdf.png" alt="Hamilton Hot Deal" height="80px" width="80px"/></a>
					<?php
					endif;
					echo '<h3>' . get_sub_field('deal_title') . '</h3>';
				echo '</div>';
		    endwhile;
		else :
		endif;
	echo '</section>';

	} else {
		echo '<section class="hot-deals">';
		echo '<p>You are not authorized to view this page. Please <a class="login" href="/hamilton/my-account/">log in.</a></p>';
		echo '</section>';
	}
}
genesis();
