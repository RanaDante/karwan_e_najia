<?php 
/**
 * Template Name: Gallery Template
 */
?>
<?php get_header(); ?>

<?php 
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $gallery_args = array (
        'post_type' => 'cpt_galleries',
        'posts_per_page' => NUMBEROFPOSTS,
        'order' => 'DESC',
        'orderby' => 'date',
        'paged' => $paged
    );
    $gallery_query = new wp_query($gallery_args);
?>
    <!-- Galleries -->
    <section class="latest-images w-75">
        <h1 class="h1"> گیلری</h1>
        <div class="images">
            <?php if($gallery_query->have_posts()): while($gallery_query->have_posts()): $gallery_query->the_post(); ?>
            <div class="image">
                <i class="far fa-image"></i>
                <div class="img-wrapper">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="Aternative text to images" class="img-responsive">
                    <a href="<?php the_permalink(); ?>">
                        <div class="image-overlay"></div>
                    </a>
                </div>
                <div class="image-title-urdu">
                    <p><?php the_title(); ?></p>
                </div>
            </div>
            <?php endwhile;  ?>
        </div>
        <div dir="ltr" class="pagination">
            <?php 
                $total_pages = $gallery_query->max_num_pages; 
                if ($total_pages > 1){
                    $current_page = max(1, get_query_var('paged'));
                    echo paginate_links(array(
                        'base' => get_pagenum_link(1) . '%_%',
                        'format' => '/page/%#%',
                        'current' => $current_page,
                        'total' => $total_pages,
                        'prev_text'    => __('« Prev'),
                        'next_text'    => __('Next »'),
                    ));
                }    
            endif; wp_reset_postdata();;
            ?>
        </div>
    </section>

 
<?php get_footer(); ?>