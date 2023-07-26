<?php
/**
 * Home starter content.
 *
 * @package recore\starter_content
 */
return [
    'post_type'    => 'page',
    'post_title'   => _x( 'Home', 'Theme starter content', 'recore' ),
    'post_content' => '<p style="margin:-1.5em;"></p><div id="home" class="hero-area">
   <div class="overlay"></div>       
   <img class="bgimg" src="'. trailingslashit( get_template_directory_uri() ).'/assets/img/bg1.png" alt="">
   <div class="heroarea-slider">
      <div class="item">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 d-flex align-self-center">
                  <div class="left-content">
                  <div class="content">
                        <h1 class="title"> Welcome to Recore Blog</h1>
                        <p class="subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolor.Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                        <div class="links"><a href="#" class="mybtn1">Learn More<i class="fas fa-chevron-right"></i></a></div>
                  </div>
                  </div>
               </div>
               <div class="col-lg-6 order-first order-lg-last"> 
                  <div class="right-img">
                     <img class="img-fluid full-img" src="'. trailingslashit( get_template_directory_uri() ).'/assets/img/slider1.png" alt="">
                  </div> 
               </div>
            </div>
         </div>
      </div> 
   </div>
</div>
    <!-- Main-end -->
    <!-- Blog-section -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"90px","bottom":"90px"}},"color":{"background":"#fff"}},"layout":{"inherit":true}} -->
<section class="blog" id="blog">

<div class="container" style="background-color:#fff;padding-top:90px;">

<!-- wp:heading -->
<div class="row justify-content-center"><div class="col-md-10 col-lg-8"><div class="section-title extra"><h2 class="title">Latest From The Blog<span class="heading_divider"> </span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
<p class="has-text-align-center has-normal-font-size">Prevention Effect, Advocate Dialogue Rural Development Lifting People Up Community Civil Society. Catalyst, Grantees Leverage.</p></div></div></div>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"query-content"} -->
<!-- wp:post-featured-image /-->

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"20px","bottom":"0px","right":"25px","left":"25px"}}}} -->
<div class="blog-box" style="display:inherit;"> <div class="blog-details">
<!-- wp:post-title {"level":3,"style":{"spacing":{"margin":{"left":"0","top":"18px","right":"25px"}}}} /-->
<div class="wp-block-columns" style="padding-top:20px;padding-right:25px;padding-bottom:0px;"><!-- wp:column -->
<div class="wp-block-column" style="display:flex;"> 
<!-- wp:post-date {"style":{"color":{"text":"#000"},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"normal"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column" style="display:flex;><!-- wp:comments-query-loop -->
<div class="wp-block-comments-query-loop">  <!-- wp:comments-title {"textAlign":"right","showPostTitle":false,"level":6,"style":{"color":{"text":"#000"},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"normal"} /--></div>
<!-- /wp:comments-query-loop --></div>

<!-- wp:post-excerpt {"moreText":"Read More","fontSize":"normal"} /-->
<!-- /wp:column --></div>
<!-- /wp:columns -->


<!-- /wp:post-template -->
</div></div>

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results."} -->
<p>No Post Found</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
</section>
<!-- /wp:group -->
    ',];