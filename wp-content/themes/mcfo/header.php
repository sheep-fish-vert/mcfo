<?php $template_url = get_bloginfo('template_url'); ?>
<html <?php language_attributes(); ?> class="no-js">
    <head>
            <meta charset="<?php bloginfo( 'charset' ); ?>">
            <meta name="viewport" content="width=device-width">
            <meta id="viewport" name="viewport" content="width=1200,user-scalable=yes">
            <title><?php wp_title(); ?></title>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,400italic,600italic,700,700italic,800italic,800&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" href="<?php echo $template_url; ?>/css/style.css" >
            <link rel="profile" href="http://gmpg.org/xfn/11">
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
            <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>
    
    <header>
        <div class="header">
            <div class="logo">
                <a href="" class="top-logo">
                    <img src="<?php echo get_field('логотип',10); ?>" alt="false">
                </a>
                <div class="slogan"><?php echo get_field('слоган',10); ?></div>
            </div>
            <div class="row">
                <nav class="conteiner">
                    <?php $args = array(
                     'menu'            => 'header_menu', 
                    'theme_location'    => '',
                    'container'     => '',
                    'container_id'      => '',
                    'conatiner_class'   => '',
                    'menu_class'        => '',

                    'items_wrap'        => '%3$s',

                    'walker'        => new custom_menu_Walker
                    );

                    // print menu
                    ?>
                    <ul class="head-nav">
                    <?php wp_nav_menu( $args ); ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="global_wrapper">
        