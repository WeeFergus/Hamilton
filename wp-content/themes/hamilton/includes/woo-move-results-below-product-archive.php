<?php remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );
	add_action( 'woocommerce_after_shop_loop' , 'woocommerce_result_count', 20 );