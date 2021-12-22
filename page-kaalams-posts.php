<?php 
/**
 * Template Name: Kaalam All Posts
 */
?>
<?php get_header(); ?>


<!-- POPULAR NEWS -->
<section class="popular-news w-75">
    <h1 class="h1">کالم مزید</h1>
    <div class="news">
        <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $single_args = array (
                'post_type' => 'cpt_kaalams',
                'posts_per_page' => NUMBEROFPOSTS,
                'order' => 'DESC',
                'orderby' => 'date',
                'paged' => $paged
            );
            $single_query = new wp_query($single_args);
        ?> 

        <?php if($single_query->have_posts()): while($single_query->have_posts()): $single_query->the_post(); ?>
            <div class="news-item">  
                <a href="<?php the_permalink(); ?>">
                    <div class="thumbnail-bg" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                    <h3 class="h3"><?php the_title(); ?></h3>
                    
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="event-link"> مزید <span class="border-btm"> دیکھیں </span></a>
                </a>
            </div>
        <?php endwhile;  ?>
        
    </div>
    <div dir="ltr" class="pagination">
        <?php 
            $total_pages = $single_query->max_num_pages; 
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