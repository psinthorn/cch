<?php 
get_header(); 
pageBanner();
?>

<div class="container container--narrow page-section">

    <?php 
        $today = date('Ymd');
            $pastEventsQuery = new WP_Query(array(
                'paged' => get_query_var('paged', 1),
                // 'posts_per_page' => 1, (wordpress default is 10)
                'post_type' => 'event',
                'meta_key' => 'event_date',
                'orderby' => 'meta_value_num',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'event_date',
                        'compare' => '<',
                        'value' => $today,
                        'type' => 'numeric'
                    )
                )
            ));

        
        if(!$pastEventsQuery->have_posts()) {  
        
        ?>
            <h2 class="t-center">
            <?php echo translateENOrPT(array('word' => 'Sorry, No any past events or translate post here.')) ?>
            </h2>
        
        <?php } else { 

             while ($pastEventsQuery->have_posts()) {
            $pastEventsQuery->the_post();
            get_template_part('partials/content', 'event'); 
            }

            echo paginate_links(array(
                'total' => $pastEventsQuery->max_num_pages
            ));
            }      
        ?>

    <!-- <hr class="section-break" /> -->
    <p class="mt-5"><a href="<?php echo site_url('/events'); ?>"><?php echo translateENOrPT(array('word'=>'All future popular events. Click here')) ?></a> </p>  
</div>




<?php get_footer(); ?>