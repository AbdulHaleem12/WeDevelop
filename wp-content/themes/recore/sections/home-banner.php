<!-- Hero Area Start -->
<div id="home" class="hero-area">
   <div class="overlay"></div>
   <img class="bgimg" src="<?php echo esc_url(get_template_directory_uri(). '/assets/img/bg1.png'); ?>" alt="">
   <div class="heroarea-slider">
      <div class="item">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 d-flex align-self-center">
                  <div class="left-content">
                  <div class="content">
                        <h1 class="title"> 
                           <?php if( get_theme_mod( 'recore_Banner_Section_Title_Name' ) ){ 
                              echo esc_html(get_theme_mod( "recore_Banner_Section_Title_Name"));
                           }else{ esc_html_e('Welcome to Recore Blog' , 'recore'); } ?>
                        </h1>
                        <p class="subtitle"><?php if( get_theme_mod( 'recore_Banner_Section_Content_Textarea' ) ){ 
                           echo esc_html(get_theme_mod( "recore_Banner_Section_Content_Textarea"));
                           }else{
                              esc_html_e('Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolor.Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.' , 'recore');
                           } ?>
                        </p>
                        <div class="links">
                           <a href="<?php echo esc_url(get_theme_mod( "recore_Banner_Btn_URl_Path"));?>" class="mybtn1">
                              <?php if( get_theme_mod( 'recore_Banner_Section_Button_Text' ) ){  
                                 echo esc_html(get_theme_mod( "recore_Banner_Section_Button_Text" ));
                              }else{esc_html_e('Learn More' , 'recore');} ?><i class="fas fa-chevron-right"></i></a>
                        </div>
                  </div>
                  </div>
               </div>
               <div class="col-lg-6 order-first order-lg-last"> 
                  <div class="right-img">
                     <img class="img-fluid full-img" src="<?php if (get_theme_mod( "recore_Banner_Section_Image_Upload" )) { echo esc_url(get_theme_mod( "recore_Banner_Section_Image_Upload" )); } else{ echo esc_url(get_template_directory_uri(). '/assets/img/slider1.png'); } ?>" alt="">
                  </div> 
               </div>
            </div>
         </div>
      </div> 
   </div>
</div>
<!-- Hero Area End -->