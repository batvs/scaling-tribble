<?php 
/**
 * header.php
 */
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="page-wrapper">
        <div class="hfeed site" id="page">
            <header class="site-header" id="masthead" role="banner">
                <div class="page-header">
                    <div class="container">
                        <div class="row">
                            <h3 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
                            <p class="site-description"><?php bloginfo( 'description' ); ?></p>
                        </div> 
                        <!-- .row -->

                        <div class="row">
                            <nav class="site-navigation main-navigation" role="navigation"><?php  wp_nav_menu( array(
                                'theme_location' =>  'primary',
                                'container'      =>  'ul',
                                'menu_class'     =>  'nav nav-pills',
                            ) ); ?>
                            </nav>
                        </div>
                        <!-- .site-navigation .main-navigation -->
                    </div>
                    <!-- .container -->
                </div>
                <!-- . -->
            </header>
            <!-- #masthead .site-header -->