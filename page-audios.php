<?php 
/**
 * Template Name: Audios
 */
?>
<?php get_header(); ?>
<section class="w-75 mt-40 audio-section ">
    <h1 class="h1">آڈیوز</h1>


    <?php 
        $taxonomy = 'category';
        $terms = get_terms($taxonomy); // Get all terms of a taxonomy
        
        if ( $terms && !is_wp_error( $terms ) ) :
    ?>

    <?php foreach ( $terms as $term ) : 
        $audio_args = array (
            'post_type' => 'cpt_audios',
            'posts_per_page' => 10,
            'category_name' => $term->name,
            'order' => 'ASC'
        );
        $audio_query = new wp_query($audio_args);
        $count = $audio_query->found_posts;
        
    ?>

    <?php if($audio_query->have_posts()): ?>
    <div class="audio mt-20">
        <div class="sub-title ">
            <h3><span style="font-size: 26px; margin-left:10px;"> <?php echo $term->name; ?></span></h3>
        </div>

        <?php while($audio_query->have_posts()): $audio_query->the_post(); ?>
        <div class="audio-item">
            <div class="audio-date">
                <a href="#"><?php the_title(); ?></a>
            </div>
            <div class="container">
                <audio preload="auto" src="<?php the_field('upload_audio_file'); ?>"></audio>
            </div>
            <div class="audio-download">
                <a href="<?php the_field('upload_audio_file'); ?>" download><i
                        class="fas fa-cloud-download-alt"></i></a> 
                <a href="<?php the_field('upload_audio_file'); ?>" class="download-link" download>Download</a>
            </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
        <?php if($count>2): ?>
            <div class="read kalaam-read-sec">
                <?php $section_category_url = home_url('/category/' . $term->slug."?page=audio");?>
                <a href="<?php echo $section_category_url;?>" class="read-more">مزید دیکھیں</a>
            </div>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php endforeach; ?>

    <?php endif;?>

</section>

<?php get_footer(); ?>