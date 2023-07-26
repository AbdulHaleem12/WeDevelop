<?php
/**
 * Template part for displaying results in single page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package recore
 */
?>
<div id="post-<?php the_ID(); ?>" class="blog-content">
	<?php if( has_post_thumbnail() ){ ?>
	    <div class="blog-detail-img">
	        <?php the_post_thumbnail( ); ?>
	    </div>
	<?php } ?>
    <div class="blog-detail">
        <ul class="blog-meta-tag mb-2 ml-0 pl-0">
            <li><a href="<?php echo  esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><i class="fas fa-user"></i> <?php echo esc_html( get_the_author() ) ?></a></li>
            <li><a href="<?php the_permalink(); ?>"><i class="far fa-calendar-alt"></i> <?php the_date(); ?></a></li>
            <li><a href="<?php comments_link(); ?>"><i class="fas fa-comments"></i> <?php comments_number(); ?></a></li>
        </ul>
        <div class="blog-data">
            <?php the_content(); ?>
        </div>
        <?php if(get_the_tag_list() != '') { ?>         
            <div class="taggs">
                <?php the_tags(); ?>
            </div>
        <?php } ?>
	</div>
</div>