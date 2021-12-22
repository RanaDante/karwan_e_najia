<?php  

$args = array (
    'post_type' => 'cpt_audios',
    'posts_per_page' => -1,
    'cat' => $cat_id,
    'order' => 'DESC'
);
$post_query = new wp_query($args);
if($post_query->have_posts()): ?>
<div class="main-item ">
    <div class="sub-title">
        <h3><span style="font-size: 26px; margin-left:10px;"><?php echo get_cat_name( $cat_id);?></span>
        </h3>
    </div>
    <?php while($post_query->have_posts()): $post_query->the_post(); ?>
        <div class="audio-item">
            <div class="audio-date">
                <a href="#"><?php the_title(); ?></a>
            </div>
            <div class="container">
                <audio preload="auto" src="<?php the_field('upload_audio_file'); ?>"></audio>
            </div>
            <div class="audio-download">
                <a href="<?php the_field('upload_audio_file'); ?>" download><i
                    class="fas fa-cloud-download-alt"></i></a> <br>
                <a href="<?php the_field('upload_audio_file'); ?>" class="download-link" download>Download</a>
            </div>
        </div>
    <?php endwhile; wp_reset_postdata(); ?>
</div>
<?php  endif; ?>