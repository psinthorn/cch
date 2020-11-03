
 <footer class="site-footer">
  <hr>
      <div class="site-footer__inner container">
      <div class="group">
         <p class="text-center pb-3">
          <a href="<?php echo site_url(); ?>">
            <img src="<?php echo get_theme_file_uri('/images/cch-logo.png'); ?>" alt="The Concierge Hub" style="width: 11rem">
          </a>
           </p>
        </div>
        <div class="group">
          <div class="site-footer__col-one pt-3 pb-5">
            <a href="https://www.aurora-agency.com">
              <img src="<?php echo get_theme_file_uri('/images/by-aurora.png'); ?>" alt="The Concierge Hub" style="width: 11rem">
            </a>
            <!-- <p><a class="site-footer__link" href="tel:+971 55 5959935">+971 55 5959935</a></p> -->
            
          </div>

          <div class="site-footer__col-two-three-group pt-3">
            <div class="site-footer__col-two">

              <?php 
                      if(function_exists('pll_current_language')){
             $lang = pll_current_language();
          } else {
                    $lang = 'en';
          }
                    if($lang == 'pt'){
                    ?>  
                    <h3 class="headline headline--small">Explore </h3>
                
                    <?php 
                  } else {
                    ?>
                    
                    <h3 class="headline headline--small">Explore</h3>
                
                    <?php
                  }
                ?>


              <nav class="nav-list">

                    <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'footerLinksOne'
                        ));
                    ?>
              
              </nav>
            </div>

            <div class="site-footer__col-three">
            <?php 
                      if(function_exists('pll_current_language')){
             $lang = pll_current_language();
          } else {
                    $lang = 'en';
          }
                    if($lang == 'pt'){
                    ?>  
                    <h3 class="headline headline--small">Mais informação </h3>
                
                    <?php 
                  } else {
                    ?>
                    
                    <h3 class="headline headline--small">Informaton</h3>
                
                    <?php
                  }
                ?>
              
              <nav class="nav-list">
                   <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'footerLinksTwo'
                        ));
                    ?>

                <!-- 
                <ul>
                  <li><a href="#">Legal</a></li>
                  <li><a href="<?php echo site_url('/privacy-policy'); ?>">Privacy</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
                -->
              </nav>
            </div>
          </div>

          <div class="site-footer__col-four pt-3">

          <?php 
                  if(function_exists('pll_current_language')){
             $lang = pll_current_language();
        }
                    if($lang == 'pt'){
                    ?>  
                    <h3 class="headline headline--small">Subscreva a nossa newsletter</h3>
                
                    <?php 
                  } else {
                    ?>
                    
                    <h3 class="headline headline--small">Newsletter Subscribe</h3>
                
                    <?php
                  }
                ?>
            
              <!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup" style="background-color: inherit;">
<form action="https://portuguese-association-tourism.us2.list-manage.com/subscribe/post?u=9ecb913cccfb0c788197f2d45&amp;id=8b693b3514" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<!-- <label for="mce-EMAIL">Subscribe to our mailing list.</label> -->
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" style="width: 98%;" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_9ecb913cccfb0c788197f2d45_8b693b3514" tabindex="-1" value=""></div>
    <div class="clear">

    <?php 
                 if(function_exists('pll_current_language')){
             $lang = pll_current_language();
          } else {
                    $lang = 'en';
          }
                    if($lang == 'pt'){
                    ?>  
                    <input type="submit" value="Subscreva" name="subscribe" id="mc-embedded-subscribe" class="button">
                
                    <?php 
                  } else {
                    ?>
                    
                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                
                    <?php
                  }
                ?>
    
    
    
    </div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->

           
          </div>
        </div>
      </div>

       <hr>
      <div class="container text-center">     
        <nav>
            <h3 class="headline headline--small">Social Us</h3>
              <ul class="min-list social-icons-list group">
                <li>
                  <a href="https://www.facebook.com/Aurora-Agency-141107776579616/" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true" target="_blank"></i></a>
                </li>
                <!-- <li>
                  <a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </li> -->
                <li>
                  <a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li> 
              </ul>
            </nav>
      </div>
     
    </footer>

<?php wp_footer(); ?>
</body>
</html>