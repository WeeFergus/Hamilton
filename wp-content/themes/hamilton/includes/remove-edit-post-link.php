<?php

add_filter('edit_post_link', 'hamilton_remove_edit_post_link');

function hamilton_remove_edit_post_link()
{
    return '';
}
