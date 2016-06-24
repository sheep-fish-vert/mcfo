<?php
get_header();
$template_url = get_bloginfo('template_url');
$include_url = TEMPLATEPATH . '/partials/';
//=====partials===========
include $include_url . 'main_topslider.php';
include $include_url . 'main_pair_slider.php';
include $include_url . 'main_sloika.php';
include $include_url . 'main_partners.php';
include $include_url . 'main_alone_slider.php';
//=====partials===========
get_footer();