<?php
get_header();
$template_url = get_bloginfo('template_url');
$include_url = TEMPLATEPATH . '/partials/';
//=====partials===========
$post_categories=wp_get_post_categories($wp_query->post->ID);

$cur_post_cat_parent='';
foreach ($post_categories as $cat_in){
    $tmp=get_category($cat_in);
    if($tmp->category_parent==0){
        $cur_post_cat_parent=$tmp->slug;
        break;
    }
}
$cur_post_cat_parent=rawurldecode($cur_post_cat_parent);
switch ($cur_post_cat_parent){
    case 'meropriyatiya': 
        include $include_url . 'debats-inside.php';
        break;
    case 'новости': 
        include $include_url . 'news-inside.php';
        break;
    case 'видео': 
        include $include_url . 'videos-inside.php';
        break;
    default: echo "error";
}
//=====partials===========
get_footer();