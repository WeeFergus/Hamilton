<?php

remove_action( 'genesis_footer', 'genesis_do_footer' );

add_action( 'init', 'hamilton_register_footer_menu' );
add_action( 'genesis_footer', 'hamilton_do_footer_menu' );
add_action( 'genesis_after_footer', 'hamilton_do_footer_creds' );

function hamilton_do_footer_creds()
{
	$company = 'Hamilton Equipment';
	?>
	<p class="copyright">Copyright &copy; <?php echo $company; ?> <?php echo date('Y'); ?></p>
	<?php
}

function hamilton_register_footer_menu()
{
	register_nav_menu( 'footer-menu', __( 'Footer Navigation Menu' ) );
}

function hamilton_do_footer_menu()
{
	$args = array(
		'theme_location' => 'footer-menu'
	);

	wp_nav_menu($args);
}