<?php
get_header();
$template_url = get_bloginfo('template_url');
$include_url = TEMPLATEPATH . '/partials/';
//=====partials===========
include $include_url . 'block1.php';
//=====partials===========
get_footer();