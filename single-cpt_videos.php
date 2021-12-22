
<?php get_header(); ?>

<section class="videos-section w-75">
    <h1 class="h1">وڈیوز</h1>
    <div class="video-player">
        <div class="recommended-section">
            <h2>متعلقہ</h2>
            
            <div class="rec-videos">
                <?php 
                    $video_args = array (
                        'post_type' => 'cpt_videos',
                        // 'posts_per_page' => 6,
                        'order' => 'DESC'
                    );
                    $video_query = new wp_query($video_args);
                ?> 
                <?php if($video_query->have_posts()): while($video_query->have_posts()): $video_query->the_post(); ?>
                    <div class="rec-videos-item">
                        <div class="event-thumbnail">
                            <img src="images/video-thumbnail1.png" alt="">
                        </div>
                        <div class="video-title">
                            <a href="#">ڈاکومینٹری ٹریلر(روحانی درسگاہ کاروانِ ناجیہ)۲۰۱۷</a>
                        </div>
                        <div class="event-3"></div>
                    </div>
                
                <?php endwhile; wp_reset_postdata(); endif; ?>  
                
                

            </div>

        </div>

        <div class="video-play">
            <h2>روحانی محفل چکوال۰۴ </h2>
            <div class="container-video">
                <div class="vendor">
                    <iframe src="https://player.vimeo.com/video/33031367?title=0&byline=0?" width="400" height="225"
                        frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="custom_videos w-75" id="gallery">
    <h1 class="h1">روحانی اجتماعات</h1>
    
    <div class="rbd_videos">
        <?php 
            $video_args = array (
                'post_type' => 'cpt_videos',
                // 'posts_per_page' => 6,
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
    <div class="read videos-page-btn">
        <a href="#" class="read-more">مزید دیکھیں</a>
    </div>
</section>
<?php get_footer(); ?>