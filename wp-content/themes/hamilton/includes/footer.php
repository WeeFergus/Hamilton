<?php

remove_action( 'genesis_footer', 'genesis_do_footer' );

add_action( 'genesis_footer', 'haminc_do_footer' );
add_action( 'genesis_footer', 'hamilton_do_subfooter' );


function haminc_do_footer() {?>
	<div id="footer-main">
		<div class="content-wrap">
			<div class="logo">
				<a href="index.php"><img src="/hamilton/wp-content/themes/hamilton/assets/images/haminc-logo.png" alt="Hamilton Equipment"/></a>
			</div>
			<p>
			<strong>HOME OFFICE</strong><br />
			<?php the_field('pa_address','options');?><br /><br />
			Local: <?php the_field('pa_local_phone','options');?><br />
			Toll-Free: <?php the_field('pa_toll_free','options');?><br />
			Email: <a href="mailto:<?php the_field('pa_email','options');?>"><?php the_field('pa_email','options');?></a><br />
			Fax: <?php the_field('pa_fax','options');?><br />
			</p>
			<p>
			<strong>BRANCH OFFICE</strong><br />
			<?php the_field('va_address','options');?><br /><br />
			Toll-Free: <?php the_field('va_toll_free','options');?><br />
			Fax: <?php the_field('va_fax','options');?><br />
			</p>
		</div>
	</div>

<?php
}


function hamilton_do_subfooter() {

	echo '<div id="subfooter">';
		echo '<div class="content-wrap">';
			echo  '<p class="copyright">&copy; ' . date('Y') . ' Hamilton Equipment, Inc. All rights reserved.</p>';

			register_nav_menu( 'subfooter', __( 'Subfooter Navigation Menu' ) );
			$args = array(
				'theme_location' => 'subfooter'
			);
			wp_nav_menu($args);

		echo '</div>';
	echo '</div>';
}