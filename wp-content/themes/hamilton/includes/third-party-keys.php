<?php

define( 'TOWER_KEY_GOOGLE_MAPS', 'AIzaSyB2M6nemMHYyhpqHYWwwDGLAPheNhNf0kI' );
define( 'TOWER_KEY_GRAVITY_FORMS', 'f2a6ee93f7ace2f798e53b53a52173e0' );

// ACF
add_filter('acf/fields/google_map/api', 'tower_acf_google_map_api');
function tower_acf_google_map_api($api)
{
	$api['key'] = TOWER_KEY_GOOGLE_MAPS;

	return $api;
}

// GRAVITY FORMS
define( 'GF_LICENSE_KEY', 'f2a6ee93f7ace2f798e53b53a52173e0' );
