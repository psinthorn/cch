<?php get_header(); ?>
<?php 
    while(have_posts()){
        the_post(); 

        //Banner page global function
        pageBanner();
?>
  <div class="container container--narrow page-section">
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('type'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Programs Home</a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>

      <div class="generic-content"><?php the_content(); ?></div>

<!-- Start Show ratlated Teacher that belongs to program -->
        <?php 
        // Show ratlated Teacher that belongs to program
        $RelatedTeacherQuery = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'teacher',
                // 'meta_key' => 'event_date',
                'orderby' => 'title',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'related_programs',
                        'compare' => 'LIKE',
                        'value' => '"' . get_the_ID() . '"'
                    )
                )
            ));

            if ($RelatedTeacherQuery->have_posts()) { ?>

            <hr class="section-break">
            <h2 class="headline headline--medium"><?php echo get_the_title(); ?> Teacher(s)</h2>
            <ul>
          <?php      
            while($RelatedTeacherQuery->have_posts()){
                $RelatedTeacherQuery->the_post(); ?>
                    <li class="professor-card__list-item" >
                    <a class="professor-card" href="<?php the_permalink(); ?>"> 
                    <img class="professor-card__image" src="<?php the_post_thumbnail_url('teacherLandscape'); ?>" >        
                    <span class="professor-card__name"><?php the_title(); ?> </span>
                    </a></li>
       <?php
            }      
            echo '</ul>';
        }
        ?>

<!-- End show teacher related program -->
<!-- Start Show ratlated event that belongs to program -->
        <?php
        
        //Reset post data before work on another query
        wp_reset_postdata();

        
            $today = date('Ymd');
            $listTwoEventsQuery = new WP_Query(array(
                'posts_per_page' => -1,
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
                    ),
                    array(
                        'key' => 'related_programs',
                        'compare' => 'LIKE',
                        'value' => '"' . get_the_ID() . '"'
                    )
                )
            ));

            if ($listTwoEventsQuery->have_posts()) {

            echo '<hr class="section-break">';
            echo '<h2 class="headline headline--medium">Upcoming ' . get_the_title() . ' Event(s)</h2>';

            while($listTwoEventsQuery->have_posts()){
                $listTwoEventsQuery->the_post(); 
                get_template_part('partials/content-event'); 
            }
        }
        ?>

  </div>

<?php         
    }
?>

<!-- End show event related program -->


<?php get_footer(); ?>