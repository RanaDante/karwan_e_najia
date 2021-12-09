<!DOCTYPE html>
<html  <?php language_attributes(); ?> dir="rtl">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!--[if IE lt 9]>
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/html5shiv.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <header>
        <!-- TOP BAR START -->
        <div class="top-bar">
            <div class="wrap">
                <p>پیر 15 نومبر 2021 - پیر، 9 ر بیع الثانی 1443</p>

                <?php if ( is_active_sidebar( 'social-1' ) ) : ?>
                    <?php dynamic_sidebar( 'social-1' ); ?>
                <?php endif; ?>
            </div>
        </div>
        <!-- TOP BAR END -->

        <!-- NAVIGATION AND SEARCH BAR -->
        <div class="nav">

            <div class="wrapper">
                <a href="<?php echo home_url(); ?>">
                    <div class="logo">
                        <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); 
                            if ( has_custom_logo() ): ?>
                                <img src="<?php echo esc_url( $logo[0] ) ?>" class="img-responsive" alt="Website's logo">
                        <?php 
                            else:
                        ?>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" class="img-responsive" alt="Website's logo">
                        <?php endif; ?>
                    </div>
                </a>
                
                <?php 
                    wp_nav_menu( array(
                        'menu' => 'Main Menu',
                        'menu_class' => '',
                        'container' => 'div',
                        'container_class' => 'menu-bar'
                    ) );
                ?>

                <?php get_search_form(); ?>
            </div>

        </div>

        <!-- MOBILE MENU  -->
        <div class="mbl-menu">

            <div class="mbl-menu-header">
                <div class="logo">
                    <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); 
                        if ( has_custom_logo() ): ?>
                            <img src="<?php echo esc_url( $logo[0] ) ?>" class="img-responsive" alt="Website's logo">
                    <?php 
                        else:
                    ?>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" class="img-responsive" alt="Website's logo">
                    <?php endif; ?>
                </div>

                <button class="hamburger">&#9776;</button>
                <button class="cross" style="font-family: sans-serif;">&times;</button>
            </div>

            <?php 
                    wp_nav_menu( array(
                        'menu' => 'Main Menu',
                        'menu_class' => '',
                        'container' => 'div',
                        'container_class' => 'menu'
                    ) );
                ?>
        </div>

    </header>
    <!-- HEADER -->

    <!-- HERO IMAGE -->
    <section class="hero-image">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/Urdu-Banner-1.png" alt="">
    </section>