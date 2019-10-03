<?php
/* Template Name: About Us */
use Tower\Components\browse_our_products;
remove_action( 'genesis_entry_header', 'genesis_do_post_section_title' );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_before_content_sidebar_wrap', 'haminc_page_title');
add_action('genesis_loop', 'haminc_do_about');
add_action('genesis_before_footer', [browse_our_products::class,'browse_our_products']);


function haminc_page_title() {
	$bkgndImg = get_field('header_background');
	echo '<div class="title-banner" style="background-image: url(' . $bkgndImg . ')">';
		echo '<div class="title-wrap">';
			echo '<h1>' . get_field('page_title') . '</h1>';
		echo '</div>';
	echo '</div>';
}

function haminc_do_about() { ?>
	<section class="about">
		<div class="left">
			<?php echo the_field('main');?>
		</div>
		<div class="right">
			<?php
			$image1 = get_field('image1');
			$image2 = get_field('image2');
			if( !empty($image1) ): ?>

			    <img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
			    <br />
			    <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
			<?php endif; ?>
		</div>
	</section>
	<?php
}
genesis();
