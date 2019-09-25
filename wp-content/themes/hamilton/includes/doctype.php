<?php

remove_action( 'genesis_doctype', 'genesis_do_doctype' );

add_action( 'genesis_doctype', 'hamilton_do_doctype' );

function hamilton_do_doctype()
{
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" dir="ltr" lang="en-US"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" dir="ltr" lang="en-US"><!--<![endif]-->
<head>
<meta name="theme-color" content="<?php echo CHRONOS_THEME_HEX; ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="format-detection" content="telephone=no" />
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<?php
}
