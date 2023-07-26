<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
            	<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'single' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
                endwhile; // End of the loop.
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