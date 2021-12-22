<?php get_header(); ?>

<?php if(isset($_GET['s'])): 
    $search_query = htmlspecialchars(trim($_GET['s'])); 
?>

<?php 
    $single_args = array (
        'post_type' => 'post',
        'posts_per_page' => -1,
        'order' => 'DESC',
        's' => $search_query
    );
    $single_query = new wp_query($single_args);
?>
<?php if($single_query->have_posts()): ?>

<section class="w-75">
    <h1 class="h1">مقبول خبریں</h1>
    <div class="news">
        <?php while($single_query->have_posts()): $single_query->the_post(); ?>
        <div class="news-item">
            <a href="<?php the_permalink(); ?>">
                <div class="thumbnail-bg" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                <h3 class="h3"><?php the_title(); ?></h3>

                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="event-link"> مزید <span class="border-btm"> دیکھیں
                    </span></a>
            </a>
        </div>
        <?php endwhile; wp_reset_postdata();  ?>
    </div>
</section>
<?php endif; ?>


<?php 
    $single_args = array (
        'post_type' => 'cpt_kaalams',
        'posts_per_page' => -1,
        'order' => 'DESC',
        's' => $search_query
    );
    $single_query = new wp_query($single_args);
?>
<?php if($single_query->have_posts()): ?>

<section class="w-75">
    <h1 class="h1">کالم</h1>
    <div class="news">
        <?php while($single_query->have_posts()): $single_query->the_post(); ?>
        <div class="news-item">
            <a href="<?php the_permalink(); ?>">
                <div class="thumbnail-bg" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                <h3 class="h3"><?php the_title(); ?></h3>

                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="event-link"> مزید <span class="border-btm"> دیکھیں
                    </span></a>
            </a>
        </div>
        <?php endwhile; wp_reset_postdata();  ?>
    </div>
</section>
<?php endif; ?>


<?php 
    $video_args = array (
        'post_type' => 'cpt_videos',
        'posts_per_page' => -1,
        'order' => 'DESC',
        's' => $search_query
    );
    $video_query = new wp_query($video_args);
?>
<?php if($video_query->have_posts()): ?>

<section class="custom_videos w-75">
    <h1 class="h1">وڈیوز</h1>
    <div class="rbd_videos">
        <?php while($video_query->have_posts()): $video_query->the_post(); ?>
        <div class="rbd_video">
            <div class="rbd_video_playback">
                <iframe class="visible_iframe" src="<?php the_field('video_vimeo_link'); ?>" allow="autoplay"
                    id="test_id" width="400" height="225" frameborder="0"></iframe>

                <div class="spinner_wrapper">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/spinner.svg" class="img-responsive"
                        alt="Spinner">
                </div>
            </div>
            <a href="#" class="rbd_video-item" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                <h3 class="rbd_video-title"><?php the_title(); ?></h3>
                <i class="fas fa-play"></i>
                <div class="rbd_video-overlay"></div>
            </a>
        </div>
        <?php endwhile; wp_reset_postdata();  ?>
    </div>
</section>
<?php endif; ?>

<?php 
    $kalaam_args = array (
        'post_type' => 'cpt_kalaam',
        'posts_per_page' => -1,
        'order' => 'DESC',
        's' => $search_query
    );
    $kalaam_query = new wp_query($kalaam_args);
?>
<?php if($kalaam_query->have_posts()): ?>

<section class="mt-40 w-75">
    <div class="main-item">
        <div class="sub-title">
            <h3><span style="font-size: 26px; margin-left:10px;">کلام</span></h3>
        </div>
        <?php while($kalaam_query->have_posts()): $kalaam_query->the_post(); ?>
        <div class="kalaam-item">
            <div class="content-name">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="author-name">

                <a href="<?php echo home_url('kalaam-writers').'?writer_name='.get_field('writer_name'); ?>">
                    <?php the_field('writer_name'); ?>
                </a>
            </div>
            <div class="link-content">
                <a href="<?php the_permalink(); ?>" class="kalaam-link">مزیدپڑھیں</a>
            </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</section>
<?php  endif; ?>

<?php 
    $audio_args = array (
        'post_type' => 'cpt_audios',
        'posts_per_page' => -1,
        'order' => 'DESC',
        's' => $search_query
    );
    $audio_query = new wp_query($audio_args);
?>
<?php if($audio_query->have_posts()): ?>

<section class="w-75">
    <div class="main-item">
        <div class="sub-title">
            <h3><span style="font-size: 26px; margin-left:10px;">آڈیوز</span></h3>
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
                        class="fas fa-cloud-download-alt"></i></a> <br>
                <a href="<?php the_field('upload_audio_file'); ?>" class="download-link" download>Download</a>
            </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</section>
<?php  endif; ?>


<?php 
    $book_args = array (
        'post_type' => 'cpt_books',
        'posts_per_page' => -1,
        'order' => 'DESC',
        's' => $search_query
    );
    $book_query = new wp_query($book_args);
?>
<?php if($book_query->have_posts()): ?>

<section class="w-75">
    <div class="main-item">
        <div class="sub-title">
            <h3><span style="font-size: 26px; margin-left:10px;">کتابیں</span></h3>
        </div>
        <div class="books-section">

        
        <?php while($book_query->have_posts()): $book_query->the_post(); ?>
        <div class="book">
            <div class="book-img">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="book-detail">
                <div class="book-title">
                    <h5><?php the_title(); ?></h5>
                </div>
                <div class="get-book">
                    <a href="<?php the_permalink(); ?>">پڑھیں</a>
                    <a href="<?php the_field('book_pdf'); ?>" download>ڈاون لوڈ</a>
                </div>
            </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php  endif; ?>



<?php endif; ?>
<?php get_footer(); ?>