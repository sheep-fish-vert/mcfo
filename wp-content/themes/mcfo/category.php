<?php
get_header();
$template_url = get_bloginfo('template_url');
$include_url = TEMPLATEPATH . '/partials/';
//=====partials===========
$cur_category_slug='';
if($wp_query->queried_object->category_parent!=0){
    $cur_category_slug=get_category($wp_query->queried_object->category_parent)->slug;
}else{
    $cur_category_slug=$wp_query->queried_object->category_nicename;
}
$cur_category_slug=rawurldecode($cur_category_slug);
switch ($cur_category_slug){
    case 'meropriyatiya': 
        include $include_url . 'debats.php';
        break;
    case 'новости':
        include $include_url . 'news.php';
        break;
    case 'видео':
        include $include_url . 'videos.php';
        break;
    case 'upravlyayushhiy-komitet':
        include $include_url . 'komitet.php';
        break;
    case 'marketing-komitet':
        include $include_url . 'marketing.php';
        break;
    default: echo "error";
}
//=====partials===========
get_footer();