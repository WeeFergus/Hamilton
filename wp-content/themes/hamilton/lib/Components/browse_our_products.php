<?php

namespace Tower\Components;

class browse_our_products
{
	public static function browse_our_products() {

		$bkgndImg = get_field('background_image', 'options');

	echo '<div id="browse-products" style="background-image: url(' . $bkgndImg . ')">';
		echo '<h3>' . get_field('callout_title', 'options') . '</h3>';
		echo '<a href="/shop/" class="button">';
			echo the_field('button_text', 'options');
		echo '</a>';
	echo '</div>';

	}
}