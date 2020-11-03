<?php 
get_header();
// pageBanner(); 
?>

 <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/bus.jpg'); ?>"></div>
    <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">Competion Type(s)</h1>
    <!-- Traditional way to show category or author -->
          <!-- 
      <h1 class="page-banner__title"> <?php the_archive_title(); ?>

      <?php
            if (is_category()) {
                single_cat_title();
            }
            if (is_author()) {
                echo 'Post by: '; the_author();
            }
          ?> 


      </h1>
      -->


      <div class="page-banner__intro">
        <p>Competion Type(s) Infomation</p>
      </div>
    </div>  
</div>


<div class="container container--narrow page-section">

<ul class="link-list min-list">
    <?php 
        while (have_posts()) {
            the_post();
    ?>
           
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    
    <?php        
        }  
    ?>

    </ul>

    <?php  echo paginate_links(); ?>



    <hr class="section-break" />
    <p> </p>   
</div>


<?php get_footer(); ?>