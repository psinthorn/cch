<div class="event-summary">
            <a class="event-summary__thumbnail t-center" href="<?php the_permalink(); ?>">
            <?php
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail();
                    } else {
                        echo 'no img';
                    }
                ?>                    
            </a>
       
    <div class="event-summary__content">
        <h5 class="event-summary__title headline headline--tiny"><a
                href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
        <p>
            <?php if (has_excerpt()) {
                            echo get_the_excerpt();
                        } else { 
                            echo wp_trim_words(get_the_content(), 18);
                        } 
                    ?>
            <a href="<?php the_permalink(); ?>" class="nu gray"><?php echo translateENOrPT(array('word'=>'Learn more')) ?></a></p>
    </div>
</div>