<?php add_action('woocommerce_after_main_content', 'get_product_info');

function get_product_info() {
	$bkgndImg = get_field('background_image', 'options');

	echo '<div id="browse-products" style="background-image: url(' . $bkgndImg . ')">';
		echo '<h3 style="margin-bottom:20px">Looking for<br/><span>More Information?</span></h3>';
		echo '<a href="/hamilton/contact/" class="button">' . 'Contact Us' . '</a>';
	echo '</div>';

	}
