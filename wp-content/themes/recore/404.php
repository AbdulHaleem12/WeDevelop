<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Recore
 */

get_header();
?>

<section class="page-404">
   <div class="content-404">
      <div class="container">
         <div class="row">
            <div class="page-404-content">
            <h2><?php esc_html_e('OOPS !','recore'); ?></h2>
            <h1><?php esc_html_e('404','recore'); ?></h1>
            <h3><?php esc_html_e('Page Not Found','recore'); ?></h3>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-arrow-left"></i><?php  echo esc_html(get_theme_mod( "recore_Setting_For_error_Page_Section_Button_Label","Back To Home" )); ?></a>
         
         </div>
      </div>
   </div>
</section>