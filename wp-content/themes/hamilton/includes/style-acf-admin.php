<?php
	function my_acf_admin_head() {
?>
<style type="text/css">

    .acf-flexible-content .layout .acf-fc-layout-handle {
         background-color: #00598b;
        color: #eee;
    }

    .acf-repeater.-row > table > tbody > tr > td,
    .acf-repeater.-block > table > tbody > tr > td {
        border-top: 2px solid #00598b;
    }

    .acf-repeater .acf-row-handle {
        vertical-align: top !important;
        padding-top: 16px;
    }

    .acf-repeater .acf-row-handle span {
        font-size: 20px;
        font-weight: bold;
        color: #00598b;
    }

    .imageUpload img {
        width: 75px;
    }

    .acf-repeater .acf-row-handle .acf-icon.-minus {
        top: 30px;
    }

</style>
<?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');