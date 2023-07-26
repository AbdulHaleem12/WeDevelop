<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Recore
 */

?>
</div>
	<!-- Footer Section Start -->
    <footer class="footer" id="footer">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
            	<?php if( is_active_sidebar( 'footer-widget-area-1') ) { ?>
	                <div class="col-md-6 col-lg-4">
	                    <?php dynamic_sidebar( 'footer-widget-area-1' ); ?>
	                </div>
	            <?php }  if( is_active_sidebar( 'footer-widget-area-2') ) { ?>
	                <div class="col-md-6 col-lg-2">
	                    <?php dynamic_sidebar( 'footer-widget-area-2' ); ?>
	                </div>
	            <?php } if( is_active_sidebar( 'footer-widget-area-3') ) { ?>
	                <div class="col-md-6 col-lg-2">
	                    <?php dynamic_sidebar( 'footer-widget-area-3' ); ?>
	                </div>
                <?php }  if( is_active_sidebar( 'footer-widget-area-4') ) { ?>
	        		<div class="col-md-6 col-lg-4">
			            <?php dynamic_sidebar( 'footer-widget-area-4' ); ?>
	                </div>
	            <?php } ?>
            </div>
        </div>
        <div class="copy-bg text-center">
            <p><?php esc_html_e('&copy; 2022. All Rights Reserved','recore'); ?></p>
        </div>
    </footer>
    <!-- Footer Section End -->
	<!-- Back to Top Start -->
    <div class="bottomtotop">
        <i class="fa fa-chevron-right"></i>
    </div>
    <!-- Back to Top End -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
