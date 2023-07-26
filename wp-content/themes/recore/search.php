<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Recore
 */

get_header();
?>

	<!-- Start-Package-Section -->
    <section class="ws-section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                	<div class="row">
					<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile;

						?>
						</div>
						<nav class="pagination-outer mt-4" aria-label="Page navigation">
                            
							<?php // Previous/next page navigation.
							the_posts_pagination( array(
							'prev_text'          => '<i class="fas fa-angle-double-left"></i>',
							'next_text'          => '<i class="fas fa-angle-double-right"></i>',
							) ); ?>
							
						</nav>
					<?php
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>

                </div>
                <!-- Side-bar -->
                <div class="col-lg-4 col-md-12">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End-Package-Section -->
<?php get_footer(); ?>