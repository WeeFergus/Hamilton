<?php
/* Template Name: Front Page */

// Remove Genesis Base
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
add_action('genesis_before_content_sidebar_wrap', 'haminc_hero');

function haminc_hero() { ?>
<div id="hero" style="background-image:url(<?php echo the_field('hero_image');?>);">
	<div class="site-container">
		<h1><?php echo the_field('page_title');?></h1>
	</div>
</div>
<?php
}
genesis();