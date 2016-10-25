<?php 
/**
 * functions.php
 * 
 * added theme functionalities
 * 
 */


/**
 * setup theme defaults and WordPress supports
 */
if ( ! function_exists('bamf_setup') ) {
    function bamf_setup() {

        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'title-tag' );

        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );

        // custom template tags
        // require( get_template_directory() . 'inc/template-tags.php' );

        // enqueue theme styles and scripts
        add_action('wp_enqueue_scripts', 'bamf_scripts');

        // add theme menus
        add_action( 'init', 'register_theme_menus');
    }
}
add_action( 'after_setup_theme', 'bamf_setup' );


/**
 * theme styles and scripts
 */
if ( ! function_exists('bamf_scripts') ) {
    function bamf_scripts() {

        // theme's style.css ( required )
        wp_enqueue_style( 'style-css', get_stylesheet_uri(), array('bootstrap-css') );

        // google fonts
        wp_enqueue_style( 'open-sans-css', '//fonts.googleapis.com/css?family=Open+Sans:400,400italic,300,600,700' );

        // bootstrap css
        wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/vendors/bootstrap/css/bootstrap.min.css' );

        // bootstrap script
        wp_enqueue_style( 'bootstrap-script', get_template_directory_uri() . '/css/vendors/bootstrap/js/bootstrap.min.js' );

        // bx slider css
        wp_enqueue_script( 'bxslider-css', get_template_directory_uri() . '/js/vendors/bxslider/jquery.bxslider.css' );

        // bx slider script
        wp_enqueue_script( 'bxslider-script', get_template_directory_uri() . '/js/vendors/bxslider/jquery.bxslider.min.js', array('jquery') );

    }
}


/**
 * Add viewport meta 
 */
if ( ! function_exists('add_viewport_meta') ) {
    function add_viewport_meta() { ?>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
<?php 
    }
}


/**
 * Register menus
 */
if ( ! function_exists('register_theme_menus') ) {
    function register_theme_menus() { 
        register_nav_menus( array( 
            'main-menu'      => __('primary'),
            )
        );
    }
}
