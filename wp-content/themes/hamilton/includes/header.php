<?php
//Header File

//Remove Header Information
// remove_action( 'genesis_after_header', 'genesis_do_subnav' );
// remove_action( 'genesis_header', 'genesis_do_header' );
// remove_action( 'genesis_after_header', 'genesis_do_nav' );

//Remove Genesis Base
// remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
// remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
// remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

//Remove Genesis Sidebar
// remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

remove_action( 'genesis_site_title', 'genesis_seo_site_title' );
remove_action( 'genesis_site_description', 'genesis_seo_site_description' );
remove_action('genesis_after_header', 'genesis_do_nav');

add_action('genesis_before_header', 'haminc_superheader');
add_action( 'genesis_before_header', 'haminc_logo_nav' );

function haminc_superheader() { ?>
	<div id="superheader">
		<div class="content-wrap">
			<div class="business-info">

				<i class="fas fa-phone"></i> <a href="tel:1.<?php the_field('phone','options')?>"><?php the_field('phone','options')?></a>
				<i class="fas fa-at"></i> <a href="mailto:<?php the_field('email','options')?>" target="_blank"><?php the_field('email','options')?></a>

				<i class="far fa-clock"></i> <?php the_field('hours','options')?>
			</div>
			<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
		</div>
	</div>
<?php
}

function haminc_logo_nav() { ?>
	<div id="header">
		<div class="content-wrap">
			<div id="logo">
				<a href="index.php"><img src="/hamilton/wp-content/themes/hamilton/assets/images/haminc-logo.png" alt="Hamilton Equipment"/></a>
			</div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</div>
	</div>
<?php
}
