<section class="videos-section">
    <h1 class="h1"></h1>
    <div class="video-player" id="videoplay">
        <div class="video-play" style="width:100%;">
            <!-- <h2>روحانی محفل چکوال </h2> -->
            <div class="container-video">
                <div class="vendor">
                    <iframe src="https://player.vimeo.com/video/10450125?h=ce5a452325" width="400" height="225"
                        frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
$video_args = array (
    'post_type' => 'cpt_videos',
    'posts_per_page' => -1,
    'cat' => $cat_id,
    'order' => 'DESC'
    );
    $video_query = new wp_query($video_args); 
?>
<?php if($video_query->have_posts()): ?>
<section class="videos-section ">
    <h1 class="h1"><?php echo get_cat_name( $cat_id);?> </h1>

    <div class="videos">

    
        <?php while($video_query->have_posts()): $video_query->the_post(); ?>
        
        <?php $post_category = wp_get_post_categories( $post->ID ); ?> 
        
        

        <div data-cat="<?php echo array_shift($post_category); ?>" data-link="<?php the_field('video_vimeo_link'); ?>" 
         class="video-item" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
            <h3 class="video-title"><?php the_title();?>
            </h3>

            <i class="fas fa-play"></i>
            <div class="video-overlay"></div>
        </div>

        <?php endwhile; wp_reset_postdata(); 
            if($count>2): ?>
            <div class="read kalaam-read-sec">
                <?php $section_category_url = home_url('/category/' . $term->slug."?page=video");?>
                <a href="<?php echo $section_category_url;?>" class="read-more">مزید دیکھیں</a>
            </div>
        <?php endif; 
    
    endif; ?>

    </div>
  
</section>