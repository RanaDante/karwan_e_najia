<?php  

$args = array (
    'post_type' => 'cpt_kalaam',
    'posts_per_page' => -1,
    'cat' => $cat_id,
    'order' => 'DESC'
);

$kalaam_query = new wp_query($args);
if($kalaam_query->have_posts()): ?>
<div class="main-item">
    <div class="sub-title">
        <h3><span style="font-size: 26px; margin-left:10px;"><?php echo get_cat_name( $cat_id);?></span>
        </h3>
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
<?php  endif; ?>