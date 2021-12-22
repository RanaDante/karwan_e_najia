<?php 
/**
 * Template Name: Books
 */
?>
<?php get_header(); ?>

<!-- /* TWO COLUMN LAYOUT */ -->
<section class="w-75 two-column mt-40">
    <div class="main ">
        
        <div class="main-item">
            
            <div class="sub-title">
                <h3><span style="font-size: 26px; margin-left:10px;">کا روان ناجیہ کتابیں </span></h3>
            </div>
            <div class="books-section">
            <?php 
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $book_args = array (
                    'post_type' => 'cpt_books',
                    'posts_per_page' => 9,
                    'order' => 'DESC',
                    'paged' => $paged
                );
                $book_query = new wp_query($book_args);
            ?>
                <?php if($book_query->have_posts()): while($book_query->have_posts()): $book_query->the_post(); ?>
                <div class="book">
                    <a href="<?php the_permalink(); ?>">
                        <div class="book-img">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        </div>
                    </a>
                    <div class="book-detail">
                        
                        <div class="book-title">
                            <a href="<?php the_permalink(); ?>"> 
                                <h5><?php the_title(); ?></h5>
                            </a>
                        </div>
                            <div class="get-book">
                                <a href="<?php the_permalink(); ?>">پڑھیں</a>
                                <a href="<?php the_field('book_pdf'); ?>" download>ڈاون لوڈ</a>
                            </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <div dir="ltr" class="pagination">
                <?php 
                    $total_pages = $book_query->max_num_pages; 
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
        </div>
        
        
    </div>

    <?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>

<script>
    
</script>
