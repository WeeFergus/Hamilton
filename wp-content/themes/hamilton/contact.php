<?php
/* Template Name: Contact Us */

remove_action( 'genesis_entry_header', 'genesis_do_post_section_title' );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_content_sidebar_wrap', 'haminc_page_title');
add_action('genesis_loop', 'haminc_do_conact_form');
add_action('genesis_before_footer', 'haminc_do_google_map');

function haminc_page_title() {
	$bkgndImg = get_field('header_background');
	echo '<div class="title-banner" style="background-image: url(' . $bkgndImg . ')">';
		echo '<div class="title-wrap">';
			echo '<h1>' . get_field('page_title') . '</h1>';
		echo '</div>';
	echo '</div>';
}

function haminc_do_conact_form() { ?>
	<section class="contact">
		<div class="form">
			<p><?php echo the_field('intro_text');?></p>
			<?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true ]'); ?>
		</div>
		<div class="side">
			<p>
			<strong>HOME OFFICE</strong><br />
			<?php the_field('pa_address','options');?><br />
			Local: <?php the_field('pa_local_phone','options');?><br />
			Toll-Free: <?php the_field('pa_toll_free','options');?><br />
			Email: <a href="mailto:<?php the_field('pa_email','options');?>"><?php the_field('pa_email','options');?></a><br />
			Fax: <?php the_field('pa_fax','options');?><br />
			</p>
			<p>&nbsp;</p>
			<p>
			<strong>BRANCH OFFICE</strong><br />
			<?php the_field('va_address','options');?><br />
			Toll-Free: <?php the_field('va_toll_free','options');?><br />
			Fax: <?php the_field('va_fax','options');?><br />
			</p>
		</div>
	</section><?php
}

function haminc_do_google_map() {
	echo the_field('google_map');
}

genesis();
