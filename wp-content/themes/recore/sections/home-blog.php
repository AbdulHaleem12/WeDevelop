<!-- Blog Area Start -->
<section class="blog" id="blog">
    <div class="container">
        <?php 
        $recore_blog_title = get_theme_mod( "recore_Blog_Section_Title");
        $recore_blog_desc =  get_theme_mod( "recore_Blog_Section_Description");
        if ( ! empty ( $recore_blog_title ) || ! empty ( $recore_blog_desc ) ) { ?>
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="section-title extra">
                        <?php if ( ! empty ( $recore_blog_title ) ) { ?>
                          <h2 class="title"><?php echo esc_html(get_theme_mod( "recore_Blog_Section_Title" )); ?> </h2>
                        <?php } else{ ?>
                          <h2 class="title"><?php esc_html_e('Latest From The Blog' , 'recore');   ?> </h2>
                        <?php }

                        if ( ! empty ( $recore_blog_desc ) ) { ?>
                          <p><?php echo esc_html(get_theme_mod( "recore_Blog_Section_Description")); ?>
                          </p>
                        <?php }else{ ?>
                        <p>
                          <?php esc_html_e('Prevention Effect, Advocate Dialogue Rural Development Lifting People Up Community Civil Society. Catalyst, Grantees Leverage.' , 'recore');   ?>
                          </p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="row">
            <div class="col-12" data-animate-in="bounce-up">
                <div class="blog-slider">
                  <?php 
                  $post_data = array( 'post_type' => 'post', 'posts_per_page' => 3, 'post__not_in' => get_option( 'sticky_posts' ) ); 
                  $post_data = new WP_Query( $post_data );
                  if ( $post_data->have_posts() ) { 
                    $count = 1;
                      while ( $post_data->have_posts() ) : $post_data->the_post(); 
                      ?>
                        <div class="item">
                            <div class="blog-box">
                                <?php if ( has_post_thumbnail() ) { ?>
                                  <div class="blog-images">
                                      <?php the_post_thumbnail(); ?>
                                  </div>
                                <?php } ?>
                                <div class="blog-details">
                                    <ul class="<?php if ( has_post_thumbnail() ) { ?>post-meta-one <?php }else{ ?> post-meta-one two <?php } ?>">
                                        <li><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><i class="far fa-user"></i> <?php echo esc_html( get_the_author() ) ?> </a></li>
                                        <li><a href="<?php the_permalink(); ?>"><i class="far fa-clock"></i>  <?php the_date(); ?></a></li>
                                    </ul>
                                    <h3> <a class="blog-title" href='<?php the_permalink(); ?>'> <?php the_title(); ?> </a> </h3>
                                    <?php the_excerpt(); ?>
                                </div>
                                <ul class="post-meta-two">
                                    <li> <a href="<?php comments_link(); ?>"> <i class="far fa-comments"></i> <span><?php comments_number(); ?></span> </a> </li>
                                    <li><a href="<?php the_permalink(); ?>" class="read-btn"><?php esc_html_e('Read More','recore'); ?> <i class="fas fa-angle-double-right"></i></a></li>    
                                </ul>
                            </div>
                        </div>
                      <?php 
                    endwhile; 
                    wp_reset_postdata();
                  } 
                  ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area End-->