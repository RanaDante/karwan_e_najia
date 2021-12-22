<?php 
/**
 * Template Name: Kalaam Writers
 */
?>

<?php get_header(); ?>
<?php 
if(isset($_GET['writer_name'])) {
    $writer_name = htmlspecialchars($_GET['writer_name']);
    // echo $writer_name;
    // $args = array(
    //     'post_type' => 'cpt_kalaam',

    // );
} 
?>

<?php 
    $taxonomy = 'category';
    $terms = get_terms($taxonomy); // Get all terms of a taxonomy
    
    if ( $terms && !is_wp_error( $terms ) ) :
?>

<?php foreach ( $terms as $term ) : 
    $kalaam_args = array (
        'post_type' => 'cpt_kalaam',
        'posts_per_page' => 10,
        'category_name' => $term->name,
        'order' => 'DESC',
        'meta_key' => 'writer_name',
        'meta_value' => $writer_name
    );
    
    $kalaam_query = new wp_query($kalaam_args); 
    $count = $kalaam_query ->found_posts;

?>
<?php if($kalaam_query->have_posts()): ?>
<section class="w-75 mt-40 ">
<div class="main-item">
    <div class="sub-title">
        <h3><span style="font-size: 26px; margin-left:10px;"><?php echo $term->name;?></span></h3>
    </div>
    <?php while($kalaam_query->have_posts()): $kalaam_query->the_post(); ?>
    <div class="kalaam-item">
        <div class="content-name">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
        <div class="author-name">

            <a href="<?php echo home_url('kalaam-writers').'?writer_name='.trim(get_field('writer_name')); ?>">
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

<?php endforeach; ?>
<?php endif; ?>

<?php get_footer(); ?>