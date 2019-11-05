<?php

namespace Tower\Components;

class browse_our_products
{
	public static function browse_our_products() {

		$bkgndImg = get_field('background_image', 'options');

	echo '<div id="browse-products" style="background-image: url(' . $bkgndImg . ')">';
		echo '<h3>' . get_field('callout_title', 'options') . '</h3>';
		echo '<a href="/hamilton/shop/" class="button">';
			echo the_field('button_text', 'options');
		echo '</a>';
	echo '</div>';

	echo '<div id="browse-products-mobile">';
		$browseMobileImage = get_field('browse_mobile_image', 'options');?>
		<img src="<?php echo $browseMobileImage['url']; ?>" alt="<?php echo $browseMobileImage['alt']; ?>" />
		<?php
		echo '<h3>' . get_field('callout_title', 'options') . '</h3>';
		echo '<a href="/hamilton/shop/" class="button">';
			echo the_field('button_text', 'options');
		echo '</a>';
	echo '</div>';

	}
}