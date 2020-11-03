<?php 
get_header(); 
homePageBanner();
//$lang = languageCheck();
?>
 <div class="container text-center pt-5 pb-5">
    <h1>Hello Hello</h1>
    </div>
    <div class="full-width-split group">
   
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
           <h2 class="headline headline--small-plus t-center"> 
           <?php echo translateENOrPT(array('word'=>'Upcoming Events')) ?> 
           </h2>
          <?php 
            $today = date('Ymd');
            $listTwoEventsQuery = new WP_Query(array(
                'posts_per_page' => 2,
                'post_type' => 'event',
                'meta_key' => 'event_date',
                'orderby' => 'meta_value_num',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'event_date',
                        'compare' => '>=',
                        'value' => $today,
                        'type' => 'numeric'
                    )
                )
            ));

            while($listTwoEventsQuery->have_posts()){
                $listTwoEventsQuery->the_post(); 
                get_template_part('partials/content', 'event');     
            }
        ?> 
                   
          <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('event'); ?>" 
          class="btn btn--blue"><?php echo translateENOrPT(array('word'=>'View all events')) ?></a></p>      
          
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          
           <h2 class="headline headline--small-plus t-center">
           <?php echo translateENOrPT(array('word'=>'From Our Blogs')) ?>
           </h2>      
          
           <?php 
             $twoPostsQuery = new WP_Query(array(
                'posts_per_page' => 2
            ));

            while ($twoPostsQuery->have_posts()) {
                    $twoPostsQuery->the_post()  
             ?>

              <div class="event-summary">
                <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
                <span class="event-summary__month"><?php the_time('M'); ?></span>
                <span class="event-summary__day"><?php the_time('d'); ?></span>
                </a>
                <div class="event-summary__content">
                <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p><?php if (has_excerpt()) {
                    echo get_the_excerpt();
                } else { 
                    echo wp_trim_words(get_the_content(), 18);
                } 
                ?>
                    <a href="<?php the_permalink(); ?>" class="nu gray"><?php echo translateENOrPT(array('word'=>'Read more')) ?></a></p>
                </div>
            </div>
             
            <?php      
                }
                wp_reset_postdata();
            ?>
        
          <p class="t-center no-margin"><a href="<?php echo site_url('/blog'); ?>" class="btn btn--yellow">
          <?php echo translateENOrPT(array('word'=>'View all blog posts')) ?>
          </a></p>
       
      
              

        </div>
      </div>
    </div>

    <div class="container-fluid pt-5 pb-5 ">
      
                <h1 class="text-center pt-5 pb-5">Move to European Union</h1>
     
    </div>

   

<?php get_footer(); ?>