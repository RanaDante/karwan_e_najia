<?php get_header(); ?>

<section class="w-75 two-column mt-40 about">
    <div class="main">
        <div class="main-item">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <div class="sub-title">
                    <h3><span style="font-size: 26px; margin-left:10px;"><?php the_title(); ?></span></h3>
                </div>
                <div class="about-content kaalam">
                    <h4 class="kaalam-title"></h4>
                    <div class="feature_image">
                        <img src="<?php the_field('announcement_image'); ?>" alt="Announcement Feature Image">    
                    
                    </div>
                    <p class="para"><?php the_field('excerpt'); ?>
                    <p class="para"><?php the_content(); ?>
                </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </div>

    <?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>