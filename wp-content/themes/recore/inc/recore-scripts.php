<?php
defined( 'ABSPATH' ) or die();

function recore_fonts_url() {
    $fonts_url = '';

    $font_families = array();

    $font_families[] = 'Roboto:300,400,500,700,900';
    $font_families[] = 'Poppins:400,500,600,700';

    $query_args = array(
        'family' => urlencode( implode( '|', $font_families ) ),
    );

    $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );

    return esc_url_raw( $fonts_url );
}

/**
 * Enqueue scripts and styles.
*/
function recore_scripts() {

    wp_enqueue_style( 'recore-font', recore_fonts_url(), array(), null );

    wp_enqueue_style( 'recore-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');

    wp_enqueue_style( 'recore-font-awesome', get_template_directory_uri(). '/assets/css/fontawesome.css' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css');
    wp_enqueue_style( 'megnific',   get_template_directory_uri() . '/assets/css/magnific-popup.css' );

    wp_enqueue_style( 'slicknav',   get_template_directory_uri() . '/assets/css/slicknav.css' );
    wp_enqueue_style( 'slick',   get_template_directory_uri() . '/assets/css/slick.css' );
    wp_enqueue_style( 'slicktheme',   get_template_directory_uri() . '/assets/css/slick-theme.css' );
    wp_enqueue_style( 'recore-custom-style', get_template_directory_uri() . '/assets/css/custom-style.css');

    wp_enqueue_style( 'recore-style', get_stylesheet_uri() );

    wp_enqueue_style( 'recore-responsive', get_template_directory_uri() . '/assets/css/responsive.css' );

    wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/assets/js/popper.js', array( 'jquery' ), true, true);

    wp_enqueue_script( 'recore-bootstrap-js', get_template_directory_uri() .'/assets/js/bootstrap.js', array( 'jquery' ), true, true);    
    wp_enqueue_script( 'carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js', array( 'jquery' ), true, true); 
    wp_enqueue_script( 'magnific-pop', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array( 'jquery' ), true, true); 
    wp_enqueue_script( 'jquery-slicknav',  get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array( 'jquery' ), true, true); 
    wp_enqueue_script( 'slick-js',         get_template_directory_uri() . '/assets/js/slick.js', array( 'jquery' ), true, true);

    wp_enqueue_script( 'recore-custom-script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), true, true); 

    wp_enqueue_script( 'recore-navigation', get_template_directory_uri() . '/assets/js/navigation.js',array( 'jquery' ), true, true);  

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'recore_scripts' );