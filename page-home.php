<?php 
/**
 * Template Name: Homepage
 */
?>

<?php get_header(); ?>

<?php 
    $args = array (
        'post_type' => 'cpt_announcements',
        'posts_per_page' => 4,
        'order' => 'DESC',
    );
    $announcement_query = new wp_query($args);
?>


<!-- ANNOUNCEMENT SECTIONS -->
<section class="announcement-section w-75">
    <h1 class="h1">اعلانات</h1>
    <!-- ANNOUNCEMENT SECTION SLIDER -->
    <div class="slider">
        <ul class="js__slider__images slider__images">

            <?php if($announcement_query->have_posts()): while($announcement_query->have_posts()): $announcement_query->the_post(); ?>
                <li class="slider__images-item" style="background-image:url(<?php the_field('announcement_image'); ?>) ">
                    <div class="slide-content">
                        <a href="<?php the_permalink(); ?>" class="event-link"><p><?php
                            echo substr(wp_strip_all_tags(get_field('excerpt')),0,230) . "...."; ?>
                        </p></a>
                        <a href="<?php the_permalink(); ?>" class="event-link"> مزید <span class="border-btm"> دیکھیں </span></a>
                    </div>
                </li>
                
            <?php endwhile; wp_reset_postdata(); endif; ?>
            
            <?php if($announcement_query->have_posts()): while($announcement_query->have_posts()): $announcement_query->the_post(); ?> 
                <li class="slider__images-item" style="display: none;"><img class="slider__images-image"
                    src="https://unsplash.it/800/450?image=1026" /></li>
            <?php endwhile; wp_reset_postdata(); endif; ?>

        </ul>
        <div class="slider__controls">
            <span class="slider__control js__slider__control--prev slider__control--prev">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/Icon awesome-arrow-left-1.png" alt="">
            </span>
            <ol class="js__slider__pagers slider__pagers" style="display: none;"></ol>
            <span class="slider__control js__slider__control--next slider__control--next">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/Icon awesome-arrow-left.png" alt="">
            </span>
        </div>
    </div>
    <!-- EVENTS -->
    <div class="events">
        <?php 
            $event_args = array (
                'post_type' => 'cpt_events',
                'posts_per_page' => 3,
                'order' => 'DESC'
            );
            $event_query = new wp_query($event_args);
        ?>  

        <?php if($event_query->have_posts()): while($event_query->have_posts()): $event_query->the_post(); ?>
            <a href="<?php the_permalink() ?>" class="event-item">                
                <div class="event-thumbnail">
                    <img src="<?php the_field('event_image'); ?>" alt="">
                </div>

                <div class="event-excerpt">
                    <p><?php the_title() ?></p>
                    <p class="event-link"> مزید <span class="border-btm"> دیکھیں </span></p>
                </div>
            </a>   
        <?php endwhile; wp_reset_postdata(); endif; ?>

    </div>
</section>

<!-- POPULAR NEWS -->
<section class="popular-news w-75">
    <h1 class="h1">مقبول خبریں</h1>
    <div class="news">
        <?php 
            $single_args = array (
                'post_type' => 'post',
                'posts_per_page' => 6,
                'order' => 'DESC'
            );
            $single_query = new wp_query($single_args);
        ?> 

        <?php if($single_query->have_posts()): while($single_query->have_posts()): $single_query->the_post(); ?>
            <div class="news-item">  
                <a href="<?php the_permalink(); ?>">
                    <div class="thumbnail-bg" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                    <h3 class="h3"><?php the_title(); ?></h3>
                    
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="event-link"> مزید <span class="border-btm"> دیکھیں </span></a>
                </a>
            </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>

        

    </div>
    <div class="read">
        <a href="<?php the_field('news_page_link'); ?>" class="read-more">مزید دیکھیں</a>
    </div>
</section>

<!-- LATEST IMAGES -->
<?php 
    $gallery_args = array (
        'post_type' => 'cpt_galleries',
        'posts_per_page' => 1,
        'order' => 'ASC'
    );
    $gallery_query = new wp_query($gallery_args);
?> 

<section class="latest-images w-75" id="gallery">
    <h1 class="h1">تازہ تصاویر</h1>
    <div class="images">

        <?php if($gallery_query->have_posts()): while($gallery_query->have_posts()): $gallery_query->the_post(); ?>
        <?php if( have_rows('gallery') ) :?>
            <?php while( have_rows('gallery') ) : the_row();?>
                <div class="image">
                    <i class="far fa-image"></i>
                    <div class="img-wrapper">
                        <a href="<?php the_sub_field('gallery_image'); ?>" title="<?php the_sub_field('gallery_image_title'); ?>">
                            <img src="<?php the_sub_field('gallery_image'); ?>" data-title="<?php the_sub_field('gallery_image_title'); ?>" alt="Aternative text to images" class="img-responsive" >
                        </a>
                        <div class="img-overlay"></div>
                    </div>
                    <div class="image-title">
                        <p><?php the_sub_field('gallery_image_title'); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php endwhile; wp_reset_postdata(); endif; ?>      
    </div>
    <div class="read">
        <a href="<?php the_field('gallery_page_link'); ?>" class="read-more">مزید دیکھیں</a>
    </div>
</section>

<!-- CONTENT OF THE DAY -->
<section class="content-of-day">
    <div class="content-wrap w-75">
        <?php 
            $daily_content_args = array (
                'post_type' => 'cpt_daily_content',
                'posts_per_page' => 1,
                'order' => 'DESC',
                'order_by' => 'rand'
            );
            $daily_content_query = new wp_query($daily_content_args);
        ?> 
        <?php if($daily_content_query->have_posts()): while($daily_content_query->have_posts()): $daily_content_query->the_post(); ?>
        <div class="item">
            <h2>آیات</h2>
            <div class="content-img" style="background-image: url(<?php the_field('ayat_image')?>);"></div>
        </div>
    
        <div class="item">
            <h2>حدیث مبارک</h2>
            <div class="content-img" style="background-image: url(<?php the_field('hadith_image')?>);"></div>
        </div>
        <div class="item">
            <h2>اقوال مبارک</h2>
            <div class="content-img" style="background-image: url(<?php the_field('qaul_image')?>);"></div>
        </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
</section>

<!-- VIDEOS SECTION -->

<!-- روحانی اجتماعات -->
<section class="custom_videos w-75" id="gallery">
    <h1 class="h1">وڈیوز</h1>
    
    <div class="rbd_videos">
        <?php 
            $video_args = array (
                'post_type' => 'cpt_videos',
                'posts_per_page' => 6,
                'order' => 'DESC'
            );
            $video_query = new wp_query($video_args);
        ?> 
        <?php if($video_query->have_posts()): while($video_query->have_posts()): $video_query->the_post(); ?>
        <div class="rbd_video">
            <div class="rbd_video_playback">
                <iframe class="visible_iframe" src="<?php the_field('video_vimeo_link'); ?>" allow="autoplay" id="test_id" width="400" height="225" frameborder="0"></iframe>

                <div class="spinner_wrapper">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/spinner.svg" class="img-responsive" alt="Spinner">
                </div>
            </div>
            <a href="#" class="rbd_video-item" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                <h3 class="rbd_video-title"><?php the_title(); ?></h3>
                <i class="fas fa-play"></i>
                <div class="rbd_video-overlay"></div>
            </a>
        </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>  
      
    </div>
    <div class="read videos-read">
        <a href="<?php the_field('video_page_link'); ?>" class="read-more">مزید دیکھیں</a>
    </div>
</section>


<!-- /* TWO COLUMN LAYOUT */ -->
<section class="w-75 two-column">

    <?php if(have_rows('mobile_application')): while(have_rows('mobile_application')): the_row(); ?>
        <div class="main mbl-sec">
            <div class="sub-title">
                <h3><?php the_sub_field('section_heading'); ?></h3>
            </div>
            <div class="content home-content">

                <div class="content-col">
                    <h3><?php the_sub_field('main_heading'); ?></h3>
                    <br>
                    <p><?php the_sub_field('content'); ?></p>

                    <div class="app-links">
                        <a href="#">
                            <img src="<?php the_sub_field('playstore_icon'); ?>" alt="Google Play link">
                        </a>
                        <a href="#">
                            <img src="<?php the_sub_field('appstore_icon'); ?>" alt="Google Play link">
                        </a>
                    </div>
                </div>



                <div class="mobile-app-ss">
                    <img src="<?php the_sub_field('app_screenshot'); ?>" alt="Application Screenshot">
                </div>
            </div>

        </div>
    <?php endwhile; endif; ?>

    <?php 
        $qustion_args = array (
            'post_type' => 'cpt_questions',
            'posts_per_page' => 1,
            'order' => 'DESC',
            
        );
        $qustion_query = new wp_query($qustion_args);
    ?>

    <?php get_sidebar(); ?>
    

</section>

<?php get_footer(); ?>