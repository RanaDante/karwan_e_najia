<?php 
/**
 * Template Name: Kalaam
 */
?>
<?php get_header(); ?>
    
    
<?php 
    $kalaam_args = array (
    'post_type' => 'cpt_kalaam',
    'posts_per_page' => 1,
    'order' => 'ASC'
    );
    $kalaam_query = new wp_query($kalaam_args); 
?>

<section class="w-75 two-column mt-40 ">
    <div class="main">
        
        <?php if($kalaam_query->have_posts()): while($kalaam_query->have_posts()): $kalaam_query->the_post(); ?>
        
            <div class="main-item">
                <div class="sub-title">
                    <h3><span style="font-size: 26px; margin-left:10px;"><?php the_title(); ?></span></h3>
                </div>
                <div class="kalaam">

                    <!-- <p class="kalaam-content"> -->
                        <?php the_content(); ?>
                    <!-- </p> -->
                    
                    <div class="author">
                        <h5><?php the_field('writer_name'); ?></h5>
                    </div>

                </div>
            </div>

        <?php endwhile; wp_reset_postdata(); endif; ?>

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
            'order' => 'ASC'
            );
            
            $kalaam_query = new wp_query($kalaam_args); 
            $count = $kalaam_query ->found_posts;
        ?>
        <?php if($kalaam_query->have_posts()): ?>
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
                <?php if($count>3): ?>
                
                <div class="read kalaam-read-sec">
                    <?php $section_category_url = home_url('/category/' . $term->slug."?page=kalaam");?>
                     
                    <a href="<?php echo $section_category_url; ?>" class="read-more">مزید دیکھیں</a>
                </div>
                <?php endif; ?>
                
            </div>
            <?php  endif; ?>
            
        <?php endforeach; ?>
        
        <?php endif;?>
        
        
    </div>

    <?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>