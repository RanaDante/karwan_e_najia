<?php get_header(); ?>
<?php $post = (get_post_type_object(get_queried_object())); 
    echo $postType->labels->singular_name;
?>

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
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <?php the_content(); ?>
                    <p class="para"><?php #the_field('event_content'); ?>
                </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>

        
    </div>
    
    
    <?php get_sidebar(); ?>
    

</section>

<!-- POPULAR NEWS -->
<section class="popular-news w-75">
    <h1 class="h1">مقبول خبریں</h1>
    <div class="news">
        <?php 
            $single_args = array (
                'post_type' => 'post',
                'posts_per_page' => NUMBEROFPOSTS ,
                'order' => 'DESC'
            );
            $single_query = new wp_query($single_args);
            $count = $single_query ->found_posts;
        ?> 

        <?php if($single_query->have_posts()): while($single_query->have_posts()): $single_query->the_post(); ?>
            <div class="news-item">  
                <a href="<?php the_permalink(); ?>">
                    <div class="thumbnail-bg" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                    <h3 class="h3"><?php the_title(); ?></h3>
                    
                    <?php the_excerpt(); ?>
                    <a href="#" class="event-link"> مزید <span class="border-btm"> دیکھیں </span></a>
                </a>
            </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
    <?php if($count>COUNT): ?>    
        <div class="read">
            <a href="http://localhost/karwanenajia/news/" class="read-more">مزید دیکھیں</a>
        </div>
    <?php endif; ?>
    
</section>

<?php get_footer(); ?>