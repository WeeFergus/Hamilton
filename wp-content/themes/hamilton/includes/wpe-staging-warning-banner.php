<?php

if ( strpos( site_url(), 'staging.wpengine.com' ) !== false ) {
    add_action( 'genesis_header', 'hamilton_display_wpe_staging_warning_banner', 5 );
}

function hamilton_display_wpe_staging_warning_banner()
{
    ?>
    <style>
        .wpengine-warning-bar {
            background: #FF5722;
            color: #FFF;
            padding: 5px;
            position: fixed;
            text-align: center;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            width: 100%;
        }
    </style>
    <div class="wpengine-warning-bar">
        <span>WARNING! You are currently on the staging site! Changes made here will NOT be on your live site!</span>
    </div>
    <?php
}
