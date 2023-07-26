<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Recore
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-6 col-md-6 col-sm-6'); ?>>
	<!--item-->
    <div class="blog-card">
    	<?php if( has_post_thumbnail() ){ ?>
	        <div class="blog-img">
	            <?php the_post_thumbnail(); ?>                          
	        </div>
	    <?php } ?>
        <span class="date"><?php the_date(); ?></span>
        <div class="admin">
            <a href="<?php echo  esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><?php esc_html_e('By:','recore')?> <?php echo esc_html( get_the_author() ) ?></a>                            
        </div>
        <div class="blog-content">
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="blog-btn"><?php esc_html_e('Read More','recore')?><i class="fas fa-angle-double-right"></i></a>
        </div>
    </div>
</div>