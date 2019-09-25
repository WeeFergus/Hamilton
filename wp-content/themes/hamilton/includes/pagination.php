<?php

add_filter ( 'genesis_next_link_text' , 'hamilton_next_link_text' );
add_filter ( 'genesis_prev_link_text' , 'hamilton_prev_link_text' );

function hamilton_next_link_text( $text )
{
    return 'NEXT';
}

function hamilton_prev_link_text( $text )
{
    return 'PREV';
}