<?php
/* Template Name: Front Page */

use Tower\Components\view_product_demos;

// Remove Genesis Base
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
add_action('genesis_before_content_sidebar_wrap', 'haminc_hero');
add_action('genesis_before_footer', [view_product_demos::class,'view_product_demos']);
add_action('genesis_before_footer', 'haminc_partners');
add_action('genesis_before_footer', 'haminc_about');
add_action('genesis_before_footer', 'haminc_contact');

function haminc_hero() { ?>
<div id="hero" style="background-image:url(<?php echo the_field('hero_image');?>);">
	<div class="site-container">
		<h1><?php echo the_field('page_title');?></h1>
	</div>
</div>
<?php
}

function haminc_partners() { ?>
	<div id="partners">
		<h3><?php echo the_field('partners_title');?></h3>
		<div class="logos">
			<?php $args = array(
				 'post_type' => 'partners',
				 'posts_per_page' => '-1'
			);
			$query = new WP_Query($args);
			if ( $query->have_posts() ) :
			    while ( $query->have_posts() ) : $query->the_post();
				$image = get_field('partner_image');
			    if( !empty($image) ): ?>
			         <a class="logo" href="<?php echo the_field('partner_link');?>"><img src="<?php echo $image; ?>" alt="<?php echo the_title(); ?>" /></a>
			     <?php endif; ?>
			    <?php endwhile; wp_reset_postdata();
				else :
			endif; ?>
		</div>
	</div>
<?php
}

function haminc_about() { ?>
<div id="about">
	<div class="about-container">
		<div class="wheat">
			<img src="/hamilton/wp-content/themes/hamilton/assets/images/wheat.png" alt="wheat">
			<div>
				<h3><?php echo the_field('about_title');?></h3>
				<a class="button" href="/about-us/">Learn More</a>
			</div>
		</div>
		<p><?php echo the_field('about_col2');?></p>
		<p><?php echo the_field('about_col3');?></p>
	</div>
</div>
<?php
}

function haminc_contact() { ?>
	<div id="getintouch">
		<h3><?php echo the_field('contact_title');?></h3>
		<p><?php echo the_field('contact_intro');?></p>
		<?php echo do_shortcode('[gravityform id=2 title=false description=false ajax=true ]'); ?>
	</div>
<?php
}
genesis();