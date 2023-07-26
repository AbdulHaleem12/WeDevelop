<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Recore
*/

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class('index3 index6 index-color7'); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'recore' ); ?></a>
    <?php if(!(is_404())){ ?>

    <!-- Navebar Area start -->
    <header class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <nav class="navbar navbar-expand-lg navbar-light main-navbar">
                        <div class="head-logo">
                        <?php
                    	$custom_logo_id = get_theme_mod( 'custom_logo' );
                    	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    	if ( has_custom_logo() ) { ?>
                    		<!-- Brand -->
                        	<?php the_custom_logo(); ?>	
		                <?php	
		                } 
		                if (display_header_text()==true){ ?>
                            <div>
	                        <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
	                            <span class="site-title"><?php bloginfo('name'); ?></span>
	                        </a>
	                        <p><span class="site-description"><?php  bloginfo('description'); ?></span></p></div>
                    	<?php 
                    	}
		                ?>
                        </div>
                        <div class="collapse navbar-collapse justify-content-end" id="mainmenu">
                            <?php
                            wp_nav_menu( 
                                array(
                                    'theme_location' => 'primary',
                                    'container'  => '',
                                    'menu_class' => 'navbar-nav navbar__nav  nav justify-content-end menuon',
                                    'menu_id'        => 'primary-menu',
                                ) 
                            );
                            ?>
                        </div>
                        <?php $custom_logo_id = get_theme_mod( 'custom_logo' ); 
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        if ( has_custom_logo() ) { 
                        ?>
                            <div class="mobile-menu" data-type="logo" data-link="<?php echo esc_attr( home_url('/') ); ?>" data-logo="<?php echo esc_attr( $logo[0] ); ?>"> </div>
                        <?php } else{ ?>
                            <div class="mobile-menu" data-type="text" data-link="<?php echo esc_attr( home_url('/') ); ?>" data-logo="<?php bloginfo( 'name' ); ?>"> </div>
                        <?php } ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Navebar Area End -->
    <?php if(!(is_page_template( 'template-home.php' ) || is_home() || is_front_page())){ ?>
        <!---Start-Banner-Section-->
        <section class="banner">
            <img src="<?php if ( has_header_image() ) {  echo get_header_image(); }else{ echo esc_url(get_template_directory_uri(). '/assets/img/about-bg.jpg'); } ?>" alt="">
            <div class="hero-banner-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php if (is_home() || is_front_page()) { ?>
                                <h2 class="banner-title"><?php echo esc_html__('Blog', 'recore') ?></h2>
                            <?php } elseif(is_search()){?>
                                <h2 class="banner-title"><?php   
                                /* translators: %s: search term */             
                                printf( esc_html__( 'Search Results for: %s', 'recore' ), '<span>' . get_search_query() . '</span>' ); ?>
                                </h2>
                            <?php }else if(is_archive()){ ?>
                                <h2 class="banner-title"><?php the_archive_title(); ?></h2>
                            <?php }else{  ?>                      
                                <h2 class="banner-title"><?php the_title(); ?></h2>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---End-Banner-Section-->
    <?php } } ?>
    <div id="content" class="site-content">