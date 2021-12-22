<?php 
/**
 * Template Name: Kaalam
 */
?>
<?php get_header(); ?>


<!-- /* TWO COLUMN LAYOUT */ -->
<section class="w-75 two-column mt-40 about">
    <div class="main">
        <?php 
            $kaalam_args = array (
                'post_type' => 'cpt_kaalams',
                'posts_per_page' => 1,
                'order' => 'DESC',
                'orderby' => 'date'
            );
            $kaalam_query = new wp_query($kaalam_args);
        ?>
        <?php if($kaalam_query->have_posts()): while($kaalam_query->have_posts()): $kaalam_query->the_post(); ?>
        <div class="main-item">
            <div class="sub-title">
                <h3><span style="font-size: 26px; margin-left:10px;"><?php the_title(); ?></span></h3>
            </div>
            <div class="about-content kaalam">
                <h4 class="kaalam-title">تحریر: <?php the_field('kaalam_writer'); ?></h4>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                <p>
                    <?php the_content(); ?>

                </p>
            </div>
        </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>

    </div>
    <?php get_sidebar(); ?>

</section>

<!-- POPULAR NEWS -->
<section class="popular-news w-75">
    <h1 class="h1">کالم</h1>
    <div class="news">
        <?php 
            $kaalam_args = array (
                'post_type' => 'cpt_kaalams',
                'posts_per_page' => 6,
                'order' => 'DESC',
                'orderby' => 'date'
            );

            $kaalam_query = new wp_query($kaalam_args);
            $count = $kaalam_query->found_posts;
        ?>
        <?php if($kaalam_query->have_posts()): while($kaalam_query->have_posts()): 
            // $i++;
            $kaalam_query->the_post(); ?>
        
        <div class="news-item">
            <a href="<?php the_permalink(); ?>">
                <div class="thumbnail-bg" style="<?php the_post_thumbnail_url(); ?>"></div>
                <h3 class="h3"><?php the_title(); ?></h3>
                <p> <?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="event-link"> مزید <span class="border-btm"> دیکھیں </span></a>
            </a>
        </div>

        <?php endwhile; wp_reset_postdata(); endif; ?>

    </div>

    <?php if($count>6): ?>
    <div class="read">
        <a href="<?php the_field('page_link'); ?>" class="read-more">مزید دیکھیں</a>
    </div>
    <?php endif; ?>
    
    
</section>



<?php get_footer(); ?>