<?php 
/**
 * Template Name: Videos
 */
?>
<?php get_header(); ?>

<section class="videos-section w-75">
    <h1 class="h1">وڈیوز</h1>
    <div class="video-player" id="videoplay">
        <div class="recommended-section">
            <h2>متعلقہ</h2>
            <div class="overlay-loader">
                <img src="<?php echo get_template_directory_uri() ;?>/assets/images/loading.gif" alt="">
            </div>
            <div class="rec-videos">
                <?php 
                    $video_args = array (
                        'post_type' => 'cpt_videos',
                        'posts_per_page' => 6,
                        'order' => 'DESC'
                    );
                    $video_query = new wp_query($video_args);
                ?>
                <?php if($video_query->have_posts()): while($video_query->have_posts()): $video_query->the_post(); ?>

                    <div class="rec-videos-item">
                        <div class="event-thumbnail">
                            <a class="rec-vid-thumb" href="#" data-link="<?php the_field('video_vimeo_link'); ?>">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </a>
                            <!-- <img src="<?php #the_post_thumbnail_url(); ?>" alt=""> -->
                        </div>
                        <div class="video-title">
                            <a class="rec-vid-thumb" href="#" data-link="<?php the_field('video_vimeo_link'); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>
                    </div>

                <?php endwhile; wp_reset_postdata(); endif; ?>
                
            </div>

        </div>

        <div class="video-play">
            <h2>روحانی محفل چکوال </h2>
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
    $taxonomy = 'category';
    $terms = get_terms($taxonomy); // Get all terms of a taxonomy
    
    if ( $terms && !is_wp_error( $terms ) ) :
?>

<?php foreach ( $terms as $term ) : 
    $video_args = array (
    'post_type' => 'cpt_videos',
    // 'posts_per_page' => 4,
    'category_name' => $term->name,
    'order' => 'ASC'
    );
    $video_query = new wp_query($video_args);
    $count = $video_query->found_posts;
?>
            
<?php if($video_query->have_posts()): ?>

<section class="videos-section w-75">
    <h1 class="h1"><?php echo $term->name; ?></h1>

    <div class="videos">


        <?php while($video_query->have_posts()): $video_query->the_post(); ?>
        
        <?php $post_category = wp_get_post_categories( $post->ID ); ?> 
        
        

        <div data-cat="<?php echo array_shift($post_category); ?>" data-link="<?php the_field('video_vimeo_link'); ?>" 
         class="video-item cat-videos" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
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
<?php endforeach; ?>
           
<?php endif;?>
<?php get_footer(); ?>