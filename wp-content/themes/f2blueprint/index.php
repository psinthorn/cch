<?php 
get_header();
pageBanner();
 ?>

 

<div class="container container--narrow page-section">
    <?php 
        while (have_posts()) {
            the_post();
    ?>
    <div class="post-item">
        <h2 class="headline headline--medium headline--post-title">
            <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <div class="metabox">
            <p>posted by: <?php the_author_posts_link(); ?> at: <?php the_time('n.j.y'); ?> in <?php echo get_the_category_List(', '); ?></p>
        </div>
        <div class="generic-content">
            <?php the_excerpt(); ?>
            <p><a href="<?php the_permalink(); ?>" class="btn btn--blue">Continue &raquo;</a></p>
        </div>

    </div>


    <?php        
        }

        echo paginate_links();
    ?>
</div>


<?php get_footer(); ?>