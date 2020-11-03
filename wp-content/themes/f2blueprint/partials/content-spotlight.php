<div class="hero-slider__slide" style="background-image: url(<?php echo get_field('spotlight_image')['sizes']['spotlightSlide']; ?>">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center"><?php the_title(); ?></h2>
                <p class="t-center" style="word-wrap: break-word;"><?php echo get_field('page_banner_sub_title'); ?></p>
                <p class="t-center no-margin"><a href="<?php echo get_field('link_to') ?>" class="btn btn--blue"><?php echo translateENOrPT(array('word'=>'Learn more')) ?></a></p>
              </div>
            </div>
</div>
