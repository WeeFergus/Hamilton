<?php

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Business Info',
        'menu_title'    => 'Business Info',
        'menu_slug'     => 'business_info',
        'icon_url'     => 'dashicons-store',
    ));
}