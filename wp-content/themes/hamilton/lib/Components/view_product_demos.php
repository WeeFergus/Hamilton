<?php

namespace Tower\Components;

class view_product_demos
{
	public static function view_product_demos() {

	$bkgndImg = get_field('demo_background_image', 'options');

	echo '<div id="view-demos" style="background-image: url(' . $bkgndImg . ')">';
		echo '<div class="text-wrap">';
			echo '<h3>' . get_field('demo_title', 'options') . '</h3>';
			echo '<p>' . get_field('demo_content', 'options') . '</p>';
			echo '<a href="/hamilton/product-demos/" class="button">';
				echo the_field('demo_button_text', 'options');
			echo '</a>';
		echo '</div>';
	echo '</div>';

	echo '<div id="view-demos-mobile">';
		$mobileImage = get_field('mobile_image', 'options');?>
		<img src="<?php echo $mobileImage['url']; ?>" alt="<?php echo $mobileImage['alt']; ?>" />
		<?php
		echo '<h3>' . get_field('demo_title', 'options') . '</h3>';
		echo '<p>' . get_field('demo_content', 'options') . '</p>';
		echo '<a href="/hamilton/product-demos/" class="button">';
			echo the_field('demo_button_text', 'options');
		echo '</a>';
	echo '</div>';
	}
}