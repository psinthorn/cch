 <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">


        <?php 
            $today = date('Ymd');
            $spotlightListQuery = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'spotlight',
                // 'meta_key' => 'event_date',
                // 'orderby' => 'meta_value_num',
                'order' => 'ASC',
            ));

            while($spotlightListQuery->have_posts()){
                $spotlightListQuery->the_post(); 
                get_template_part('partials/content', 'spotlight');     
            }
        ?>

        </div>
        <div class="slider__bullets glide__bullets hide" data-glide-el="controls[nav]"></div>
      </div>
    </div>