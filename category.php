<?php get_header(); ?>
<?php $category = get_queried_object(); 
    $cat_id = $category->term_id;
    $page = htmlspecialchars($_GET['page']);
?>
<section class="w-75 mt-40">
    <div class="main">
    <?php   
    // foreach($sections_array as $section_name=>$section_data):
        // $num_of_posts = ($section_data['page']==='post_type') ? 3 : 4;
        
        if($page === 'video'):
            include(get_template_directory() . '/sections/videos.php');
        elseif($page === 'audio'):
            include(get_template_directory() . '/sections/audios.php');
        elseif($page === 'kalaam'):
            include(get_template_directory() . '/sections/kalaam.php');  
        elseif($page === 'news'):
            include(get_template_directory() . '/sections/news.php');    
        else:
            echo "Nothing"      ;
    ?>
    <?php       
        endif;
    // endforeach;  
    ?>
    </div>
</section>



<?php get_footer(); ?>