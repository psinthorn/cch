<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/f979b6ac3c85e2a91da0acc0e/22c37e3e9d35cede55948e9f5.js");</script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
   <header class="site-header">
      <div class="container">
      <a href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri('/images/ch-logo-notext-wh.png'); ?>" alt="Portuguese Association" style="width: 3rem"></a>
        <!-- <div class="select-lang">
          <span class="t-center pl-3 strong">Select Language</span> 

          <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'selectLanguage'
                        ));
          ?>
        </div> -->
        <!-- <h1 class="school-logo-text float-left">

        <?php 
          if($lang = 'pt') {
         ?>   
             <a href="<?php echo site_url('/pt/home-portugues/'); ?>"><strong>Concierge</strong>Hub</a>
        <?php
          } else {

        ?>
             <a href="<?php echo site_url(); ?>"><strong>Concierge</strong>Hub</a>
        <?php
          }
        ?>
         
        </h1> -->
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">

         <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'headerMenuLocation'
                        ));
          ?>
                      
          </nav>
          <div class="site-header__util">
            <?php 
              if(is_user_logged_in()) { ?>
                <a href="<?php echo wp_logout_url() ?>" class="btn btn--small btn--dark-orange float-left btn--with-photo">
                <span class="site-header__avatar"><?php echo get_avatar(get_current_user_id(), 60); ?></span>
                <span class="btn__text">Log Out</span>
              </a>
            <?php  } else { ?>
               <a href="<?php echo wp_login_url() ?>" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="<?php echo wp_registration_url() ?>" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <?php } ?>
           <!-- will update search funtion soonest -->
            <!-- <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span> -->
          </div>
        </div>
      </div>
    </header>
