<?php get_header(); ?>
<section class="latest-images w-75" id="gallery">
    <h1 class="h1"> گیلری</h1>
    <div class="images">
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
    </div>
</section>
<?php get_footer(); ?>