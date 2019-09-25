<?php

add_filter( 'genesis_post_info', 'hamilton_post_info_filter' );

function hamilton_post_info_filter($post_info)
{
    if ( is_singular('post') ) {
        $post_info = '[post_date] - Written by: [post_author_posts_link]';
    } else {
        $post_info = '[post_date]';
    }

    return $post_info;
}
