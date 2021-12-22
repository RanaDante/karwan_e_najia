<?php 

require_once get_template_directory() . '/inc/kn_site_setup.php';
require_once get_template_directory() . '/inc/kn_widgets_register.php';
require_once get_template_directory() . '/inc/kn_cpt_register.php';


function custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_action('wp_ajax_get_videos_by_category', 'get_videos_by_category');
add_action('wp_ajax_nopriv_get_videos_by_category', 'get_videos_by_category');

function get_videos_by_category() {
    if(isset($_POST) && !empty($_POST)) {
        $cat_id = htmlspecialchars(trim($_POST['cat_id']));
        $post_type = htmlspecialchars(trim($_POST['post_type']));

        $args = array(
            'post_type' => $post_type,
            'posts_per_page' => -1,
            'order' => 'DESC',
            'cat' => $cat_id
        );

        $videos_by_category = new wp_query($args);

        $array_to_return = array();

        if($videos_by_category->have_posts()): while($videos_by_category->have_posts()): $videos_by_category->the_post();
        $array_to_return[get_the_title()] = array(
            'thumbnail' => get_the_post_thumbnail_url(),
            'permalink' => get_the_permalink(),
            'video_vimeo_link' => get_field('video_vimeo_link')
        );
        endwhile; endif;
        wp_send_json($array_to_return);
        
    }
}