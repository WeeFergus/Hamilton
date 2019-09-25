<?php
add_action('template_redirect', 'last_modified_header');
function last_modified_header($headers) {

    //Check if we are in a single post of any type (archive pages has not modified date)
    if( is_singular() ) {
        $post_id = get_queried_object_id();
        if( $post_id ) {
            header("Last-Modified: " . get_the_modified_time("D, d M Y H:i:s", $post_id) );
        }
    }

}