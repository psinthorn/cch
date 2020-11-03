    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center"><?php echo translateENOrPT(array('word'=>'Upcoming Events')) ?></h2>

          <?php 
            $today = date('Ymd');
            $listTwoMembersQuery = new WP_Query(array(
                'posts_per_page' => 2,
                'post_type' => 'member',
                'order' => 'ASC',
            ));

            while($listTwoMembersQuery->have_posts()){
                $listTwoMembersQuery->the_post(); 
                get_template_part('partials/content', 'member');     
            }
        ?>


          <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('event'); ?>" class="btn btn--blue"><?php echo translateENOrPT(array('word'=>'View All Events')) ?></a></p>
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center"><?php echo translateENOrPT(array('word'=>'From Our Blogs')) ?></h2>
            <?php 
            $today = date('Ymd');
            $listTwoMembersQuery = new WP_Query(array(
                'posts_per_page' => 2,
                'post_type' => 'member',
                'order' => 'ASC',
            ));

            while($listTwoMembersQuery->have_posts()){
                $listTwoMembersQuery->the_post(); 
                get_template_part('partials/content', 'member');     
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
          <?php echo translateENOrPT(array('word'=>'View all partners')) ?></a></p>

        </div>
      </div>
    </div>