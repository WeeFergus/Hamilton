<?php

add_filter( 'theme_page_templates', 'hamilton_remove_genesis_page_templates' );

function hamilton_remove_genesis_page_templates( $page_templates )
{
    unset( $page_templates['page_archive.php'] );
    unset( $page_templates['page_blog.php'] );

    return $page_templates;
}