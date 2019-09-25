<?php

add_filter( 'upload_mimes', 'hamilton_mime_types' );

function hamilton_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
