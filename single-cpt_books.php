<?php get_header(); ?>
<section class="w-75 mt-40">
    <div class="main book-read">
        
        <div class="main-item ">  
            <div class="sub-title">
                <h3><span style="font-size: 26px; margin-left:10px;"> <?php the_title(); ?> </span></h3>
            </div>

            <div class="flipbook_container"></div>

            <a class="book_read" href="<?php the_field('book_pdf'); ?>"></a>
        </div>
       
    </div>
</section>
<?php get_footer(); ?>