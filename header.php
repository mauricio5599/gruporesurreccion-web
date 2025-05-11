<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (  (is_home()) || (is_front_page())  ) { ?>
		<meta name="description" content="<?php bloginfo('description'); ?>" />
    <?php } elseif (is_single()) { ?>
        <meta name="description" content="<?php $excerpt = strip_tags(get_the_excerpt());
        echo $excerpt; ?>"/>
    <?php } ?>
    <title><?php wp_title( '|', true, 'right' );  bloginfo('name'); ?></title>
    <!-- <link rel="stylesheet" href="<? echo get_template_directory_uri(); ?>/css/menu.css?v=1<? $date = new DateTime(); echo $date->getTimestamp();?>"> -->
    <link rel="stylesheet" href="<? echo get_template_directory_uri(); ?>/css/style.css?v=2.1.2<? $date = new DateTime(); echo $date->getTimestamp();?>">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body <?php body_class(); ?>>

<header class="page-header-container" id="Headerpag">
    <div class="header-content wrapper">
        <a href="<? echo bloginfo('url'); ?>"><img class="header-img" src="<? echo get_template_directory_uri(); ?>/images/logo_gruporesurreccion.png" alt=""></a>
    </div>
        
    <div class="mainmenu" id="mainmenu">
        <?php wp_nav_menu( 
            array(
                    'menu' => 'Principal',
                    'menu_class' => '',
                    'menu_id'=>'',
                    'container' => 'nav',
                    'container_id' => 'nav-mobile',
                    'container_class'=>'nav-menu',
                    'items_wrap' => '
                        <ul class="ul-header nav-mobile2 menu" id="nav-mobile2" class="nospace">'.
                            // '<li class="img_li">'.
                            //     '<span class="closeMenu" id="closeMenu">&times;</span>'.
                            //     '<img src="'.get_template_directory_uri().'/images/logo_gruporesurreccion.png">'.
                            // '</li>'.
                            '%3$s'.
                            // '<li class="li_redes">'.
                            //     '<a href="https://www.facebook.com/">'.
                            //         '<i class="fab fa-facebook-f"></i>'.
                            //     '</a>'.
                            //     '<a href="https://www.instagram.com/">'.
                            //         '<i class="fab fa-instagram"></i>'.
                            //     '</a>'.
                            // '</li>'.
                        '</ul>'
                    )
                );	
            ?>
    </div>
</header>
